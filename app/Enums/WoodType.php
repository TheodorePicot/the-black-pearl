<?php

namespace App\Enums;

enum WoodType: string
{
    use EnumRandom;
    use EnumToArray;

    case OAK = 'oak';
    case SPRUCE = 'spruce';
    case BIRCH = 'birch';
    case MANGROVE = 'mangrove';
}
