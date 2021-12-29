<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;


class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_name',
        'title_starting',
        'title_ending',
        'sub_title',
        'bg_img',
        'status',
    ];

     public function category(){
      return $this->belongsTo(Category::class);
  }
}
