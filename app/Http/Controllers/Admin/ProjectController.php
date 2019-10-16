<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Project;
use DB;

use App\User;
use App\Role;


class ProjectController extends Controller
{
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
    */
    
    public function create()
    {
       return view('admin.project.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        $data = $this->validate($request, [
                'project-name'=>'required',
                'project-client'=> 'required',
                'project-startdate'=> 'required'
                ]);
       
        $project->saveProject($data);
        return redirect('/projects')->with('success', 'New Project has been created!');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function allProjects()
    {
        $projects = DB::table('projects')->paginate(10);
         
        return view('admin.project.projects',compact('projects'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::where('id', $id)
                        ->first();

        return view('admin.project.edit', compact('project', 'id'));
    }
    
   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function update(Request $request, $id)
    {
       
        $projects = Project::find($id);
        $projects->project_name = $request->get('project-name');
        $projects->client_name = $request->get('project-client');  
        $projects->start_date = $request->get('project-startdate');
        $projects->save();
        return redirect('/projects')->with('success', 'New Project has been updated!!');

        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect('/projects')->with('success', 'Project has been deleted!!');
    }
    
}
