<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficialWord extends Model
{
    use HasFactory;
    
    protected $table = "official_words";

    protected $fillable = [
        'category',
        'title',
        'speaker',
        'pdf',
        'audio',
        'video',
        'status',
    ];

}
