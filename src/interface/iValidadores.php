<?php

namespace Alerrandro\Regex\Interface;

interface iValidadores
{
    public static function cpf(string $cpf): bool;
    public static function cnpj(string $cnpj): bool;

}
