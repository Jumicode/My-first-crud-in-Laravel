<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
class NoteController extends Controller
{

public function index()
{
$notes = Note::all();
return view('note.index', compact('notes'));
}

public function create()
{
    return view('note.create');
}

public function store(NoteRequest $request)
{
Note::create($request->all());
return redirect()->route('note.index')->with('success','Note create');
}

public function edit(Note $note)
{
 return view('note.edit',compact('note'));

}

public function update(NoteRequest $request, Note $note)
{
$note->update($request->all());
return redirect()->route('note.index')->with('success','Note Update');
}

public function show(Note $note)
{
    return view('note.show',compact('note'));
}

public function destroy (Note $note)
{
    $note->delete();
    return redirect()->route('note.index')->with('danger','Note delete');
}
}
