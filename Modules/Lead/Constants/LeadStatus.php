<?php


namespace Modules\Lead\Constants;


final class LeadStatus
{
    public const PENDING = 0;
    public const SENT  = 1;
    public const ERROR  = 2;

    public static function getList()
    {
        return [
            self::PENDING => 'Pending',
            self::SENT => 'Sent',
            self::ERROR => 'Sent',
        ];
    }

    public static function getLabel($key)
    {
        return array_key_exists($key, self::getList()) ? self::getList()[$key] : " ";
    }
}
