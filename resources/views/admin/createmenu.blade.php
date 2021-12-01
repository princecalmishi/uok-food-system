@extends('layouts.app')


@section('content')

    <h2>Add Food Menu</h2>

    {!! Form::open(['action' => 'App\Http\Controllers\AdminController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
       
        <div class="form-group">
            {{Form::file('image')}}
        </div>


        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        
    {!! Form::close() !!}

@endsection

