<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

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


public function store(Request $request)
{

Note::create($request->all());
return redirect()->route('note.index');
}




}
