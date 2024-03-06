<?php

namespace App\Enums;

enum Specialities: string
{
    use EnumRandom;
    use EnumToArray;

    case COOK = 'cook';
    case GUNNER = 'gunner';
    case PICKPOCKET = 'pickpocket';
    case SURGEON = 'surgeon';
    case QUARTERMASTER = 'quartermaster';
}
