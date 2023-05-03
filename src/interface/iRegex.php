<?php

namespace Alerrandro\Regex\Interface;

interface iRegex
{
    public static function removeCaracteresEspeciais(string $string): string;
    public static function removeLetras(string $string): string;

}
