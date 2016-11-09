<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuafor extends Model
{
    protected $table='kuaforler';

    protected $fillable = [
        'id', 'user_id', 'isim', 'created_at','sehir'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
