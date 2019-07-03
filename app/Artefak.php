<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artefak extends Model
{
    protected $table = 'artefak';

    public function koleksi()
    {
        return $this->belongsTo('App\Koleksi', 'koleksi_id', 'id');
    }
}
