@extends('admin.layouts.admin',['title'=>'House'])


@section('content')
    {{ $routeName='admin.house'}}
    <div class="card">
        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset

{{--<input name="product_id" value="{{$productId}}" type="hidden">--}}

                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-2 px-3"><h3 class="card-title">Title</h3></li>
                            @foreach(config('app.languages') as $langKey)
                                <li class="nav-item ">
                                    <a class="nav-link
                                    {{$loop->first ? ' active ' : '' }}
                                          @error("$langKey.price" )
                                                 text-danger @enderror"
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
                                        <div class="form-group col-6">
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

                    <div class="form-group col-6">
                    <label for="item">Project</label>
                    <select name="project_id" id="item" class="form-control project-params">
                        @foreach($projects as $project)
                        <option value="{{$project->id}}"
                            @selected(old('project_id',(isset($model) ? $model->project_id : null))==$project->id)
                        >{{$project->title}}</option>
                        @endforeach
                    </select>
                        @error('project_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                       <div class="row" id="house-params">

                       </div>
                    </div>

                    <div class="form-group col-6">
                        <label>Area</label>
                        <input type="text" placeholder="Area" name="area"
                               value="{{old("area",isset($model) ? ($model->area ?? '') : '')}}"
                               class="form-control">
                        @error("area")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    @isset($model->layout)
                        <div class="form-group col-3">
                            <img src="{{asset('storage/'.$model->layout)}}" width="100px">
                        </div>
                    @endisset
                    <div class="form-group col-3">
                        <label>Layout</label>
                        <input type="file"  name="layout" class="form-control">
                        @error('layout')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                        <div class="form-group col-3">
                            <label>Date</label>
                            <input type="date" class="mt-4 form-control" name="date"
                                   min="{{Carbon\Carbon::now()->format('d-m-y')}}"
                                   value="{{old("date",isset($model) ? ($model->date ?? '') : '')}}"
                            >
                            @error('date')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    <div class="form-group col-3">
                        <label>Active</label>
                        <input type="checkbox" class="mt-4" name="active" value="1" @checked(old('active',$model->active ?? ''))>
                        @error('active')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function (){
            getCategoryAttributes($('.project-params').trigger('change').val());
            $('.project-params').on('change',function (){
                getCategoryAttributes($(this).val());
            });

            function getCategoryAttributes($project_id){
                $.ajax({
                    method: "get",
                    url: "{{route('admin.get-project-params',['projectId','houseId'])}}"
                        .replace('projectId',$project_id)
                        .replace('houseId',$('.project-params').val()),
                    success(response) {
                        $('#house-params').html(response);
                    }
                });
            }
        });
    </script>
@endpush
