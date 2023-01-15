<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    {{-- <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link rel="{{asset(css/css/bootstrap.min.css)}}"  rel="stylesheet"> --}}
    {{-- {!! HTML::style('css/css/') !!} --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>HOME </title>
    <style>
      .shadow-blue { text-shadow: 2px 2px 5px rgb(40, 40, 199);}

    </style>

</head>

<body>

    <!-- Navbar -->


    <div class="container ">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <h2 class="shadow-blue" style=" font-family: 'Brush Script MT', cursive;font-size: 40px; "> Rendez-vous</h2>
        </a>


        <div class="col-md-3 text-end">
          <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>
    </form>
        </div>
      </header>
    </div>

    <!-- main  -->
    <main class="container-fluid " >

      <!-- main 1 -->
      <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
          <h1 class="display-5 fw-bold text-white shadow-blue " style=" font-family: 'Brush Script MT', cursive; " >Rendez-vous</h1>
          <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">management software and online appointment booking.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Prend un Render-vous</button>

                {{-- modale pour Forme prise de rendez vous  --}}
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title " id="staticBackdropLabel">Pris de rendez-vous </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    @if(count($errors))
                    <div class="alert alert-danger" role="alert">
                      <ul>
            @foreach($errors->all() as $message)
              <li>{{$message}}</li>
            @endforeach
              </ul>
</div>
@endif
                    <div class="modal-body">
                        <form class="row g-3 rounded-pill" action="{{url('rv')}}" method="POST">
                        {{csrf_field()}}    
                        <div class="col-sm-4">
                                <label  class="form-label">username</label>
                                <input type="text" class="form-control rounded-pill" name="username">
                              </div>
                      
                            <div class="col-sm-4">
                              <label  class="form-label">Email</label>
                              <input type="email" class="form-control rounded-pill" name="email">
                            </div>


                            <div class="col-sm-4">
                              <label  class="form-label">tel</label>
                              <input type="text" class="form-control rounded-pill" name="tel" placeholder="+212 6...">
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label">city</label>
                                <select name="city" class="form-select rounded-pill">
                                  <option selected>Choose...</option>
                                  <option>Marrakech</option>
                                  <option>casa</option>
                                </select>
                              </div>

                            <div class="col-sm-4">
                              <label  class="form-label">Event Start </label>
                              <input type="datetime-local" class="form-control rounded-pill" name="event_start" value="{{old('event_start')}}"> 
                            </div>

                              <input type="submit" class="btn btn-primary rounded-pill" value="Prendre le rendez vous">
                          </form>
                    </div>
                    <div class="modal-footer col-md-12 text-center ">
                      {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                    </div>
                  </div>
                </div>
              </div>

              {{-- fin pour fomr  --}}
            </div>
          </div>
        </div>
      </div>
      
      <br><br><br><br><br><br>
    <!-- footer  -->
    <div class="container-fluid bg-dark ">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Dashboard</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          </ul>
          <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
      </div>



</body>
</html>
