<?php

namespace App\Models;

use CodeIgniter\Model;

class CarouselModel extends Model
{
    protected $DBGroup = "default";
    protected $table = "slideshow_image";
    protected $primaryKey = "id";
    protected $allowedFields = [
        'photo_path',
        'deskripsi',
    ];
}
