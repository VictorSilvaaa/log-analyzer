<?php

namespace App\Classes\Formatters;
use App\Classes\Formatters\FormatterDateTime;
use App\Contracts\ContractFormatterLog;

class FormatterLog implements ContractFormatterLog{
    public static function formatLog(string $log): array
    {
        $pattern = '/^(\S+) (\S+) (\S+) \[([^\]]+)\] "(\S+) (\S+) (\S+)" (\d+) (\d+) "([^"]+)" "([^"]+)" (\d+)/';
        $logPattern=[];
        preg_match($pattern, $log, $logPattern);
        $logFormated = [
            'remote_host' => $logPattern[1],
            'remote_logname' => $logPattern[2],
            'remote_user' => $logPattern[3],
            'timestamp' => FormatterDateTime::formatDate($logPattern[4]),
            'request_method' => $logPattern[5],
            'request_URI' => $logPattern[6],
            'request_protocol' => $logPattern[7],
            'response_code' => $logPattern[8],
            'bytes_sent' => $logPattern[9],
            'referer' =>  $logPattern[10],
            'user_agent' => $logPattern[11]
        ];
        
        return $logFormated;
    }
}