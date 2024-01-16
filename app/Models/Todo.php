<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todo';

    protected $fillable = [
        'title',
        'description',
        'status_id',
    ];

    public function todostatus(): BelongsTo
    {
        return $this->belongsTo(TodoStatus::class);
    }


    public function tier(): BelongsTo
    {
        return $this->belongsTo(Tier::class);
    }
}
