<?php

namespace BeSimple\DoctrineTypesBundle\Types;

use Doctrine\DBAL\Types\SmallIntType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class SmallIntUnsignedType extends SmallIntType
{
    const SMALLINT_UNSIGNED = 'smallint_unsigned';

    public function getName()
    {
        return self::SMALLINT_UNSIGNED;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $fieldDeclaration['unsigned'] = true;

        return parent::getSQLDeclaration($fieldDeclaration, $platform);
    }
}