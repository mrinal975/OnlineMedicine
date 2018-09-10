@extends('frontEnd.superMaster')
@section('title')
    How to Order
@endsection
@section('mainContent')
    <div role="main" class="main">
        <div class="container-fluid" style="position: relative">
            <div class="row search">
                <div style="background-color: #f0f0ed; width: 100%; padding: 5px 0;">
                    <div class="container">
                        <div class="col-sm-9  col-xs-9 text-center" id="search-body-mobile" style="border-right: 1px solid #777;">
                            <div class="col-sm-9">
                                <input type="text" id="example-ajax-post" placeholder="Search here..." class="form-control"/>
                                <input type="hidden" id="example-ajax-token" value="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo"/>
                            </div>
                            <div class="col-sm-3">
                                <select id="productCategory" name="categoryId" class="form-control">
                                    <option value="1">Brand Name</option>
                                    <option value="2">Generic Name</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-3 text-center mobile-margin">
                            <a href="http://epharma.com.bd/prescription-upload">
                                <button style="background-color: #006394" class="btn btn-primary btn-md" id="upload-btn" >Upload Prescription</button>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div id="search-results" class="result"></div>
            </div>
        </div>    <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-content" style="padding: 20px 0 40px 0;">
                        <blockquote><p><strong>Step-1 Select Product: </strong></p></blockquote>
                        <p>Search what you are looking for in the search box.</p>
                        <p>Also you can request for any product by clicking ‘Request Product’ link in top right header.</p>
                        <p>Or you can upload your prescription by clicking ‘Upload Prescription’ Link in top right corner.</p>
                        <hr>
                        <blockquote><p><strong>Step-2 Place Order(for searched items):</strong></p></blockquote>
                        <p>After you’ve added all the items in the bag, Input your delivery information and place your order.</p>
                        <hr>
                        <blockquote><p><strong>Step-3 Order Confirmation:</strong></p></blockquote>
                        <p>Our representative will contact you to confirm your order details.</p>
                        <hr>
                        <blockquote><p><strong>Step-4 Receive your order and make the payment:</strong></p></blockquote>
                        <p>Receive your order from our delivery representative and make the payment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection