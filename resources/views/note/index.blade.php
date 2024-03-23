@extends('layouts.app')

@section('content')
<a href="{{route('note.create')}}">Create new note</a>
<ul>
    @forelse ($notes as $note)
    <li><a href="#">{{ $note->title }}</a>| <a href="{{route('note.edit',['note' => $note->id])}}">EDIT</a> | <a href="">DELETE</a>   </li>

    @empty
          <p>No date</p>
    @endforelse
</ul>
@endsection
