<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Services\RepositoryService\CompanyService;

class CompanyController extends Controller
{

    public function __construct(protected CompanyService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.company.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.company.form');
    }
    public function store(CompanyRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.company.index');
    }
    public function edit(Company $company)
    {
        return view('admin.company.form',['model'=>$company]);
    }
    public function update(CompanyRequest $companyRequest, Company $company)
    {
        $this->service->update($companyRequest,$company);
        return redirect()->back();
    }
    public function destroy(Company $company)
    {
        $this->service->delete($company);
        return redirect()->back();
    }

}
