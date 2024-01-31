@extends('layout')

@section('title', 'Note {{$note->id}}')

@section('styles')
<style>
    .note-content {
        display: flex;
        flex-direction: column
    }
</style>
@endsection


@section('content')
    <form action='{{route('notes.destroy', ['note' => $note->id])}}' method="post" class="note-content">

        @csrf
        @method('DELETE')

        <x-note text="{{$note->body}}" id="{{$note->id}}" />

        <div>
            <div onclick="navigateBack()" class="button">Back</div>
            <div onclick="navigateToEdit({{$note->id}})" class="button">Edit</div>
            <button type="submit" class="button">Delete</button>
        </div>
    </form>
@endsection