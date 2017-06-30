@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Task
                    <a href="{{route('task.create')}}" class="btn btn-primary pull-right btn-xs">New Task</a>
                </div>

                <div class="panel-body">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @if($tasks)

                                @foreach($tasks as $no=>$task)
                                    <tr>
                                        <th>{{$no+1}}</th>
                                        <td>{{$task->user->name}}</td>
                                        <td>{{$task->name}}</td>
                                        <td>{{$task->description}}</td>
                                        <td>{{$task->created_at}}</td>
                                        <td>{{$task->updated_at}}</td>
                                        <td>
                                            <a href="#" type="button" class="btn btn-warning btn-xs">Edit</a>
                                        </td>
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
