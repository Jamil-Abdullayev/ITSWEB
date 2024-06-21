<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title_az', 'title_en', 'title_ru','description_az', 'description_en', 'description_ru', 'type','file', 'additional_data'];
}
