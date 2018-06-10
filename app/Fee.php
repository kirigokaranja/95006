<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    public function student() {
        return $this->belongsTo('\App\Student', 'foreign_key');
    }
}
