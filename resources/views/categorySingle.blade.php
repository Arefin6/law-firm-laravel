<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  
  <body>

    <div class="container row">
    @if($practice->count()>0)
   @foreach($practice->BlogPosts as $post)
     <div class="card col-md-4 mt-4 mb-3 ml-4" style="width: 18rem;">
      <img src="{{asset($post->img)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="{{route('post.single',['slug' => $post->slug])}}" class="card-title text-dark" style="text-decoration:none;" >{{$post->title}}</a>
        <p class="card-text">{{$post->description}}</p>
        
      </div>
    </div>
        
        </div>
      </div>
    </div>   
     </div>   
  
     @endforeach
			 @else
                    	<tr>
                    		<th colspan="5" class="text-center text-danger">Sorry not found</th>
                    	</tr>
                    	
       @endif	
    </body>
</html>   