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
                        <form class="row g-3 rounded-pill" action="{{url('tech')}}" method="POST">
                        {{csrf_field()}}    
                        <div class="col-sm-4">
                                <label  class="form-label">username</label>
                                <input type="text" class="form-control rounded-pill" name="username">
                              </div>
                            <div class="col-sm-4">
                              <label  class="form-label">Email</label>
                              <input type="email" class="form-control rounded-pill" name="email" >
                            </div>
                         
                              <input type="submit" class="btn btn-primary" value="Enregistrer">
                          </form>
                    </div>
      


</body>
</html>
