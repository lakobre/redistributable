<?php

declare(strict_types = 1);

namespace Lakobre\Redistributable\LanguagePhp\Version\Php0702\Component;

use stdClass;

class MethodBodyJsonMapper
{
    /**
     * @param object $json
     *
     * @return null
     */
    public function fromJson(object $json)
    {
        return null;
    }

    /**
     * @param $methodBody
     *
     * @return object
     */
    public function toJson($methodBody): object
    {
        return new stdClass();
    }
}
