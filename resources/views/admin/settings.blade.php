@extends('layouts.adminbase')

@section('title', 'Settings')
@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>


@endsection

@section('content')
<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Settings</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="/admin"><i class="fa fa-home"></i>Admin</a></li>
				<li>Settings</li>
			</ul>
		</div>
		<form class="edit-profile m-b30" role="form" action="/admin/setting/update" method="post" enctype="multipart/form-data">
			@csrf
			<div class="container">
				<div class="feature-filters clearfix center m-b40">
					<ul class="filters" data-toggle="buttons">
						<li data-filter="" class="btn active">
							<input type="radio">
							<a href="#" style="text-decoration: none;"><span>All</span></a>
						</li>
						<li data-filter="general" class="btn">
							<input type="radio">
							<a href="#" style="text-decoration: none;"><span>General</span></a>
						</li>
						<li data-filter="smtp" class="btn">
							<input type="radio">
							<a href="#" style="text-decoration: none;"><span>Smtp E-mail</span></a>
						</li>
						<li data-filter="social" class="btn">
							<input type="radio">
							<a href="#" style="text-decoration: none;"><span>Social Media</span></a>
						</li>
						<li data-filter="aboutus" class="btn">
							<input type="radio">
							<a href="#" style="text-decoration: none;"><span>About Us</span></a>
						</li>
						<li data-filter="contact" class="btn">
							<input type="radio">
							<a href="#" style="text-decoration: none;"><span>Contact Page</span></a>
						</li>
					</ul>
				</div>
				<div class="clearfix">
					<ul id="masonry" class="ttr-gallery-listing magnific-image row">
						<li class="action-card general">
							<h4 style="text-align: center;">General</h4>
							<div class="row">
								<div class="form-group col-6">
									<label class="col-form-label">Title</label>
									<div>
										<input class="form-control" type="string" name="title" value="{{$data->title}}">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Keywords</label>
									<div>
										<input class="form-control" type="text" name="keywords" value="{{$data->keywords}}" placeholder="keywords">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Decription</label>
									<div>
										<input class="form-control" type="text" name="description" value="{{$data->description}}" placeholder="description">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Company</label>
									<div>
										<input class="form-control" type="text" name="company" value="{{$data->company}}" placeholder="Company">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Address</label>
									<div>
										<input class="form-control" type="text" name="address" value="{{$data->address}}" placeholder="Address">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Phone</label>
									<div>
										<input class="form-control" type="text" name="phone" value="{{$data->phone}}" placeholder="Phone">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Fax</label>
									<div>
										<input class="form-control" type="text" name="fax" value="{{$data->fax}}" placeholder="Fax">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">E-mail</label>
									<div>
										<input class="form-control" type="text" name="email" value="{{$data->email}}" placeholder="E-mail">
									</div>
								</div>
							</div>
							<div class="form-group col-6">
								<label class="col-form-label" for="status" placeholder="status">Status</label>
								<select name="status">
									<option value="{{$data->status}}" selected="selected">Choosen: {{$data->status}}</option>
									<option value="true">true</option>
									<option value="true">false</option>
								</select>
							</div>
							<div class="form-group col-6">
								<label class="col-form-label">Icon</label>
								<div>
									<form action="upload.php" method="post" enctype="multipart/form-data">
										<label class="col-form-label">Selected Icon File: {{$data->icon}}</label>
										<input class="col-form-label" type="file" name="icon" value="{{$data->icon}}">
									</form>
								</div>
							</div>
						</li>
						<li class="action-card   smtp">
							<h4 style="text-align: center;">Smtp E-mail</h4>
							<div class="row">
								<div class="form-group col-6">
									<label class="col-form-label">Smtp Server</label>
									<div>
										<input class="form-control" type="text" name="smtpserver" value="{{$data->smtpserver}}" placeholder="Smtp Server">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Smtp E-mail</label>
									<div>
										<input class="form-control" type="text" name="smtpemail" value="{{$data->smtpemail}}" placeholder="Smtp E-mail">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Smtp Password</label>
									<div>
										<input class="form-control" type="password" name="smtppassword" value="{{$data->smtppassword}}">
									</div>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label">Smtp Port</label>
									<div>
										<input class="form-control" type="text" name="smtpport" value="{{$data->smtpport}}" placeholder="Smtp Port">
									</div>
								</div>
						</li>
						<li class="action-card  social">
							<h4 style="text-align: center;">Social Accounts</h4>
							<div class="form-group col-6">
								<label class="col-form-label">Facebook</label>
								<div>
									<input class="form-control" type="text" name="facebook" value="{{$data->facebook}}" placeholder="facebook">
								</div>
							</div>
							<div class="form-group col-6">
								<label class="col-form-label">Instagram</label>
								<div>
									<input class="form-control" type="text" name="instagram" value="{{$data->instagram}}" placeholder="instagram">
								</div>
							</div>
							<div class="form-group col-6">
								<label class="col-form-label">Twitter</label>
								<div>
									<input class="form-control" type="text" name="twitter" value="{{$data->twitter}}" placeholder="twitter">
								</div>
							</div>
							<div class="form-group col-6">
								<label class="col-form-label">Linkedin</label>
								<div>
									<input class="form-control" type="text" name="linkedin" value="{{$data->linkedin}}" placeholder="linkedin">
								</div>
							</div>
						</li>
						<li class="action-card  aboutus">
							<h4 style="text-align: center;">About Us</h4>
							<div class="form-group col-12">
								<label class="col-form-label">About us</label>
								<div>
									<textarea name="aboutus" id="aboutus" cols="30" rows="10" class="form-control" value="">{!! $data->aboutus !!}</textarea>
									<script>
										ClassicEditor
											.create(document.querySelector('#aboutus'))
											.then(editor => {
												console.log(editor);
											})
											.catch(error => {
												console.error(error);
											});
									</script>
								</div>
							</div>
						</li>
						<li class="action-card  contact">
							<h4 style="text-align: center;">Contact Page</h4>
							<div class="form-group col-12">
								<label class="col-form-label">Contact Page</label>
								<div>
									<textarea name="contact" id="contact" cols="30" rows="10" class="form-control" value="">{!! $data->contact !!}</textarea>
									<script>
										ClassicEditor
											.create(document.querySelector('#contact'))
											.then(editor => {
												console.log(editor);
											})
											.catch(error => {
												console.error(error);
											});
									</script>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="m-b30">
					<div class="update" style="text-align:center;">
						<div class="col-12">
							<button type="submit" class="btn" style="background-color: #EFBB20;">Update Settings</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</main>
@endsection