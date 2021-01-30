<?php


namespace App\Constants;


final class Roles
{
    public const CUSTOMER = 1;
    public const ADMIN  = 2;

    public static function getList()
    {
        return [
            self::CUSTOMER => 'Customer',
            self::ADMIN => 'Administrator',
        ];
    }

    public static function getLabel($key)
    {
            return array_key_exists($key, self::getList()) ? self::getList()[$key] : " ";
    }
}
