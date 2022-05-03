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
      <!-- /.card-header -->
      <div class="container mt-5" style="width: 75%">
        <table id="example" class="table table-bordered table-responsive" style="width: 100%">
          <thead>
            <tr>
              <th scope="col"> #Id</th>
              <th scope="col" >Menu</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Image</th>
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
              <td>{{$rs->description}}</td>
              <td>
                @if($rs->image)
                  <img src="{{Storage::url($rs->image)}}" alt="" height="40">
                  @endif
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
</main>
<div class="ttr-overlay"></div>
@endsection