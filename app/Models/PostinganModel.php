<?php

namespace App\Models;

use CodeIgniter\Model;

class PostinganModel extends Model
{

    protected $DBGroup = "default";
    protected $table = "site_posts";
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'post_slugs',
        'author_of_post',
        'kategori_post',
        'judul_post',
        'cover_post',
        'short_desc',
        'first_paragraph',
        'second_paragraph',
        'last_paragraph',
    ];




    public function search($keywords)
    {

        return $this->table('site_posts')->like('judul_post', $keywords);
    }
}
