@extends('admin.layouts.admin',['title'=>'House'])


@section('content')
    <?php $routeName='admin.house'?>
    <div class="card">
        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset

{{--<input name="projectId" value="{{$productId}}" type="hidden">--}}

                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-1 px-1"><h3 class="card-title">Title</h3></li>
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

                    <div class="form-group col-2">
                    <label for="item">Block</label>
                    <select name="block_id" id="item" class="form-control">
                        @foreach($blocks as $block)
                        <option value="{{$block->id}}"
                            @selected(old('block_id',(isset($model) ? $model->block_id : null))==$block->id)
                        >{{$block->block}}</option>
                        @endforeach
                    </select>
                        @error('block_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                           <div class="form-group col-2">
                               <label for="item">Floor</label>
                               <select name="floor" id="item" class="form-control">
                                   @for($i = 2; $i <=14; $i++)
                                       <option value="{{$i}}"
                                           @selected(old('floor',(isset($model) ? $model->floor : null))==$i)
                                       >{{$i }} floor</option>
                                   @endfor
                               </select>
                               @error('floor')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                           </div>
                           <div class="form-group col-2">
                               <label for="item">Room</label>
                               <select name="room" id="item" class="form-control">
                                   @for($i = 1; $i <=6; $i++)
                                       @if($i!=5)
                                           <option value="{{$i}}"
                                               @selected(old('room',(isset($model) ? $model->room : null))==$i)
                                           >{{$i }}</option>
                                       @endif
                                   @endfor
                               </select>
                               @error('room')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                           </div>


                    <div class="form-group col-2">
                        <label>Area</label>
                        <input type="text" placeholder="Area" name="area"
                               value="{{old("area",isset($model) ? ($model->area ?? '') : '')}}"
                               class="form-control">
                        @error("area")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-2">
                        <label>Date</label>
                        <input type="date" class="form-control" name="date"
                               min="{{Carbon\Carbon::now()->format('d-m-y')}}"
                               value="{{old("date",isset($model) ? ($model->date ?? '') : '')}}"
                        >
                        @error('date')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-2 d-flex flex-column">
                        <label>Active</label>
                        <input type="checkbox" name="active" value="1" @checked(old('active',$model->active ?? ''))
                        style="width: 20px;height: 20px"
                        >
                        @error('active')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    @isset($model->layout)
                        <div class="form-group col-3">
                            <img src="{{asset('storage/'.$model->layout)}}" width="100px" height="50px">
                        </div>
                    @endisset
                    <div class="form-group col-3">
                        <label>Layout</label>
                        <input type="file"  name="layout" class="form-control">
                        @error('layout')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection


