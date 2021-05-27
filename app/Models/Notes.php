<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notes extends Model
{

    use HasFactory;

    protected $table = 'notes';
    protected $fillable = [
        'title',
        'type',
        'content',
        'user_id',
        'status',
    ];

    /**
     * Get the User that owns the Notes.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id')->withTrashed();
    }



}
