@extends('layout.app')

@section('content')
<div class="text-center"><h1>Liste restaurents :</h1></div>
<div class="d-flex justify-content-center my-5">

<?php 
foreach($resto as $rest) {
?>

<div class="card mx-3" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title"> <?= $rest->nom ?> </h5>
    <p class="card-text"> <?= $rest->horaireDebut ?> - <?= $rest->horaireFin ?> </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



<?php
}
?>
</div>
@endsection