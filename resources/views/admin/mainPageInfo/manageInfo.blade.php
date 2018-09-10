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
                    <h3 class="text-center">Manage Product</h3>
                    <br><br>
                    <div class="well">

                        <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                        <h4 class="text-center text-success">{{Session::get('msg')}}</h4>
                        <br>
                        <table class="table vcctable-hover table-bordered class_to_style">
                            <tr>
                                <thead>
                                <tr>
                                    <th class="text-center">Phone number</th>
                                    <th class="text-center">e-mail address</th>
                                    <th class="text-center">Logo</th>
                                    <th class="text-center">Publication Status</th>
                                    <th class="text-center">Change Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Information as $info)
                                    <tr>
                                        <td class="text-center">{{$info->info_Phone}}</td>
                                        <td class="text-center">{{$info->info_Email}}</td>
                                        <td class="text-center"><img src="{{asset($info->info_logo)}}" alt="Front Logo" height="50" width="50" class="img-rounded"></td>

                                        <td class="text-center" >
                                            @if($info->publication_status=='0')
                                                <h5 class="text-danger " id="status">Unpublish</h5>
                                                @else
                                                <h5 class="text-success " id="status">Publish </h5>
                                                @endif
                                        </td>
                                        <td class="text-center">
                                        <a href="{{url('adminpanel/information/Manage/hideorshow/'.$info->id)}}" class="btn btn-default">change</a>
                                        </td>
                                        <td>
                                            <a href="{{url('adminpanel/product/delete/'.$info->id)}}" title="Delete Product" onclick="return confirm('Are you sure to delete');" class="btn btn-danger" >
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click','.change_status',function () {
                console.log('clicked');
                var info_id=$(this).val();
                $.ajax({
                    type:'get',
                    url:'{{URL::to('/adminpanel/information/Manage/hideorshow')}}',
                    data:{'id':info_id},
                    success:function (data) {
                        console.log('Successfully data received');
                        console.log(data);
                        $('#status').html(data);
                        replaceWith($('#status').html(data));
                    },
                    error:function () {
                        console.log('Data Not receiveed');
                    }
                });

            })
        });
    </script>
@endsection