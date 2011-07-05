<?php

namespace BeSimple\DoctrineTypesBundle\Types;

use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class IntegerUnsignedType extends IntegerType
{
    const INTEGER_UNSIGNED = 'integer_unsigned';

    public function getName()
    {
        return self::INTEGER_UNSIGNED;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $fieldDeclaration['unsigned'] = true;

        return parent::getSQLDeclaration($fieldDeclaration, $platform);
    }
}