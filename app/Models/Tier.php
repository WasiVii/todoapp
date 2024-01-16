<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tier extends Model
{
    use HasFactory;

    protected $table = 'tiers';

    protected $fillable = [
        'name',
        'order_column',
    ];

    public function customers(): HasMany
    {
        return $this->hasMany(Todo::class);
    }

}
