<nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/afficheAllResto">Liste des restaurants</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              mes données
            </a>
              <ul class="dropdown-menu">
              <li class="bg-dark text-white text-center">informations</li>
                  <li><a class="dropdown-item" href="/todo">Voir mes commandes</a></li>
                  <li><a class="dropdown-item" href="/allResa">Voir mes réservations</a>
                  </li>
              </ul>
          </li>
        <li class="nav-item">
        </li>

        <li class="nav-item">
        </li>


        @if (isset(Auth::user()->isAdmin) and Auth::user()->isAdmin == 1)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ADMIN ACTIONS
          </a>
            <ul class="dropdown-menu">
            <li class="bg-dark text-white text-center">RESTO</li>
                <!-- <li><a class="dropdown-item " href="{{route('restaurent.create')}}">Ajouter un restaurant</a></li> -->
                <li><a class="dropdown-item" href="/adminAllResto">Gérer les restaurants</a></li>
                <li><hr class="dropdown-divider"></li>
                <li class="bg-dark text-white text-center">ORDER</li>
                {{-- <li><a class="dropdown-item" href="/createOrder">Ajouter une Order</a></li> --}}
                <li><a class="dropdown-item" href="/allResa">Liste des réservations</a></li>
                {{-- <li><a class="dropdown-item" href="/createSelection">Ajouter Selection</a></li> --}}
                <li><a class="dropdown-item" href="/allSelection">Liste des commandes</a></li>
                <li class="bg-dark text-white text-center">ITEMS</li>
                {{-- <li><a class="dropdown-item" href="/createItem">createItem</a></li> --}}
                <li><a class="dropdown-item" href="/allItems">allItems</a></li>
                {{-- <li><a class="dropdown-item" href="/createItem">Create ENTRE</a></li> --}}
                {{-- <li><a class="dropdown-item" href="/">Create PLAT</a></li> --}}
                <li><a class="dropdown-item" href="{{route('plat.index')}}">All PLAT</a></li>
                {{-- <li><a class="dropdown-item" href="/createItem">Create DESSERT</a></li> --}}
                <li class="bg-dark text-white text-center">USERS</li>
                <li><a class="dropdown-item" href="/allUsers">Gérer les users</a></li>



                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>

          @endif


       <li class="nav-item">
          <a class="nav-link" href="/dashboard">Dashboard</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>
