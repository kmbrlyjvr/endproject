<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\ShippingCost;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order = $request->session()->get('order', []);
        $shipping = ShippingCost::query()->where('id', $order['shipping'])->first();
        $item = Item::query()->where('text', $order['type'])->first();

        return view('order.index', [

        'order' => $order, 
        'shipping' => $shipping, 
        'item' => $item,
        'total' => $shipping->price + $item->price,

        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function orderTrouser(Request $request)
    {   
        $request->session()->put('order', $request->get('config', [] ));

        return [
            'success' => true 
        ];        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function renderTrouser(Request $request, Orders $order)
    {   
        return view('svg.renderTrouserSvg', ['config' => json_decode($order->config)]);
    }

    public function renderUtility(Request $request, Orders $order)
    {   
        return view('svg.renderUtilitySvg', ['config' => json_decode($order->config)]);
    }

    public function renderOverall(Request $request, Orders $order)
    {   
        return view('svg.renderOverallSvg', ['config' => json_decode($order->config)]);
    }

    public function renderSvgSession(Request $request)
    {   
        $config = $request->session()->get('order', []);

        $view = "";
        $type = isset($config["type"]) ? $config["type"] : null;

        switch($type) {
            case "trouser":    
            $view = "svg.renderTrouserSvg";
            break;

            case "utility":    
            $view = "svg.renderUtilitySvg";
            break;

            case "overall":    
            $view = "svg.renderOverallSvg";
            break;
        }   

        return response()->view($view, ['config' => (object)$config])->header('Content-Type', 'image/svg+xml');

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function receipt(Request $request)
    {
        $config = $request->session()->get('order', []);
        $order = $request->session()->get('order', []);
        $users = User::where("id", Auth::user()->id)->get();
        $shipping = ShippingCost::query()->where('id', $order['shipping'])->first();
        $item = Item::query()->where('text', $order['type'])->first();


        $data = [];
        $data ['config'] = json_encode($config);
        //$data ['item_title'] = Item::get()->where('title')->first();
        $data['status'] = "Pending";
        $data['shipping'] = "";
        $data['payment'] = "Visa";
        $data['address'] = \Auth::user()->address;
        $data['zip'] = \Auth::user()->zip;
        $data['user_id'] = \Auth::user()->id;


        $message = "Order Successful!";
        $order = Orders::create($data);
        
        if(!$order) {
            $message = "failed!";
        }

        $request->session()->flash('status', $message);
        
        return view ('order.receipt', [
            'order' => $order, 
            'users' => $users, 
            'shipping' => $shipping,
            'item' => $item,
            'total' => $shipping->price + $item->price,
            ]);
    }
}
