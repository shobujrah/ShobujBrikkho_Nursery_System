<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserdetailsController extends Controller
{
   public function customerlist()
   {
    $usercollection =Customer::all();
     return view ('backend.pages.customer-list',compact('usercollection' ));
   }
}
