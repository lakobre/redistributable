<?php

declare(strict_types = 1);

namespace Lakobre\Redistributable\LanguagePhp;

/**
 * Interface PhpVersionInterface
 *
 * @package Lakobre\Redistributable\LanguagePhp
 */
interface PhpVersionInterface
{
    const PHP_07_02 = 'php_7.2';
    const PHP_07_04 = 'php_7.4';
    const PHP_07_03 = 'php_7.3';
    const PHP_08_00 = 'php_8.0';
    const ALL_PHP_VERSIONS = [
        self::PHP_07_02,
        self::PHP_07_03,
        self::PHP_07_04,
        self::PHP_08_00,
    ];
}
