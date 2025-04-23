<?php

namespace AutomatedTests\Tests;

// Путь, который будет использован при глобальной установке пакета
$autoloadPath1 = __DIR__ . '/../../../autoload.php';
// Путь для локальной работы с проектом
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
use Webmozart\Assert\Assert;
use function AutomatedTests\StringUtils\capitalize;

Assert::eq(capitalize('hello'), 'Hello');

Assert::eq(capitalize(''), '');

//echo 'Все тесты пройдены!';