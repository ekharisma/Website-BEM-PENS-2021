<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    protected $table = "kalenders";
    protected $primaryKey = "id";
    protected $fillable = [
        'title', 'Deskripsi', 'start', 'end', 'url'
    ];
    protected $hidden = [];
}
