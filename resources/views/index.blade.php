<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion RV</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
           <h1>Liste des RendezVous</h1>
            <table border=1>
                <tr>
                    
                    <th>Date</th>
                    <th>Time</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
                @foreach($rvs as $rv)
                <tr>
                    <td>{{$rv->date}}</td>
                    <td>{{$rv->time}}</td>
                    <td>{{$rv->username}}</td>
                    <td>
                        <a href="" class="btn btn-primary">Details</a>
                        <a href="" class="btn btn-default">Modifier</a>
                        <a href="" class="btn btn-danger">Supprimer</a>
                    </td>
                
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</body>
</html>
