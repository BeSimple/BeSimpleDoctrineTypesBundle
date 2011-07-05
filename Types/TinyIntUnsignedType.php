<?php

namespace BeSimple\DoctrineTypesBundle\Types;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class TinyIntUnsignedType extends Type
{
    public function getName()
    {
        return 'tinyint_unsigned';
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $autoinc = '';
        if (!empty($columnDef['autoincrement'])) {
            $autoinc = ' AUTO_INCREMENT';
        }
        $unsigned = (isset($columnDef['unsigned']) && $columnDef['unsigned']) ? ' ' : '';

        return 'TINYINT UNSIGNED'.$autoinc;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return (null === $value) ? null : (int) $value;
    }

    public function getBindingType()
    {
        return \PDO::PARAM_INT;
    }
}