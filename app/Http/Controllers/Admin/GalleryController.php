<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Services\RepositoryService\GalleryService;

class GalleryController extends Controller
{

    public function __construct(protected GalleryService $service)
    {

    }
    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.gallery.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.gallery.form');
    }
    public function store(GalleryRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.gallery.index');
    }
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.form',['model'=>$gallery]);
    }
    public function update(GalleryRequest $galleryRequest, Gallery $gallery)
    {
        $this->service->update($galleryRequest,$gallery);
        return redirect()->back();
    }
    public function destroy(Gallery $gallery)
    {
        $this->service->delete($gallery);
        return redirect()->back();
    }
}
