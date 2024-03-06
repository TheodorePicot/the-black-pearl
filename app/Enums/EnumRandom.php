<?php

namespace App\Enums;

trait EnumRandom
{
    /**
     * Get a random value from the available enums.
     *
     * @return string random value from the available enums.
     */
    public static function randomValue(): string
    {
        $arr = array_column(self::cases(), 'value');

        return $arr[array_rand($arr)];
    }

    /**
     * Get a random name from the available enums.
     *
     * @return string random name from the available enums.
     */
    public static function randomName(): string
    {
        $arr = array_column(self::cases(), 'name');

        return $arr[array_rand($arr)];
    }
}
