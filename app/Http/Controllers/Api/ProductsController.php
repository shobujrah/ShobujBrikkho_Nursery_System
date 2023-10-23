<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{

    public function getProducts()
    {
        $products=Product::with('category')->get();
        return $this->responseWithSuccess($products,'all product list.');
        // return $this->responseWithSuccess(ProductResource::collection($products),'all product list.');
    }




    public function allproducts ()
    {
        $products=Product::all();


        return response()->json([
            'success'=>true,
            'data'=>$products,
            'message'=>'All product list',
            'status_code'=>200
        ]);
    }


    public function singleproduct($id)
    {

        $product=Product::find($id);

        return response()->json([
            'success'=>true,
            'data'=>$product,
            'message'=>'Single product view',
            'status_code'=>200
        ]);
    }   



    public function  create(Request $request)
    {

        $validate=Validator::make($request->all(),[
            'product_name'=>'required',
            'product_image'=>'required',
            'product_price'=>'required|gt:100',
            'product_stock'=>'required|gt:10', 
        ]);
            if ($validate->fails()){
                return response()->json([
                    'success'=>false,
                    'data'=>[],
                    'message'=>$validate->getMessageBag(),
                    'status_code'=>201
                ]);  

            } 

            $fileName=null;
        if($request->hasfile('product_image'))
        {
            $image=$request->file('product_image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/products',$fileName);
        }

        $product=Product::create([
            'name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'price'=>$request->product_price,
            'quantity'=>$request->product_stock,
            'description'=>$request->description,
            'image'=>$fileName
            
        ]);

        return response()->json([
            'success'=>true,
            'data'=>$product,
            'message'=>'Product added successfully',
            'status_code'=>200
        ]);


      

        
    }

    public function update(Request $request,$id){
        $product=Product::find($id);
        if($product){
           $product->update([
            'name'=>$request->product_name,
            // 'category_id'=>$request->category_id,
            'price'=>$request->product_price,
            'quantity'=>$request->product_stock,
            'description'=>$request->description,
           ]);

        return response()->json([
            'success'=>true,
            'data'=>$product,
            'message'=>'Product created successfull.',
            'status_code'=>200
        ]);


           return $this->responseWithSuccess($product,"Product Updated successfully.");
        }
    }
}





