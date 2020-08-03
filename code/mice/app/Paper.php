<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    //
    protected $fillable = [
        's_topic','s_type','title','abstracts',
    ];

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function authors()
    {
        return $this->hasMany(Author::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
