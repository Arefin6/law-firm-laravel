@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-default">
       <div class="panel-title text-center">
       		All Message
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
                    <th>
                        message
                    </th>
                </thead>

                <tbody>
                    @if($messages->count()>0)
                    @foreach($messages as $message)
                        <tr>
                            <td>
                            {{$message->name}}
                            </td>
                            <td>
                             {{$message->email}}
                            </td>
                            <td>
                                
                            {{$message->message}}        
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