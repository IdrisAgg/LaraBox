<?php

namespace App\Http\Controllers;

use App\Models\restaurent;
use Illuminate\Http\Request;

class RestaurentController extends Controller
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
    public function show(restaurent $restaurent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(restaurent $restaurent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, restaurent $restaurent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(restaurent $restaurent)
    {
        //
    }

    public function createResto(Request $request){
        $this->validate($request,[
            'nom'=>'required',
            
        ]);

        $resto = new restaurent();

        $resto->nom = $request->input('nom');
        $resto->horaireDebut = $request->input('horaireStart');
        $resto->horaireFin = $request->input('horaireEnd');
        $resto->numero = $request->input('numero');
        $resto->adresse = $request->input('adresse');
        $resto->ville = $request->input('ville');
        $resto->save();

        return redirect('/afficheAllResto');
    }

    public function formResto(){
        return view('resto.formResto');
    }
   

    public function allResto(){
        $resto = restaurent::GET();
        return view('resto.allResto')->with("resto",$resto);
    }
}
