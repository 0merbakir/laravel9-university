@extends('layouts.adminbase')

@section('title', 'Menus')

@section('content')
<!--Main container start -->
<main class="ttr-wrapper ">
  <div class="container-fluid">
    <div class="db-breadcrumb">
      <h4 class="breadcrumb-title">Menus</h4>
      <ul class="db-breadcrumb-list">
      <li><a href="/admin"><i class="fa fa-home"></i>Admin</a></li>
        <li>Menus</li>
      </ul>
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Menu List</h3>
      </div>
      <div class="compose-mail" style="width: 100%;">
        <div class="widget-card widget-bg4" style="width: 90%;">
          <div class="wc-item">
            <a href="/admin/menus/create" class="ttr-material-button btn-primary" style="text-decoration: none;">
              <h4 class="wc-title" style="text-align: center;">
                Add Menu
              </h4>
            </a>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="container mt-5" style="width: 80%">
        <table id="example" class="table table-bordered table-responsive " style="width: 100%; ">
          <thead>
            <tr>
              <th scope="col"> #Id</th>
              <th scope="col">Main Menu</th>
              <th scope="col">Title</th>
              <th scope="col">Keywords</th>
              <th scope="col">Slider Image</th>
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
              <td>{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs, $rs->title)}}</td>
              <td>{{$rs->title}}</td>
              <td>{{$rs->keywords}}</td>
              <td>
                @if($rs->image)
                <img src="{{Storage::url($rs->image)}}" alt="" height="40">
                @endif
              </td>
              <td>{{$rs->status}}</td>
              <td><a type="button" href="/admin/menus/edit/{{$rs->id}}" class="btn-primary btn-sm" style="text-decoration: none;">Edit</a></td>
              <td><a type="button" href="/admin/menus/show/{{$rs->id}}" class="btn-success btn-sm" style="text-decoration: none;">Show</a></td>
              <td><a type="button" href="/admin/menus/delete/{{$rs->id}}" class="btn-danger btn-sm" style="text-decoration: none;">Delete</a></td>
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