@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class='content-header'>
            <h1>@lang('site.employeess')</h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a></li>
                <li class="active">@lang('site.employeess')</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header">
                <h3 class="box-title" style="margin-bottom: 15px">@lang('site.employeess')<small style="color: #080; font-size: 15px; font-weight: bold; padding-right: 5px">{{ $users->total()}}</small></h3>
                   
                   
                <form action="{{route('dashboard.users.index')}}" method="GET">
                        <div class="row">
                            <div class="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{request()->search}}">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search" style="padding-left: 5px"></i>@lang('site.search')</button>
                               
                                @if (auth()->user()->hasPermission('users_create'))
                                <a href="{{route('dashboard.users.create')}}" class="btn btn-primary"><i class="fa fa-plus" style="padding-left: 5px"></i>@lang('site.add')</a>
                                @else
                                 <button type="text" class="btn btn-primary disabled">@lang('site.create')</button>
                                @endif
                           
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box-body">
                    @if (isset($users) && $users->count() > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('site.first_name')</th>
                                <th>@lang('site.last_name')</th>
                                <th>@lang('site.email')</th>
                                <th>@lang('site.address')</th>
                                <th>@lang('site.gender')</th>
                                <th>@lang('site.UserJob')</th>
                                <th>@lang('site.mobile')</th>
                                {{-- <th>@lang('site.CurrentUser')</th> --}}
                                <th>@lang('site.action')</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $index=>$user)

                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$user -> first_name}}</td>
                                <td>{{$user -> last_name}}</td>
                                <td>{{$user -> email}}</td>
                                <td>{{$user -> address}}</td>
                                <td>{{$user -> gender}}</td>
                                <td>{{$user -> UserJob}}</td>
                                <td>{{$user -> mobile}}</td>
                                <td>
                                    @if (auth()->user()->hasPermission('users_update'))
                                       <a href="{{route('dashboard.users.edit',$user->id)}}" class="btn btn-info"><i class="fa fa-edit" style="padding-left: 5px"></i>@lang('site.edit')</a>
                                       <a href="#" class="btn btn-primary print-btn"><i class="fa fa-print" style="padding-left: 5px"></i>@lang('site.print')</a>
                                   @else
                                      <button type="text" class="btn btn-info disabled"><i class="fa fa-p" style="padding-left: 5px"></i>@lang('site.edit')</button>
                                   @endif
                                    
                                   @if (auth()->user()->hasPermission('users_read'))
                                      <a href="{{route('dashboard.UserContract.index' ,$user->id)}}" class="btn btn-success"><i class="fa fa-create" style="padding-left: 5px"></i>@lang('site.UserContractJob')</a>                                       
                                   @else
                                      <button type="text" class="btn btn-success disabled"><i class="fa fa-p" style="padding-left: 5px"></i>@lang('site.create')</button>
                                   @endif
                                 
                                    @if (auth()->user()->hasPermission('users_delete'))
                                       <form action="{{route('dashboard.users.destroy' ,$user->id)}}" method="POST" style="display: inline-block">
                                      {{ csrf_field() }}
                                       {{method_field("delete")}}
                                       <button type="submit" class="btn btn-danger delete"><i class="fa fa-trash" style="padding-left: 5px"></i>@lang('site.delete')</button>
                                   </form>
                                 @else
                                 <button type="text" class="btn btn-danger disabled"><i class="fa fa-trash" style="padding-left: 5px"></i>@lang('site.delete')</button>
                                 @endif
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                    <div class="content-center" style="text-align: center">
                        {{$users->appends(request()->query())->links()}}
                    </div>
                   
                    @else
                       <h2> @lang('site.no_data_found')</h2>
                    @endif 
                </div>
            </div>
        </section>
    </div>
@endsection