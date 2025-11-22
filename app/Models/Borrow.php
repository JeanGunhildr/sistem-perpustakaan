<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    public function borrower() {
        return $this->belongsTo(User::class, 'borrower_id');
    }

    public function book() {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
