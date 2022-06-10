<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderBanners extends Model
{
    use HasFactory;
    protected $table = "slider_banners";

    protected $fillable = [
        'title',
        'image',
        'status',
    ];
}
