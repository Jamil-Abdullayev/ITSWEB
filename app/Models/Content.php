<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = ['keyword','order_key','title_az', 'title_en', 'title_ru','description_az', 'description_en', 'description_ru', 'type', 'media', 'additional_data'];
}
