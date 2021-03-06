<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'Berita';
    protected $fillable = [
        'title', 'content', 'author', 'user_id', 'kementerian_id'
    ];
    protected $guarded = [];
}
