@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.dashboard')</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
            </ol>
        </section>

        <section class="content">


@endsection

@push('scripts')

{{-- <script>
     
     // line chart

     var line = new Morris.line({
         element: 'line-chart',
         resize: true,
         data: [
                @foreach($sales_data as $data)

                {

                    ym: "{{$data->year}}-{{$data->month}}" , sum: "{{$data->sum}}"

                },

                @endforeach
         ],

         xkey: 'ym',
         ykeys: ['sum'],
         labels: [@lang('site.total')],
         lineWidth: 2,
         hideHover: 'auto',
         gridStrokWidth: 0.4,
         pointSize: 4,
         gridTextFamily: 'open Sans',
         gridTextSize: 10,

     });
</script>
     --}}
@endpush

