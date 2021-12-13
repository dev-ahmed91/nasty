<?php


namespace Modules\Category\Constants;


final class CategoryStatus
{
    public const DISABLED = 0;
    public const ACTIVE   = 1;

    public static function getList()
    {
        return [
            self::DISABLED => 'Disabled',
            self::ACTIVE   => 'Active',
        ];
    }

    public static function getLabel($key)
    {
        return array_key_exists($key, self::getList()) ? self::getList()[$key] : " ";
    }
}
