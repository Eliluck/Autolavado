<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\FTPService;
use Illuminate\Support\Facades\Log;

class DownloadController extends Controller
{
    public function downloadPDFXML(Request $request)
    {
        Log::info('Solicitud recibida para descargar PDF y XML', ['venta' => $request->input('venta', 'not specified')]);
        // Valida que se haya pasado el parámetro 'venta'
        if (!$request->filled('venta')) {
            Log::error('Error: Parámetro de venta no encontrado en la solicitud.');
            return response()->json(['error' => 'VENTA_NOT_FOUND'], 400);
        }
        $venta = $request->input('venta');
        // Verifica si el documento ya existe en el almacenamiento local
        $zipFileName = storage_path("app/temp/{$venta}.zip");
        if (file_exists($zipFileName)) {
            Log::info('El archivo ZIP ya existe, devolviendo al usuario.', ['zipFile' => $zipFileName]);
            return response()->download($zipFileName)->deleteFileAfterSend(false);
        }
        // Descarga los archivos XML y PDF usando la clase FTPService
        $ftpService = new FTPService('ftp.server.com', 'username', 'password');
        $xmlRemotePath = "path/to/xml/{$venta}.xml";
        $pdfRemotePath = "path/to/pdf/{$venta}.pdf";
        $xmlLocalPath = storage_path("app/temp/{$venta}.xml");
        $pdfLocalPath = storage_path("app/temp/{$venta}.pdf");
        Log::info('Iniciando descarga de archivos FTP', ['xmlRemotePath' => $xmlRemotePath, 'pdfRemotePath' => $pdfRemotePath]);
        $xmlDownloaded = $ftpService->downloadFile($xmlRemotePath, $xmlLocalPath);
        $pdfDownloaded = $ftpService->downloadFile($pdfRemotePath, $pdfLocalPath);
        if (!$xmlDownloaded || !$pdfDownloaded) {
            Log::error('La descarga de archivos falló', ['xmlDownloaded' => $xmlDownloaded, 'pdfDownloaded' => $pdfDownloaded]);
            return response()->json(['error' => 'DOWNLOAD_FAILED'], 500);
        }
        // Comprime los archivos en un archivo ZIP
        $zip = new \ZipArchive;
        if ($zip->open($zipFileName, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
            $zip->addFile($xmlLocalPath, "venta_{$venta}.xml");
            $zip->addFile($pdfLocalPath, "venta_{$venta}.pdf");
            $zip->close();
            Log::info('Archivo ZIP creado con éxito', ['zipFile' => $zipFileName]);
            // Devuelve el archivo ZIP al usuario
            return response()->download($zipFileName)->deleteFileAfterSend(true);
        } else {
            Log::error('Creación del archivo ZIP fallida', ['zipFileName' => $zipFileName]);
            return response()->json(['error' => 'ZIP_CREATION_FAILED'], 500);
        }
    }
}
