@extends('layouts.app')

@section('content')
    <div class="flex items-center mb-3">
        <a href="/projects/create">New Project</a>
    </div>

    <div class="flex">
        @forelse($projects as $project)
            <div class="bg-white mr-4 rounded shadow w-1/3">
                <h3><a href="/projects/{{$project->id}}">{{$project->title}}</a></h3>
                
                <div>{{$project->description}}</div>
            </div>
        @empty 
            <div>No projects yet</div>    
        @endforelse     
    </div>
@endsection