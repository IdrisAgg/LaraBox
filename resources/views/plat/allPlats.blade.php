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
foreach($plats as $plat) {
?>
<tr>
    <td>{{$plat->item_id}}</td>
    <td>{{$plat->gras}}</td>
    <td>{{$plat->lvlPiment }}</td>

    <td class="d-flex justify-content-center ">
        <a href="" class="btn btn-secondary mx-1">Ajouter un plat</a>
        <a href="/plat/{{$plat->item_id}}" class="btn btn-secondary mx-1">SELECTION</a>
        <form action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</a></button>
        </form>
    </td>


</tr>



<?php
}
?>
   </tbody>
</table>
</div>


@endsection
