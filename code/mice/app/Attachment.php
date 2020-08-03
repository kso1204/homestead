<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    //
    protected $fillable = ['filename','bytes','mime'];

    public function paper()
    {
        return $this->belongsTo(Paper::class);
    }

    // 이 부분을 해줘야 할까?
    /*
    public function user()
    {
        return $this->belongsTo(User::class);
    }*/
}
