<?php

namespace App\Providers;
use Illuminate\Support\Facades\Log;
class FTPService
{
    protected $ftpServer;
    protected $ftpUser;
    protected $ftpPassword;
    public function __construct($ftpServer, $ftpUser, $ftpPassword)
    {
        $this->ftpServer = config($ftpServer);
        $this->ftpUser = config($ftpUser);
        $this->ftpPassword = config($ftpPassword);
        Log::info('FTPService initialized', ['ftpServer' => $ftpServer]);
    }
    public function downloadFile($remoteFile, $localPath)
    {
        $connection = ftp_connect($this->ftpServer);
        if (!$connection) {
            Log::error('FTP connection failed', ['ftpServer' => $this->ftpServer]);
            return false;
        }
        $login = ftp_login($connection, $this->ftpUser, $this->ftpPassword);
        if (!$login) {
            Log::error('FTP login failed', ['ftpUser' => $this->ftpUser]);
            ftp_close($connection);
            return false;
        }
        ftp_pasv($connection, true); // Pasivo mode
        Log::debug('FTP passive mode enabled', ['ftpServer' => $this->ftpServer]);
        // Descarga el archivo
        $remotePath = dirname($remoteFile);
        $fileName = basename($remoteFile);
        if (!ftp_chdir($connection, $remotePath)) {
            Log::error('Failed to change directory on FTP', ['remotePath' => $remotePath]);
            ftp_close($connection);
            return false;
        }
        $localFilePath = $localPath . '/' . $fileName;
        if (ftp_get($connection, $localFilePath, $fileName, FTP_BINARY)) {
            Log::info('File downloaded successfully', ['localFilePath' => $localFilePath]);
            ftp_close($connection);
            return $localFilePath;
        } else {
            Log::error('Failed to download file', ['fileName' => $fileName]);
            ftp_close($connection);
            return false;
        }
    }
}
