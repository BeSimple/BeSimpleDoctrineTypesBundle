<?php

namespace BeSimple\DoctrineTypesBundle\Types;

use Doctrine\DBAL\Types\BigIntType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class BigIntUnsignedType extends BigIntType
{
    const BIGINT_UNSIGNED = 'bigint_unsigned';

    public function getName()
    {
        return self::BIGINT_UNSIGNED;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $fieldDeclaration['unsigned'] = true;

        return parent::getSQLDeclaration($fieldDeclaration, $platform);
    }
}