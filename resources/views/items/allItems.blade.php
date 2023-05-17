@extends('layout.app')

@section('content')
<div class="text-center"><h1>Liste Produits :</h1></div>
<div class=" text-center d-flex justify-content-center my-5">

<table class="table w-75 ">
    <thead class="table-dark">
        <tr>
            <td>Nom</td>
            <td>Descriprion</td>
            <td>Prix</td>
            <td>Action</td>

        </tr>
    </thead>
  <tbody>


<?php
foreach($items as $item) {
?>
<tr>
    <td>{{$item->name}}</td>
    <td>{{$item->description }}</td>
    <td>{{$item->price }}</td>
    <td>
        <a href="/afficheUnResto/{{$item->id}}" class="btn btn-secondary">plus d'info ...</a>
        <a href="/createSelection/{{$item->id}}" class="btn btn-secondary">SELECTION</a>
        <a href="/deleteResto/{{$item->id}}" class="btn btn-danger">Supprimer</a>
    </td>


</tr>



<?php
}
?>
   </tbody>
</table>
</div>


@endsection
