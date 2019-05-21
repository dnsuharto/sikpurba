<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batuan extends Model
{
    protected $table = 'batuan';

    public function koleksi()
    {
        return $this->belongsTo('App\Koleksi');
    }
}
