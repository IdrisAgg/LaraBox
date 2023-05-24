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
            <td>Niveau de piment</td>
            <td>Taux de gras</td>
            <td>Action</td>

        </tr>
    </thead>
  <tbody>



@foreach($items as $item)
<tr>
    <td>{{$item->name}}</td>
    <td>{{$item->description }}</td>
    <td>{{$item->price }}</td>
    <td>{{$item->plat->gras }}</td>
    <td>{{$item->plat->lvlPiment }}</td>


    <td>
        <a href="{{route('item.destroy',$item)}}" class="btn btn-secondary">plus d'info ...</a>
        <a href="{{route('item.destroy',$item)}}" class="btn btn-secondary">SELECTION</a>
        <form action="{{route('item.destroy',$item)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</a></button>
        </form>
    </td>
</tr>
@endforeach
   </tbody>
</table>
</div>


@endsection
