@extends('layout.app')

@section('content')
<div class="text-center"><h3>ACCUEIL</h3></div>
<div class="d-flex justify-content-center">
    <img class="w-25" src="images/ramenBackground.jpg" alt="">
    <p class="mt-5">Le ramen est un plat</p>
</div>

<div class="d-flex justify-content-start"><img class="w-25" src="images/ramenBackground.jpg" alt=""></div>
<div class="d-flex justify-content-end"><img class="w-25" src="images/ramenBackground1.png" alt=""></div>

<div class=" d-flex justify-content-center mt-5">
    <div class="card mx-3 col-xs-12 col-sm-5 col-md-5 col-lg-4" >
        <div class="card-body ">
            <h5 class="card-title text-center ">Liste des restaurants</h5>
            <hr>
            <p class="card-text text-center">les resto </p>
            {{-- Découvrez le menu composé de plats savoureusement concocté par notre chef venu tout droit d'une ville au Japon, je sais pas laquelle, ayant travaillé dans le restaurent tata au japon putain je suis drole --}}
            {{-- @if (Auth::user()->isAdmin == null) --}}
            <div class="text-center mt-">
                <a href="afficheAllResto" class="btn btn-outline-info ">Voir</a>
            </div>
            {{-- @endif --}}
        </div>
    </div>
    <div class="card mx-1 col-xs-12 col-sm-5 col-md-5 col-lg-4" >
        <div class="card-body">
            <h5 class="card-title  text-center">TITRE </h5>
            <hr>
            <p class="card-text text-center">descriptiondescriptiondescriptiondescription</p>
            {{-- @if (Auth::user()->isAdmin == null) --}}
            <div class="text-center mt-">
                <a href="/createOrder" class="btn btn-outline-info ">réserver</a>
            </div>
            {{-- @endif --}}
        </div>
    </div>
</div>



<div class=" d-flex justify-content-center mt-">
    <div class=" card mx-3 mt-3 col-xs-12 col-sm-5 col-md-5 col-lg-4" >
        <div class="card-body">
            <h5 class="card-title  text-center">TITRE</h5>
            <hr>
            <p class="card-text text-center">descriptiondescriptiondescriptiondescription</p>
            {{-- @if (Auth::user()->isAdmin == null) --}}
            <div class="text-center mt-">
                <a href="/createOrder" class="btn btn-outline-info ">réserver</a>
            </div>
            {{-- @endif --}}
        </div>
    </div>

    <div class="card mx-1 mt-3 col-xs-12 col-sm-5 col-md-5 col-lg-4" >
        <div class="card-body">
            <h5 class="card-title text-center">TITRE</h5>
            <hr>
            <p class="card-text text-center">descriptiondescriptiondescriptiondescription</p>
            {{-- @if (Auth::user()->isAdmin == null) --}}
            <div class="text-center mt-">
                <a href="/allSelection" class="btn btn-outline-info ">réserver</a>
            </div>
            {{-- @endif --}}
        </div>
    </div>
</div>
@endsection
