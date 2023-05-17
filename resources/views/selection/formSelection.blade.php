@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')
<div class="container d-flex justify-content-between">
    <div class="d-flex justify-content-center">
        <div class="text-center mt-3 mx-5">
            <p>Entrées</p>
            <p class="">
                LISTE D'ENTREE
            </p>
            <ul>
                <li class="mt-3"> <u> Kurogoma:</u> </li>
                <li>Bouillon claire et epais</li>
                <li class="mt-3"> <u> Shio Paitan:</u></li>
                <li>Bouillon claire et epais</li>
                <li class="mt-3"> <u> <strong> Kurogoma:</strong></u> </li>
                <li>Bouillon claire et epais</li>
            </ul>
        </div>

        <div class="text-center mt-3 mx-5">
            <p>Plats</p>
            <p class="">
                LISTE DES PLATS
            </p>
            <ul>
                <li>Shio Paitan</li>
                <li>Shio Paitan</li>
                <li>Shio Paitan</li>
                <li>Shio Paitan</li>
                <li>Shio Paitan</li>
                <li>tori don</li>
                <li>tori don</li>
                <li>tori don</li>
            </ul>
        </div>

        <div class="text-center mt-3 mx-5">
            <p>Desserts</p>
            <p class="">
                LISTE DES PLATS
            </p>
            <ul>

                <li>tori don</li>
                <li>tori don</li>
                <li>tori don</li>
            </ul>
        </div>
    </div>
    <div class="FORMULAIRE">
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
                    <select class="form-control " type="text" value="" name="">
                        <option value="">-- choisissez une entrée --</option>
                        <option value="">Kurogoma</option>
                        <option value="">Shio Paitan</option>
                        <option value="">Shio Classique</option>
                        <option value="">Niboshi</option>
                    </select>                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">Plat</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <select class="form-control " type="text" value="" name="">
                        <option value="">-- choisissez un plat --</option>
                        <option value="">Kurogoma</option>
                        <option value="">Shio Paitan</option>
                        <option value="">Shio Classique</option>
                        <option value="">Niboshi</option>
                    </select>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">Dessert</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <select {{-- style="width: 50%" --}} class="form-control " type="text" placeholder="dessert" value="" name="">
                            <option value="">-- choisissez un dessert --</option>
                            <option value="">Kurogoma</option>
                            <option value="">Shio Paitan</option>
                            <option value="">Shio Classique</option>
                            <option value="">Niboshi</option>

                    </select>
                </div>


                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary px-4 mt-2">Ajouter</button>
                </div>
        </form>
    </div>
</div>


@endsection
