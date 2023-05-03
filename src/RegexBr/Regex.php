<?php

namespace Alerrandro\Regex\RegexBr;

use Alerrandro\Regex\interface\iRegex as InterfaceIRegex;

class Regex implements InterfaceIRegex
{
    public static function removeCaracteresEspeciais(string $string): string
    {
        return preg_replace("/([^\p{L}\p{N}]|\s+)/u", '', $string);
    }

    public static function removeLetras(string $string): string
    {
        return preg_replace("/[\p{L}]/", '', $string);
    }

    public static function removeNumeros(string $string): string
    {
        return preg_replace("/\p{N}/", '', $string);
    }
}
