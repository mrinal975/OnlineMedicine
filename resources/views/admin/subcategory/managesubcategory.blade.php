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
            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table vcctable-hover table-bordered class_to_style" id="example">
                        <thead>
                        <tr>
                            <th class="text-center">Category Name</th>
                            <th class="text-center">sub-Category Name</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Publication</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">Category Name</th>
                                <th class="text-center">sub-Category Name</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Publication</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
            $('#example').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url":"<?= route('dataProcessing') ?>",
                    "dataType":"json",
                    "type":"POST",
                    "data":{"_token":"<?= csrf_token() ?>"}
                },
                "columns":[
                    {"data":"categoryId"},
                    {"data":"subcategoryName"},
                    {"data":"subcategoryDescriptoin"},
                    {"data":"publication_status"},
                    {"data":"action","searchable":false,"orderable":false}
                ]
            } );
        </script>
@endsection