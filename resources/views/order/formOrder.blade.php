@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')
<form class="mt-5" action="/createOrder" method="POST">
                @csrf
                <div class="d-flex justify-content-center ">
                    <label class="form-label mx-2" for="">Nom</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control w-25"  type="text" id="nom" name="nom">
                </div>

                <div class="form-group d-flex justify-content-center mt-3">
                    <label for="exampleFormControlSelect1">Restaurent</label>
                </div>

                <div class="form-group d-flex justify-content-center mt-3">
                    <select class="form-control w-25" id="exampleFormControlSelect1" name="restaurent">
                        @foreach($resto as $rest)
                        <option value="{{ $rest->id }}">{{ $rest->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">Date</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25"  type="date" id="nom" name="date">
                </div>

                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25"  type="hidden" id="nom" name="rest">
                </div>


               
                
                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary px-4 mt-2">Ajouter</button>
                </div>
            </form>
@endsection