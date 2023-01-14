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

    <title>Gestion Rv </title>
    <style>
      .shadow-blue { text-shadow: 2px 2px 5px rgb(40, 40, 199);}

    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                <div class="alert alert-success">
           {{session()->get('success')}}
                </div>
                @endif
           <h1>Liste des RendezVous</h1>
           <div class="pull-right">
            <a href="{{url('/')}}" class="btn btn-primary">Nouveau RendezVous</a>
           </div>
            <table class="table table-dark table-striped">
                <tr>
                <th>Username</th>
                    <th>Event Start</th>
                    <th>Event End</th>
                    
                    <th>Action</th>
                </tr>
                @foreach($rvs as $rv)
                <tr>
                <td>{{$rv->username}}</td>
                    <td>{{$rv->event_start}}</td>
                    <td>{{$rv->event_end}}</td>
                    
                    <td>
                        <!--<a href="" class="btn btn-primary">Details</a>-->
                        
                        <form action="{{url('rv/'.$rv->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{url('rv/'.$rv->id.'/edit')}}"class="btn btn-secondary">Editer</a>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                        
                        
                    </td>
                
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</body>
</html>
