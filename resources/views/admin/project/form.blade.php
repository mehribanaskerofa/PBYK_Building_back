@extends('admin.layouts.admin',['title'=>'Project'])


@section('content')
    <?php  $routeName='admin.project' ?><br>
    <div class="card">
        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset

                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-2 px-3"><h3 class="card-title">Title</h3></li>
                            @foreach(config('app.languages') as $langKey)
                                <li class="nav-item ">
                                    <a class="nav-link
                                    {{$loop->first ? ' active ' : '' }}
{{--                                          @error("$langKey.title" ||--}}
{{--                                                "$langKey.address" ||--}}
{{--                                                 "$langKey.price")--}}
{{--                                                 text-danger @enderror--}}
                                                 "
                                       id="custom-tabs-two-home-tab" data-toggle="pill" href="#title-{{$langKey}}"
                                       role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">
                                        {{\Illuminate\Support\Str::upper($langKey)}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            @foreach(config('app.languages') as $lang)
                                <div class="tab-pane fade {{$loop->first ? ' active show' : '' }}" id="title-{{$lang}}"
                                     role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                                   <div class="row">
                                       <div class="form-group col-4">
                                           <label>Title</label>
                                           <input type="text" placeholder="title {{$lang}}" name="{{$lang}}[title]"
                                                  value="{{old("$lang.title",isset($model) ? ($model->translateOrDefault($lang)->title ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-4">
                                           <label>Address</label>
                                           <input type="text" placeholder="address {{$lang}}" name="{{$lang}}[address]"
                                                  value="{{old("$lang.address",isset($model) ? ($model->translateOrDefault($lang)->address ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.address")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-4">
                                           <label>Price</label>
                                           <input type="text" placeholder="Price {{$lang}}" name="{{$lang}}[price]"
                                                  value="{{old("$lang.price",isset($model) ? ($model->translateOrDefault($lang)->price ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.price")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                   </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label>Floor</label>
                        <input type="number" placeholder="Floor" name="floor"
                               value="{{old("floor",isset($model) ? ($model->floor ?? '') : '')}}"
                               class="form-control">
                        @error("floor")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Room count</label>
                        <input type="number" placeholder="room count" name="room"
                               value="{{old("room",isset($model) ? ($model->room ?? '') : '')}}"
                               class="form-control">
                        @error("room")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label>Date</label>
                        <input type="date" class="mt-4" name="date"
                               value="{{old("date",isset($model) ? ($model->date ?? '') : '')}}"
                               min="{{Carbon\Carbon::now()->format('d-m-y')}}"
                        >
                        @error('date')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    @isset($model->image)
                        <div class="form-group col-3">
                            <img src="{{asset('storage/'.$model->image)}}" width="100px">
                        </div>
                    @endisset
                    <div class="form-group col-3">
                        <label>Image</label>
                        <input type="file"  name="image" class="form-control">
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection

