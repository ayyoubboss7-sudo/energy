<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'province',
        'renovation_type',
        'amount_info',
        'eligibility',
        'official_url',
        'status',
        'last_verified_at',
    ];

    protected function casts(): array
    {
        return [
            'last_verified_at' => 'date',
        ];
    }
}
