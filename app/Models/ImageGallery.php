<?php

namespace App\Models;
use App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'service_id',
    ];

    public function services(){
        return $this->belongsTo(Service::class);
    }

}
