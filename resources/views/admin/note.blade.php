@extends('admin.master')
@section('title')
Note
@endsection
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mb-0">Start a new note-taking</h1> <!-- Add mb-0 class here -->
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Take Notes</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{route('note_store')}}" method="post">
              @csrf
              <div class="card-body">             
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Enter ...">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  <textarea class="form-control" name="content" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              <!-- input states -->
            </form>
            <!-- /.card-body -->
          </div>
        </div> 
        <div class="col-md-7">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">User Table</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Created By</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($note as $result)
                  <tr>
                    <td>{{$result->id}}</td>
                    <td>{{$result->title}}</td>
                    <td style="white-space: pre-line;">{{$result->content}}</td>
                    <td>{{$result->created_at}}</td>
                    <td><span class="tag tag-success">Approved</span></td>
                    <td><a href="{{route('note_edit',['id'=>$result->id])}}">Edit</a>
                      <a href="{{route('note_delete',['id'=>$result->id])}}">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</main>
@endsection
