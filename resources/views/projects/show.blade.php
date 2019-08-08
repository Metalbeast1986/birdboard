@extends('layouts.app')

@section('content')

    <h1>{{$project->title}}</h1>
    <div>{{$project->description}}</div>
    <a href="/projects">Go back</a>
    @foreach($project->tasks as $task)
        <div class="card mb-3">
            <form action="{{ $task->path()}}" method="POST">
            @method('PATCH')
            @csrf
                <div class="flex">
                    <input type="text" name="body" value="{{ $task->body }}" class="w-full {{$task->completed ? 'text-grey' : ''}}">
                    <input type="checkbox" name="completed" onChange="this.form.submit()"{{$task->completed ? 'checked' : ''}}>
                </div>
            </form>
        </div>
    @endforeach
    <div class="card mb-3">
        <form action="{{ $project->path() . '/tasks' }}" method="POST">
            @csrf
            <input class="w-full" placeholder="Add a new task..." name="body"/>
        </form>
    </div>
@endsection