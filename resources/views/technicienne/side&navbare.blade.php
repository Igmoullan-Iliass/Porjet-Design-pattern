<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Fullcalender CRUD Events in Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        .shadow-blue { text-shadow: 2px 2px 5px rgb(40, 40, 199);}
        .cd:hover {
            transform: scale(1.07);
            text-shadow: 3px 3px 3px #ababab;
        }
      </style>
    @yield("header")
</head>
<body>
 {{-- navbare  --}}
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark  animate__animated animate__fadeInDown">
    <div class="container-fluid ">
        <div>
             <h2 class="cd shadow-blue text-white rounded animate__animated animate__fadeInRight" style=" font-family: 'Brush Script MT', cursive;font-size: 40px; ">
                 Rendez-vous
            </h2>
        </div>

     <a href="#" class="cd navbar-brand d-flex flex-row-reverse rounded animate__animated animate__fadeInLeft" >

       <img src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt=" Logo" style="width:40px;" class="rounded-pill"> 
     </a>

</div>
</nav>

<hr class="bg-white m-0 p-0">


<div class="row">
    <div class="col-md-2  bg-dark rounded animate__animated animate__fadeInDown">
        <a href="/" class=" text-white d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Menu</span>
          </a>
          <hr class="bg-white">
          <ul class="nav nav-pills flex-column mb-auto ">

            <li>
              <a href="#" class=" cd nav-link link-dark text-white ">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class=" cd nav-link link-dark text-white border border-secondary bg-secondary rounded-pill shadow-sm" >
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Calandar
              </a>
            </li>

            <li>
              <a href="#" class="cd nav-link link-dark text-white">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                Clients
              </a>
            </li>
            <li class="nav-item">
                <a href="#" class="cd nav-link text-white" aria-current="page">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  Profile
                </a>
              </li>
          </ul>
          <hr>
          <div class="dropdown ">
            <a href="#" class=" cd text-white d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="" class="rounded-circle me-2" width="32" height="32">
              <strong>User</strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
    </div>
    <div class="col-md-9 text-center rounded animate__animated animate__fadeInRight">
        @yield("content")

    </div>
</div>

</body>
</html>

