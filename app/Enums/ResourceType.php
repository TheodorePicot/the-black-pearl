<?php

namespace App\Enums;

enum ResourceType: string
{
    use EnumToArray;
    use EnumRandom;
    case FRUIT = 'fruit';
    case VEGETABLE = 'vegetable';
    case MEAT = 'meat';
    case FISH = 'fish';
    case WOOD = 'wood';
    case BREAD = 'bread';
    case GUN_POWDER = 'gun_powder';
    case GUNS = 'guns';
    case GRENADES = 'grenades';
    case SWORDS = 'swords';
    case WINE = 'wine';
    case RUM = 'rum';
}
