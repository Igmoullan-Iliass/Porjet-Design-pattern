

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
							<h2> <b>Succurcales</b></h2>
						</div>
						<div class="pull-right">
            <a href="{{url('/succ/create')}}" class="btn btn-primary">Nouveau Succurcale</a>
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
							<th>nom</th>
                    <th>region</th>
                    <th>ville</th>
                    
                    <th>Action</th>
						</tr>
					</thead>
					<tbody>
					
						
                    @foreach($succs as $succ)
                <tr>
                <td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
                            
                            <td>{{$succ->nom}}</td>
                    <td>{{$succ->region}}</td>
                    <td>{{$succ->ville}}</td>
                
                    <td>
								
                                <form action="{{url('succ/'.$succ->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{url('succ/'.$succ->id.'/editsucc')}}"class="btn w-25"><i class="material-icons w-25" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <button type="submit" class="btn w-25"><i class="material-icons w-25" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                        </form>
                            </td>
                
                </tr>
                @endforeach
						
					</tbody>
				</table>
				
			</div>
		</div>        
    </div>
	<!-- Edit Modal HTML -->
	

</body>
</html>
@endsection


