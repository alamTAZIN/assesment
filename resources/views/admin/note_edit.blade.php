@extends('admin.master')
@section('title')
Note
@endsection
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Start a new note-taking</h1>
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
 <div class="col-md-6">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Your Notes</h3>
              </div>
              <!-- /.card-header -->
            <form action="{{route('note_edit_update')}}" method="post">
                @csrf
                <input type="hidden" name="note_id" value="{{$note->id}}">
                <div class="card-body">             
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter ..." value="{{$note->title}}">
                      </div>
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="content" rows="3" placeholder="Enter ...">{{$note->content}}</textarea>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                </div>  
            </form>
        </div>
      </div> 
</div>   
</main>    
@endsection
