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
                <h3 class="box-title" style="margin-bottom: 15px">@lang('site.UserContractJob')<small style="color: #080; font-size: 15px; font-weight: bold; padding-right: 5px">{{-- $users->total()--}}</small></h3>
              
            <!-- /.card -->
    <div class="card card-primary card-outline">
      <div class="card-header">
      </div>
        <form role="form" id="quickForm">
      <div class="card-body">

        <div class="row" style="margin-bottom: 20px">
            {{-- <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{request()->search}}">
            </div> --}}
            <div class="col-md-4">
                {{-- <button type="submit" class="btn btn-primary"><i class="fa fa-search" style="padding-left: 5px"></i>@lang('site.search')</button> --}}
                @if (auth()->user()->hasPermission('users_create'))
                <a href="{{route('dashboard.UserContract.create')}}" class="btn btn-primary"><i class="fa fa-plus" style="padding-left: 5px"></i>@lang('site.add')</a>
                @else
                <button type="text" class="btn btn-primary disabled">@lang('site.create')</button>
                @endif

                @if (auth()->user()->hasPermission('users_update'))
                <a href="{{--route('dashboard.UserContract.edit')--}}" class="btn btn-primary"><i class="fa fa-edit" style="padding-left: 5px"></i>@lang('site.edit')</a>
                @else
                <button type="text" class="btn btn-primary disabled">@lang('site.edit')</button>
                @endif
                
                @if (auth()->user()->hasPermission('users_delete'))
                <a href="{{--route('dashboard.UserContract.delete')--}}" class="btn btn-danger"><i class="fa fa-delete" style="padding-left: 5px"></i>@lang('site.delete')</a>
                @else
                <button type="text" class="btn btn-primary disabled">@lang('site.delete')</button>
                @endif                
          
            </div>
        </div>        

        {{-- @if (isset('user_contract') && $user_contract->count() > 0) --}}

        <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">@lang('site.basicInfo')</a>
          </li>

            <li class="nav-item">
            <a class="nav-link " id="hoursJob-tab" data-toggle="pill" href="#hoursJob" role="tab" aria-controls="custom-content-above-hoursJob" aria-selected="true">@lang('site.hoursJob')</a>
          </li>

            <li class="nav-item">
            <a class="nav-link " id="salary-tab" data-toggle="pill" href="#salary" role="tab" aria-controls="custom-content-above-salary" aria-selected="true">@lang('site.salary')</a>
          </li>    
          
            <li class="nav-item">
            <a class="nav-link " id="Vacations-tab" data-toggle="pill" href="#Vacations" role="tab" aria-controls="custom-content-above-Vacations" aria-selected="true">@lang('site.Vacations')</a>
          </li>  
          
            <li class="nav-item">
            <a class="nav-link " id="Insurances-tab" data-toggle="pill" href="#Insurances" role="tab" aria-controls="custom-content-above-Insurances" aria-selected="true">@lang('site.Insurances')</a>
          </li>           
        </ul>

        <!-- form start -->
        <form class="form-inline ml-3">
        <div class="tab-content" id="custom-content-above-tabContent">
          <div class="tab-pane fade active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
        
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1" style="margin-top: 20px" >@lang('site.userCode')</label>
                <input type="text" name="#" class="form-control " id="#" value="{{}}">
              </div>
              <div class="form-group">
                <label for="exampleInput1">@lang('site.HistoryContract')</label>
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>

              <div class="form-group">
                <label for="exampleInput1">@lang('site.tiemsContract')</label>
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>

              <div class="form-group">
                <label for="exampleInput1">@lang('site.inDay')</label>
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>

              <div class="form-group">
                <label for="exampleInput1">@lang('site.axceptIn')</label>
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>

              <div class="form-group">
                <label for="exampleInput1">@lang('site.contFirstLast')</label>
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
              

              <div class="form-group">
                <label for="exampleInput1">@lang('site.contLast')</label>
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>    

            <div class="form-group">
              <label>@lang('site.dateContract')</label>
              <select class="form-control">
                <optgroup label="@lang('site.selectDateContract')">
                  <option>@lang('site.month')</option>
                  <option>@lang('site.week')</option>
                  <option>@lang('site.year')</option>
                </optgroup>
              </select>
            </div>

            <div class="form-group">
              <label>@lang('site.notes')</label>
              <textarea class="form-control" rows="3" placeholder="@lang('site.commitNotes')"></textarea>
            </div>            
            </div>
          </div>



  <div class="tab-pane fade" id="hoursJob" role="tabpanel" aria-labelledby="custom-content-above-home-tab">           
            <!-- right column -->
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-1">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">@lang('site.saturday')</label>
                </div>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1">@lang('site.fromHour')</label>
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>

          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <label for="exampleInput1">@lang('site.toHour')</label>
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
              </div>   
              
          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <label for="exampleInput1">@lang('site.hourJob')</label>
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
            </div>
          </div>             
      </div>      
          
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-1">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">@lang('site.sunday')</label>
                </div>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>

          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
              </div>   
              
          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
            </div>
          </div>             
      </div>
      
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-1">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">@lang('site.monuday')</label>
                </div>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>

          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
              </div>   
              
          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
            </div>
          </div>             
      </div>
      
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-1">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">@lang('site.tuseday')</label>
                </div>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>

          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
              </div>   
              
          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
            </div>
          </div>             
      </div>
      
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-1">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">@lang('site.wednesday')</label>
                </div>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>

          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
              </div>   
              
          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
            </div>
          </div>             
      </div>
      
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-1">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">@lang('site.thrusday')</label>
                </div>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>

          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
              </div>   
              
          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
            </div>
          </div>             
      </div>
      
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-1">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">@lang('site.friday')</label>
                </div>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>

          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>
              </div>   
              
          <div class="col-md-3">
              <div class="form-group">
                <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
            </div>
          </div>             
      </div>      
              <!--/.col (right) -->

  </div>




    <div class="tab-pane fade" id="salary" role="tabpanel" aria-labelledby="custom-content-above-home-tab">           
    <!-- right column -->
      <h3 class="box-title" style="margin-top: 20px">@lang('site.salaryCalcu')</h3>
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-2">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">@lang('site.salaryByHourMonth')</label>
                </div>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>    
            
            <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.evryHourMonth')</label>
              </div>
            </div>            
      </div>
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-2">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">@lang('site.salaryByMonth')</label>
                </div>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>    
            
            <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.salaryEveryMonth')</label>
              </div>
            </div>            
      </div>   
      
      
      <hr>
      <h3 class="box-title">@lang('site.delay')</h3>
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.numMinutsAllow')</label>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>    
            
            <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.minut')</label>
              </div>
            </div>            
      </div> 
      
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.Countminutes')</label>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>    
            
            <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.minutes')</label>
              </div>
            </div>            
      </div>  
      
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.ifMoreDelay')</label>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>    
            
            <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.halfDayMinutes')</label>
              </div>
            </div>            
      </div>   
      
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.ifMoreDelay')</label>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>    
            
            <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.AllDayMinutess')</label>
              </div>
            </div>            
      </div>   
      
      

      <hr>
      <h3 class="box-title">@lang('site.overTime')</h3>
      <div class="row"  style="margin-top: 20px">
              <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.incaseOverTime')</label>
              </div>                
            </div>
                <!-- right column -->

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>    
            
            <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.hour')</label>
              </div>
            </div>            
      </div>
       
      <hr>
      <h3 class="box-title">@lang('site.Percentage on sales')</h3>
      <div class="row"  style="margin-top: 20px">
                           
            <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.employeeCalc')</label>
              </div>
            </div>  
            
            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>   
            
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.forSales')</label>
              </div>
            </div>             
      </div>  
     <!--/.col (right) -->

  </div>



  <div class="tab-pane fade" id="Vacations" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
      <h3 class="box-title" style="margin-top: 20px">@lang('site.EmVacations')</h3>
      <div class="row"  style="margin-top: 20px">
                           
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.VacationsEatyady')</label>
              </div>
            </div>  
            
            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>   
            
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.day')</label>
              </div>
            </div>   
      </div>  

      <div class="row"  style="margin-top: 20px">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.VacationsArda')</label>
              </div>
            </div>  
            
            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>   
            
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.day')</label>
              </div>
            </div>   
      </div>

      <div class="row"  style="margin-top: 20px">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.esn')</label>
              </div>
            </div>  
            
            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
              </div>
            </div>   
            
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.everyMonth')</label>
              </div>
            </div>   
      </div>    

      <div class="row"  style="margin-top: 20px">
        
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.SelectArdaAndEatyady')</label>
              </div>
            </div> 
            
           <div class="col-md-2">         
            <div class="form-group">
              <select class="form-control">
                <option value="" selected style="display: none"></option>
                <option>@lang('site.month')</option>
                <option>@lang('site.week')</option>
                <option>@lang('site.year')</option>
              </select>                
              </div>
            </div> 
            
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.FirstYear')</label>
              </div>
            </div>            
      </div>   
      
      <div class="row"  style="margin-top: 20px">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.SelectAsonatPlance')</label>
              </div>
            </div> 
            
           <div class="col-md-2">         
            <div class="form-group">
              <select class="form-control">
                <option value="" selected style="display: none"></option>
                <option>@lang('site.month')</option>
                <option>@lang('site.week')</option>
                <option>@lang('site.year')</option>
              </select>                
              </div>
            </div> 
            
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInput1" style="line-height: 2;">@lang('site.firstEveryMonth')</label>
              </div>
            </div>            
      </div>       
      
      <hr>
      <h3 class="box-title" style="color: tomato">@lang('site.notes')</h3>
      <div class="row">
              <div class="col-md-12">
              <div class="form-group">
                <p>@lang('site.addVacationsToNewPlance')</p>
                <p>@lang('site.ArdaNone')</p>
                <p>@lang('site.AsonatNont')</p>
              </div>                
            </div>       
      </div>      
  </div>
  
  <div class="tab-pane fade" id="Insurances" role="tabpanel" aria-labelledby="custom-content-above-home-tab">           
    <div class="form-group">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
        <h3 class="box-title" style="margin-top: 20px">@lang('site.InsurancesFor')</h3>
      </div>
    </div> 
    
    <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleInput1" style="line-height: 2;">@lang('site.InsurancesForNum')</label>
            </div>
          </div>  
          
          <div class="col-md-2">
            <div class="form-group">
              <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>   
    </div>    

    <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleInput1" style="line-height: 2;">@lang('site.Ratio of insurances')</label>
            </div>
          </div>  
          
          <div class="col-md-2">
            <div class="form-group">
              <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>   
          
          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleInput1" style="line-height: 2;"><span>%</span></label>
            </div>
          </div>   
    </div>    

    <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleInput1" style="line-height: 2;">@lang('site.InsurancesTotal')</label>
            </div>
          </div>  
          
          <div class="col-md-2">
            <div class="form-group">
              <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>     
    </div> 
    
    <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleInput1" style="line-height: 2;">@lang('site.PayEm')</label>
            </div>
          </div>  
          
          <div class="col-md-2">
            <div class="form-group">
              <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>   
    </div>
    
    <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleInput1" style="line-height: 2;">@lang('site.PadyAdmin')</label>
            </div>
          </div>  
          
          <div class="col-md-2">
            <div class="form-group">
              <input type="text" name="#" class="form-control" id="exampleInput1" placeholder="">
            </div>
          </div>   
    </div>     
  </div>
          </div>
          </form>        
        {{-- @else
        <h2> @lang('site.no_data_found')</h2>            
        @endif  --}}

        <!-- /.card-body -->
        </div>
        <!-- /.card-primary -->
      </div>
     <!--/.box-header -->
    </div>
    <!-- /.box-primary -->
  </div>
  <!-- /.content-wrapper -->
</div>
</section>
@endsection