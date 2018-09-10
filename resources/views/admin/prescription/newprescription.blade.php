@extends('admin.master')
@section('css')
@endsection
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <table class="datatable table table-striped table-bordered">
                        <thead>
                        <tr>

                            <th class="text-center">Serial</th>
                            <th class="text-center">status</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i=1?>
                            @foreach($prescription as $prescrip)
                                <tr>
                                <th scope="row" class="text-center"><?php echo $i;?></th>
                                <th scope="row" class="text-center">
                                    @if($prescrip->prescriptionStatus=='0')
                                        <p class="text-danger bg-info">New</p>
                                        @else
                                        <p class="text-success">Viewed</p>
                                    @endif
                                </th>
                                <td class="text-center">{{$prescrip->customerName}}</td>
                                <td class="text-center">{{$prescrip->customerPhone}}</td>
                                <td class="text-center">{{$prescrip->customerEmail}}</td>
                                <td class="text-center"><img src="{{asset($prescrip->prescriptionsImage)}}" alt="{{$prescrip->customerName}}" height="50" width="50" class=" img-rounded"></td>
                                <td class="text-center">
                                    <a href="{{url('/adminpanel/prescription/view/'.$prescrip->id)}}" class="btn btn-success">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{url('adminpanel/prescription/delete/'.$prescrip->id)}}" onclick="return confirm('Are you sure to delete');" class="btn btn-danger" >
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <?php $i++?>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>

    </script>
@endsection