<?php

namespace App\Enums;

enum Condition: string
{
    use EnumToArray;
    use EnumRandom;
    case Destroyed = 'destroyed';
    case BadlyDamaged = 'badly_damaged';
    case Damaged = 'damaged';
    case Worn = 'worn';
    case Pristine = 'pristine';
}
