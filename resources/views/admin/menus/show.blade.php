@extends('layouts.adminbase')

@section('title', 'Show Menus: '.$data->title)

@section('content')
<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Show Menu</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<!-- Your Profile Views Chart -->
		<div class="col-lg-8 m-b30">
			<div class="widget-box" style="width: 100%">
				<table class="table table-striped table-responsive" style="width: 100%">
					<tr>
						<th style="width:40%">#Id :</th>
						<td>{{$data->id}}</td>
					</tr>
					<tr>
						<th style="width:40%">Title :</th>
						<td>{{$data->title}}</td>
					</tr>
					<tr>
						<th style="width:40%">Keywords :</th>
						<td>{{$data->keywords}}</td>
					</tr>
					<tr>
						<th style="width:40%">Description :</th>
						<td>{{$data->description}}</td>
					</tr>
					<tr>
						<th style="width:40%">Image :</th>
						<td>{{$data->image}}
							<!--image name-->
						</td>
					</tr>
					<tr>
						<th style="width:40%">Status :</th>
						<td>{{$data->status}}</td>
					</tr>
					<tr>
						<th style="width:40%">Created Date :</th>
						<td>{{$data->created_at}}</td>
					</tr>
					<tr>
						<th style="width:40%">Updated Date :</th>
						<td>{{$data->updated_at}}</td>
					</tr>
				</table>
				<div class="noti-box-list" style="margin-left: 500px;">
				<a type="button" href="/admin/menus/edit/{{$data->id}}" class="btn-primary btn-sm" style="text-decoration: none;">Edit</a>
              <a type="button" href="/admin/menus/show/{{$data->id}}" class="btn-success btn-sm" style="text-decoration: none;">Show</a>             
			   <a type="button" href="/admin/menus/delete/{{$data->id}}" class="btn-danger btn-sm" style="text-decoration: none;">Delete</a></td>
					</div>
			</div>
		</div>
		<!-- Your Profile Views Chart END-->
		<div class="col-lg-4 m-b30">
			<div class="widget-box" style="width: 100% ">
				<div class="wc-title">
					<h4>image</h4>
				</div>
				<div class="widget-inner">
					<div class="noti-box-list">
						<img src="{{Storage::url($data->image)}}" alt="{{$data->image}}" width="300" height="400" />
					</div>
				</div>
			</div>
		</div>
	</div>

</main>
<div class="ttr-overlay"></div>
@endsection