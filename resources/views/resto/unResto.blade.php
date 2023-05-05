@extends('layout.app')

@section('content')
<div class="text-center"><h1>Liste restaurents :</h1></div>
<div class="d-flex justify-content-center my-5">



<div class="card mx-3" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="">
  <div class="card-body">
  <h5 class="card-title">{{ $unResto->nom }}</h5>
    <p class="card-text"><strong>Horaires: </strong>{{ $unResto->horaireDebut }} - {{ $unResto->horaireFin }} </p>
    <p class="card-text"><strong>Adresse: </strong>{{ $unResto->adresse }} </p>
    <p class="card-text"><strong>Ville: </strong>{{ $unResto->ville }} </p>
    <p class="card-text"><strong>Téléphone: </strong>{{ $unResto->numero }} </p>

    <a href="#" class="btn btn-primary">réserver</a>
  </div>
</div>




</div>
@endsection