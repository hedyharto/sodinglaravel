@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Task
                    <a href="{{route('task.index')}}" class="btn btn-primary pull-right btn-xs">Back</a>
                </div>

                <div class="panel-body">
                    
                    {!! Form::open(['method'=>'POST', 'action'=>'TaskController@store']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name : ') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Description : ') !!}
                            {!! Form::text('description', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Create Task', ['class'=>'btn btn-primary']) !!}
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
