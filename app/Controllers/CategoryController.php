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

    public function delete($id)
    {
        $this->category->delete($id);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $data = [
            'category' => $this->category->findAll(),
            'cate' => $this->category->where('id', $id)->first(),
        ];
        return view('products', $data);
    }

    public function save()
    {
        $id =$_POST['id'];
        $data = [
            'ProdCategory' => $this->request->getVar('ProdCategory'),
        ];
        if($id != null){
            $this->category->set($data)->where('id', $id )->update();
        }else{
            $this->category->save($data);
        }
        return redirect()->to('/product');
    }

}
