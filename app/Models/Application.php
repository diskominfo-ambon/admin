<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'slug',
        'title',
        'content',
        'ext',
        'user_id'
    ];


    public function scopeSelectedKey(Builder $builder, string $name): Builder
    {
        return $builder->where('key', $name);
    }
}
