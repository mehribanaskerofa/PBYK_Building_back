<?php

namespace App\Services\RepositoryService;

use App\Models\Infrastructure;
use App\Repositories\InfrastructureRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class InfrastructureService
{
    public function __construct(protected InfrastructureRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(10,['translations']);
    }

    public function store($request)
    {
        $data=$request->all();

        $data['image']=$this->fileUploadService->uploadFile($request->image,'infrastructure_images');
        $data['active']=$data['active'] ?? false;

        $model= $this->repository->save($data,new Infrastructure());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();

        if($request->has('image')){
            $data['image']=$this->fileUploadService
                ->replaceFile($request->image,$model->image,'infrastructure_images');
        }
        $data['active']=$data['active'] ?? false;

        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        $this->fileUploadService->removeFile($model->image);
        return $this->repository->delete($model);
    }

    public function CachedInfrastructures()
    {
        return Cache::rememberForever('infrastructures',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('infrastructures');
    }
}
