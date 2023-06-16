<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Services\RepositoryService\TeamService;

class TeamController extends Controller
{

    public function __construct(protected TeamService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.team.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.team.form');
    }
    public function store(TeamRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.team.index');
    }
    public function edit(Team $team)
    {
        return view('admin.team.form',['model'=>$team]);
    }
    public function update(TeamRequest $teamRequest, Team $team)
    {
        $this->service->update($teamRequest,$team);
        return redirect()->back();
    }
    public function destroy(Team $team)
    {
        $this->service->delete($team);
        return redirect()->back();
    }
}