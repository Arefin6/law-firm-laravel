@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-default">
       <div class="panel-title text-center">
       		Practice Area
       </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                       img
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </thead>

                <tbody>
                    @if($practices->count()>0)
                    @foreach($practices as $practice)
                        <tr>
                            <td>
                               <img src="{{ asset('/'. $practice->img) }}" alt="" width="90px">
                            </td>
                            <td>
                             {{$practice->name}}
                            </td>
                            <td>
                                
                                 
                              <a href="{{route('practice.edit',['id' => $practice->id])}}" class="btn btn-xs btn-info">Edit</a>      

                                
                            </td>
                            <td>
                                
                              <a href="{{route('practice.delete',['id' => $practice->id])}}" class="btn btn-xs btn-danger">Delete</a> 
                                    
                                
                            </td>
                        </tr>
                    @endforeach
                    @else
                    	<tr>
                    		<th colspan="5" class="text-center">No Practice Area Added Yet</th>
                    	</tr>
                    	
                    @endif	
                </tbody>
            </table>
        </div>
    </div>
@stop