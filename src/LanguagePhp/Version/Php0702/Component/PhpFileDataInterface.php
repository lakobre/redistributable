<?php

declare(strict_types = 1);

namespace Lakobre\Redistributable\LanguagePhp\Version\Php0702\Component;

interface PhpFileDataInterface
{
    /**
     * @return bool
     */
    public function getDeclareStrictTypes(): bool;

    /**
     * @return string
     */
    public function getNamespace(): string;
}
