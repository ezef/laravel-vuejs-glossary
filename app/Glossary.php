<?php

namespace App;

use App\Language;
use Illuminate\Database\Eloquent\Model;

class Glossary extends Model
{
    //

    public function language()
    {
        return $this->belongsTo('Language');
    }

    public function terms()
    {
        return $this->hasMany('Terms');
    }
}
