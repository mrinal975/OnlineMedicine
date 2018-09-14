@extends('frontEnd.superMaster')
@section('title')
    Predscription
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('admin/css/lightbox.min.css')}}">
@endsection
@section('mainContent')
    <div role="main" class="main">
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-xs-12">
                	           <br>
            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
            <br>
            <div class="row">
            	@if(count($prescription)>0)
                <div class="col-lg-12">
                    <table class="datatable table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Phone Number</th>
                            <th class="text-center">Time</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Image</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prescription as $pres)
                            <tr>
                                <td class="text-center">{{$pres->customerName}}</td>
                                <td class="text-center">{{$pres->customerPhone}}</td>
                                <td class="text-center">{{
                                date('Y M j, h:i:a',strtotime($pres->created_at))
                                   }}</td>
                                <td class="text-center">Tk.{{$pres->customerEmail}}</td>
                                <td char="text-center">
                                    
                                     <a href='{!! url($pres->prescriptionsImage); !!}' data-lightbox="example-1" class="text-center">
                                        <img src="{{asset($pres->prescriptionsImage)}}" alt="{{$pres->customerName}}" height="90" width="150" class="img-rounded">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pull-right">
                      {{$prescription->render() }}
                </div>
                @else
                <h4 class="text-center text-info">You did not Upload anyting yet</h4>
                @endif
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    @section('js')
    <script src="{{asset('admin/js/lightbox-plus-jquery.min.js')}}"></script>
@endsection