<?php

namespace App\Http\Controllers;

use App\Models\Dessert;
use App\Models\Entree;
use App\Models\Item;
use App\Models\Plat;
use App\Models\Restaurent;
use App\Models\Selection;
use Illuminate\Http\Request;

class SelectionController extends Controller
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
    public function show(selection $selection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(selection $selection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, selection $selection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(selection $selection)
    {
        //
    }

    public function formSelection($id){
        $resto = Restaurent::find($id);
        $items = Item::GET();
        $plats = Plat::GET();
        $entrees = Entree::GET();
        $desserts = Dessert::GET();
        return view('selection.formSelection')->with('resto',$resto)->with('items',$items)->with('plats',$plats)->with('desserts',$desserts)->with('entrees',$entrees);
    }


    public function createSelection(Request $request){
        $this->validate($request,[
            'nom'=>'required',
            'resto_id'=>'required',
            // 'item_id'=>'required',
        ]);

        $selection = new Selection();
        $selection->name = $request->input('nom');
        $selection->resto_id = $request->input('resto_id');
        // $selection->item_id = $request->input('item_id');
        $selection->save();
        return redirect('/');
    }


    public function allSelection(){
        $selection = Selection::GET();
        return view('selection.allSelection ')->with('selection',$selection);
    }

    public function suppSelection($id){
        $uneSelection = Selection::find($id);
        $uneSelection->delete();
        return redirect('/allSelection');

    }

    public function uneSelection($id){
        $selection = Selection::find($id);
        $items = Item::get();
        return view('selection.uneSelection')->with(['selection'=>$selection,'items'=> $items]);
    }

}
