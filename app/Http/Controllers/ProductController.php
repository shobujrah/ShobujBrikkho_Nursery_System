<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function list()

    {
        $productsCollection=Product::with('category_data')->paginate(5);
        
        return view('backend.pages.product.list',compact('productsCollection'));
    }



    public function report()
    {
        return view('backend.pages.report.product-report');
    }


    public function reportSearch(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $products=Product::whereBetween('created_at', [$from , $to])->get();
        return view('backend.pages.report.product-report',compact('products'));

    }




    public function delete($id)
    {
     
        $product=Product::find($id);
        
        $product->delete();
    
    
        return redirect()->back()->with('msg','Product Deleted successfully.');
 
     }



     public function view($id)
     {
         $product=Product::find($id);
         $categories=Category::all();
 
         return view('backend.pages.product.view',compact('product','categories'));
     }
 

    
    public function edit($id)
    {

        $product=Product::find($id);
        $categories=Category::all();



        return view('backend.pages.product.edit',compact('product','categories'));
    }







    public function form()
    {
        $categories=Category::all();
        return view('backend.pages.product.create',compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // dd(date('Ymdhsi'));

        $request->validate([
            'product_name'=>'required',
            'product_image'=>'required',
            'product_price'=>'required|gt:100',
            'product_stock'=>'required|gt:10' 
        ]);



        $fileName=null;
        if($request->hasfile('product_image'))
        {
            $image=$request->file('product_image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/products',$fileName);
        }

        Product::create([
            'name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'price'=>$request->product_price,
            'quantity'=>$request->product_stock,
            'description'=>$request->description,
            'image'=>$fileName
            
        ]);

        return redirect()->route ('product.list')->with('msg','Product Created successfully.');
    
    }



    public function update(Request $request,$id)
    {
       

    //    dd($request->all());//check data are coming or not
       $product=Product::find($id);
        $request->validate([
            'product_name'=>'required',
            'product_price'=>'required|gt:100',
            'product_stock'=>'required|gt:10',
            'category_id'=>'required'
        ]);


 

        $product_image= $product->image;
        
        if ($image=$request->file('product_image')) {
            if (file_exists(public_path('uploads/products/'.$product_image))) {
                File::delete(public_path('uploads/products/'.$product_image));
            }
            $product_image = date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->move('uploads/products/', $product_image);
        }



    
        $product->update([
            'name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'image'=>$product_image,
            'price'=>$request->product_price,
            'quantity'=>$request->product_stock,
            'description'=>$request->description,
        
        ]);

        return redirect()->route ('product.list')->with('msg','Product Updated successfully.');
    }


}
