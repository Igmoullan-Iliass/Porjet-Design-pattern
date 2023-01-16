@extends('admin.admin')
@section('content')
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

    <title>Form </title>
    <style>
      .shadow-blue { text-shadow: 2px 2px 5px rgb(40, 40, 199);}
      
    
    </style>

</head>

<body>
  <div >

@if(count($errors))
                    <div class="alert alert-danger" role="alert">
                      <ul>
            @foreach($errors->all() as $message)
              <li>{{$message}}</li>
            @endforeach
              </ul>
</div>
@endif
                  <div class="modal-body bg-light col-md-8 ms-auto">
                        <form class="row g-3 rounded-pill" action="{{url('succ/'.$succ->id)}}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                        {{csrf_field()}}    
                        <div class="col-sm-13">
                                <label  class="form-label">nom</label>
                                <input type="text" class="form-control" name="nom" value="{{$succ->nom}}">
                              </div>
                            <div class="col-sm-13">
                              <label  class="form-label">Region</label>
                              <select  class="form-control" name="Region" value="{{$succ->region}}">
                              <option value="Marrakech-safi">Marrakech-safi</option>
                                <option value="Casablanca">Casablanca</option>
                                <option value="ElJadida">ElJadida</option>
                                <option value="Agadir-">Agadir</option>
                                </select>
                            </div> 
                            <div class="col-sm-13">
                              <label  class="form-label">Ville</label>
                              <select  class="form-control" name="Ville" value="{{$succ->ville}}">
                              <option value="Marrakech">Marrakech</option>
                                <option value="Casa">Casablanca</option>
                                <option value="Jdida">ElJadida</option>
                                <option value="Agadir">Agadir</option>
                                </select>
                            </div>
<div>
                              <input type="submit" class="btn btn-primary ms-auto w-25" value="Modifier">
                              </div></form>
                    </div>
                    </div>
</body>
</html>
@endsection