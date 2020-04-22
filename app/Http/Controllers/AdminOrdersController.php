<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Orders;
use App\Models\User;



class AdminOrdersController extends Controller
{
    public function index()
    {   
        $orders = Orders::all();

        return view('admin.orders', [
            'orders' => $orders
        ]);
    }

    /*public function edit(Request $request, $id)
    {   
        $order = Orders::findOrFail($id);
        $order->fill($request->old());
        return view('admin.orderEdit', ['order' => $order]);
    }*/

     public function edit(Orders $order)
    {   
        return view('admin.orderEdit', compact('order'));
    }

    public function update(Request $request, Orders $order) 
    {
        $this->validate($request, [
            'address' => 'required|min:5',
            'status' => [
                'required',
                Rule::in(['Pending', 'Canceled', 'Delivered']),
            ],
        ]); 

        $order->fill($request->all());
        $order->save();

        return redirect()->route('admin.order.index', [$order->id]);
    }
}
