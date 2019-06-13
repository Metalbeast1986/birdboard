<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectsController extends Controller
{
    public function index(){

        $projects=Project::all();
        return view('projects.index', compact('projects'));

    }
<<<<<<< Updated upstream
    public function store(){

        $attributes=request()->validate(['title'=>'required', 'description'=>'required']);
        Project::create($attributes);
=======
        
    public function show(Project $project)
    {
    //    $project=Project::findOrFail(request('project'));
        return view('projects.show', compact('project'));

    } 
    public function store()
    {
        $attributes=request()->validate([
            'title'=>'required',
            'description'=>'required'
         
        ]);

       // $attributes['owner_id'] = auth()->id();

        auth()->user()->projects()->create($attributes);
  
>>>>>>> Stashed changes
        return redirect('/projects');

    }
}
