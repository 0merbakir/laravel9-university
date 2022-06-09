@extends('layouts.adminwindow')

@section('title', 'User details: '.$data->name)

@section('content')
<!--Main container start -->
<main class="ttr-wrapper">
	<div class="row">
		<!-- Your Profile Views Chart -->
		<div class="col-lg-8 m-b30">
			<h5 style="text-align: center;">User: {{$data->name}}</h5>
			<div class="container mt-5" style="width: 80%">
				<table class="table table-striped table-responsive" style="width: 300%">
					<tr>
						<th style="width:100%"> #Id :</th>
						<td>{{$data->id}}</td>
					</tr>
					<tr>
						<th style="width:100%">Name:</th>
						<td>{{$data->name}}</td>
					</tr>
					<tr>
						<th style="width:100%">E-mail :</th>
						<td>{{$data->email}}</td>
					</tr>
					<tr>
						<th style="width:100%">Roles :</th>
						<td>
							@foreach($data->roles as $role)
							{{$role->name}}<a type="button" href="{{route('admin.users.destroyrole', ['uid'=>$data->id, 'rid'=>$role->id])}}" class="btn-danger btn-sm" style="text-decoration: none;">x</a>
							@endforeach
						</td>
					</tr>
					<tr>
						<th style="width:100%">Add role to {{$data->name}} :</th>
						<td>
							<form action="{{route('admin.users.addrole', ['id'=>$data->id])}}">
								@csrf
								<select name="role_id">
									@foreach($roles as $role)
									<option value="{{$role->id}}" class="select">{{$role->name}}</option>
									@endforeach
								</select>
								<button name="submit" type="submit" value="Submit" class="btn-primary btn-sm" style="text-decoration: none;">Add role</button>
							</form>
						</td>
					</tr>
					<tr>
						<th style="width:100%">Created Date :</th>
						<td>{{$data->created_at}}</td>
					</tr>
					<tr>
						<th style="width:100%">Updated Date :</th>
						<td>{{$data->updated_at}}</td>
					</tr>
					<tr>
						<th style="width:100%"></th>
						<td></td>
					</tr>

				</table>
			</div>
		</div>
		<!-- Your Profile Views Chart END-->
	</div>

</main>
<div class="ttr-overlay"></div>
@endsection