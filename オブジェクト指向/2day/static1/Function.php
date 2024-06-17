<?php
declare(strict_types=1);

class ExcelColumnConverter
{
    public static function AlfabetName(int $number) : string
    {
        return chr(ord('A') + $number);
    }

    public static function NumberName(string $alfabet) : int{
        return ord($alfabet) - ord('A');
    }
}