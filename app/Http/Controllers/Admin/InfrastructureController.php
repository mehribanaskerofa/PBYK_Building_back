<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Infrastructure;
use App\Services\RepositoryService\InfrastructureService;

class InfrastructureController extends Controller
{

    public function __construct(protected InfrastructureService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.infrastructure.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.infrastructure.form');
    }
    public function store(InfrastructureRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.infrastructure.index');
    }
    public function edit(Infrastructure $infrastructure)
    {
        return view('admin.infrastructure.form',['model'=>$infrastructure]);
    }
    public function update(InfrastructureRequest $infrastructureRequest, Infrastructure $infrastructure)
    {
        $this->service->update($infrastructureRequest,$infrastructure);
        return redirect()->back();
    }
    public function destroy(Infrastructure $infrastructure)
    {
        $this->service->delete($infrastructure);
        return redirect()->back();
    }
}