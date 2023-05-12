@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')
<form action="/createSelection/{{$resto->id}}" method="POST">
                @csrf

                <div class="d-flex justify-content-center">
                    <input class="form-control w-25"  type="hidden" id="nom" value="{{$resto->nom.' Select '.$resto->id}}" name="nom" >
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">resto</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25" type="text" value="{{$resto->id}}" name="resto_id">
                </div>

                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary px-4 mt-2">Ajouter</button>
                </div>
            </form>
@endsection
