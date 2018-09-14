@extends('frontEnd.superMaster')
@section('title')
    Order
@endsection
@section('mainContent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div>
      <a class="example-image-link" 
      href="http://lokeshdhakar.com/projects/lightbox2/images/image-1.jpg" data-lightbox="example-1"><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-1.jpg" alt="image-1" /></a>
      <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-2.jpg" data-lightbox="example-2" data-title="Optional caption."><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-2.jpg" alt="image-1"/></a>
    </div>

    <hr />
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('admin/js/lightbox-plus-jquery.min.js')}}"></script>
@endsection