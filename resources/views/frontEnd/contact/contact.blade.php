@extends('frontEnd.superMaster')
@section('title')
    Category Page
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
        </div>    <div class="section-contact-area" style="margin-top: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="heading-text-color">Leave a <strong>Message</strong></h2>
                        <form id="contactForm" action="#" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name *</label>
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group mb-lg">
                                        <label>Message *</label>
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
                                    </div>

                                    <input type="submit" value="Send Message" class="btn btn-primary mb-xlg" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h2 class="heading-text-color">Contact <strong>Details</strong></h2>
                        <ul class="list-unstyled list-contact">
                            <li>
                                <i class="fa fa-phone"></i>
                                <div>880 9617111555</div>
                                <div><br /></div>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <div>info@epharma.com.bd</div>
                                <div><br /></div>
                            </li>
                            <li>
                                <i class="fa fa-facebook"></i>
                                <div>www.facebook.com/epharma.com.bd</div>
                                <div><br /></div>
                            </li>
                            <li>
                                <i class="fa fa-address-book"></i>
                                <div>House: 477, Road: 32, Mohakhali DOSH, Dhaka, Bangladesh.</div>
                                <div><br /></div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection