@extends('layouts.adminbase')

@section('title', 'Users')

@section('content')
<!--Main container start -->
<main class="ttr-wrapper ">
  <div class="container-fluid">
    <div class="db-breadcrumb">
      <h4 class="breadcrumb-title">Users</h4>
      <ul class="db-breadcrumb-list">
        <li><a href="/admin"><i class="fa fa-home"></i>Admin</a></li>
        <li>Users</li>
      </ul>
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">User List</h3>
      </div>
      <!-- /.card-header -->
      <div class="container mt-5" style="width: 80%">
        <table id="example" class="table table-bordered table-responsive " style="width: 100%; ">
          <thead>
            <tr>
              <th scope="col"> #Id</th>
              <th scope="col">Name</th>
              <th scope="col">E-mail</th>
              <th scope="col">Role</th>
              <th>show</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td>{{$rs->name}}</td>
              <td>{{$rs->email}}</td>
              <td>
                @foreach($rs->roles as $role)
                {{$role->name}}
                @endforeach
              </td>

              <td><a type="button" href="{{route('admin.users.show', ['id'=>$rs->id])}}" class="btn-success btn-sm" style="text-decoration: none;" onclick="return !window.open(this.href, ' ', top=50, left=100, width=1100, height=700) ">Show</td>

              <td><a type="button" href="/admin/users/delete/{{$rs->id}}" class="btn-danger btn-sm" style="text-decoration: none;">Delete</a></td>
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