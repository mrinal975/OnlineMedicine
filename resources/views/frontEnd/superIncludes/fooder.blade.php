<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
            </div>
            <div class="col-sm-4">
                <div class="toshow" id="pop">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>

            <div class="col-md-3">
                <div class="contact-details">
                    <h4>Contact Information</h4>
                    <ul class="contact">
                        <!--<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong><span style="display: block; padding-left: 25px;"></span></p></li>-->
                        <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong><br> 
                        @if($info)
                        {{$info->info_Phone}}
                        @endif
                        </p></li>
                        <li><p><i class="fa fa-envelope-o"></i> <strong>Email:</strong><br> <a href="">
                        @if($info)
                        {{$info->info_Email}}
                        @endif
                        </a></p></li>
                        <li><p><i class="fa fa-clock-o"></i> <strong>Delivery Days/Hours:</strong><br> Everyday / 09:00 AM - 09:00 PM</p></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <h4>Footer Menu</h4>
                <div class="tagcloud">
                    <ul>
                        <li><i class="fa fa-meetup"></i>&nbsp;<a href="{{url('/how-to-order')}}">How To Order</a></li>
                        <li><i class="fa fa-meetup"></i>&nbsp;<a href="{{url('/policy')}}">Policy</a></li>
                        <li><i class="fa fa-meetup"></i>&nbsp;<a href="{{url('/news')}}">News</a></li>
                        <li><i class="fa fa-meetup"></i>&nbsp;<a href="{{url('/about')}}">About Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">

            </div>
            <div class="col-md-3">
                <div class="newsletter">

                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <a href="{{url('/')}}" class="logo" style="padding-top: 15px; margin-right: 20px;">
                {{--<img style="width: 150px;" alt="ePharma" class="img-responsive" src="/">--}}
                @if($info)
                <img alt="" src="{{asset($info->info_logo)}}" class="logo-image">
                @endif
            </a>

            <p class="copyright-text">© Copyright 2018. All Rights Reserved Brothers Limited.</p>
        </div>
    </div>
</footer>