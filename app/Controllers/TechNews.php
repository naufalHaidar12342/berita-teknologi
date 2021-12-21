<?php

namespace App\Controllers;

class TechNews extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Homepage | TechNews'
        ];
        return view('index', $data);
    }
    public function readMore()
    {
        $data = [
            'page_title' => 'Read More',
        ];

        return view('pages/read-more', $data);
    }
}
