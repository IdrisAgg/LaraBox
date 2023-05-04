@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')
<form action="/createResto" method="POST">
                @csrf
                <div class="d-flex justify-content-center ">
                    <label class="form-label mx-2" for="nom">nom</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control w-25"  type="text" id="nom" name="nom">
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="nom">numéro</label>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <input class="form-control w-25"  type="text"  name="numero">
                </div>
                <div class="d-flex justify-content-center">
                    <label class="form-label mx-2" for="nom">adresse</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control w-25"  type="text"  name="adresse">
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="nom">ville</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25"  type="text"  name="ville">
                </div>
                
                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary px-4 mt-2">Ajouter</button>
                </div>
            </form>
@endsection