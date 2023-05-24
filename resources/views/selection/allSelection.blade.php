@extends('layout.app')

@section('content')
<div class="text-center"><h1>Liste restaurents :</h1></div>
<div class="text-center d-flex justify-content-center my-5">

<table class="table w-75 ">
    <thead class="table-dark">
        <tr>
            <td>Nom Selection </td>
            <td>Restaurent</td>
            <td>Items</td>
            <td>Actions</td>
        </tr>
    </thead>
  <tbody>

<?php
foreach($selection as $select)
{
?>
<tr>

    <td>{{$select->name}}</td>
    <td>{{$select->resto->nom }}</td>
    <td>
        <ul class="">
            <li>{{$select->resto->nom }}</li>
            <li>{{$select->name }}</li>
            <li>{{$select->id }}</li>
            <li>{{$select->resto->nom }}</li>


            
    
        </ul>

    </td>
    <td><a href="/suppSelection/{{$select->id}}" class="btn btn-danger mx-2">Supprimer</a><a href="/uneSelection/{{$select->id}}" class="btn btn-danger">voir</a></td>
</tr>
{{-- <tr>

    <td>{{$select->name}}</td>
    <td>{{$select->resto->nom }}</td>
    <td>
<select name="" id="">
    <option value=""><li>Voir les produits</li></option>
    <option value=""><li>{{$select->resto->nom }}</li></option>
    <option value=""><li>{{$select->resto->id }}</li></option>
    <option value=""><li>{{$select->id }}</li></option>

</select>
    </td>
    <td><a href="/suppSelection/{{$select->id}}" class="btn btn-danger">Supprimer</a></td>

</tr> --}}



<?php
}
?>




   </tbody>
</table>
</div>


@endsection

