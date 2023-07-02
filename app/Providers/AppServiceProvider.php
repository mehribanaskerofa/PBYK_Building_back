<?php

namespace App\Providers;

use App\Models\Page;
use App\Services\RepositoryService\BenefitService;
use App\Services\RepositoryService\GalleryService;
use App\Services\RepositoryService\GrandService;
use App\Services\RepositoryService\PageService;
use App\Services\RepositoryService\SettingService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }



    /**
     * Bootstrap any application services.
     */
    public function boot(
        PageService $pageService,
        GrandService $grandService,
        GalleryService $galleryService,
        BenefitService $benefitService,
        SettingService $settingService
    ): void
    {
        $pages=$pageService->CachedPages();
        $grands=$grandService->CachedGrands();
        $galleries=$galleryService->CachedGalleries();
        $benefits=$benefitService->CachedBenefits();
        $about=$pages->where('id',1)->first();
        $river=$pages->where('id',2)->first();
        $setting=$settingService->CachedSettings()->first();
        View::share([
            'about'=>$about,
            'river'=>$river,
            'grands'=>$grands,
            'galleries'=>$galleries,
            'benefits'=>$benefits,
            'setting'=>$setting,
        ]);
    }
}
