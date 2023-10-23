<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function allProducts()
    {
        $allProducts=Product::all();
       return view('frontend.pages.all-product' ,compact('allProducts')); 
    }
    public function categoryWiseProducts($catId)
    {
        
       $category= Category::with('products')->find($catId);
        return view('frontend.pages.category-products',compact('category'));
       
       
        
    }


    public function productdetails($id)
    {
        

        $singleShow=Product::find($id);
        
        return view('frontend.pages.product-details',compact('singleShow'));
    }
}

