<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\restaurent;
use App\Models\User;





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
            'restaurent'=>'required',
            'userId'=>'required',
            'date'=>'required',

        ]);

        $order = new order();

        $order->name = $request->input('nom');
        $order->resto_id = $request->input('restaurent');
        $order->user_id = $request->input('userId');
        $order->date = $request->input('date');
        $order->save();

        return redirect('/');
    }

    public function formOrder(){
        $resto = restaurent::GET();
        return view('order.formOrder')->with('resto',$resto);
    }

    public function allOrder(){
        $orders = order::GET();
        return view('order.allOrder')->with('orders',$orders);
    }

    public function suppOrder($id){
        $uneResa = order::find($id);
        $uneResa->delete();
        return redirect('/allOrder');
    }


}
