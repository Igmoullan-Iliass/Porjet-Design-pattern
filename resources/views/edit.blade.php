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
                              <label  class="form-label">Event Start</label>
                              <input type="datetime-local" class="form-control rounded-pill" name="event_start" value="{{$rv->event_start}}" value="{{old('event_start')}}">
                            </div>

                           <!-- <div class="col-sm-4">
                                <label class="form-label">Event End</label>
                                <input type="datetime-local" class="form-control rounded-pill" name="event_end" value="{{$rv->event_end}}" value="{{old('event_end')}}">
                              </div>-->
                              <input type="submit" class="btn btn-danger" value="Modifier">
                          </form>
                    </div>
      


</body>
</html>
