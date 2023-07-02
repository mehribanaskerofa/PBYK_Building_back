<header class="w"  id="headers">
    <div class="container">
        <div class="header">
            <div class="header-top">
                <div class="header-menu">
                    <div class="header-menu-left">
                        <div class="header-menu-left-button" onclick="menubar()" id="header-menu-left-button">
                            <i class="fa-solid fa-bars"></i>
                            <span>Menu</span>
                        </div>
                        <div class="header-menu-left-item">
                            <span>Choose apartment</span>
                        </div>
                    </div>
                    <div class="header-menu-right">
                        <div class="header-menu-right-phone"><a href="tel:{{ str_replace(['.', '(', ')',' ','-'], '', $setting->phone)}}">{{$setting->phone}}</a> </div>
                        <div class="header-menu-right-call-button">
                            <button ><a href="#contact-section"><i class="fa-solid fa-phone header-menu-right-call-icon"></i><span class="header-menu-right-call-btn">Request call</span></a></button>
                        </div>
                    </div>
                </div>
                <div class="header-top-title">Bulvar Park Yasayis Kompleksi</div>
            </div>
        </div>
    </div>
    <div class="menu-bar w" id="menu-bar">
        <div class="menu-bar-top">
            <div class="menu-bar-image">
                <img src="{{asset('assets/image/menu-bar-image.png')}}" alt="">
            </div>
            <div class="menu-bar-content">
                <div class="menu-bar-title">
                    <span>BULVAR PROYEKT</span>
                </div>
                <div class="menu-bar-items">
                    <ul class="menu-items">
                        <li class="menu-item"><a href="#about">About</a> </li>
                        <li class="menu-item"><a href="#location">Location</a> </li>
                        <li class="menu-item"><a href="#benefits">Benefits</a> </li>
                        <li class="menu-item"><a href="#parking">Parking</a> </li>
                        <li class="menu-item"><a href="#storagerooms">Storage Rooms</a> </li>
                        <li class="menu-item"><a href="#apartments">Apartments</a> </li>
                        <li class="menu-item"><a href="#infrastructure">Infrastructure</a> </li>
                        <li class="menu-item"><a href="#finishing">Finishing</a> </li>
                        <li class="menu-item"><a href="#developer">About developer</a> </li>
                        <li class="menu-item"><a href="#galary">Galary</a> </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-bar-bottom">
            <div class="menu-bar-bottom-context">
                <div class="menu-bar-bottom-title">
                    <span>Additional information</span>
                </div>
                <div class="menu-bar-bottom-content">
                    <ul class="menu-bar-bottom-content-items">
                        <li class="border-none"><span><a href=""> Construction progress</a><i class="fa-solid fa-user"></i></span></li>
                        <li><span><a href=""> Project documents<i class="fa-solid fa-user"></i></a></span></li>
                    </ul>
                </div>
            </div>
            <div class="menu-bar-bottom-context">
                <div class="menu-bar-bottom-title">
                    <span>Additional information</span>
                </div>
                <div class="menu-bar-bottom-content">
                    <ul class="menu-bar-bottom-content-items">
                        <li><span><a href="mailto: {{$setting->email}}"> {{$setting->email}}</a> </span></li>
                        <li><span><a href="tel:+{{ str_replace(['.', '(', ')',' ','-'], '', $setting->phone)}}"> {{$setting->phone}}</a></span></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>


