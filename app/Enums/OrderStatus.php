<?php

declare(strict_types=1);

namespace App\Enums;

enum OrderStatus: string
{
    case Pending = 'pending';

    case Shipped = 'shipped';

    case Cancelled = 'cancelled';

    case Delivered = 'delivered';

    case Refunded = 'refunded';
}
