@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tasks</div>

                <div class="panel-body">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if($tasks)

                                @foreach($tasks as $task)
                                    <tr>
                                        <td>{{$task->user_id}}</td>
                                        <td>{{$task->name}}</td>
                                        <td>{{$task->description}}</td>
                                        <td>{{$task->created_at}}</td>
                                        <td>{{$task->updated_at}}</td>
                                    </tr>
                                @endforeach

                            @endif
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
