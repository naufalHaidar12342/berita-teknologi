<?php

use CodeIgniter\Model;

class PostinganModel extends Model
{

    protected $table = "site_posts";
    protected $primaryKey = 'id_posts';

    public function search($keywords)
    {
    }
}
