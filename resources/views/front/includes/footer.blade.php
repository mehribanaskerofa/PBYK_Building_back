<footer>
    <ul class="footer-contact">
        <li class="logo-img"><img src="{{asset('assets/image/logo_small.svg')}}" alt=""></li>
        <div class="inner-footer-contact">
            <li><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
            <li class="logo-img-middle">{{\Illuminate\Support\Str::upper($setting->icon)}}</li>
            <li><a href="tel:+{{ str_replace(['.', '(', ')',' ','-'], '', $setting->phone)}}">{{$setting->phone}}</a></li>
        </div>
    </ul>
    <div class="footer-main">
        <div class="footer-content">
            <div class="content-up">
                <ul class="left-section">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">benefits</a></li>
                    <li><a href="#">Parking</a></li>
                    <li><a href="#">Storage room</a></li>
                </ul>
                <ul class="right-section">
                    <li><a href="#">Apartments</a></li>
                    <li><a href="#">Infrastructure</a></li>
                    <li><a href="#">Finishing</a></li>
                    <li><a href="#">About developer</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>

            </div>
            <div class="main-web-file">
                <p class="res-file">Lorem, ipsum dolor.</p>
                <ul class="web-file">
                    <li><a href="#">Conustruction progress</a> <img src="{{asset('assets/image/building.svg')}}" alt=""> </li>
                    <li><a href="#">Project documents</a> <img src="{{asset('assets/image/document.svg')}}" alt=""> </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="footer-request">
            <div class="request-text">
                <p> We will call you and answer any questions you may have </p>
            </div>
            <div class="button"><a href="#contact-section">Request call</a></div>
        </div>
    </div>
    <hr>
    <div class="footer-last-sect">
        <ul>
            <li>© {{$setting->icon}}</li>
            <li>All right reserved</li>
        </ul>
        <ul class="privacy-sect">
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Landau interactive</a></li>
        </ul>
    </div>
</footer>
