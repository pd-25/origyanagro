<?php

namespace App\Http\Controllers\frontend;

use App\Core\category\CategoryInterface;
use App\Core\products\ProductInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $categoryInterface, $productInterface;
    public function __construct(CategoryInterface $categoryInterface, ProductInterface $productInterface){
        $this->categoryInterface = $categoryInterface;
        $this->productInterface = $productInterface;
    }
    public function index(){
        return view('frontend.index', [
            'categories' => $this->categoryInterface->fetchAllCategories("DESC"),
            'products' => $this->productInterface->fetchAllProducts("Rand")
            //fetch here how ever you need
        ]);
    }

    public function aboutUs(){
        return view('frontend.aboutus');
    }


    public function certificate(){
        return view('frontend.certificate');
    }

    public function contactus(){
        return view('frontend.contactus');
    }

    public function account(){
        return view('frontend.account');
    }

    

    
}
