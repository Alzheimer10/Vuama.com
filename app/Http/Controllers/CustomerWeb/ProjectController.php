<?php

namespace App\Http\Controllers\CustomerWeb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('customer.webapp.sections.project')->with('project',$project);
    }

    // public function projectsServices($service)
    // {
    //     $project = Project::findOrFail($id);
    //     return view('webapp.sections.project')->with('project',$project);
    // }

}
