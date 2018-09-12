@extends('admin.master')

@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <h6 class="text-center">only One Can be pubsish</h6>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Manage Information</h3>
                    <br><br>
                    <div class="well">

                        <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                        <h4 class="text-center text-success">{{Session::get('msg')}}</h4>
                        <br>
                        <table class="table vcctable-hover table-bordered class_to_style">
                            <tr>
                                <thead>
                                <tr>
                                    <th class="text-center">Bkash</th>
                                    <th class="text-center">Rocket</th>
                                    <th class="text-center">Publication Status</th>
                                    <th class="text-center">Change Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Information as $info)
                                    <tr>
                                        <td class="text-center">{{$info->bkas}}</td>
                                        <td class="text-center">{{$info->rocket}}</td>
                                        <td class="text-center" >
                                            @if($info->publication_status=='0')
                                                <h5 class="text-danger " id="status">Unpublish</h5>
                                                @else
                                                <h5 class="text-success " id="status">Publish </h5>
                                                @endif
                                        </td>
                                        <td class="text-center">
                                        <a href="{{url('adminpanel/gateway/hideorshow/'.$info->id)}}" class="btn btn-default">change</a>
                                        </td>
                                        <td>
                                            <a href="{{url('adminpanel/gateway/delete/'.$info->id)}}" title="Delete Product" onclick="return confirm('Are you sure to delete');" class="btn btn-danger" >
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </tr>
                        </table>
                    </div>
                    <div class="pull-right">
                        {{$Information->links()}}    
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection