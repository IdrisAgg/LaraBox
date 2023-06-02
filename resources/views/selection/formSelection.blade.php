@extends('layout.app')
@section('title')
créer resto

@endsection

@section('content')
<div class="container">{{--justify-content-center--}}
    <div class="d-flex justify-content-around ">
    </div>
</div>

<div class="justify-content-around text-center mt-5 ">
            {{-- <img class="" src="/images/entreeBackground.png" width="100px" alt=""> --}}
            <h4 class="" style="">Entrées</h4>

            @foreach($items as $item)
            <div class="  ">
                @if ($item->entree_id != null)
                <div class=" mt-3"><u><strong >{{$item->name}}</strong></u></div>
                <div class="">{{$item->description }} - {{$item->price .'€'}}</div>
                @endif
            </div>
            @endforeach


            {{-- <div class="">
                <img class="" src="/images/ramenBackground3.png" width="100px" alt="">
            </div> --}}
            <div class="d-flex justify-content-center "><hr class=" w-50"></div>

                <h4 class="text-center mt-5"> Plat</h4>

                @foreach($items as $item)
                <div class="text-center" >
                    @if ($item->plat_id != null)
                    <div class="mt-3"><u><strong>{{$item->name}}</strong></u></div>
                    <div class="">{{$item->description }} - {{$item->price .'€'}}</div>
                    <div><i>taux de gras:  {{$item->plat->gras }}</i></div>
                    <div><i>Force du piment:  {{$item->plat->lvlPiment }}</i></div>
                    @endif
                @endforeach
        </div>


        <div class="text-center mt-5" >
            <div class="d-flex justify-content-center "><hr class=" w-50"></div>

                <h4>Dessert</h4>

                {{-- <img class="" src="/images/dessertBackground.png" width="100px" alt=""> --}}
                @foreach($items as $item)
                    @if ($item->dessert_id != null)
                    <div class="mt-3"><u><strong>{{$item->name}}</strong></u></div>
                    <div>{{$item->description }} - {{$item->price .'€'}}</div>
                    <div><i>Taux de sucre:  {{$item->dessert->tauxSucre }}</i></div>
                    @endif
                @endforeach
        </div>


</div>

<div class="FORMULAIRE card p-5 container col-8 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-top: 10%">
    <form action="/createSelection/{{$resto->id}}" method="POST">
            @csrf

            {{-- <div class="d-flex justify-content-center">
                <input class="form-control w-25"  type="hidden" id="nom" value="{{'Select'.$resto->id}}" name="nom" >
            </div> --}}

            <div class="d-flex justify-content-center ">
                <input class="form-control w-25" type="hidden" value="{{$resto->id}}" name="resto_id">
            </div>
            <div class="d-flex justify-content-center ">
                <input class="form-control w-25" type="hidden" value="{{'Select'.$resto->nom.$resto->id}}" name="nom">
            </div>

            <div class="d-flex justify-content-center mt-3">
                <label class="form-label mx-2" for="">Entrée</label>
            </div>
            <div class="d-flex justify-content-center ">
                <select {{-- style="width: 50%" --}} class="form-control " type="text" value="" name="">
                    <option value="">-- choisissez ue entree --</option>
                    @foreach($items as $item)
                    @if ($item->entree_id != null)
                    <option value="{{$item->entree_id}}">{{$item->name}}</option>
                    @endif
                @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <label class="form-label mx-2" for="">Plat</label>
            </div>
            <div class="d-flex justify-content-center ">
                <select {{-- style="width: 50%" --}} class="form-control " type="text" value="" name="">
                    <option value="">-- choisissez un plat --</option>
                    @foreach($items as $item)
                    @if ($item->plat_id != null)
                    <option value="{{$item->plat_id}}">{{$item->name}}</option>
                    @endif
                @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <label class="form-label mx-2" for="">Dessert</label>
            </div>
            <div class="d-flex justify-content-center ">
                <select {{-- style="width: 50%" --}} class="form-control " type="text" value="" name="">
                    <option value="">-- choisissez un dessert --</option>
                    @foreach($items as $item)
                    @if ($item->dessert_id != null)
                    <option value="{{$item->dessert_id}}">{{$item->name}}</option>
                    @endif
                @endforeach
                </select>
            </div>


            <div class="d-flex justify-content-center mt-2">
                <button type="submit" class="btn btn-primary px-4 mt-2">Ajouter</button>
            </div>
    </form>
</div>


@endsection





{{-- <div class="text- mt-3 ">
            <ul>
                <img class="" src="/images/ramenBackground1.png" width="100px" alt="">

                @foreach($items as $item)
                    @if ($item->entree_id != null)
                    <li class="mt-3"><u><strong>{{$item->name}}</strong></u></li>
                    <li>{{$item->description }} - {{$item->price .'€'}}</li>
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="text- mt-3 ">
            <ul>
                <img class="" src="/images/dessertBackground.png" width="100px" alt="">

                @foreach($items as $item)
                    @if ($item->entree_id != null)
                    <li class="mt-3"><u><strong>{{$item->name}}</strong></u></li>
                    <li>{{$item->description }} - {{$item->price .'€'}}</li>
                    @endif
                @endforeach
            </ul>
        </div> --}}
