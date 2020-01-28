<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\User;


class AdminOrdersController extends Controller
{
    public function orders()
    {   
        $orders = Orders::all()->where('id');
        $users = User::all()->where('id');

        return view('admin.orders', [
            'users' => $users, 
            'orders' => $orders
        ]);
    }

    /*public function edit(Request $request, $id)
    {   
        $order = Orders::findOrFail($id);
        $order->fill($request->old());
        return view('admin.orderEdit', ['order' => $order]);
    }*/

     public function editOrder(Orders $order)
    {   
        return view('admin.orderEdit', compact('order'));
    }

    public function updateOrder(Request $request, $id) 
    {
        $this->validate($request, [
            'address' => 'min:5',
            'zip' => 'min:5',
            'country' => 'min:2',
            'status' => 'string|min:1',
        ]); 

        $order = Orders::findOrFail($id);
        $order->fill($request->all());
        $order->save();

        return redirect()->route('admin.orders', $order->id)->with('success', 'Order updated');
    }
}
