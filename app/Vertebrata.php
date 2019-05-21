<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vertebrata extends Model
{
    protected $table = 'vertebrata';

    public function koleksi()
    {
        return $this->belongsTo('App\Koleksi');
    }
}
