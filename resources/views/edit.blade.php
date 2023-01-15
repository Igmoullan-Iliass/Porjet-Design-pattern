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
                  <div class="modal-body bg-dark col-md-8 ms-auto">
                        <form class="row g-3 rounded-pill" action="{{url('rv/'.$rv->id)}}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                        {{csrf_field()}}    
                        <div class="col-sm-4">
                                <label  class="form-label">username</label>
                                <input type="text" class="form-control rounded-pill" name="username" value="{{$rv->username}}">
                              </div>
                            <div class="col-sm-4">
                              <label  class="form-label">Email</label>
                              <input type="email" class="form-control rounded-pill" name="email" value="{{$rv->email}}">
                            </div>


                            <div class="col-sm-4">
                              <label  class="form-label">tel</label>
                              <input type="text" class="form-control rounded-pill" name="tel" value="{{$rv->telephone}}">
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
                              <label  class="form-label">date de rendez vous </label>
                              <input type="date" class="form-control rounded-pill" name="daterv" value="{{$rv->daterv}}" value="{{old('daterv')}}">
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label">temps</label>
                                <select name="time" class="form-select rounded-pill" value="{{old('time')}}">
                                  <option selected>Choose...</option>
                                  <option>09:00</option>
                                  <option>09:15</option>
                                  <option>09:30</option>
                                  <option>09:45</option>
                                  <option>10:00</option>
                                  <option>10:15</option>
                                  <option>10:30</option>
                                </select>
                              </div>
                              <input type="submit" class="btn btn-primary ms-auto w-25" value="Modifier">
                          </form>
                    </div>
                    </div>
      


</body>
</html>
@endsection