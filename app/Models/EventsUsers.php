<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsUsers extends Model
{
    use HasFactory;

    protected $table ='event_user';

    protected $fillable =['user_id','event_id'];
    //relation many to many

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
}
