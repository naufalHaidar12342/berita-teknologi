<?php

namespace App\Controllers;

use App\Models\PostinganModel;
use App\Models\AdminsModel;
use App\Models\CarouselModel;
use App\Models\CategoryModel;

class TechNews extends BaseController
{
    protected $callPostinganModel;
    protected $callCarouselModel;
    protected $callCategoryModel;

    public function __construct()
    {
        $this->callPostinganModel = new PostinganModel();
        $this->callCarouselModel = new CarouselModel();
        $this->callCategoryModel = new CategoryModel();
    }
    public function index()
    {
        $data = [
            'page_title' => 'Homepage | TechNews',
            'news_to_read' => $this->callPostinganModel->findAll()
        ];
        return view('index', $data);
    }
    public function readMore($slugsReceived)
    {
        $data = [
            'page_title' => 'Read More',
            'read_full_news' => $this->callPostinganModel->getWhere(['post_slugs' => $slugsReceived])->getResultArray()
        ];

        return view('read-more', $data);
    }
}
