<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Librarian extends Model
{
    //

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function books() {
        return $this->hasMany(Book::class);
    }
}
