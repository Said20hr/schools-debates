<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRM extends Model
{
    use HasFactory;
    protected $table ='c_r_m_s';
    protected $fillable =
        [
        'title_1', 'title_2', 'title_3', 'title_4', 'title_5',
        'title_6', 'text_1', 'text_2', 'text_3', 'text_4',
        'text_5', 'text_6', 'description', 'address',
        'phone_1', 'phone_2', 'fb', 'ig', 'yt', 'tw',
            'note_1', 'note_2', 'note_3', 'email_1', 'email_2',
        ];
}
