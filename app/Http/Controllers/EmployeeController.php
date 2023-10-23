<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    public function list()
    {
        $employees= Employee::get();
        return view('backend.pages.employee.list', compact('employees'));
    }


    public function assign()
    {
        return view('backend.pages.deliveryorder.list');
    }


    public function delivery()
    {
        return view('backend.pages.deliveryorder.create');
    }




    public function delete($id)
    {
     
        $employees=Employee::find($id);
        
        $employees->delete();
    
    
        return redirect()->route('employee.list')->with('msg',' Delivery Man deleted successfully.');
 
     }


     public function view($id)
     {
         $employees=Employee::find($id);
         return view('backend.pages.employee.view',compact('employees'));
     }




    public function edit($id)
    {
        $employees=Employee::find($id);
        return view('backend.pages.employee.edit',compact('employees'));
    }

    public function form()
    {
        return view('backend.pages.employee.create');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'employee_name'=>'required',
            'phone_No'=>'required',
            'email'=>'required|email|unique:employees',
            'employee_image'=>'required',
            'address'=>'required'
        ]);

        $e_image=null;
        if($request->hasFile('employee_image')){
            $image=($request->file('employee_image'));
            $e_image=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/employee',$e_image);
        }
        
        Employee::create([
            'name'=>$request->employee_name,
            'phone'=>$request->phone_No,
            'email'=>$request->email,
            'address'=>$request->address, 
            'image'=> $e_image         
        ]);

    return redirect()->route('employee.list')->with('msg','Add new Delivery Man successfully.');

    }



    public function update(Request $request,$id)
    {
       

       // dd($request->all());//check data are coming or not
       $employees=Employee::find($id);
         $request->validate([
            'employee_name'=>'required',
            'phone_No'=>'required',
            'email'=>'required|email',
            'address'=>'required'
        ]);

    
        $employee_image= $employees->image;
        
        if ($request->file('employee_image')) {
            $image=$request->file('employee_image');
            if (file_exists(public_path('uploads/employee/'.$employees->image))) {
                File::delete(public_path('uploads/employee/'.$employees->image));
            }
            $employee_image = date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/employee/'.$employee_image);
        }

    

        $employees->update([
            'name'=>$request->employee_name,
            'phone'=>$request->phone_No,
            'email'=>$request->email,
            'image'=>$employee_image,
            'address'=>$request->address, 
           
        
        ]);

        return redirect()->route ('employee.list')->with('msg','Delivery Man Information Updated successfully.');
    }


}
