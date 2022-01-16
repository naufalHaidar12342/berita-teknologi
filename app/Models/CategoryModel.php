<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $DBGroup = "default";
    protected $table = "category";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama_kategori'];
}
