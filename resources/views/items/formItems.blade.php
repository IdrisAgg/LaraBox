@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')
<form action="/createItem" method="POST">
                @csrf
                <div class="d-flex justify-content-center ">
                    <label class="form-label mx-2" for="">nom</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control w-25"  type="text" id="nom" name="name">
                </div>


                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">description</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control w-25"  type="text" name="description">
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">price</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25"  type="text" name="price">
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <label class="form-label mx-2" for="">resto_id</label>
                </div>
                <div class="d-flex justify-content-center ">
                    <select {{-- style="width: 50%" --}} class="form-control w-25" type="text" value="" name="plat_id">
                    @foreach ($plats as $plat)
                        <option class="form-control w-25" value="{{$plat->id}}">{{$plat->id}}</option>
                    @endforeach
                </select>

                </div>
                <div class="d-flex justify-content-center ">
                    <input class="form-control w-25" value="{{$resto->id}}" type="text" name="resto_id">
                </div>

                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary px-4 mt-2">Ajouter</button>
                </div>
            </form>
@endsection

