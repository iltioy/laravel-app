@extends('layout')

@section('title', 'Notes')

@section('styles')
<style>
    .notes-container {
        display: flex;
        flex-direction: column;
        width: 400px;
    }
</style>
@endsection

@section('content')

<div class="notes-container">
    <h2>Notes:</h2> 
    @foreach ($notes as $note)
            <x-note text="{{$note->body}}" id="{{$note->id}}" />
    @endforeach

    <button onclick="navigateToCreate()" class="button" style="width: 100px">Create</button>
</div>


@endsection