<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'started' => 'date',
        'ended' => 'date',
    ];

    public function getActiveAttribute(): bool
    {
        return $this->status == 1;
    }

    public function getInactiveAttribute(): bool
    {
        return $this->status == 0;
    }

    public function getFinishAttribute(): bool
    {
        return $this->status == 2;
    }

    public function user() {
        return $this->hasMany(User::class);
    }
}
