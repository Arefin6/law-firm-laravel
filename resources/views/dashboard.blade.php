@extends('admin.layouts.master')

@section('content')

 <div class="row mt-5">
        
 <div class="col-md-3">
    <div class="card bg-info ">
        <div class="card-heading text-center">
        	
        	Published Post
        	
        </div>

            <div class="card-body">
               
               <h1 class="text-center">{{$posts_count}}</h1>
               
            </div>
    </div>
    
    </div>
    
    
    <div class="col-md-3">
    <div class="card bg-danger ">
        <div class="card-heading text-center">
        	
        	Atornies
        	
        </div>

            <div class="card-body">
               
               <h1 class="text-center">{{$atornies_count}}</h1>
               
            </div>
    </div>
    
    </div>
    
    
    <div class="col-md-3">
    <div class="card bg-success ">
        <div class="card-heading text-center">
        	
        	Practice Areas
        	
        </div>

            <div class="card-body">
               
               <h1 class="text-center">{{$practices_count}}</h1>
               
            </div>
    </div>
    
    </div>
    
    
    <div class="col-md-3">
    <div class="card bg-info ">
        <div class="card-heading text-center">
        	
        	Message
        	
        </div>

            <div class="card-body">
               
               <h1 class="text-center">{{$message_count}}</h1>
               
            </div>
    </div>
    
    </div>
 </div>

@stop