<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::orderBy('id', 'desc')->where("user_id", Auth::id())->paginate(10);
        return response()->json($projects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $project = Project::create($request->all());
        $project = new Projects();
        $project->user_id = Auth::id(); 
        $project->title = $request->title;
        $project->description = $request->description;
        $project->price = $request->price;
        $project->client_id = $request->client_id;
        $project->is_done = $request->is_done;
        $project->due_when = $request->due_when;
        $project->save();

        return response()->json($project);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Projects::find($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->price = $request->price;
        $project->client_id = $request->client_id;
        $project->is_done = $request->is_done;
        $project->due_when = $request->due_when;

        $project->update($project);
        return response()->json($project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Projects::find($id);
        $project->delete();
        return response()->json(['message' => 'Project deleted successfully']);
        //
    }
}
