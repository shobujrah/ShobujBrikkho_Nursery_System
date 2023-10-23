<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function contact()
   {
    
    $contact= Contact::all();
     return view ('backend.pages.contact.list',compact('contact'));
   }
}
