@extends('layout')

@section('title', 'Create Note')

@section('styles')

    <style>
        textarea {
            outline: none;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            height: 200px;
        }

        .note-form {
            width: 300px;
        }
    </style>

@endsection

@section('content')

<form action="{{route('notes.update', ['note' => $note->id])}}" method="post" class="note-form">

    @csrf
    @method('PATCH')

    <div class="inputItem">
        <label for="note">Note:</label>
        <textarea type="text" id="note" name="note">{{$note->body}}</textarea>
        <span class="error">@error('email') {{$message}} @enderror</span>
    </div>

    <button type="submit" class="button">Save</button>
</form>

@endsection