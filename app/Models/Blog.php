<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['title', 'content', 'image_path'];

    public function saveImage($image)
    {
        $path = Storage::disk('local')->put('img', $image); // Almacena la imagen en la ruta public/img
        $this->image_path = $path;
        $this->save();
    }
}