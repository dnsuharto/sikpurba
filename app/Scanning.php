<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scanning extends Model
{
    protected $table = 'scanning';

    public function pengunjung()
    {
        return $this->belongsTo('App\Pengunjung');
    }
}
