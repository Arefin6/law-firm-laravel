@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-default">
       <div class="panel-title text-center">
       		Admin Profile
       </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                       Name
                    </th>
                    <th>
                     Email
                    </th>
                
                </thead>

                <tbody>
                    @if($users->count()>0)
                    @foreach($users as $user)
                        <tr>
                            
                            <td>
                             {{$user->name}}
                            </td>
                            <td>
                                     
                            {{$user->email}}   

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