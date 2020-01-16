<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $items = Item::all();
        /*return view('items.index', ['item' => $item]);*/
        return view('items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function customize(Item $item)
    {   
        return view('items.customize', ['item' => $item]);
    }

    public function create()
    {
        $items = new Item;
        return view('items.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mime_type' => 'required|mimetypes:svg,jpeg,jpg|max:2000',
        ]);

        $item = new Item();
        $item->fill($request->all());
        $item->save();

        return redirect()->route('order.index')->with('success', 'Your custom has been submitted!');
    }
}
