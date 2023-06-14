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
            <td>Restaurent associé</td>
            <td>Action</td>


        </tr>
    </thead>
  <tbody>



@foreach($items as $item)
<tr>
    @if (!empty($item->resto->nom))
        <td>{{$item->name}}</td>
        <td>{{$item->description }}</td>
        <td>{{$item->price }}</td>

        @if (!empty($item->plat->gras))
            {{-- <td>{{$item->plat->gras}}</td>
            <td>{{$item->plat->lvlPiment}}</td> --}}
        @else

        @endif
        <td>{{$item->resto->nom }}</td>
        <td>
            <a href="{{route('item.destroy',$item)}}" class="btn btn-secondary">plus d'info ...</a>
            <a href="{{route('item.destroy',$item)}}" class="btn btn-secondary">SELECTION</a>
            <form action="{{route('item.destroy',$item)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</a></button>
            </form>
        </td>

    @endif


</tr>
@endforeach
   </tbody>
</table>
</div>


@endsection
