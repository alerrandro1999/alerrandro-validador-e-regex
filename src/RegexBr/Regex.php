<?php

namespace Alerrandro\Regex\RegexBr;

use Alerrandro\Regex\interface\iRegex as InterfaceIRegex;

class Regex implements InterfaceIRegex
{
    public static function regex(string $string): string
    {
        return preg_replace("/([^\p{L}\p{N}]|\s+)/u", '', $string);
    }

}
