@extends('front.layouts.front')


@section('content')

    <section class="w header-bottom-section">
        <div class="header-bottom">
            <div class="header-bottom-title">
                <div class="word">
                    <span class="letter w1">B</span>
                    <span class="letter o">P</span>
                    <span class="letter o">Y</span>
                    <span class="letter w2">K</span>
                </div>
            </div>
            <div class="header-bottom-img">
                <img src="{{asset('storage/yasayis.jpg')}}" alt="wow"  id="scroll-image">
            </div>
        </div>
    </section>

    <section class="about w" id="about" style=" background: url({{asset('assets//image/about-background.png')}});">
        <div class="container">
            <div class="about-container w">
                <div class="about-left">
                    <span>About</span>
                </div>
                <div class="about-right">
                    <div class="about-right-title">
                        <div class="about-right-title-1">{{$about->title}}</div>
                    </div>
                    <div class="about-right-text">
                        <p>{{$about->description}}</p>
                    </div>
                    <div class="about-right-image">
                        <img src="{{asset('storage/'.$about->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="river w">
        <div class="container">
            <div class="river-container ">
                <div class="river-content">
                    <div class="river-title">
{{--                        <h1>CENTER <br>AT RIVER'S LENGTH</h1>--}}
                        <h1 style="max-width: 600px">{{$river->title}}</h1>
                    </div>
                    <div class="river-context">
                        <p>{{$river->description}}</p>
                        <p>The choice is yours!</p>
                    </div>
                </div>
                <div class="river-image">
                    <img src="{{asset('assets/image/river_frame.svg')}}" alt="river">
                </div>
            </div>
        </div>
    </section>

    <section class="locations w" id="location">
        <div class="container">
            <div class="location-container w">

                <div class="location-top">
                    <div class="location-name"><span>Location</span></div>
                    <div class="location-head">
                        <div class="location-text">
                            <div class="location-text-img"><img src="{{asset('assets/image/location-metro.svg')}}" alt=""></div>
                            <div class="location-texts">
                                <div class="location-text-head"><span>TEKHNOPARK STATION</span></div>
                                <div class="location-text-body"><span>7 minute walk</span></div>
                            </div>
                        </div>
                        <div class="location-title"><span>900 METERS TO THE METRO</span></div>
                    </div>
                </div>


                <div class="location-bottom">
                    <div class="location-bottom-container">
                        <div class="location-items">

                            <div class="location-item">
                                <div class="location-item-content">
                                    <div class="location-item-title"><span>Dream Island</span></div>
                                    <div class="location-item-text"><span>Amusement park</span></div>
                                </div>
                                <div class="location-item-subtext">
                                    <p><i class="fa-solid fa-person-walking"></i><span>10 min</span></p>
                                </div>
                                <div class="location-item-img">
                                    <img src="{{asset('assets/image/location-img.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="location-item">
                                <div class="location-item-content">
                                    <div class="location-item-title"><span>Dream Island</span></div>
                                    <div class="location-item-text"><span>Amusement park</span></div>
                                </div>
                                <div class="location-item-subtext">
                                    <p><i class="fa-solid fa-person-walking"></i><span>10 min</span></p>
                                </div>
                                <div class="location-item-img">
                                    <img src="{{asset('assets/image/location-img.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="location-item">
                                <div class="location-item-content">
                                    <div class="location-item-title"><span>Dream Island</span></div>
                                    <div class="location-item-text"><span>Amusement park</span></div>
                                </div>
                                <div class="location-item-subtext">
                                    <p><i class="fa-solid fa-person-walking"></i><span>10 min</span></p>
                                </div>
                                <div class="location-item-img">
                                    <img src="{{asset('assets/image/location-img.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="location-item">
                                <div class="location-item-content">
                                    <div class="location-item-title"><span>Dream Island</span></div>
                                    <div class="location-item-text"><span>Amusement park</span></div>
                                </div>
                                <div class="location-item-subtext">
                                    <p><i class="fa-solid fa-person-walking"></i><span>10 min</span></p>
                                </div>
                                <div class="location-item-img">
                                    <img src="{{asset('assets/image/location-img.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="location-map">
                            <div class="location-map-item">
                                <div class="location-map-iframe">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12152.040360590201!2d49.84354274008791!3d40.408627256238795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2saz!4v1686032929335!5m2!1sen!2saz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-bottom-context">
                        <div class="location-sticky">
                            <p>The location gives you a new, just-built infrastructure with kindergartens and schools, parks and sports complexes. Nagatinskaya Floodplain has become the center of a business cluster.</p>
                            <p>The Tekhnopark metro is surrounded by shopping and business centers.</p>
                        </div>
                        <button class="map-btn">
                            Смотреть на карте
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact w" id="contact-section">
        <div class="container">
            <div class="contact-container w">
                <div class="contact-content">
                    <h1>WANT TO LIVE <br> HERE? <span>Leave your contacts and we will call you back</span></h1>
                </div>
                <div class="contact-context">
                    <div class="contact-form">
                        <form
                            action="{{route('contact-send')}}"
                            method="post"
id="contactBtn-1"
{{--                              onsubmit="this.preventDefault();"--}}
                        >
                            @csrf
                            <div class="contact-form-container ">
                                <div class="contact-form-input ">
                                   <input id="phone-input-1" type="tel" name="phone" />
                                    <input type="hidden" id="countryCode" name="countryCode">
                                </div>
                                <button class="contact-form-button"  >Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="contact-subtext">
                        <span>I consent to the processing of </span><a href="">personal data</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benefites w" id="benefits">
        <div class="benefit-head">
            <div class="benefit-name"><span>Benefits</span></div>
            <div class="benefit-head-title"><span>WOW-HOUSE HAS EVERYTHING, INCLUDING AN OFFICE BLOCK AND A
              KINDERGARTEN</span></div>
        </div>
        <div class="benefits-slider w">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach($benefits as $index=>$benefit)
                    <div class="swiper-slide">
                        <div class="benefit-slider-item">
                            <div class="benefit-slider-item-counter">
                                <div class="benefit-slider-item-count"><span>0{{$index+1}} / 0{{count($benefits)}}</span></div>
                                <div class="benefit-slider-item-buttons">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <div class="benefit-slider-item-context">
                                <div class="benefit-slider-item-context-title">
                                    <span>{{$benefit->title}}</span>
                                </div>
                                <div class="benefit-slider-item-context-text">
                                    <p>{{$benefit->description}}</p>
                                </div>
                            </div>
                            <div class="benefit-slider-item-img">
                                <img src="{{asset('storage/'.$benefit->image)}}" alt="">
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="specious w" id="parking">
        <div class="container">
            <div class="specious-rooms">

                <div class="specious-room">
                    <div class="specious-room-container" style="background-image: url('{{asset('assets/image/light2.jpg')}}');">
                        <div class="back-black"></div>
                        <div class="specious-room-content">
                            <div class="specious-room-context">
                                <div class="specious-room-title"><p>SPACIOUS STORAGE ROOMS</p></div>
                                <div class="specious-room-text"><p>Use your apartment to 100 percent. It's easy if you store things in the storerooms. Tires, ski suits, bicycles - there's room for everything.</p></div>
                            </div>
                            <div class="specious-room-button"><a>Select storage rooms</a></div>
                        </div>
                    </div>
                </div>

                <div class="specious-room">
                    <div class="specious-room-container" style="background-image: url('{{asset('assets/image/benefit.jpg')}}');">
                        <div class="back-black"></div>
                        <div class="specious-room-content">
                            <div class="specious-room-context">
                                <div class="specious-room-title"><p>SPACIOUS STORAGE ROOMS</p></div>
                                <div class="specious-room-text"><p>Use your apartment to 100 percent. It's easy if you store things in the storerooms. Tires, ski suits, bicycles - there's room for everything.</p></div>
                            </div>
                            <div class="specious-room-button"><a>Select storage rooms</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="grand w" id="storagerooms">
        <div class="container">
            <div class="grand-content">
                <div class="grand-head"><span>GRAND LOBBY</span></div>
                <div class="grand-items">
                    @foreach($grands as $grand)
                    <div class="grand-container">
                        <div class="grand-image grand-opacity"> <img class="" src="{{asset('storage/'.$grand->image)}}" alt="{{$grand->title}}">
                        </div>
                        <div class="grand-context">
                            <div class="grand-text-icon">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="grand-item-title"><span>{{$grand->title}}</span></div>
                            <div class="grand-item-text"><span>{{$grand->description}}</span></div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="infrastructure w" id="infrastructure">

        <!-- <div class="container"> -->
        <div class="infs">
            <div class="inf-head">
                <div class="inf-head-subtitle"><span>Infrastructure</span></div>
                <div class="inf-head-title"><span>ETRAFDAKI PARKLAR, TICARET MERKEZLERI VE IASE OBYEKTLERI</span></div>
                <div class="custom-pagination" id="infs">
                    <div class="pagination-item"><span>Riviera Mall</span></div>
                    <div class="pagination-item"><span>Kolomenskoye</span></div>
                    <div class="pagination-item"><span>Dream Island</span></div>
                </div>
            </div>
            <div class="swiper inf">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-content1">
                            <img src="{{asset('assets/image/inf.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content1">
                            <img src="{{asset('assets/image/inf.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content1">
                            <img src="{{asset('assets/image/inf.jpg')}}" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- </div> -->
    </section>

    <section class="apart w" id="apartment">
        <div class="container">
            <div class="apartment-container w">
                <div class="apart-left">
                    <div class="apart-left-head">
                        <div class="apart-left-subtitle"><span>Apartments</span></div>
                        <div class="apart-left-title"><span>MENZIL PLANLARI</span></div>
                    </div>
                    <div class="apart-left-context">
                        <div class="apart-text"><span>Select and reserve an apartment to fix the price</span></div>
                        <div class="apart-button"><button>All layout</button></div>
                    </div>
                </div>
                <div class="apart-right">
                    <img src="{{asset('assets/image/Screenshot_4.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="rares w">
        <div class="rare-head">
            <div class="rare-name"><span>Rare Formats</span></div>
        </div>
        <div class="rare-slider-item-buttons">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="rares-slider w">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rare-item">
                            <div class="rare-item-img"><img src="{{asset('assets/image/rare.jpg')}}" alt=""></div>
                            <div class="rare-item-content">
                                <div class="rare-item-context">
                                    <div class="rare-item-title"><span>Apartment with apart</span></div>
                                    <div class="rare-item-text"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, eaque?</span></div>
                                </div>
                                <div class="rare-item-button">
                                    <button class="rare-item-btn">Leave Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rare-item">
                            <div class="rare-item-img"><img src="{{asset('assets/image/rare.jpg')}}" alt=""></div>
                            <div class="rare-item-content">
                                <div class="rare-item-context">
                                    <div class="rare-item-title"><span>Apartment with apart</span></div>
                                    <div class="rare-item-text"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, eaque?</span></div>
                                </div>
                                <div class="rare-item-button">
                                    <button class="rare-item-btn">Leave Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rare-item">
                            <div class="rare-item-img"><img src="{{asset('assets/image/rare.jpg')}}" alt=""></div>
                            <div class="rare-item-content">
                                <div class="rare-item-context">
                                    <div class="rare-item-title"><span>Apartment with apart</span></div>
                                    <div class="rare-item-text"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, eaque?</span></div>
                                </div>
                                <div class="rare-item-button">
                                    <button class="rare-item-btn">Leave Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rare-item">
                            <div class="rare-item-img"><img src="{{asset('assets/image/rare.jpg')}}" alt=""></div>
                            <div class="rare-item-content">
                                <div class="rare-item-context">
                                    <div class="rare-item-title"><span>Apartment with apart</span></div>
                                    <div class="rare-item-text"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, eaque?</span></div>
                                </div>
                                <div class="rare-item-button">
                                    <button class="rare-item-btn">Leave Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rare-item">
                            <div class="rare-item-img"><img src="{{asset('assets/image/rare.jpg')}}" alt=""></div>
                            <div class="rare-item-content">
                                <div class="rare-item-context">
                                    <div class="rare-item-title"><span>Apartment with apart</span></div>
                                    <div class="rare-item-text"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, eaque?</span></div>
                                </div>
                                <div class="rare-item-button">
                                    <button class="rare-item-btn">Leave Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rare-item">
                            <div class="rare-item-img"><img src="{{asset('assets/image/rare.jpg')}}" alt=""></div>
                            <div class="rare-item-content">
                                <div class="rare-item-context">
                                    <div class="rare-item-title"><span>Apartment with apart</span></div>
                                    <div class="rare-item-text"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, eaque?</span></div>
                                </div>
                                <div class="rare-item-button">
                                    <button class="rare-item-btn">Leave Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rare-item">
                            <div class="rare-item-img"><img src="{{asset('assets/image/rare.jpg')}}" alt=""></div>
                            <div class="rare-item-content">
                                <div class="rare-item-context">
                                    <div class="rare-item-title"><span>Apartment with apart</span></div>
                                    <div class="rare-item-text"><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, eaque?</span></div>
                                </div>
                                <div class="rare-item-button">
                                    <button class="rare-item-btn">Leave Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="finish w" id="finishing">
        <div class="container">
            <div class="finish-container">
                <div class="finish-head">
                    <div class="finish-subtitle"><span>Finishing</span></div>
                    <div class="finish-title"><span>Full free expression or WOW-finishing?
                It's up to you to decide.</span></div>
                </div>
                <div class="finish-content">
                    <div class="swiper slider-finish">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide-content1">
                                    <div class="swiper inner-slider">
                                        <div class="swiper-wrapper inner" >
                                            <div class="swiper-slide inner-slide">
                                                <div class="inner-slide-img"><img src="{{asset('assets/image/light.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide inner-slide">
                                                <div class="inner-slide-img"><img src="{{asset('assets/image/light1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide inner-slide">
                                                <div class="inner-slide-img"><img src="{{asset('assets/image/light2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">
                                <div class="slide-content1">
                                    <div class="swiper inner-slider">
                                        <div class="swiper-wrapper inner" >
                                            <div class="swiper-slide inner-slide">
                                                <div class="inner-slide-img"><img src="{{asset('assets/image/light.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide inner-slide">
                                                <div class="inner-slide-img"><img src="{{asset('assets/image/light1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide inner-slide">
                                                <div class="inner-slide-img"><img src="{{asset('assets/image/light2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-content1">
                                    <div class="swiper inner-slider">
                                        <div class="swiper-wrapper inner" >
                                            <div class="swiper-slide inner-slide">
                                                <div class="inner-slide-img"><img src="{{asset('assets/image/light.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide inner-slide">
                                                <div class="inner-slide-img"><img src="{{asset('assets/image/light1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide inner-slide">
                                                <div class="inner-slide-img"><img src="{{asset('assets/image/light2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-pagination">
                            <div class="pagination-item">light</div>
                            <div class="pagination-item">Stone</div>
                            <div class="pagination-item">sand</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="master-plan w">
        <div class="container">
            <div class="master-plan-img w">
                <img src="{{asset('assets/image/house-2-transformed.png')}}" alt="">
                <div class="plan-btn"><span class="masterplan-btn">+</span>
                    <div class="plan-section-1">
                        <div class="plan-section-title"><span>1 section</span></div>
                        <div class="plan-section-content">
                            <table>
                                <thead>
                                <tr>
                                    <th>Studio</th>
                                    <th>from 12 000 000 azn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1 otaqli</td>
                                    <td>from 13 000 000 azn</td>
                                </tr>
                                <tr>
                                    <td>2 otaqli</td>
                                    <td>from 16 000 000 azn</td>
                                </tr>
                                <tr>
                                    <td>3 otaqli</td>
                                    <td>from 19 000 000 azn</td>
                                </tr>
                                <tr>
                                    <td>4 otaqli</td>
                                    <td>from 23 000 000 azn</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="word w">
        <div class="container">
            <div id="moving-text">BULVAR PARK LAYIHESI</div>
        </div>
    </section>

    <section class="developer w" id="developer">
        <div class="container">
            <div class="develop">
                <div class="develop-head">
                    <div class="develop-head-subtitle"><span>About the developer</span></div>
                    <div class="develop-head-title"><span>Strana Development is a federal developer from Tyumen, who have been building houses and shopping centers since 2008. More than 20,000 families live in our neighborhoods.</span></div>
                </div>
                <div class="develop-container w">
                    <div class="develop-image">
                        <img src="{{asset('assets/image/develop.png')}}" alt="">
                    </div>
                    <div class="develop-content">
                        <div class="develop-context"><span>We do not compromise on the quality. Each object is built to the highest standards, no matter whether it is in Moscow or in Tyumen</span></div>
                        <div class="develop-links">
                            <ul class="develop-link">
                                <li><a href=""><i class="fa-solid fa-book"></i>Construction progress</a></li>
                                <li><a href=""><i class="fa-solid fa-book"></i>Construction progress</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team w">
        <div class="container">
            <div class="team-container">
                <div class="team-head"><span>Project team</span></div>
                <div class="team-items">
                    <div class="team-item"><img src="{{asset('assets/image/team.svg')}}" alt=""></div>
                    <div class="team-item"><img src="{{asset('assets/image/team.svg')}}" alt=""></div>
                    <div class="team-item"><img src="{{asset('assets/image/team.svg')}}" alt=""></div>
                    <div class="team-item"><img src="{{asset('assets/image/team.svg')}}" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="payment w">
        <div class="container">
            <div class="payment-container">
                <div class="payment-head">
                    <div class="payment-subtitle"><span>PAYMENT</span></div>
                    <div class="payment-title"><span>KREDIT KALKULYATORU</span></div>
                </div>
                <div class="payment-content">
                    <div class="payment-left">
                        <div class="payment-left-item">
                            <div class="payment-left-title"><span>100% payment</span></div>
                            <div class="payment-context w">
                                <div class="payment-item"><span>WITHOUT BANKS</span></div>
                                <div class="payment-item"><span>More information</span></div>
                            </div>
                        </div>
                        <div class="payment-left-item">
                            <div class="payment-left-title"><span>Mortgage from 5.1%</span></div>
                            <div class="payment-context">
                                <div class="payment-item"><span>TERM up to 30 years</span></div>
                                <div class="payment-item"><span>More information</span></div>
                            </div>
                        </div>
                        <div class="payment-left-item">
                            <div class="payment-left-title"><span>Trade-In</span></div>
                            <div class="payment-context">
                                <div class="payment-item"><span>EXCHANGE PROGRAMM</span></div>
                                <div class="payment-item"><span>Details in the sales department</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-right">
                        <div class="payment-form-title"><span>We'll answer all your questions and help you find the best purchase option</span></div>
                        <form action="" class="payment-form">
                            <select class="payment-form-select">
                                <option value="">Way of purchase</option>
                                <option value="">100% payment</option>
                                <option value="">Mortgage from 5.1%</option>
                                <option value="">Trade-In</option>
                            </select>
                            <div class="payment-phone-select">
                                <input id="phone-input-2" class="phone-payment" type="tel" name="phone1" />
                            </div>
                            <button class="payment-btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="galary w" id="galary">
        <div class="container">
            <div class="galary-slider">
                <div class="galary-head">
                    <span>Gallery</span>
                </div>
                <div class="swiper slider-galary">
                    <div class="swiper-wrapper">
                        @foreach($galleries as $gallery)
                        <div class="swiper-slide">
                            <img src="{{asset('storage/'.$gallery->image)}}" alt="">

                        </div>
                            @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>


@endsection

