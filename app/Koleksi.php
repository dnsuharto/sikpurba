<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    protected $table = 'koleksi';
    protected $primaryKey = 'id';

    public function artefak()
    {
        return $this->hasOne('App\Artefak', 'koleksi_id', 'id');
    }
    public function mollusca()
    {
        return $this->hasOne('App\Mollusca');
    }
    public function batuan()
    {
        return $this->hasOne('App\Batuan');
    }
    public function vertebrata()
    {
        return $this->hasOne('App\Vertebrata');
    }
}
