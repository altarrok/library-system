<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    public function librarian() {
        return $this->belongsTo(Librarian::class);
    }

    public function member() {
        return $this->belongsTo(Member::class);
    }
}
