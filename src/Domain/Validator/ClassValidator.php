<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Validator;

class ClassValidator
{
    public function isClassExist(string $className): bool
    {
        return class_exists($className);
    }
}
