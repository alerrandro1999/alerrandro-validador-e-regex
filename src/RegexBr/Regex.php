<?php

namespace Alerrandro\Regex\RegexBr;

use Alerrandro\Regex\interface\iRegex as InterfaceIRegex;

class Regex implements InterfaceIRegex
{
    public static function telefone(string $telefone): string
    {
        return preg_replace("/([^\p{L}\p{N}]|\s+)/u", '', $telefone);
    }
}
