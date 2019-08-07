@extends('layouts.app')

@section('content')

    <h1>{{$project->title}}</h1>
    <div>{{$project->description}}</div>
    <a href="/projects">Go back</a>
    @foreach($project->tasks as $task)
        <div class="card mb-3">{{ $task->body }}</div>
    @endforeach
    <div class="card mb-3">
        <form action="{{ $project->path() . '/tasks' }}" method="POST">
            @csrf
            <input class="w-full" placeholder="Add a new task..." name="body"/>
        </form>
    </div>
@endsection