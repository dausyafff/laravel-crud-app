<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = ['title', 'pengarang', 'tahun_terbit'];
    public $timestamps = true;
}
