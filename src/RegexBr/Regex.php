<?php

namespace Alerrandro\Regex\RegexBr;

use Alerrandro\Regex\interface\IRegex as InterfaceIRegex;

class Regex implements InterfaceIRegex
{
    public static function removerCaracteresEspeciais(string $string): string
    {
        return preg_replace("/([^\p{L}\p{N}]|\s+)/u", '', $string);
    }

    public static function removerLetras(string $string): string
    {
        return preg_replace("/[\p{L}]/", '', $string);
    }

    public static function removerNumeros(string $string): string
    {
        return preg_replace("/\p{N}/", '', $string);
    }

    public static function removerLetrasECaracteresEspeciais(string $string): string
    {
        return preg_replace("/([^\p{N}]|\s+)/", '', $string);
    }
}
