@extends('layouts.adminwindow')

@section('title', 'Show Commentss: '.$data->name)

@section('content')
<!--Main container start -->
<main class="ttr-wrapper">
	<div class="row">
		<!-- Your Profile Views Chart -->
		<div class="col-lg-8 m-b30">
				<h5 style="text-align: center;">Comments From: {{$data->name}}</h5>
			<div class="container mt-5" style="width: 80%">
				<table class="table table-striped table-responsive" style="width: 300%">
					<tr>
						<th style="width:100%"> #Id :</th>
						<td>{{$data->id}}</td>
					</tr>
					<tr>
						<th style="width:100%">Name:</th>
						<td>{{$data->user->name}}</td>
					</tr>
					<tr>
						<th style="width:100%">Comment :</th>
						<td>{{$data->comment}}</td>
					</tr>
					<tr>
						<th style="width:100%">IP Number :</th>
						<td>{{$data->ip}}</td>
					</tr>
					<tr>
						<th style="width:100%">Status :</th>
						<td>{{$data->status}}</td>
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
						<td><a type="button" href="{{route('admin.comments.delete', ['id'=>$data->id])}}" class="btn-danger btn-sm" style="text-decoration: none;">Delete</a></td>
					</tr>

				</table>
			</div>
		</div>
		<!-- Your Profile Views Chart END-->
	</div>

</main>
<div class="ttr-overlay"></div>
@endsection