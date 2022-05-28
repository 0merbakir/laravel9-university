@extends('layouts.adminbase')

@section('title', 'FAQ')

@section('content')
<!--Main container start -->
<main class="ttr-wrapper">
  <div class="container-fluid">
    <div class="db-breadcrumb">
      <h4 class="breadcrumb-title">Faq</h4>
      <ul class="db-breadcrumb-list">
      <li><a href="/admin"><i class="fa fa-home"></i>Admin</a></li>
        <li>Faq</li>
      </ul>
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">FAQ List</h3>
      </div>
      <div class="compose-mail" style="width: 100%;">
        <div class="widget-card widget-bg2" style="width: 90%;">
          <div class="wc-item">
            <a href="/admin/faq/create" class="ttr-material-button" style="text-decoration: none;">
              <h4 class="wc-title" style="text-align: center;">
                Add FAQ
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
              <th scope="col">Question</th>
              <th scope="col">Answer</th>
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
              <td>{{$rs->question}}</td>
              <td>{!! $rs->answer !!}</td>
              <td>{{$rs->status}}</td>
              <td><a type="button" href="/admin/faq/edit/{{$rs->id}}" class="btn-primary btn-sm" style="text-decoration: none;">Edit</a></td>
              <td><a type="button" href="/admin/faq/show/{{$rs->id}}" class="btn-success btn-sm" style="text-decoration: none;">Show</a></td>
              <td><a type="button" href="/admin/faq/delete/{{$rs->id}}" class="btn-danger btn-sm" style="text-decoration: none;">Delete</a></td>
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