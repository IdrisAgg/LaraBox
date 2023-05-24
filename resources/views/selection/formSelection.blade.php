@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')
<div class=" d-flex justify-content-around">
    <div class="d-flex justify-content-center">
        <div class="text-center mt-3 mx-5">
            <p>Entrées</p>

            <ul>
                @foreach($items as $item)
                    @if ($item->entree_id != null)
                    <li class="mt-3"><u><strong>{{$item->name}}</strong></u></li>
                    <li>{{$item->description }} - {{$item->price .'€'}}</li>
                    {{-- <li><i>taux de gras:  {{$item->plat->gras }}</i></li>
                    <li><i>Force du piment:  {{$item->plat->lvlPiment }}</i></li> --}}
                    @endif
                @endforeach
            </ul>



        </div>

        <div class="text-center mt-3 mx-5">
            <p>Plats</p>

            <ul>
                @foreach($items as $item)
                    @if ($item->plat_id != null)
                    <li class="mt-3"><u><strong>{{$item->name}}</strong></u></li>
                    <li>{{$item->description }} - {{$item->price .'€'}}</li>
                    <li><i>taux de gras:  {{$item->plat->gras }}</i></li>
                    <li><i>Force du piment:  {{$item->plat->lvlPiment }}</i></li>
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="text-center mt-3 mx-5">
            <p>Desserts</p>

            <ul>
                @foreach($items as $item)
                    @if ($item->dessert_id != null)
                    <li class="mt-3"><u><strong>{{$item->name}}</strong></u></li>
                    <li>{{$item->description }} - {{$item->price .'€'}}</li>
                    <li><i>Taux de sucre:  {{$item->dessert->tauxSucre }}</i></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="FORMULAIRE ">
        <form action="/createSelection/{{$resto->id}}" method="POST">
                @csrf

                <div class="d-flex justify-content-center">
                    <input class="form-control w-25"  type="hidden" id="nom" value="{{'Select '.$resto->id}}" name="nom" >
                </div>

                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25" type="hidden" value="{{$resto->id}}" name="resto_id">
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25" type="hidden" value="{{$resto->nom}}" name="nom">
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
</div>


@endsection
