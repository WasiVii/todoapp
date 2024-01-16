<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TodoStatus extends Model
{
    use HasFactory;

    protected $table = 'todostatus';

    protected $fillable = [
        'status',
    ];

    public function todo(): HasMany
    {
        return $this
        ->hasMany(Todo::class, 'status', 'id')
        ->orderBy('created_at', 'ASC');
    }
}
