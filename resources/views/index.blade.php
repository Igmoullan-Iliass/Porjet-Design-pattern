

@extends('responsable.responsable')
@section('content2')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="/css/siccurcalestyle.css">
<script type="text/javascript" src="/js/siccurcalejs.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .container{
        margin-left: 200px;
    }
</style>
</head>
<body>
    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2> <b>rendez vous</b></h2>
						</div>
						<div class="col-xs-6">
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							<th>username</th>
							<th>telephone</th>
							<th>email</th>
							<th>ville</th>
							<th>event_start</th>
							<th>event_end</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					
						
@foreach($rvs as $rv)
                <tr>
                <td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
                            
                    <td>{{$rv->username}}</td>
                    
                    <td>{{$rv->telephone}}</td>
                    <td>{{$rv->email}}</td>
                    <td>{{$rv->ville}}</td>
					<td>{{$rv->event_start}}</td>
					<td>{{$rv->event_end}}</td>
                
                    <td>
								
                                <form action="{{url('rv/'.$rv->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{url('rv/'.$rv->id.'/edit')}}"class="btn w-25"><i class="material-icons w-25" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <button type="submit" class="btn w-25"><i class="material-icons w-25" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                        </form>
                            </td>
                
                </tr>
                @endforeach
						
					</tbody>
				</table>
				
</body>
</html>
@endsection


