<?php

namespace App\Enums;

namespace App\Enums;

enum StatusEnum : string
{
    case ACTIVE = 'Active';
    case INACTIVE = 'Inactive';
    case VALUE = 'value';
    case PERCENTAGE = 'percentage';

    public function label(): string
    {
        return match($this){
            self::ACTIVE=>'Active',
            self::INACTIVE=>'Inactive',
            self::VALUE=>'value',
            self::PERCENTAGE=>'Inactive',
        };
    }

}
