<?php

declare(strict_types = 1);

namespace Lakobre\Redistributable\LanguagePhp\Service;

use DateTime;
use Exception;
use Lakobre\Redistributable\LanguagePhp\Version\Php0702\DesignPatternInterface\ImmutableObjectInterface;

class JsonMapperService
{
    /**
     * @param object|null $jsonObject
     * @param string      $jsonMapperClassName
     *
     * @return ImmutableObjectInterface|null
     */
    public function fromJsonObject(?object $jsonObject, string $jsonMapperClassName): ?ImmutableObjectInterface
    {
        if (empty($jsonObject)) {
            return null;
        }

        return (new $jsonMapperClassName($this))->fromJson($jsonObject);
    }

    /**
     * @param ImmutableObjectInterface|null $object
     * @param string                        $jsonMapperClassName
     *
     * @return object|null
     */
    public function toJsonObject(?ImmutableObjectInterface $object, string $jsonMapperClassName): ?object
    {
        if (empty($object)) {
            return null;
        }

        return (new $jsonMapperClassName($this))->toJson($object);
    }

    /**
     * @param object[]|null $jsonObjectArray
     * @param string        $jsonMapperClassName
     *
     * @return object[]|null
     */
    public function fromJsonObjectArray(?array $jsonObjectArray, string $jsonMapperClassName): ?array
    {
        if (is_null($jsonObjectArray)) {
            return null;
        }
        if (empty($jsonObjectArray)) {
            return [];
        }

        $result = [];
        foreach ($jsonObjectArray as $data) {
            $result[] = (new $jsonMapperClassName($this))->fromJson($data);
        }

        return $result;
    }

    /**
     * @param object[]|null $objectArray
     * @param string        $jsonMapperClassName
     *
     * @return object[]|null
     */
    public function toJsonObjectArray(?array $objectArray, string $jsonMapperClassName): ?array
    {
        if (is_null($objectArray)) {
            return null;
        }
        if (empty($objectArray)) {
            return [];
        }

        $result = [];
        foreach ($objectArray as $data) {
            $result[] = (new $jsonMapperClassName($this))->toJson($data);
        }

        return $result;
    }

    /**
     * @param string|null $jsonValue
     *
     * @throws Exception
     *
     * @return DateTime|null
     */
    public function dateTimeFromJson(?string $jsonValue): ?DateTime
    {
        return ($jsonValue === null) ? null : new DateTime($jsonValue);
    }

    /**
     * @param DateTime|null $dateTime
     *
     * @return string|null
     */
    public function dateTimeToJson(?DateTime $dateTime): ?string
    {
        return ($dateTime === null) ? null : $dateTime->format('Y-m-d H:i:s');
    }
}
