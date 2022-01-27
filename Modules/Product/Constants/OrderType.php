<?php


namespace Modules\Product\Constants;


final class OrderType
{
    public const ONLINE = 1;
    public const OFFLINE   = 2;

    public static function getList()
    {
        return [
            self::ONLINE => 'Online',
            self::OFFLINE   => 'Offline',
        ];
    }

    public static function getLabel($key)
    {
        return array_key_exists($key, self::getList()) ? self::getList()[$key] : " ";
    }
}
