@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')
<form action="/modifResto/{{$resto->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-center ">
                    <label class="form-label mx-2" for="">nom</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control w-25" type="text" id="nom" value="{{$resto->nom}}" name="nom">
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control w-25" type="hidden" id="nom" value="{{$resto->id}}" name="resto_id">
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">horaire début</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25"  type="time" value="{{$resto->horaireDebut}}" name="horaireStart">
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">horaire fin</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25"  type="time" value="{{$resto->horaireFin}}"  name="horaireEnd">
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">numéro</label>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <input class="form-control w-25"  type="text" value="{{$resto->numero}}" name="numero">
                </div>

                <div class="d-flex justify-content-center">
                    <label class="form-label mx-2" for="">adresse</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control w-25"  type="text" value="{{$resto->adresse}}" name="adresse">
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">ville</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25"  type="text" value="{{$resto->ville}}" name="ville">
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <input class="form-control w-25"  type="file" value="{{$resto->image}}" name="image" readonly>
                </div>
                <div class="">{{$resto->image}}</div>

                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary px-4 mt-2">Ajouter</button>
                </div>
            </form>
@endsection
