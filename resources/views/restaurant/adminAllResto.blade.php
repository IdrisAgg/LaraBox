@extends('layout.app')

@section('content')
<div class="text-center"><h1>Liste restaurents :</h1></div>
<div class="container d-flex justify-content-end mt-5 ">
    <a class="btn btn-primary " href="{{route('restaurent.create')}}">Ajouter un restaurant</a>
</div>
<div class="text-center d-flex justify-content-center my-2">


<table class="table w-75 ">
    <thead class="table-dark">
        <tr>
            <td>Nom</td>
            <td>Adresse</td>
            <td>Ville</td>
            <td>Horaire</td>
            <td>ADMIN</td>

        </tr>
    </thead>

  <tbody>


<?php
foreach($resto as $rest) {
?>
<tr>
    <td>{{$rest->nom}}</td>
    <td>{{$rest->adresse }}</td>
    <td>{{$rest->ville }}</td>
    <td>{{$rest->horaireDebut }} - {{$rest->horaireFin }}</td>
    <td>
        <a href="/afficheUnResto/{{$rest->id}}" class="btn btn-secondary">plus d'info ...</a>
        <a href="/formPlat/{{$rest->id}}" class="btn btn-secondary">créer un plat</a>
        <a href="/deleteResto/{{$rest->id}}" class="btn btn-danger">Supprimer</a>
        <a href="/modifResto/{{$rest->id}}" class="btn btn-warning">Modifier</a>
        <a href="/createItem/{{$rest->id}}" class="btn btn-warning">Modifier</a>


    </td>


</tr>



<?php
}
?>
   </tbody>
</table>

</div>


@endsection
