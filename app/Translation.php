<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    public function term()
    {
        return $this->belongsTo('Term');

    }

    public function language()
    {
        return $this->belongsTo('Language');
    }
}
