@extends('layout.app')

@section('content')
<div class="text-center"><h1>Liste restaurents :</h1></div>

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
foreach($users as $user) {
?>
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->tel}}</td>
    <td>{{$user->adresse}}</td>


    <td>
        <a href="/formPlat/{{$user->id}}" class="btn btn-secondary">voir les infos</a>
        <a href="/deleteResto/{{$user->id}}" class="btn btn-danger">Supprimer</a>
    </td>


</tr>



<?php
}
?>
   </tbody>
</table>

</div>


@endsection
