@extends('layouts.adminbase')

@section('title', 'Contents')

@section('content')
<!--Main container start -->
<main class="ttr-wrapper">
  <div class="container-fluid">
    <div class="db-breadcrumb">
      <h4 class="breadcrumb-title">Contents</h4>
      <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
        <li>Contents</li>
      </ul>
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Content List</h3>
      </div>
      <div class="compose-mail" style="width: 100%;">
        <div class="widget-card widget-bg2" style="width: 90%;">
          <div class="wc-item">
            <a href="/admin/contents/create" class="ttr-material-button" style="text-decoration: none;">
              <h4 class="wc-title" style="text-align: center;">
                Add content
              </h4>
            </a>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="container mt-5" style="width: 85%">
        <table id="example" class="table table-bordered table-responsive" style="width: 100%">
          <thead>
            <tr>
              <th scope="col"> #Id</th>
              <th scope="col">Menu</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Image</th>
              <th scope="col">Image Gallery</th>
              <th scope="col">Status</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Show</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td>{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs->menu, $rs->menu->title)}}</td>
              <td>{{$rs->title}}</td>
              <td>{{$rs->description}}</td>
              <td>
                @if($rs->image)
                <img src="{{Storage::url($rs->image)}}" alt="" height="40">
                @endif
              </td>
              <td>
                <div class="r1">
                  <a href="{{route('admin.images.index', ['c_id'=>$rs->id])}}" onclick="return !window.open(this.href, ' ', top=50, left=100, width=1100, height=700) ">
                    <img src="{{asset('assets/admin')}}/images/icone-d-image-violet.png" style="height: 40px;" />
                  </a>
                </div>
              </td>
              <td>{{$rs->status}}</td>
              <td><a type="button" href="/admin/contents/edit/{{$rs->id}}" class="btn-primary btn-sm" style="text-decoration: none;">Edit</a></td>
              <td><a type="button" href="/admin/contents/show/{{$rs->id}}" class="btn-success btn-sm" style="text-decoration: none;">Show</a></td>
              <td><a type="button" href="/admin/contents/delete/{{$rs->id}}" class="btn-danger btn-sm" style="text-decoration: none;">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
<div class="ttr-overlay"></div>
@endsection