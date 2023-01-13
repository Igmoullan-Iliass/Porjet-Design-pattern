<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion RV</title>
</head>
<body>
<!--start navbar-->
@include('admin.navbar')
<!-- end navbar-->
<div id="sidebar" class="container-fluid"> 
    <div id="content" class="row mt-3">
        <div class="col-md-1">
@include('admin.sidebar')
    </div>
    <div class="col" >
        
        @yield('content')

    </div>
    
    

</div>

</body>
</html>
