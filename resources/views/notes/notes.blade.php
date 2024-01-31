@extends('layout')

@section('title', 'Notes')

@section('styles')
<style>
    .notes-container {
        display: flex;
        flex-direction: column;
        width: 400px;
    }

    a {
        text-decoration: none;
        under
    }
</style>
@endsection

@section('content')

<div class="notes-container">
    <h2>Notes:</h2> 
    @foreach ($notes as $note)
            <x-note text="{{$note->body}}" id="{{$note->id}}" />
    @endforeach

    <div>
        <button onclick="navigateToCreate()" class="button" style="width: 100px">Create</button>
        <a href="/auth/logout"><button class="button" style="width: 100px">Logout</button></a>
    </div>
</div>


@endsection