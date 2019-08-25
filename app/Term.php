<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    public function glossary()
    {
        return $this->belongsTo('Glossary');
    }

    public function translations()
    {
        return $this->hasMany('Translation');
    }
}
