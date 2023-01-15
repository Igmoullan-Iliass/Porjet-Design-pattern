

@extends('admin.admin')
@section('content')
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
							<h2> <b>siccurcales</b></h2>
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
				<div class="clearfix">
					<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#">Previous</a></li>
						<li class="page-item active"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item "><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
					</ul>
				</div>
			</div>
		</div>        
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form>
					


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
								  <input type="submit" class="btn btn-danger" value="Modifier">
							  </form>
						</div>
		  
	
	
	
	
					</form>
				</div>
			</div>
		</div>
		<!-- Edit Modal HTML -->
		<div id="editEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form>
						<div class="modal-header">						
							<h4 class="modal-title">Modifier Technicien</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">					
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" required></textarea>
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" required>
							</div>					
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-info" value="Save">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Delete Modal HTML -->
		<div id="deleteEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form>
						<div class="modal-header">						
							<h4 class="modal-title">Supprimer un technicien</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">					
							<p>Are you sure you want to delete these Records?</p>
							<p class="text-warning"><small>This action cannot be undone.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-danger" value="Delete">
						</div>
					</form>
			</div>
		</div>
	</div>




</body>
</html>
@endsection


