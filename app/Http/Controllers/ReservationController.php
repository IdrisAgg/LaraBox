<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Restaurent;
use Illuminate\Http\Request;

class ReservationController extends Controller
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
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    public function formResa($id){
        $resto = Restaurent::find($id);
        return view('resa.formResa')->with('resto',$resto);
    }


    public function createResa(Request $request){
        $this->validate($request,[
            'nom'=>'required',
            'restaurent'=>'required',
            'userId'=>'required',
            'date'=>'required',
            'horaire'=>'required',

        ]);

        $order = new Reservation();

        $order->name = $request->input('nom');
        $order->resto_id = $request->input('restaurent');
        $order->user_id = $request->input('userId');
        $order->date = $request->input('date');
        $order->horaire = $request->input('horaire');

        $order->save();

        return redirect('/');
    }

    public function allResa(){
        $orders = Reservation::GET();
        return view('resa.allResa')->with('orders',$orders);
    }

    public function resaUser(){
        $orders = Reservation::GET();
        return view('resa.resaUser')->with('orders',$orders);
    }

    public function suppResa($id){
        $uneResa = Reservation::find($id);
        $uneResa->delete();
        return redirect('/allResa');
    }
}
