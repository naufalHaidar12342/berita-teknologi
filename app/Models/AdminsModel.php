<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    protected $DBGroup = "default";
    protected $table = "admins";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama_admin'];
}
