<?php

namespace App\Http\Controllers;

use App\Models\Restaurent;
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
        $request->validate([
            'nom'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg.gif,svg',
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'lesImages/';
            $profileImage = 'lesImages/'.time().'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['image'] = $profileImage;
        }

        Restaurent::create($input);
        return redirect('/afficheAllResto');
    }


    public function modifResto(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'resto_id'=>'required'

        ]);
        // $img_name = time().'.'.$request->image->extension();
        // $request->image->move(public_path('lesImages'),$img_name);
        // $path = "/lesImages/".$img_name;

        $unResto = Restaurent::find($request->input('resto_id'));

        if($image = $request->file('image')){
            $destinationPath = 'lesImages/';
            $profileImage = 'lesImages/'.time().'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['image'] = $profileImage;
            $unResto->image = $profileImage;
        }

        $unResto->nom = $request->input('nom');
        $unResto->horaireDebut = $request->input('horaireStart');
        $unResto->horaireFin = $request->input('horaireEnd');
        $unResto->numero = $request->input('numero');
        $unResto->adresse = $request->input('adresse');
        $unResto->ville = $request->input('ville');
        $unResto->update();
        return redirect('/afficheAllResto')->with('message','Vos information ont été mis à jour !');
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

    // public function createResto(Request $request){
    //     $this->validate($request,[
    //         'nom'=>'required',
    //         // 'image'=>'image|mimes:png,jpg,jpeg.gif,svg',


    //     ]);

    //     // $img_name = time().'.'.$request->image->extension();
    //     // $request->image->move(public_path('lesImages'),$img_name);
    //     // $path = "/lesImages/".$img_name;
    //     $resto = new restaurent();

    //     $resto->nom = $request->input('nom');
    //     $resto->horaireDebut = $request->input('horaireStart');
    //     $resto->horaireFin = $request->input('horaireEnd');
    //     $resto->numero = $request->input('numero');
    //     $resto->adresse = $request->input('adresse');
    //     $resto->ville = $request->input('ville');

    //     $filename = time().$request->file('image')->getClientOriginalName();
    //     $path = $request->file('image')->storeAs('images',$filename,'public');
    //     $resto->image = 'images/'.$path;
    //     // $resto->image = $path;
    //     $resto->save();

    //     return redirect('/afficheAllResto');
    // }

    public function formResto(){
        return view('resto.formResto');
    }


    public function allResto(){
        $resto = restaurent::GET();
        return view('resto.allResto')->with("resto",$resto);
    }

    public function unResto($id){
        $unResto = restaurent::find($id);
        return view('resto.unResto')->with("unResto",$unResto);
    }

    public function suppResto($id){
        $unResto = restaurent::find($id);
        $unResto->delete();
        return redirect('/adminAllResto');
    }


    public function adminAllResto(){
        $resto = restaurent::GET();
        return view('resto.adminAllResto')->with("resto",$resto);
    }

    public function formModif($id){
        $resto = restaurent::find($id);
        return view('resto.formModif')->with("resto",$resto);
    }

    
}
