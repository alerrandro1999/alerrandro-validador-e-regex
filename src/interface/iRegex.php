<?php

namespace Alerrandro\Regex\Interface;

interface IRegex
{
    public static function removerCaracteresEspeciais(string $string): string;
    public static function removerLetras(string $string): string;
    public static function removerNumeros(string $string): string;
}
