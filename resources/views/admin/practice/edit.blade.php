@extends('admin.layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Practice Areas</h1>
          </div>      
        </div>
      </div><!-- /.container-fluid -->
      @include('admin.layouts.error')
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
             <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{ route('practice.update',['id'=>$practice->id]) }}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$practice->name}}">
                  </div>
             
                </div>
                 
                  <div class="form-group">
                    <label for="img">Image</label>
                    <input type="file" name="img" class="form-control" value="{{$practice->img}}">
                </div>
                 <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="5" rows="5" class="form-control" >{{$practice->description}}</textarea>
                    
                </div>
             
                <div class="card-footer">
                  <button type="submit" class="btn btn-success form-control" >Submit</button>
                </div>
              </form>
           
            </div>
          </div>
        </div>
        <!-- /.col-
      <!-- ./row -->
    </section>

@endsection