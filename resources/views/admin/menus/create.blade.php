@extends('layouts.adminbase')

@section('title', 'Create Menus')

@section('content')
<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Add Menu</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Add Menu</li>
			</ul>
		</div>
		<div class="row">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="widget-inner">
						<form class="edit-profile m-b30" role="form" action="/admin/menus/store" method="post" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="form-group col-6">
									<label class="col-form-label">Parent Menu</label>
									<select name="parent_id" id="">
										<option value="0" selected="selected">Main Menu</option>
										@foreach($data as $rs)
										 <option value="{{$rs->id}}">{{ \App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs, $rs->title)}}</option>
										@endforeach
									</select>
								</div>
							<div class="form-group col-6">
								<label class="col-form-label">title</label>
								<div>
									<input class="form-control" type="text" name="title" placeholder="Title">
								</div>
							</div>
							<div class="form-group col-6">
								<label class="col-form-label">Keywords</label>
								<div>
									<input class="form-control" type="text" name="keywords" placeholder="Keywords">
								</div>
							</div>
							<div class="form-group col-6">
								<label class="col-form-label" for="status" placeholder="status">Status</label>
								<select name="status">
									<option value="" disabled selected hidden>status</option>
									<option value="true">true</option>
									<option value="true">false</option>
								</select>
							</div>
							<div class="form-group col-6">
								<label class="col-form-label">Image</label>
								<div>
									<form action="upload.php" method="post" enctype="multipart/form-data">
										<label class="col-form-label">Select Image File</label>
										<input class="col-form-label" type="file" name="image">
									</form>
								</div>
							</div>
							<div class="seperator"></div>
							<div class="form-group col-12">
								<label class="col-form-label">Description</label>
								<div>
									<textarea name="description" id="" cols="30" rows="10" class="form-control" value="" placeholder="description"></textarea>
								</div>
							</div>
							<div class="col-12">
								<div class="col-12">
									<button type="submit" class="btn" style="background-color: #EFBB20;">Save</button>
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