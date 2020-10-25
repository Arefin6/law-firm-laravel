@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-default">
       <div class="panel-title text-center">
       		Atorny Profile
       </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                       img
                    </th>
                    <th>
                     Title
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </thead>

                <tbody>
                    @if($atornies->count()>0)
                    @foreach($atornies as $atorny)
                        <tr>
                            <td>
                               <img src="{{ asset('/'. $atorny->img) }}" alt="" width="70px">
                            </td>
                            <td>
                             {{$atorny->title}}
                            </td>
                            <td>
                                
                                 
                              <a href="{{route('atornies.edit',['id' => $atorny->id])}}" class="btn btn-xs btn-info">Edit</a>      

                                
                            </td>
                            <td>
                                
                              <a href="{{route('atornies.delete',['id' => $atorny->id])}}" class="btn btn-xs btn-danger">Delete</a> 
                                    
                                
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