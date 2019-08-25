<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glossary extends Model
{
    public function language()
    {
        return $this->belongsTo('App\Language');
    }

    public function terms()
    {
        return $this->hasMany('Terms');
    }
}
