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
        </div>    <div class="container about-container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="word-rotator-title text-center">
                        The Digital Way to <strong>
                        <span class="word-rotate" data-plugin-options="{'delay': 2000}">
                            <span class="word-rotate-items">
                                <span>PROGRESS</span>
                                <span>ADVANCE</span>
                                <span>SUCCESS</span>
                            </span>
                        </span>
                        </strong>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <hr class="medium">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="h1 heading-primary mt-xl">ABOUT <strong>US</strong></h3>

                    <ul class="history">
                        <li class="appear-animation" data-appear-animation="fadeInUp">
                            <div class="featured-box">
                                <div class="box-content">
                                    <p><strong>ePharma.com.bd</strong> – Your Online Healthcare Solution</p>
                                </div>
                            </div>
                        </li>
                        <li class="appear-animation" data-appear-animation="fadeInUp">
                            <div class="featured-box">
                                <div class="box-content">
                                    <p>Bangladesh based online healthcare solution.</p>
                                </div>
                            </div>
                        </li>
                        <li class="appear-animation" data-appear-animation="fadeInUp">
                            <div class="featured-box">
                                <div class="box-content">
                                    <p>We are a ONE-STOP ONLINE Healthcare Solutions where we not only provide a wide range of medicines, we also offer a wide choice of healthcare products including wellness products, vitamins, diet/fitness supplements, herbal products, pain relievers, diabetic care kits, baby/mother care products, beauty care products and surgical supplies.</p>
                                </div>
                            </div>
                        </li>
                        <li class="appear-animation" data-appear-animation="fadeInUp">
                            <div class="featured-box">
                                <div class="box-content">
                                    <p>Considering prevailing busy city life where traffic, lack of parking, non-availability of medicines, we want to ensure Convenience to our valued customers. With easy access to reliable drug information, our customers will get to know all about medicine both locally produced and imported from abroad. Being a client of epharma.com.bd, customer will get regular refill reminders, alternative medicine options staying at home to Make Your Life Easier.</p>
                                </div>
                            </div>
                        </li>
                        <li class="appear-animation" data-appear-animation="fadeInUp">
                            <div class="featured-box">
                                <div class="box-content">
                                    <p>Our Aim is to provide you with best & convenient healthcare, convenient and safe and secure online shopping experience. We endeavor to provide products at a very competitive price coupled with highest standards of delivery to customers.</p>
                                </div>
                            </div>
                        </li>
                        <li class="appear-animation" data-appear-animation="fadeInUp">
                            <div class="featured-box">
                                <div class="box-content">
                                    <p>We have our own drug license(license no: DC-1785) by Bangladesh Drug Authority, under the Bengal drugs rules, 1946 and we are active member of e-commerce association of Bangladesh(e-Cab, member no: 370).  We have registered & reliable pharmacy stores and shops nation-wide so you can order from us with confidence.</p>
                                </div>
                            </div>
                        </li>
                        <li class="appear-animation" data-appear-animation="fadeInUp">
                            <div class="featured-box">
                                <div class="box-content">
                                    <p>ePharma.com.bd is a brand of Limitless Solutions Limited.</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

    </div>


@endsection