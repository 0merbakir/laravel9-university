@extends('layouts.adminwindow')

@section('title', 'Content Image Gallery')

@section('content')
<div>
  <div class="card">
    <div class="widget-box">
      <div class="card-header">
        <h2 style="text-align: center;"> Content: <i>{{$content->title}}</i></h2>
      </div>
      <div class="widget-inner">
        <form class="edit-profile m-b30" role="form" action="{{route('admin.images.store', ['c_id'=>$content->id])}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row" style="border-style:border border-info;">
              <div class="form-group col-6" >
                <label class="col-form-label">title</label>
                  <input class="form-control" type="text" name="title" placeholder="Title">
                </div>
              <div class="form-group col-6" >
                <div>
                  <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label class="col-form-label">Select Image File: </label>
                    <input class="col-form-label" type="file" name="image"><button type="submit" class="btn" style="background-color: #EFBB20;">Save</button>
                  </form>
                </div>
              </div>
        </form>
      </div>
    </div>
  </div>
  <!--Main container start -->

  <div class="card">
    <div class="card-header">
      <h3 class="card-title" style="text-align: center;">Content Image Galley</h3>
    </div>
    <!-- /.card-header -->
    <div class="container mt-5" style="width: 40%" >
      <table id="example" class="table table-bordered table-responsive" style="width: 100%">
        <thead>
          <tr>
            <th scope="col"> #Id</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($image as $rs)
          <tr>
            <td>{{$rs->id}}</td>
            <td>{{$rs->title}}</td>
            <td>
              @if($rs->image)
              <img src="{{Storage::url($rs->image)}}" alt="" height="40">
              @endif
            </td>
            <td><a type="button" href="/admin/images/delete/{{$content->id}}/{{$rs->id}}" class="btn-danger btn-sm" style="text-decoration: none;">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="ttr-overlay"></div>
  @endsection