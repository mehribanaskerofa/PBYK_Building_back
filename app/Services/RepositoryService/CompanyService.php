<?php

namespace App\Services\RepositoryService;

use App\Models\Company;
use App\Repositories\CompanyRepository;
use Illuminate\Support\Facades\Cache;

class CompanyService
{
    public function __construct(protected CompanyRepository $repository)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(3);
    }

    public function store($request)
    {
        $data=$request->all();

        $model= $this->repository->save($data,new Company());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedCompany()
    {
        return Cache::rememberForever('company',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('company');
    }
}
