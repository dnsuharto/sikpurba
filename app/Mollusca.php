<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Molusca extends Model
{
    protected $table = 'mollusca';

    public function koleksi()
    {
        return $this->belongsTo('App\Koleksi');
    }
}
