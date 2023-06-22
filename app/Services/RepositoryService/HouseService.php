<?php

namespace App\Services\RepositoryService;

use App\Models\House;
use App\Repositories\HouseRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class HouseService
{
    public function __construct(protected HouseRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate($projectId=0)
    {
        if ($projectId!=0){
            $salam= $this->repository->query()->where('project_id',$projectId)->paginate(3);

//                ->orderBy('sort_order','asc')->paginate(6);
        }
        return $this->repository->paginate(6,['translations']);
    }

    public function store($request)
    {
        $data=$request->all();

        $data['layout']=$this->fileUploadService
            ->uploadFile($request->layout,'house_layouts');

        $data['date']=$request->date ?? date('d-m-y');
        $data['active']=$data['active'] ?? false;


        $model= $this->repository->save($data,new House());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('layout')){
            $data['layout']=$this->fileUploadService
                ->replaceFile($request->layout,$model->layout,'house_layouts');
        }
        $data['active']=$data['active'] ?? false;
        $data['date']=$request->date ?? date('d-m-y');

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        $this->fileUploadService->removeFile($model->layout);
        return $this->repository->delete($model);
    }

    public function CachedHouses()
    {
        return Cache::rememberForever('houses',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('houses');
    }
}
