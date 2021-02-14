<?php

declare(strict_types = 1);

namespace Lakobre\Redistributable\LanguagePhp\Version\Php0702\DesignPatternInterface;

interface ModuleInterface
{
    /**
     * @return string
     */
    public function getDataClassName(): string;

    /**
     * @return string
     */
    public function getDataClassInterfaceName(): string;

    /**
     * @return string
     */
    public function getJsonMapperName(): string;

    /**
     * @return string
     */
    public function getValidatorName(): string;

    /**
     * @return string
     */
    public function getRenderName(): string;
}
