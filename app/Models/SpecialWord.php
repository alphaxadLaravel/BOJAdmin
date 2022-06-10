<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialWord extends Model
{
    use HasFactory;

    protected $table = "special_words";

    protected $fillable = [
        'title',
        'image',
        'speaker',
        'pdf',
        'audio',
        'video',
        'status',
    ];
}
