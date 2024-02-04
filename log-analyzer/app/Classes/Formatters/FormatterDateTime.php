<?php

namespace App\Classes\Formatters;

class FormatterDateTime{
    public static function formatDate(string $date): string
    {   
        $date_formated = \DateTime::createFromFormat('d/M/Y:H:i:s O', $date);
        return $date_formated->format('Y-m-d H:i:s');
    }
}