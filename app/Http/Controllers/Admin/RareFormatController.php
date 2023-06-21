<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RareFormatRequest;
use App\Models\RareFormat;
use App\Services\RepositoryService\RareFormatService;

class RareFormatController extends Controller
{

    public function __construct(protected RareFormatService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.rare.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.rare.form');
    }
    public function store(RareFormatRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.rare.index');
    }
    public function edit(RareFormat $rareFormat)
    {
        return view('admin.rare.form',['model'=>$rareFormat]);
    }
    public function update(RareFormatRequest $rareFormatRequest,RareFormat  $rareFormat)
    {
        $this->service->update($rareFormatRequest,$rareFormat);
        return redirect()->back();
    }
    public function destroy(RareFormat $rareFormat)
    {
        $this->service->delete($rareFormat);
        return redirect()->back();
    }
}
