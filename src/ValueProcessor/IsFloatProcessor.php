<?php

declare(strict_types=1);

namespace Aveiv\MixedValue\ValueProcessor;

use Aveiv\MixedValue\Exception\UnexpectedValueException;

final class IsFloatProcessor implements ValueProcessorInterface
{
    public function __invoke($value)
    {
        if (!is_float($value)) {
            throw new UnexpectedValueException('Value must be a float');
        }
        return $value;
    }
}
