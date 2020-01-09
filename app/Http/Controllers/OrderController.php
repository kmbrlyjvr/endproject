<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function orderTrouser(Request $request)
    {
        $data = [];
        $data ['config'] = json_encode($request->get('config', [] ));
        $data ['title'] = "Order";

        $data['user_id'] = \Auth::user()->id;

        $order = Orders::create($data);

        return [
            'success' => $order != null, 
            'order' => $order
    ];        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function renderSlack(Request $request, Orders $order)
    {   
        return view('svg.renderSlackSvg', ['config' => json_decode($order->config)]);
    }

    public function renderUtility(Request $request, Orders $order)
    {   
        return view('svg.renderUtilitySvg', ['config' => json_decode($order->config)]);
    }

    public function renderOverall(Request $request, Orders $order)
    {   
        return view('svg.renderOverallSvg', ['config' => json_decode($order->config)]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('order.show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function receipt()
    {
        return view ('order.receipt');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        //
    }
}
