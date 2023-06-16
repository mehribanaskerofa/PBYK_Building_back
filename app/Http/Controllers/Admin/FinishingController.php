<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Finishing;
use App\Services\RepositoryService\FinishingService;

class FinishingController extends Controller
{

    public function __construct(protected FinishingService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.finishing.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.finishing.form');
    }
    public function store(FinishingRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.finishing.index');
    }
    public function edit(Finishing $finishing)
    {
        return view('admin.finishing.form',['model'=>$finishing]);
    }
    public function update(FinishingRequest $finishingRequest, Finishing $finishing)
    {
        $this->service->update($finishingRequest,$finishing);
        return redirect()->back();
    }
    public function destroy(Finishing $finishing)
    {
        $this->service->delete($finishing);
        return redirect()->back();
    }
}
