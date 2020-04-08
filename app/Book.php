<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    protected $guarded = [];

    public function librarian() {
        return $this->belongsTo(Librarian::class);
    }

    public function member() {
        return $this->belongsTo(Member::class);
    }
}
