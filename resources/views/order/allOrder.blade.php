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
                        <h5 class="card-title"><strong>Réservation du restaurent: </strong> {{ $order->resto->nom }}</h5>
                        <p class="card-text"><strong>adresse du restaurent: </strong>{{ $order->resto->adresse }}</p>
                        <a href="deleteOrder/{{$order->id}}" class="btn btn-outline-danger">Supprimer</a>
                    </div>
                </div>
            </div>
                @endforeach

@endsection
