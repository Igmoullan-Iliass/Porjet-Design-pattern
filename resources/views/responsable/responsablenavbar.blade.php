<nav  class="navbar navbar-expand-lg navbar-light bg-light " >
  <div class="container-fluid">
    <span>          <h1 class="display-5 fw-bold text-dark shadow-blue " style=" font-family: 'Brush Script MT', cursive; font-size:25px; " >Rendez-vous</h1>
</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('admindashboard')}}"> <i class="bi bi-house-door-fill"></i> Accueil    </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">                                 </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-bell-fill"></i>  messages</a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-person-fill"></i> profile</a>
        </li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>
                
      
   
    </div>
  </div>
</nav>