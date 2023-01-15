<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
    <title>Gestion RV</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="/css/siccurcalestyle.css">
<script type="text/javascript" src="/js/siccurcalejs.js"></script>
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


<!--dashboarr-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
   
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="/css/dashboard.css" />
<!--end dashboard-->
<link rel="stylesheet" href="/css/siccurcalestyle.css">
<script type="text/javascript" src="/js/siccurcalejs.js"></script>

</head>
<body>
<<<<<<< Updated upstream
    <div class="row">@include('admin.navbar')
</div>
    <div class="row">
    <div class="col">    @include('admin.sidebar')
</div>
    <div class="col-md-auto">@yield('content')</div>    
=======
<!--start navbar-->
@include('admin.navbar')
<!-- end navbar-->
<div id="sidebar" class="container-fluid"> 
    <div id="content"class="row">
        <div class="col-md-3">
@include('admin.sidebar')
    </div>
    <div class="col">
@yield('content')
    </div>
    </div>

>>>>>>> Stashed changes
</div>

</body>
</html>


