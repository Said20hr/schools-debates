<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasRoles;
    use HasFactory;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        'phone',
        'address',
        'region',
        'province',
        'commune',
        'rue',
        'house',
        'id_image',
        'avatar',
        'id_carte',
        'birth_date',
        'school',
        'level',
        'job',
        'work_place',
        'second_name',
        'role',
        'status',

    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'status' => 'boolean',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $attributes = [
        'role' => 'student',

    ];
    public function events()
    {
        return $this->belongsToMany('App\Models\Event');
    }
    public function tournaments()
    {
        return $this->hasMany('App\Models\Tournement','user_id');
    }


}
