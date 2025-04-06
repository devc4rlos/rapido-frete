<?php

namespace App\Utils;

class TelefoneFormatter
{
    public static function formatter(string $number): string
    {
        $number = preg_replace('/[^\d+]/', '', $number);

        if (str_starts_with($number, '+')) {
            preg_match('/\+(\d{2})(\d{2})(\d{4,5})(\d{4})/', $number, $match);
            if ($match) {
                return sprintf('+%s (%s) %s-%s', $match[1], $match[2], $match[3], $match[4]);
            }
        }

        preg_match('/(\d{2})(\d{4,5})(\d{4})/', $number, $match);
        if ($match) {
            return sprintf('(%s) %s-%s', $match[1], $match[2], $match[3]);
        }

        return $number;
    }
}
