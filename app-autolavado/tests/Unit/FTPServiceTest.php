<?php

use App\Providers\FTPService;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\TestCase;

class FTPServiceTest extends TestCase
{
    private $ftpService;
    private $ftpServer = 'ftp.example.com';
    private $ftpUser = 'user';
    private $ftpPassword = 'password';

    protected function setUp(): void
    {
        parent::setUp();

        // Inicializar la clase FTPService con valores de prueba
        $this->ftpService = new FTPService($this->ftpServer, $this->ftpUser, $this->ftpPassword);

        // Mockear las funciones de FTP
        $this->ftpConnectionMock = $this->createMock(\FTP\Connection::class);
        $this->ftpConnectionMock->method('connect')->willReturn(true);
        $this->ftpConnectionMock->method('login')->willReturn(true);
        $this->ftpConnectionMock->method('pasv')->willReturn(true);
        $this->ftpConnectionMock->method('chdir')->willReturn(true);
        $this->ftpConnectionMock->method('get')->willReturn(true);
        $this->ftpConnectionMock->method('close')->willReturn(true);

        // Reemplazar las llamadas de log con un mock
        Log::spy();
    }

    public function testDownloadFileSuccess()
    {
        $remoteFile = 'remote/path/to/file.txt';
        $localPath = 'local/path';

        // Simular comportamiento exitoso
        $result = $this->ftpService->downloadFile($remoteFile, $localPath);

        $this->assertNotFalse($result);
        $this->assertStringContainsString('local/path/file.txt', $result);

        Log::shouldHaveReceived('info')
            ->with('File downloaded successfully', ['localFilePath' => 'local/path/file.txt'])
            ->once();
    }

    public function testDownloadFileFailure()
    {
        $remoteFile = 'remote/path/to/file.txt';
        $localPath = 'local/path';

        // Simular fallo al cambiar de directorio
        $this->ftpConnectionMock->method('chdir')->willReturn(false);

        $result = $this->ftpService->downloadFile($remoteFile, $localPath);

        $this->assertFalse($result);
        Log::shouldHaveReceived('error')
            ->with('Failed to change directory on FTP', ['remotePath' => 'remote/path/to'])
            ->once();
    }
}

