<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Facades\Storage;
 

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
            $pattern = '/^(\S+) - - \[([^\]]+)\] "(\S+) (\S+) \S+" (\d+) (\d+) "([^"]+)" "([^"]+)" (\d+)/';
            foreach($logs as $log){
                preg_match($pattern,$log,$log);
                $logFormated = array(
                    'ip' => $log[1]
                );
                $this->info("IP: ".$logFormated['ip']);
            }
        }else{
            $this->info('Não Existe');
        }
    }
}
