<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Services\RepositoryService\ProjectService;

class ProjectController extends Controller
{

    public function __construct(protected ProjectService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.project.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.project.form');
    }
    public function store(ProjectRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.project.index');
    }
    public function edit(Project $project)
    {
        return view('admin.project.form',['model'=>$project]);
    }
    public function update(ProjectRequest $projectRequest, Project $project)
    {
        $this->service->update($projectRequest,$project);
        return redirect()->back();
    }
    public function destroy(Project $project)
    {
        $this->service->delete($project);
        return redirect()->back();
    }
}
