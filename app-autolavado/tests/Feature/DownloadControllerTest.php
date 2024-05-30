<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Providers\FTPService;

class DownloadControllerTest extends TestCase
{
    /**
     * Test the successful download and creation of a zip file.
     *
     * @return void
     */
    public function testSuccessfulDownloadAndCreationOfZip()
    {
        // Prepara el entorno de prueba
        Storage::fake('local');
        $venta = '12345';
        $xmlPath = "app/temp/{$venta}.xml";
        $pdfPath = "app/temp/{$venta}.pdf";
        $zipPath = "app/temp/{$venta}.zip";

        // Crea el mock de FTPService
        $ftpServiceMock = $this->createMock(FTPService::class);
        $ftpServiceMock->method('downloadFile')
                       ->willReturnOnConsecutiveCalls(true, true); // Simula la descarga exitosa de ambos archivos

        // Vincula el mock con la aplicación de Laravel
        $this->app->instance(FTPService::class, $ftpServiceMock);

        // Simula la creación de archivos en el storage fake
        Storage::put($xmlPath, 'Contenido XML');
        Storage::put($pdfPath, 'Contenido PDF');

        // Realiza una solicitud POST al endpoint deseado
        $response = $this->postJson('/download-pdf-xml', ['venta' => $venta]);

        // Verifica el estado HTTP y la descarga de archivo
        $response->assertStatus(200);
        $response->assertDownload($zipPath);

        // Verificar que los archivos han sido agregados al ZIP
        $zip = new \ZipArchive;
        $zip->open(storage_path($zipPath));
        $this->assertTrue($zip->locateName(basename($xmlPath)) !== false);
        $this->assertTrue($zip->locateName(basename($pdfPath)) !== false);
        $zip->close();

        // Verificar que los mocks fueron llamados con los parámetros correctos
        $ftpServiceMock = $this->createMock(FTPService::class);
        $ftpServiceMock->method('downloadFile')->willReturnCallback(function ($remotePath, $localPath) use ($venta, $xmlPath, $pdfPath) {
        // Verifica si los parámetros coinciden con los esperados para el archivo XML
        if ($remotePath === "path/to/xml/{$venta}.xml" && $localPath === storage_path($xmlPath)) {
            return true;  // Simula que la descarga fue exitosa
        }
        // Verifica si los parámetros coinciden con los esperados para el archivo PDF
        if ($remotePath === "path/to/pdf/{$venta}.pdf" && $localPath === storage_path($pdfPath)) {
            return true;  // Simula que la descarga fue exitosa
        }
        return false;  // Devuelve false si los parámetros no coinciden con ninguno de los esperados
        });

        // Asegura que los logs apropiados sean escritos
        Log::shouldReceive('info')
            ->with('Solicitud recibida para descargar PDF y XML', ['venta' => '12345'])
            ->once();

        Log::shouldReceive('info')
            ->with('Iniciando descarga de archivos FTP', \Mockery::any())
            ->once();

        Log::shouldReceive('info')
            ->with('Archivo ZIP creado con éxito', \Mockery::on(function ($data) {
                return array_key_exists('zipFile', $data) && str_ends_with($data['zipFile'], '.zip');
            }))
            ->once();
    }

    /**
     * Test failure when parameters are missing.
     *
     * @return void
     */
    public function testFailureWhenMissingParameters()
    {
        $response = $this->postJson('/download-pdf-xml', []);

        $response->assertStatus(400)
                 ->assertJson(['error' => 'VENTA_NOT_FOUND']);

        Log::info('Test failed due to missing parameters', [
            'status' => $response->status(),
            'response' => $response->json()
        ]);
    }

    /**
     * Test the handling of FTP download failures.
     *
     * @return void
     */
    public function testHandleFTPFailure()
    {
        $venta = '12345';
        $ftpService = $this->createMock(FTPService::class);
        $ftpService->method('downloadFile')->willReturn(false);

        $this->app->instance(FTPService::class, $ftpService);

        $response = $this->postJson('/download-pdf-xml', ['venta' => $venta]);

        $response->assertStatus(500)
                 ->assertJson(['error' => 'DOWNLOAD_FAILED']);

        Log::info('FTP download failure test completed', [
            'status' => $response->status(),
            'venta' => $venta
        ]);
    }
}
