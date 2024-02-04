<?php 

namespace App\Contracts;

interface ContractFormatterLog{
    public static function formatLog(string $log): array;
}