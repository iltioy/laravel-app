@extends('layout')

@section('title', 'Login')

@section('content')

<form action="{{route('login')}}" method="post">

    @csrf
    
    <div class="inputItem">
        <label for="email">Email:</label>
        <div>
            <input type="email" id="email" name="email" value="{{old('email')}}">
        </div>
        <span class="error">@error('email') {{$message}} @enderror</span>
    </div>

    <div class="inputItem">
        <label for="password">Password:</label>
        <div>
            <input type="password" id="password" name="password" value="{{old('password')}}">
        </div>
        <span class="error">@error('password') {{$message}} @enderror</span>
    </div>


    @if($errors->has('login_failed'))
        <span class="error"> {{$errors->first('login_failed')}} </span>
        <br />
        <br />
    @endif


    <button type="submit">Submit</button>

</form>

@endsection