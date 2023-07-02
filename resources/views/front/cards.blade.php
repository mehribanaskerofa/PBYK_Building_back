@extends('front.layouts.front')

@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/cards.css')}}">
{{--    <link rel="stylesheet" href="node_modules/nouislider/distribute/nouislider.min.css">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nouislider/distribute/nouislider.min.css">

@endpush
@section('content')
    <div class="filter-for-cards container">
        <h1>Menziller</h1>

        <div class="card-filter">
            <div class="card-filters-up">
                <div class="buttons">
                    <span>Otaqlar</span>
                    <div class="buttons-inside">
                        <span>Studiya</span>
                        <button onclick="filterCardsByRoomCount(1)">1 </button>
                        <button onclick="filterCardsByRoomCount(2)">2 </button>
                        <button onclick="filterCardsByRoomCount(3)">3 </button>
                        <button onclick="filterCardsByRoomCount(3)">4 </button>
                    </div>
                </div>




                <div class="wrapper-main">
                    <div class="wrapper">
                        <div class="price-range p-range">
                            <p>rooms</p>
                            <div class="common-price">
                                <span id="min-price-label">$0</span>
                                <input type="range" id="min-price" min="0" max="1000" step="10" value="0">

                                <input type="range" id="max-price" min="0" max="1000" step="10" value="1000">
                                <span id="max-price-label">$1000</span>
                            </div>
                        </div>
                        <!-- area -->
                        <div class="area-range p-range">
                            <p>area</p>
                            <div class="common-area">
                                <span id="min-area-label">0</span>
                                <input type="range" id="min-area" min="0" max="100" step="1" value="0">
                                <input type="range" id="max-area" min="0" max="100" step="1" value="100">
                                <span id="max-area-label">100</span>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>




            </div>

            <br>
            <div class="card-filters-down">
                <!-- <p>saylari</p> -->
            </div>
        </div>
        <hr>

        <div class="main-cards">
{{--            <div class="card" data-rooms="2" data-price="100" data-area="50">--}}

{{--                <a href="#"></a>--}}
{{--                <div class="slider-section">--}}
{{--                    <!-- Swiper -->--}}
{{--                    <!-- Swiper -->--}}
{{--                    <div class="swiper">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"> ab</div>--}}
{{--                            <div class="swiper-slide">kgs</div>--}}
{{--                            <div class="swiper-slide">adshjvfs</div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-scrollbar"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-main-price">--}}
{{--                    <div class="main-price-left">--}}
{{--                        <h3>2-ком. 50 м²</h3>--}}
{{--                        <div class="current-price">--}}
{{--                            100 ₽--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="main-price-right">--}}
{{--                        <div class="main-price-old">41 773 900 ₽</div>--}}
{{--                        <div class="pink-tag">--}}
{{--                            <span> -4 177 390 ₽--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <ul class="card-main-specs">--}}
{{--                    <li class="specs-up">--}}
{{--                        <p>Жилой комплекс</p>--}}
{{--                        <p> ЖК WOW--}}
{{--                        </p>--}}
{{--                    </li>--}}
{{--                    <li class="specs-down">--}}
{{--                        <p>Дом</p>--}}
{{--                        <p>WOW</p>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="card-main-tags">--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="card" data-rooms="3" data-price="200" data-area="70">

                <a href="#"></a>
                <div class="slider-section">
                    <!-- Swiper -->
                    <!-- Swiper -->
                    <div class="swiper cardSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg1.PNG')}}" alt=""></div>
                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg2.PNG')}}" alt=""></div>
                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg3.PNG')}}" alt=""></div>
                        </div>

                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="card-main-price">
                    <div class="main-price-left">
                        <h3>3-ком. 70 м²</h3>
                        <div class="current-price">
                            200 ₽
                        </div>
                    </div>
                    <div class="main-price-right">
                        <div class="main-price-old">41 773 900 ₽</div>
                        <div class="pink-tag">
                            <span> -4 177 390 ₽
                            </span>
                        </div>
                    </div>
                </div>
                <hr>
                <ul class="card-main-specs">
                    <li class="specs-up">
                        <p>Жилой комплекс</p>
                        <p> ЖК WOW
                        </p>
                    </li>
                    <li class="specs-down">
                        <p>Дом</p>
                        <p>WOW</p>
                    </li>
                </ul>
{{--                <div class="card-main-tags">--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
{{--            <div class="card" data-rooms="2" data-price="300" data-area="50">--}}
{{--                <div class="heart-button">--}}
{{--                    <i class="fa-regular fa-heart"></i>--}}
{{--                </div>--}}
{{--                <a href="#"></a>--}}
{{--                <div class="slider-section">--}}
{{--                    <!-- Swiper -->--}}
{{--                    <!-- Swiper -->--}}
{{--                    <div class="swiper cardSwiper">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"> <img src="{{asset('assets/image/cardimg1.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg2.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg3.PNG')}}" alt=""></div>--}}

{{--                        </div>--}}
{{--                        <div class="swiper-scrollbar"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-main-price">--}}
{{--                    <div class="main-price-left">--}}
{{--                        <h3>3-ком. 50.38 м²</h3>--}}
{{--                        <div class="current-price">--}}
{{--                            37 596 510 ₽--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="main-price-right">--}}
{{--                        <div class="main-price-old">41 773 900 ₽</div>--}}
{{--                        <div class="pink-tag">--}}
{{--                            <span> -4 177 390 ₽--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <ul class="card-main-specs">--}}
{{--                    <li class="specs-up">--}}
{{--                        <p>Жилой комплекс</p>--}}
{{--                        <p> ЖК WOW--}}
{{--                        </p>--}}
{{--                    </li>--}}
{{--                    <li class="specs-down">--}}
{{--                        <p>Дом</p>--}}
{{--                        <p>WOW</p>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="card-main-tags">--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="card" data-rooms="1" data-price="550" data-area="60">--}}
{{--                <div class="heart-button">--}}
{{--                    <i class="fa-regular fa-heart"></i>--}}
{{--                </div>--}}
{{--                <a href="#"></a>--}}
{{--                <div class="slider-section">--}}
{{--                    <!-- Swiper -->--}}
{{--                    <!-- Swiper -->--}}
{{--                    <div class="swiper cardSwiper">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"> <img src="{{asset('assets/image/cardimg1.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg2.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg3.PNG')}}" alt=""></div>--}}

{{--                        </div>--}}
{{--                        <div class="swiper-scrollbar"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-main-price">--}}
{{--                    <div class="main-price-left">--}}
{{--                        <h3>1 otaq 60м²</h3>--}}
{{--                        <div class="current-price">--}}
{{--                            550 ₽--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="main-price-right">--}}
{{--                        <div class="main-price-old">41 773 900 ₽</div>--}}
{{--                        <div class="pink-tag">--}}
{{--                            <span> -4 177 390 ₽--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <ul class="card-main-specs">--}}
{{--                    <li class="specs-up">--}}
{{--                        <p>Жилой комплекс</p>--}}
{{--                        <p> ЖК WOW--}}
{{--                        </p>--}}
{{--                    </li>--}}
{{--                    <li class="specs-down">--}}
{{--                        <p>Дом</p>--}}
{{--                        <p>WOW</p>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="card-main-tags">--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="card form" data-rooms="1" data-price="50" data-area="66">--}}
{{--                <div class="feedback-form">--}}
{{--                    <form action="">--}}
{{--                        <div class="feedback-up">--}}
{{--                            <p class="head-p">Помощь менеджера</p>--}}
{{--                            <h3>Помочь вам с выбором?</h3>--}}
{{--                            <p>Свяжемся с вами и поможем. Без лишних назойливых звонков.</p>--}}
{{--                            <input placeholder="Телефон" max-length="255" required="required" type="tel" value=""--}}
{{--                                   class="s-input__input" data-v-9b4a078d="">--}}
{{--                        </div>--}}

{{--                        <div class="feedback-down">--}}
{{--                            <p>Нажимая на кнопку, вы подтверждаете, что ознакомились с политикой <a href="#">обработки--}}
{{--                                    персональных данных</a></p>--}}
{{--                            <button type="submit">submit button</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="card" data-rooms="3" data-price="1000" data-area="66">--}}
{{--                <div class="heart-button">--}}
{{--                    <i class="fa-regular fa-heart"></i>--}}
{{--                </div>--}}
{{--                <a href="#"></a>--}}
{{--                <div class="slider-section">--}}
{{--                    <!-- Swiper -->--}}
{{--                    <!-- Swiper -->--}}
{{--                    <div class="swiper cardSwiper">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"> <img src="{{asset('assets/image/cardimg1.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg2.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg3.PNG')}}" alt=""></div>--}}

{{--                        </div>--}}
{{--                        <div class="swiper-scrollbar"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-main-price">--}}
{{--                    <div class="main-price-left">--}}
{{--                        <h3>3-ком. 66.38 м²</h3>--}}
{{--                        <div class="current-price">--}}
{{--                            37 596 510 ₽--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="main-price-right">--}}
{{--                        <div class="main-price-old">41 773 900 ₽</div>--}}
{{--                        <div class="pink-tag">--}}
{{--                            <span> -4 177 390 ₽--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <ul class="card-main-specs">--}}
{{--                    <li class="specs-up">--}}
{{--                        <p>Жилой комплекс</p>--}}
{{--                        <p> ЖК WOW--}}
{{--                        </p>--}}
{{--                    </li>--}}
{{--                    <li class="specs-down">--}}
{{--                        <p>Дом</p>--}}
{{--                        <p>WOW</p>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="card-main-tags">--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card" data-rooms="2" data-price="50" data-area="30">--}}
{{--                <div class="heart-button">--}}
{{--                    <i class="fa-regular fa-heart"></i>--}}
{{--                </div>--}}
{{--                <a href="#"></a>--}}
{{--                <div class="slider-section">--}}
{{--                    <!-- Swiper -->--}}
{{--                    <!-- Swiper -->--}}
{{--                    <div class="swiper cardSwiper">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"> <img src="{{asset('assets/image/cardimg1.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg2.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg3.PNG')}}" alt=""></div>--}}

{{--                        </div>--}}
{{--                        <div class="swiper-scrollbar"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-main-price">--}}
{{--                    <div class="main-price-left">--}}
{{--                        <h3>3-ком. 30.38 м²</h3>--}}
{{--                        <div class="current-price">--}}
{{--                            37 596 510 ₽--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="main-price-right">--}}
{{--                        <div class="main-price-old">41 773 900 ₽</div>--}}
{{--                        <div class="pink-tag">--}}
{{--                            <span> -4 177 390 ₽--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <ul class="card-main-specs">--}}
{{--                    <li class="specs-up">--}}
{{--                        <p>Жилой комплекс</p>--}}
{{--                        <p> ЖК WOW--}}
{{--                        </p>--}}
{{--                    </li>--}}
{{--                    <li class="specs-down">--}}
{{--                        <p>Дом</p>--}}
{{--                        <p>WOW</p>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="card-main-tags">--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card" data-rooms="1" data-price="500" data-area="50">--}}
{{--                <div class="heart-button">--}}
{{--                    <i class="fa-regular fa-heart"></i>--}}
{{--                </div>--}}
{{--                <a href="#"></a>--}}
{{--                <div class="slider-section">--}}
{{--                    <!-- Swiper -->--}}
{{--                    <!-- Swiper -->--}}
{{--                    <div class="swiper cardSwiper">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"> <img src="{{asset('assets/image/cardimg1.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg2.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg3.PNG')}}" alt=""></div>--}}

{{--                        </div>--}}
{{--                        <div class="swiper-scrollbar"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-main-price">--}}
{{--                    <div class="main-price-left">--}}
{{--                        <h3>3-ком. 70.38 м²</h3>--}}
{{--                        <div class="current-price">--}}
{{--                            37 596 510 ₽--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="main-price-right">--}}
{{--                        <div class="main-price-old">41 773 900 ₽</div>--}}
{{--                        <div class="pink-tag">--}}
{{--                            <span> -4 177 390 ₽--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <ul class="card-main-specs">--}}
{{--                    <li class="specs-up">--}}
{{--                        <p>Жилой комплекс</p>--}}
{{--                        <p> ЖК WOW--}}
{{--                        </p>--}}
{{--                    </li>--}}
{{--                    <li class="specs-down">--}}
{{--                        <p>Дом</p>--}}
{{--                        <p>WOW</p>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="card-main-tags">--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card" data-rooms="2" data-price="50" data-area="60">--}}
{{--                <div class="heart-button">--}}
{{--                    <i class="fa-regular fa-heart"></i>--}}
{{--                </div>--}}
{{--                <a href="#"></a>--}}
{{--                <div class="slider-section">--}}
{{--                    <!-- Swiper -->--}}
{{--                    <!-- Swiper -->--}}
{{--                    <div class="swiper cardSwiper">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide"> <img src="{{asset('assets/image/cardimg1.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg2.PNG')}}" alt=""></div>--}}
{{--                            <div class="swiper-slide"><img src="{{asset('assets/image/cardimg3.PNG')}}" alt=""></div>--}}

{{--                        </div>--}}
{{--                        <div class="swiper-scrollbar"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-main-price">--}}
{{--                    <div class="main-price-left">--}}
{{--                        <h3>3-ком. 70.38 м²</h3>--}}
{{--                        <div class="current-price">--}}
{{--                            37 596 510 ₽--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="main-price-right">--}}
{{--                        <div class="main-price-old">41 773 900 ₽</div>--}}
{{--                        <div class="pink-tag">--}}
{{--                            <span> -4 177 390 ₽--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <ul class="card-main-specs">--}}
{{--                    <li class="specs-up">--}}
{{--                        <p>Жилой комплекс</p>--}}
{{--                        <p> ЖК WOW--}}
{{--                        </p>--}}
{{--                    </li>--}}
{{--                    <li class="specs-down">--}}
{{--                        <p>Дом</p>--}}
{{--                        <p>WOW</p>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="card-main-tags">--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-tags">--}}
{{--                        <span> Панорамные окна--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>



@endsection

@push('js')
    <script src="{{asset('assets/js/cards.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/nouislider/distribute/nouislider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
{{--    <script src="node_modules/nouislider/distribute/nouislider.min.js"></script>--}}
    <!-- Swiper JS -->


    <script src="{{asset('assets/js/filterarea.js')}}"></script>

@endpush
