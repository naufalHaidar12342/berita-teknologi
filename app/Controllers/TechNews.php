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
}
