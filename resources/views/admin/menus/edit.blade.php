@extends('layouts.adminbase')

@section('title', 'Edit Menus: '.$data->title)

@section('content')
<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Edit Menu: {{$data->title}}</h4>
			<ul class="db-breadcrumb-list">
			<li><a href="/admin"><i class="fa fa-home"></i>Admin</a></li>
				<li>Edit Menu</li>
			</ul>
		</div>
		<div class="row">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="widget-inner">
						<form class="edit-profile m-b30" role="form" action="/admin/menus/update/{{$data->id}}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="form-group col-6">
									<label class="col-form-label">Parent Menu</label>
									<select name="parent_id">
										<option value="0" selected="selected">Main Menu</option>
										@foreach($datalist as $rs)
										<option value="{{$rs->id}}" @if($rs->id == $data->parent_id) Selected="selected" @endif >
											{{ \App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs, $rs->title)}}
										</option>
										@endforeach
									</select>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">title</label>
									<div>
										<input class="form-control" type="text" value="{{$data->title}}" name="title" placeholder="Title">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Keywords</label>
									<div>
										<input class="form-control" type="text" value="{{$data->keywords}}" name="keywords" placeholder="Keywords">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label" for="status">Status</label>
									<select name="status" value="{{$data->status}}">
										<option value="true">true</option>
										<option value="true">false</option>
									</select>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Image</label>
									<div>
										<form action="upload.php" method="post" enctype="multipart/form-data">
											<label class="col-form-label">Selected Image File: {{$data->image}}</label>
											<input class="col-form-label" type="file" name="image" value="{{$data->image}}">
										</form>
									</div>
								</div>
								<div class="seperator"></div>
								<div class="form-group col-12">
									<label class="col-form-label">Description</label>
									<div>
										<textarea name="description" id="" cols="30" rows="10" class="form-control" value="{{$data->description}}" placeholder="{{$data->description}}">{{$data->description}}</textarea>
									</div>
								</div>
								<div class="col-12">
									<div class="col-12">
										<button type="submit" class="btn" style="background-color: #EFBB20;">Update</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>
	</div>
</main>
<div class="ttr-overlay"></div>
@endsection