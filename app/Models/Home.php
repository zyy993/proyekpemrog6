<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
 protected $table = 'home_page_contents'; 
   protected $fillable = [
        'name',
        'image_path',
        'penyanyi',
        'date',
        'location',
        ];

     protected $casts = [
        'date' => 'datetime',

    ];

}
