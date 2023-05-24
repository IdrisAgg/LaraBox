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
            <td>Information</td>
            <td>Action</td>

        </tr>
    </thead>
  <tbody>



@foreach($items as $item)
<tr >
    <td>{{$item->name}}</td>
    <td>{{$item->description }}</td>
    <td>{{$item->price }}</td>
    @if($item->entree_id != null)
    <td></td>
    @endif
    @if($item->dessert_id != null)
    <td>{{'Taux de sucre: '.$item->dessert->tauxSucre .'%'}}</td>
    @endif
    @if($item->plat_id != null)
    <td>
        <div class="">
            <p>{{'Taux de gras: '.$item->plat->gras }}</p> <p>{{'Force du piment: '.$item->plat->lvlPiment }}</p>
        </div>
    </td>
    @endif
    
    <td class="">
        <div class="d-flex justify-content-center">
        <a href="{{route('item.destroy',$item)}}" class="btn btn-secondary mx-1">plus d'info ...</a>
        <a href="{{route('item.destroy',$item)}}" class="btn btn-secondary mx-1">SELECTION</a>
        <form action="{{route('item.destroy',$item)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</a></button>
        </form>
    </div>
    </td>
</tr>
@endforeach
   </tbody>
</table>
</div>


@endsection
