# PHP validador e regex

Pacote contendo validadores CPF/CNPJ e regex variados.

## Requisitos 
- PHP >= 7.4
- Composer

## Instalação
Instale o pacote utilizando **Composer**
```
composer require alerrandro/validador-e-regex
```


## Utilização
```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Alerrandro\Regex\Validadores\Cpf;

Validador::cpf('000.000.000-00'); // false

Validador::cpf('00.000.000/0000-00'); // false

```

A função ```cpf``` validar um CPF, retornando ```true/false```.

A função ```cnpj``` validar um CNPJ, retornando ```true/false```.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Alerrandro\Regex\RegexBr\Regex;

Regex::removerCaracteresEspeciais('abc!@#'); // abc

Regex::removerLetras('abc123'); // 123

Regex::removerNumeros('123abc'); // abc

Regex::removerLetrasECaracteresEspeciais('abc123!@#'); // 123
```

A função ```removerCaracteresEspeciais``` remove os caracteres especiais (!@#$%).

A função ```removerLetras``` remove as letras (a-z).

A função ```removerNumeros``` remove os numeros (0-9).

A função ```removerLetrasECaracteresEspeciais``` remove as letras e caracteres especiais (a-z) (!@#$%).

## Desenvolvedor

- Linkedin - [Alerrandro Borges](https://www.linkedin.com/in/alerrandro-borges-b45a6a1a1/)
- Email - [alerrandrokaton@gmail.com](mailto:alerrandrokaton@gmail.com)

- GitHub - [alerrandro1999](https://github.com/alerrandro1999)

