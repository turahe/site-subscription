<?php

namespace Turahe\Subscription\Enums;

enum Interval: string
{
    case Year = 'YEAR';

    case Month = 'MONTH';

    case Week = 'WEEK';

    case Day = 'DAY';
}
