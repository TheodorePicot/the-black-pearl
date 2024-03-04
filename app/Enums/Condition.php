<?php

namespace App\Enums;

enum Condition:string
{
    case Destroyed = 'destroyed';
    case BadlyDamaged = 'badly_damaged';
    case Damaged = 'damaged';
    case Worn = 'worn';
    case Pristine = 'pristine';
}
