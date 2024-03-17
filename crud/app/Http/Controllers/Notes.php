<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
class Notes extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(){
        return view('note.create');
    }

    public function store(NoteRequest $request){
        /*//--- Validación incrustada ---
        $request->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'required|max:255|min:3',
        ]);
        */
        /*//--- Guardar sin abreviación ---
        $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
        */

        //--- Guardar abreviado ---
        Note::create($request->all());
        return redirect()->route('note.index')->with('success', 'Note created successfully.');
    }

    
    /*--- sin abreviación
    public function edit($note){
        $note = Note::find($note);
        return view('note.edit', compact('note'));
    }*/
    public function edit(Note $note){
        return view('note.edit', compact('note'));
    }

    public function update(NoteRequest $request, Note $note){
        /*--- sin abreviación
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();*/
        
        /*--- abreviado ---*/
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated successfully.');
    }

    public function show(Note $note){
        return view('note.show', compact('note'));
    }

    public function destroy(Note $note){
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note deleted successfully.');
    }
}