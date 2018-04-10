<?php

namespace App\Http\Controllers\CustomerWeb;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $slugString
     * @return \Illuminate\Http\Response
     */
    public function show($slugString)
    {
        // $project = Project::findOrFail($id);
        $project = Project::findBySlugOrFail($slugString);
        return view('customer.webapp.sections.project')->with('project',$project);
    }

    public function store(Request $request)
    {
        
    }

    // public function projectsServices($service)
    // {
    //     $project = Project::findOrFail($id);
    //     return view('webapp.sections.project')->with('project',$project);
    // }

}
