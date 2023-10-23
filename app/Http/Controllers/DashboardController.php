<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Employee;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $categories= Category::all()->count();
        $products= Product::all()->count();
        $users= Customer::all()->count();
        $orders= Order::all()->count();
        $employees= Employee::all()->count();
        $contacts= Contact::all()->count();

        $total_order=Order::get();
        
        return view ('backend.pages.dashboard',compact('categories','products','users','orders','employees','contacts','total_order'));
    
       
    }
}
