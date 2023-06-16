<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use App\Services\RepositoryService\BenefitService;

class BenefitController extends Controller
{

    public function __construct(protected BenefitService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.benefit.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.benefit.form');
    }
    public function store(BenefitRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.benefit.index');
    }
    public function edit(Benefit $benefit)
    {
        return view('admin.benefit.form',['model'=>$benefit]);
    }
    public function update(BenefitRequest $benefitRequest,Benefit  $benefit)
    {
        $this->service->update($benefitRequest,$benefit);
        return redirect()->back();
    }
    public function destroy(Benefit $benefit)
    {
        $this->service->delete($benefit);
        return redirect()->back();
    }
}
