<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    private $category;
    public function __construct()
    {
        $this->category = new \App\Models\CategoryModel();
    }

    public function category($category)
    {
        echo $category;
    }

    public function crizz()
    {
        $data['category'] = $this->category->findAll();
        return view('main', $data);
    }
}
