@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')

                <div class="d-flex justify-content-center ">
                    <h1>ORDERS</h1>
                </div>
                @foreach($orders as $order)
                <div class="d-flex justify-content-center col-sm-12 col-md-12 col-lg-12">
                <div class="card w-50  my-3 ">
                    <div class="d-flex justify-content-between ">
                        <h5 class="card-header w-100">{{ $order->id }} </h5>
                        <h5 class="card-header w-25">{{ $order->date}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                        <h5 class="card-title underline mr-1">Réservation du restaurent: </h5> <span> {{ $order->resto->nom }} - {{ $order->resto->adresse }}</span>
                    </div>
                        <p class="card-text"><strong class="">Horaire: </strong>{{ $order->horaire }}</p>
                        <p class="card-text"><strong class="">nom du client: </strong>{{Auth::user()->name}}</p>
                        <a href="deleteOrder/{{$order->id}}" class="btn btn-outline-danger">Supprimer</a>
                    </div>
                </div>
            </div>
                @endforeach

@endsection
