<?php

declare(strict_types = 1);

namespace Lakobre\Redistributable\LanguagePhp\Service;

class ArrayService
{
    /**
     * @param object[]|null[] $objectArray
     * @param string[]        $possibleTypes
     *
     * @return string|null
     */
    public function resolveObjectArrayType(array $objectArray, array $possibleTypes): ?string
    {
        if (!empty($objectArray)) {
            foreach ($objectArray as $object) {
                if (!is_null($object)) {
                    foreach ($possibleTypes as $objectType) {
                        if ($object instanceof $objectType) {
                            return $objectType;
                        }
                    }
                }
            }
        }

        return null;
    }
}
