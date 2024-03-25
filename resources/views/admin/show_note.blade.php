@extends('admin.master')
@section('title')
User
@endsection
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Start a new note-taking</h1>
        
        
      </div>
<div class="row">
 <div class="col-md-6">

        
        </div> 
    </div> 
    </div>
      <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Notes</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

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
              <form action="{{route('show_note')}}" method="post" >
                    @csrf
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
                      <td>{{$result->content}}</td>
                      <td>{{$result->created_at}}</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>{{$result->created_by}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                 </table>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
     </div>

     
      
</div>   
   </main>    
</div>
   @endsection