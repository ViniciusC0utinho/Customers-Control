<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
