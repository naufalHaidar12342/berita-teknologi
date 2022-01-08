<?php

namespace App\Controllers;
use \Codeigniter\Controller;
use App\Models\PostinganModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function dashboard(){
        return 'Views\admin-page\admin';	
    }
}
