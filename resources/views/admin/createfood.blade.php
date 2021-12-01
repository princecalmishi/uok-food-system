@extends('layouts.app')


@section('content')

    <h2>Add Food Types</h2>

    {!! Form::open(['action' => 'App\Http\Controllers\AdminController@storefood', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>

        <!-- <div class="form-group">
            {{Form::label('menu', 'Menu')}}
            {{Form::text('menu', '', ['class' => 'form-control', 'placeholder' => 'Menu'])}}
        </div> -->


        <div class="form-group">
        {{Form::label('menu', 'Menu')}}

            <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="menu">
              @foreach($menu as $menu)
              <option value="{{ $menu->id }}">{{ $menu->Name }}</option>
              @endforeach
            </select>

            @if ($errors->has('dropdown'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('dropdown') }}</strong>
                </span>
            @endif
        </div>
            <br>

       
        <div class="form-group">
            {{Form::file('image')}}
        </div>


        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        
    {!! Form::close() !!}

@endsection

