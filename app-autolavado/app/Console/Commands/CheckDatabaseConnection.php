<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckDatabaseConnection extends Command
{
    protected $signature = 'database:check';
    protected $description = 'Check database connection';

    public function handle()
    {
        try {
            DB::connection()->getPdo();
            $this->info('Successfully connected to the database.');
        } catch (\Exception $e) {
            $this->error('Could not connect to the database. Please check your configuration. Error: ' . $e->getMessage());
        }
    }
}
