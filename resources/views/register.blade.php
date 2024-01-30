@extends('layout')

@section('title', 'Register')

@section('content')

<form action="{{route('register')}}" method="post">

    @csrf

    <div class="inputItem">
        <label for="email">Email:</label>
        <div>
            <input type="email" id="email" name="email" value="{{old('email')}}">
        </div>

        <span class="error">@error('email') {{$message}} @enderror</span>
    </div>

    <div class="inputItem">
        <label for="name">Name:</label>
        <div>
            <input type="text" id="name" name="name" value="{{old('name')}}">
        </div>
        <span class="error">@error('name') {{$message}} @enderror</span>
    </div>

    <div class="inputItem">
        <label for="password">Password:</label>
        <div>
            <input type="password" id="password" name="password" value="{{old('password')}}">
        </div>
        <span class="error">@error('password') {{$message}} @enderror</span>
    </div>

    <button type="submit">Submit</button>
</form>

@endsection