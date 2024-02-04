<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Classes\Formatters\FormatterLog;


class ImportLogData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-log-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (Storage::disk('local')->exists("example_log")) {
            $logs = Storage::get('example_log');
            $logs = explode("\n", $logs);
            foreach($logs as $key => $log){
                $logs[$key] = FormatterLog::formatLog($log);
            }
        }else{
            $this->info('Não Existe o arquivo de log');
        }
        $this->info(print_r($logs));
    }
}
