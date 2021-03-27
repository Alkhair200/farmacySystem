@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class='content-header'>
            <h1>@lang('site.users')</h1>
            <ol class="breadcrumb">
            <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a></li>
                <li><a href="{{route('dashboard.users.index')}}">@lang('site.users')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title" style="margin-bottom: 15px">@lang('site.add') {{--<small>Quick Exapm</small>--}}</h3>
                </div> <!----End box of header----->
                <div class="box-body">

                    @include('partials._errors')

                <form action="{{route('dashboard.users.store')}}" method="POST">
                    @csrf
                    {{--method_field('post')--}}
                        <div class="form-group">
                            <label>@lang('site.first_name')</label>
                            <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}">
                        </div>


                        <div class="form-group">
                            <label>@lang('site.last_name')</label>
                            <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.email')</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.address')</label>
                            <input type="text" name="address" class="form-control" value="{{old('address')}}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.gender')</label>
                            <input type="text" name="gender" class="form-control" value="{{old('gender')}}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.UserJob')</label>
                            <input type="text" name="UserJob" class="form-control" value="{{old('UserJob')}}">
                        </div>


                        <div class="form-group">
                            <label>@lang('site.password')</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.password.confirmation')</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>

                       <div class="form-group">
                            {{-- 
                            <label>@lang('site.photo')</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                        <img src="{{asset('images/user_images/user.png')}}" style="width: 100px;" class="thumbnail image-preview"  alt="">
                        </div> --}}

                        {{-- <div class="form-group">
                            <label>@lang('site.permissions')</label>

                            @php
                                $models = ['users' ,'categories' ,'products','clients','orders'];
                                $maps = ['create' ,'read' ,'update','delete'];
                            @endphp

                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                  <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                  
                                   
                                    @foreach ($models as $index=>$model)
                                    <li class="nav-item">    
                                    <a class="nav-link {{$index == 0 ? 'active' : ''}}" id="custom-tabs-one-home-tab" data-toggle="pill" href="#{{$model}}" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">@lang('site.'.$model)</a>
                                        </li>
                                         @endforeach
                                  </ul>
                                </div>
                                <div class="card-body">
                                  <div class="tab-content" id="custom-tabs-one-tabContent">

                                      @foreach ($models as $index=> $model)
                                        <div class="tab-pane fade show {{$index == 0 ? 'active' : ''}}" id="{{$model}}" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                            
                                            @foreach ($maps as $map)

                                                <label><input type="checkbox" name="permissions[]" value="{{$map. '_' .$model}}" id="">@lang('site.' .$map)</label>
                                            
                                            @endforeach
                                        </div>
                                      @endforeach
                                  </div>
                                </div>
                                <!-- /.card -->
                              </div> --}}
                              <h4 class="mt-5 ">@lang('site.permissions')</h4>
                              <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#users" role="tab" aria-controls="custom-content-above-home" aria-selected="true">@lang('site.users')</a>
                                </li>
                              </ul>
                              <div class="tab-custom-content">
                              </div>
                              <div class="tab-content" id="custom-content-above-tabContent">
                                <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                                   
                                    <div class="form-check" style="padding: 20px 0px;display: flex; justify-content: space-around; text-justify: auto " >
                                        <input type="checkbox" class="form-check-input" name="permissions[]" value="users_create">@lang('site.create')
                                        <input type="checkbox" class="form-check-input" name="permissions[]" value="users_read">@lang('site.read')
                                        <input type="checkbox" class="form-check-input" name="permissions[]" value="users_update">@lang('site.update')
                                        <input type="checkbox" class="form-check-input" name="permissions[]" value="users_delete">@lang('site.delete')
                                    </div>
                                </div>
                              </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class=" fa fa-plus">@lang('site.add')</i></button>
                            </div>
                        </div> 

                      

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection