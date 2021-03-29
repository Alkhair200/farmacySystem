@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class='content-header'>
            <h1>@lang('site.users')</h1>
            <ol class="breadcrumb">
            <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a></li>
                <li><a href="{{route('dashboard.users.index')}}">@lang('site.users')</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title" style="margin-bottom: 15px">@lang('site.edit') {{--<small>Quick Exapm</small>--}}</h3>
                </div> <!----End box of header----->
                <div class="box-body">

                    @include('partials._errors')

                <form action="{{route('dashboard.users.update' ,$user->id)}}" method="POST">
                    @csrf
                    {{method_field('put')}}
                        <div class="form-group">
                            <label>@lang('site.first_name')</label>
                            <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}">
                        </div>


                        <div class="form-group">
                            <label>@lang('site.last_name')</label>
                            <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.email')</label>
                            <input type="email" name="email" class="form-control" value="{{$user->email}}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.address')</label>
                            <input type="text" name="address" class="form-control" value="{{$user->address}}">
                        </div>

                           <div class="form-group">
                            <label>@lang('site.mobile')</label>
                            <input type="text" name="mobile" class="form-control" value="{{$user->mobile}}">
                        </div>

                        @php
                        $userJobs = ['مدير صيدليه','صيدلي أول','عامل',];
                      @endphp
            <div class="form-group">
                <label>@lang('site.UserJob')</label>
                    <select class="form-control" name="UserJob"  style="height: 44px">
                        <optgroup label="@lang('site.UserJob_disc')">
                            @foreach ($userJobs as $job)
                                <option value="{{$job}}"
                                 @if ($user->UserJob == $job) selected
                                @endif>{{$job}}</option>
                            @endforeach
                       </optgroup>
                    </select>
            </div>

                     @php
                       $gender = ['ذكر','انثي'];
                    @endphp
            <div class="form-group">
                <label>@lang('site.gender')</label>
                    <select class="form-control" name="gender"  style="height: 44px">
                        <optgroup label="@lang('site.gender_disc')">
                                @foreach ($gender as $item)
                                   <option value="{{$item}}"
                                    @if ($user->gender == $item) selected
                                   @endif>{{$item}}</option>
                                @endforeach
                        </optgroup>
                    </select>
            </div>


                        {{-- <div class="form-group">
                            <label>@lang('site.password')</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.password.confirmation')</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div> --}}
                        
                              <div class="form-group">
                              <h4 class="mt-5 ">@lang('site.permissions')</h4>
                              <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                  @php
                                      $models = ['users' ,'products'];
                                      $maps = ['create' ,'read' ,'update' ,'delete'];
                                  @endphp

                                  @foreach ($models as $index=>$model)
                                 <li class="nav-item">
                                  <a class="nav-link {{$index == 0 ? 'active' : ''}}" id="custom-content-above-home-tab" data-toggle="pill" href="#{{$model}}" role="tab" aria-controls="custom-content-above-home" aria-selected="true">@lang('site.'.$model)</a>
                                </li>
                                  @endforeach
                              </ul>
                              <div class="tab-custom-content">
                              </div>
                              <div class="tab-content" id="custom-content-above-tabContent">
                               @foreach ($models as $index=>$model)
                                    <div class="tab-pane fade show {{$index == 0 ? 'active' : ''}}" id="{{$model}}" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                                   
                                    <div class="form-check" style="padding: 20px 0px;display: flex; justify-content: space-around; text-justify: auto " >
                                       
                                        @foreach ($maps as $map)
                                            <input type="checkbox" class="form-check-input" name="permissions[]" {{$user->hasPermission($model.'_'.$map)  ? 'checked' : ''}} value="{{ $model }}_{{$map}}">@lang('site.'.$map)
                                        @endforeach
                                
                                    </div>
                                </div>
                               @endforeach
                              </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class=" fa fa-plus">@lang('site.edit')</i></button>
                            </div>
                        </div> 

                      

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection