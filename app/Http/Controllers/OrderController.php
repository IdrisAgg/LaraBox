<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
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
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }



    public function createOrder(Request $request){
        $this->validate($request,[
            'nom'=>'required',
            'numero'=>'required',
            'adresse'=>'required',
            'ville'=>'required',
        ]);

        $order = new order();

        $order->nom = $request->input('nom');
        $order->numéro = $request->input('numero');
        $order->adresse = $request->input('adresse');
        $order->ville = $request->input('ville');
        $order->save();

        return redirect('/');
    }

    public function formOrder(){
        return view('resto.formResto');
    }


}
