<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Order;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function list()
    {
        $orders=Order::with('customer')->get();
        return view('backend.pages.order.list',compact('orders'));
    }

    public function view($id)
    {
        $order_items=OrderDetail::with('product')->where('order_id',$id)->get();
        $order=Order::with('deliveryman')->find($id);
        $employees=Employee::get();
        return view('backend.pages.order.details',compact('order_items','employees','order'));
       
    }


    public function assign(Request $request,$id)
    {
        $order=Order::find($id);

        $order->update([
            'deliveryman_id'=>$request->deliveryman_id,
            'payment_status'=>$request->status
        ]);

        return redirect()->back();
       
    }


    public function report()
    {
        return view('backend.pages.report.order-report');
    }

    public function reportSearch(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $orders=Order::whereBetween('created_at', [$from , $to])->get();
        return view('backend.pages.report.order-report',compact('orders'));

    }


 

    public function paymentDetails()
    {
        $orders=Order::with('customer')->get();
        return view('backend.pages.payment-details',compact('orders'));
    }



}
