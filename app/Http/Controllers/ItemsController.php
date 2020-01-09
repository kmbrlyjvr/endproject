<?php

namespace App\Http\Controllers;

use App\Models\Items;
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
        $items = Items::all();
        /*return view('items.index', ['item' => $item]);*/
        return view('items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function customize(Items $item)
    {
        return view('items.customize', ['item' => $item]);
    }

    public function create()
    {
        $items = new Items;
        return view('items.create', compact('posting'));
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

        $item = new Items();
        $item->fill($request->all());
        $item->save();

        return redirect()->route('items.index')->with('success', 'Your custom has been submitted!');
    }
}
