@extends('layouts.app')

@section('content')

    <h1>{{$project->title}}</h1>
    <div>{{$project->description}}</div>
    <a href="/projects">Go back</a>
    @foreach($project->tasks as $task)
        <div class="card mb-3">{{ $task->body }}</div>
    @endforeach
@endsection