<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $notes = $request->user()->notes()->orderBy('created_at', 'desc')->get();

        return view('notes.notes', [ 'notes' => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $body = $request->input('note');

        $note = new Note();
        $note->body = $body;
        $note->user()->associate(Auth::user());
        $note->save();

        return redirect('/notes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $note = Note::find($id);

        if(!$note) {
            return redirect()->back();
        }
        return view('notes.note', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note = Note::find($id);
        return view('notes.edit', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $note = Note::find($id);
        $body = $request->input('note');

        if($note && $note->user_id === Auth::id()) {
            $note->body = $body;
            $note->save();
        }

        return redirect()->route('notes.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note = Note::find($id);

        if($note->user_id === Auth::id()) {
            $note->delete();
        }

        return redirect()->route('notes.index');
    }
}
