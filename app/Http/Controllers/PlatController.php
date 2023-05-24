<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Plat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plats = Plat::GET();
        return view('plat.allPlats')->with('plats',$plats);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plats  = Plat::GET();
        return view('plat.formPlat')->with('plats',$plats);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Plat::create($input);
        Item::create($input);
        return redirect('/plat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plats = Plat::find($id);
        $plats->delete();
        return redirect('/plat')->with('plats',$plats);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plat $plat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plat $plat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plat $plat)
    {
        //
    }


}
