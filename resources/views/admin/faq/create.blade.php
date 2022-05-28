@extends('layouts.adminbase')

@section('title', 'Create faq')

@section('content')
@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Add FAQ </h4>
			<ul class="db-breadcrumb-list">
				<li><a href="/admin"><i class="fa fa-home"></i>Admin</a></li>
				<li>Add FAQ</li>
			</ul>
		</div>
		<div class="row">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="widget-inner">
						<form class="edit-profile m-b30" role="form" action="/admin/faq/store" method="post" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="form-group col-6">
									<label class="col-form-label">Question</label>
									<div>
										<input class="form-control" type="text" name="question" placeholder="Question">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Answer</label>
									<div>
										<textarea name="answer" class="form-control" id ="answer" value="" placeholder="Answer"></textarea>
									</div>
									<script>
										ClassicEditor
											.create(document.querySelector('#answer'))
											.then(editor => {
												console.log(editor);
											})
											.catch(error => {
												console.error(error);
											});
									</script>
								</div>
								<div class="form-group col-6">
									<label class="col-form-label" for="status" placeholder="status">Status</label>
									<select name="status">
										<option value="" disabled selected hidden>status</option>
										<option value="true">true</option>
										<option value="true">false</option>
									</select>
								</div>
								<div class="seperator"></div>
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