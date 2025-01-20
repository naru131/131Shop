<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orders(){
        $orders = Order::all(); //order အားလုံးယူ
        // var_dump($orders);
        $voucher_gorup = $orders->groupBy('voucher_no')->toArray(); //same voucher no tway ko Group loat p; Array pyaung
        // dd($voucher_gorup);
        foreach($voucher_gorup as $voucher){
            $orders_id = array_column($voucher, 'id'); //Array htae mhar shi tae item id tway ko yu tar 
            // var_dump($orders_id);
            $order_data[] = Order::whereIn('id',$orders_id)->where('status','Pending')->first();
            //Same Voucher no tu tae order tway tae ka first id taku yae data tway swaehtoke p Array tae htae tar

        }
        // dd($order_data);
        return view('admin.orders.index',compact('order_data'));
    }

    public function orderAccept(){
        
    }

    public function orderComplete(){

    }
}
