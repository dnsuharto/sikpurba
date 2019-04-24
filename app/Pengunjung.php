<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $table = 'pengunjung';

    public function scannings()
    {
        return $this->hasMany('App\Scanning');
    }
}
