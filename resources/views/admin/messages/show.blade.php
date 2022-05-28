@extends('layouts.adminwindow')

@section('title', 'Show Messages: '.$data->name)

@section('content')
<!--Main container start -->
<main class="ttr-wrapper">
	<div class="row">
		<!-- Your Profile Views Chart -->
		<div class="col-lg-8 m-b30">
				<h5 style="text-align: center;">Message From: {{$data->name}}</h5>
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
						<th style="width:100%">Phone :</th>
						<td>{{$data->phone}}</td>
					</tr>
					<tr>
						<th style="width:100%">E-mail :</th>
						<td>{{$data->email}}</td>
					</tr>
					<tr>
						<th style="width:100%">Subject :</th>
						<td>{{$data->subject}}
						</td>
					</tr>
					<tr>
						<th style="width:100%">Message :</th>
						<td>{{$data->message}}</td>
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
						<th style="width:100%">Admin Note :</th>
						<td>
							<form action="{{route('admin.messages.update', ['id'=>$data->id])}}">
								@csrf
							<textarea name="note" id="note" cols="50" rows="5"> {{$data->note}}</textarea>
							<button name="submit" type="submit" value="Submit"class="btn-primary btn-sm" style="text-decoration: none;">Update Note</button>
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
						<td><a type="button" href="{{route('admin.messages.delete', ['id'=>$data->id])}}" class="btn-danger btn-sm" style="text-decoration: none;">Delete</a></td>
					</tr>

				</table>
			</div>
		</div>
		<!-- Your Profile Views Chart END-->
	</div>

</main>
<div class="ttr-overlay"></div>
@endsection