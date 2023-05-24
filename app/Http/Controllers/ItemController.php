<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Restaurent;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $items = Item::find($id);
        $items->delete();
        return redirect('/allItems')->with('items',$items);
    }

    public function createItem(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',

        ]);

        $item = new Item();

        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->save();

        return redirect('/allItems');
    }


    public function formItems(){
        $resto = Restaurent::GET();
        return view('items.formItems')->with('resto',$resto);
    }

    public function allItems(){
        $items = Item::GET();
        return view('items.allItems')->with('items',$items);
    }



}
