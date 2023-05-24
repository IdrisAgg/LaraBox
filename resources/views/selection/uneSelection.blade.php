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


<tr>

    <td>{{$selection->name}}</td>
    <td>{{$selection->resto->nom}}</td>

    @foreach($selection->items as $item)
        <span>{{$item->name}}</span>
    @endforeach

    
    
        </ul>

    </td>
</tr>



   </tbody>
</table>
</div>


@endsection

