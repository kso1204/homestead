<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable = ['a_tname','a_fname','a_lname'];

    public function paper()
    {
        return $this->belongsTo(Paper::class);
    }

}
