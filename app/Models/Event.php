<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table= 'events';
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'image',
        'case',
        'date',
        'participants',
        'place',
        'description',
        'images'
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
