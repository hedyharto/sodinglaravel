@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Task
                    <a href="{{route('task.index')}}" class="btn btn-primary pull-right btn-xs">Back</a>
                </div>

                <div class="panel-body">
                    
                    {!! Form::model($task, ['method'=>'PATCH', 'action'=>['TaskController@update', $task->id]]) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name : ') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Description : ') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update Task', ['class'=>'btn btn-primary']) !!}
                        </div>

                    {!! Form::close() !!}

                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
