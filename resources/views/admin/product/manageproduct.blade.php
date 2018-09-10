@extends('admin.master')
@section('css')
<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    @endsection
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Manage Product</h3>
                    <br><br>
                    <div class="well">

                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <br>
                        <table class="table vcctable-hover table-bordered class_to_style" id="exampleProduct">
                                <thead>
                                <tr>
                                    <th class="text-center">Productt Name</th>
                                    <th class="text-center">Sub-Category Name</th>
                                    <th class="text-center">Product Price</th>
                                    <th class="text-center">Product Quantity</th>
                                    <th class="text-center">type</th>
                                    <th class="text-center">Brand</th>
                                    <th class="text-center">Publication Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th class="text-center">Productt Name</th>
                                    <th class="text-center">Sub-Category Name</th>
                                    <th class="text-center">Product Price</th>
                                    <th class="text-center">Product Quantity</th>
                                    <th class="text-center">type</th>
                                    <th class="text-center">Brand</th>
                                    <th class="text-center">Publication Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
            $('#exampleProduct').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url":"<?= route('dataProcessingProduct') ?>",
                    "dataType":"json",
                    "type":"POST",
                    "data":{"_token":"<?= csrf_token() ?>"}
                },
                "columns":[
                    {"data":"productName"},
                    {"data":"subcategoryId"},
                    {"data":"productPrice"},
                    {"data":"productQuantity"},
                    {"data":"type"},
                    {"data":"brand"},
                    {"data":"publication_status"},
                    {"data":"action","searchable":false,"orderable":false}
                ]
            } );
        </script>
@endsection