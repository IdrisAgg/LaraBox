@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')
<form action="{{route('restaurent.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-center ">
                    <label class="form-label mx-2" for="">nom</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control w-25"  type="text" id="nom" name="nom">
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">horaire début</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25"  type="time"  name="horaireStart">
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">horaire fin</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25"  type="time"  name="horaireEnd">
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">numéro</label>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <input class="form-control w-25"  type="text"  name="numero">
                </div>

                <div class="d-flex justify-content-center">
                    <label class="form-label mx-2" for="">adresse</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control w-25"  type="text"  name="adresse">
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">ville</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25"  type="text"  name="ville">
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <input class="form-control w-25"  type="file"  name="image">
                </div>

                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary px-4 mt-2">Ajouter</button>
                </div>
                <div class="">
                    <img src="images/kodawaroLogo1.jpg" alt="">

                </div>
            </form>
@endsection
