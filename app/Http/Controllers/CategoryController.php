<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()

    {
        $categories= Category::paginate(5);
        return view ('backend.pages.category.list',compact('categories'));
    }

    public function delete($id)
   {
    
   $category=Category::find($id);
   
   $category->delete();


   return redirect()->route('category.list')->with('msg','Category deleted successfully.');

    }


    public function view($id)
    {
        $categories=Category::find($id);
        // $categories=Category::all();

        return view('backend.pages.category.view',compact('categories'));
    }



    public function edit($id)
    {
        $categories=Category::find($id);
        // $categories=Category::all();

        return view('backend.pages.category.edit',compact('categories'));
    }



    public function form()
    {
        return view('backend.pages.category.create');
    }




    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'category_name'=>'required'
            // 'description'=>'required'
            
        ]);


        Category::create([
            //bam pase table er column name => dan pase input field er nam
             'name'=>$request->category_name,
             'description'=>$request->description// nullable
         ]);

         return redirect()->route('category.list')->with('msg','Category Created successfully.');
    }

    

    public function update(Request $request,$id)
    {
       

            // dd($request->all());
        
        $request->validate([
                'category_name'=>'required',
                'description'=>'required'
            ]);
            
            
        $category=Category::find($id);

       $category->update([
        'name'=>$request->category_name,
        'description'=>$request->description,

       ]);
        return redirect()->route('category.list')->with('msg','Category Created successfully.');
    }







}
