<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournement extends Model
{
    use HasFactory;

    protected $table ='tournements';

    protected $fillable = [
    'name',
    'description',
    'feature',
    'type',
    'user_id',
        ];
    protected $casts = [
        'feature' => 'boolean',
    ];
}
