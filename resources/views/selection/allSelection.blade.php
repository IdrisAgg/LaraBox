@extends('layout.app')

@section('content')
<div class="text-center"><h1><u>Liste des selections :</u></h1></div>
<div class="text-center d-flex justify-content-center my-5">

<table class="table w-75 ">
    <thead class="table-dark">
        <tr>
            <td>Selection id </td>
            <td>Nom Selection </td>
            <td>Restaurant</td>
            <td>Items</td>
            <td>Actions</td>
        </tr>
    </thead>
  <tbody>


@foreach($selection as $select)
<tr>
    <td>{{$select->id}}</td>
    <td>{{$select->name}}</td>
    <td>{{$select->resto->nom }}</td>
    <td>
        <ul class="">
            {{-- <li>{{$items->name }}</li> --}}
        </ul>
    </td>
    <td><a href="/suppSelection/{{$select->id}}" class="btn btn-danger mx-2">Supprimer</a><a href="/uneSelection/{{$select->id}}" class="btn btn-danger">voir</a></td>
</tr>

@endforeach
{{-- @foreach($selection->items as $item)
    <div class="">{{$item->name}}</div>
@endforeach --}}

   </tbody>
</table>
</div>


@endsection

