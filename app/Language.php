<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    public function glossaries()
    {
        return $this->hasMany('Glossary');
    }

    public function translations()
    {
        return $this->hasMany('Translation');
    }
}
