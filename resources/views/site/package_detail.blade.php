@extends('layouts.site')

@section('content')

    {{----------- [ Main Content ] -----------}}
    <div class="col-12 col-md-8 pull-md-4 pull-lg-3 col-lg-8 mt-5 mb-5">
        <div class="m-card">
            <div class="row">
                <div class="col-8 col-md-auto col-lg-auto">
                    <h3 id="main" class="dinar-title">هتل ستارگان</h3>
                </div>
                <div class="col-8 col-md-3 col-lg-auto">
                    <img class="img-fluid" src="{{asset('images/stars.png')}}">
                </div>
                <div class="col-4 col-md-3 col-xl-2 pull-xl-4 pull-lg-2 mr-lg-3 mr-md-2 mr-xl-0 pull-md-1">
                    <div>
                        <img class="img-fluid off_ribbon"  src="{{asset('images/ribbon.png')}}">
                        <h2 class="off-percentage" >۲۳٪ تخفیف</h2>
                    </div>
                </div>
            </div>
            {{----------- [ Galery of images ] -----------}}
            <div class="gallery">
                <!-- Flickity HTML init -->
                <div class="carousel carousel-main"
                     data-flickity='{ "imagesLoaded": true,"pageDots": false }'>
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange tree" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" alt="submerged" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" alt="look-out" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" alt="One World Trade" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" alt="drizzle" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" alt="cat nose" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange tree" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" alt="submerged" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" alt="look-out" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" alt="One World Trade" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" alt="drizzle" />
                    <img title="سورچی" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" alt="cat nose" />
                </div>

                <div class="carousel carousel-nav"
                     data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
                    <img title="ویلا" class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange tree" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" alt="submerged" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" alt="look-out" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" alt="One World Trade" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" alt="drizzle" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" alt="cat nose" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange tree" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" alt="submerged" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" alt="look-out" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" alt="One World Trade" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" alt="drizzle" />
                    <img class="carousel-cell" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" alt="cat nose" />
                </div>
            </div>

            {{----------- [ Tozihate Hotel ] -----------}}
            <h4 class="sormeie-theme text-center mt-5" id="detailsSection">توضیحات</h4>
            <p class="tosi-theme terminal-info">دیجی‌کالا بزرگ‌ترین فروشگاه اینترنتی کشور، اینک در آستانه‌ی دهمین سال فعالیت، با گستره‌ای از کالاهای متنوع برای تمام اقشار جامعه و هر رده‌ی سنی، برای کاربران خود «تجربه‌ی لذت‌بخش یک خرید اینترنتی» را تداعی می‌کند</p>

            <h4  class="sormeie-theme text-center mt-5" id="featuresSection">امکانات</h4>
            <div class="row mt-4">
                <div class="col-6 col-md-4 col-lg-3 pull-lg-2 text-right">
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">خشک شویی</p>
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">مبلمان</p>
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">سیستم تهویه</p>
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">سرویس غذا</p>
                </div>

                <div class="col-6 col-md-4 col-lg-3 pull-lg-2 text-right">
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">خشک شویی</p>
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">مبلمان</p>
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">سیستم تهویه</p>
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">سرویس غذا</p>
                </div>

                <div class="col-6 col-md-4 col-lg-3 pull-lg-2 text-right">
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">خشک شویی</p>
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">مبلمان</p>
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">سیستم تهویه</p>
                    <p><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">سرویس غذا</p>
                </div>
            </div>

            <div class="row mt-5 mx-2 py-2 border-theme">
                <div class="col-4 mt-2">
                    <img class="img-fluid" src="{{asset('images_site/pic3.jpg')}}">
                </div>
                <div class="col-8">

                    <div class="row">
                        <div class="col-6">
                            <p class="sormeie-theme my-2">یک تخته - دابل</p>
                            <p class="tosi-theme my-2">ظرفیت <span class="sormeie-theme"> ۲ نفر </span> </p>
                            <p class="sormeie-theme my-2">شامل صبحانه میباشد</p>
                        </div>
                        <div class="col-lg-4 col-6">
                            <p class="sormeie-theme my-2"><b>۱۵۹۰۰۰ تومان</b></p>
                            <p class="tosi-theme my-2">برای ۳ شب</p>
                        </div>
                    </div>
                    <hr class="line-theme">
                    <div class="row">
                        <div class="col-6 text-right">
                            <p class="my-1"><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">خشک شویی</p>
                            <p class="my-1"><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">مبلمان</p>
                            <p class="my-1"><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">سیستم تهویه</p>
                        </div>

                        <div class="col-6 text-right">
                            <p class="my-1"><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">خشک شویی</p>
                            <p class="my-1"><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">مبلمان</p>
                            <p class="my-1"><img class="m-features-icon" src="{{asset('images_site/checked.png')}}">سیستم تهویه</p>
                        </div>
                    </div>
                </div>
            </div>

            <h4><i class="fa fa-map-marker mt-3"></i> شیراز خیابان طالقانی  </h4>

            <div id="google-map" class="google-map mt-3"></div>

            <hr class="dottedLine-theme mt-4">

            {{----------- [ Terminal Tickets Section ] -----------}}

            <h3 id="main" class="dinar-title mt-4">ترمینال سیر گیتی</h3>

            <img class="img-fluid mt-4" src="{{asset('images_site/pic5.jpg')}}">

            {{----------- [ Terminal Tickets ] -----------}}
            <div class="row mt-5 mx-2 py-2 border-theme">
                <div class="col-4">
                    <img class="img-fluid" src="{{asset('images_site/pic5.jpg')}}">
                </div>
                <div class="col-8">
                    <h1 class="hi-fontSize-20 sormeie-theme mt-3">اتوبوس VIP</h1>

                    <div class="row mt-4">
                        <div class="col-12 col-md-6">
                            <p class="tosi-theme borderBottom-theme"> تعداد مسافران :<span class="sormeie-theme"> ۲ نفر </span></p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="tosi-theme borderBottom-theme"> ساعت حرکت :<span class="sormeie-theme"> ۱۴:۰۰ </span></p>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-12 col-md-6">
                            <p class="tosi-theme borderBottom-theme"> مسیر حرکت :<span class="sormeie-theme"> شیراز - تهران </span></p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="tosi-theme borderBottom-theme"> تاریخ حرکت :<span class="sormeie-theme"> ۹۳/۶/۶ </span></p>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-12 col-md-6 col-lg-6 pull-lg-3 pull-md-2 text-center">
                            <p class="tosi-theme borderBottom-theme"> بلیط برای دو نفر :<span class="sormeie-theme"> ۱۸۵۰۰۰ تومان </span></p>
                        </div>
                    </div>
                </div>
            </div>

            {{----------- [ Terminal Location On Map ] -----------}}
            <h4><i class="fa fa-map-marker mt-3"></i> شیراز خیابان طالقانی  </h4>

            <div id="terminal-map" class="google-map mt-3"></div>

            {{----------- [ Package Cost ] -----------}}
            <div class="row px-1 mt-5">
                <div class="col-12 text-center sormeie-bc-theme">
                    <h2 class="dinar-title white-text hi-fontSize-25 py-2 px-2">مجموع هزینه رزرو بسته ۳۵۶۰۰۰ تومان</h2>
                </div>
            </div>

            {{----------- [ Reserve Package ] -----------}}
            <div class="row mt-5 mb-4">
                <div class="col-6 col-lg-3 pull-lg-3">
                    <button class="m-btn-round btn-round-theme hi-shadow-1">بازگشت</button>
                </div>

                <div class="col-6 col-lg-3 pull-lg-3">
                    <button class="m-btn-round btn-round-filled-theme hi-shadow-1">رزرو بسته</button>
                </div>
            </div>

        </div>

    </div>

    {{----------- [ Filter haie Hotel ha ] -----------}}
    <div class="col-12 col-md-4 push-md-8 push-lg-8 col-lg-3  mt-5">

        {{----------- [ Terminal haie pishnehadi dar raste safe ] -----------}}
        <div class="m-card Topbar_dropdown_container mb-5">
            <p class="mb-4 sormeie-theme text-center">هتل های پیشنهادی شیراز</p>

            {{----------- [ Liste terminal ha ] -----------}}
            <div class="container-fluid text-right">
                @for($i = 0; $i < 4; $i++)
                <div class="row px-0">
                    <div class="col-4 px-0">
                        <img class="img-fluid" src="{{asset('images_site/pic4.jpg')}}">
                    </div>
                    <div class="col-8 pr-2 pl-0 pt-2">
                        <p class="hi-fontSize-13">هتل ستارگان</p>
                        <p class="hi-fontSize-13 tosi-theme">از ۲۲۵۰۰ تومان</p>
                    </div>
                </div>

                @if($i != 3)
                <div class="row">
                    <div class="col-12 px-0">
                        <hr class="line-theme">
                    </div>
                </div>
                @endif

                @endfor

            </div>
        </div>

        {{----------- [ Terminal haie pishnehadi dar raste safe ] -----------}}
        <div class="m-card Topbar_dropdown_container mb-5">
            <p class="mb-4 sormeie-theme text-center">ترمینال های پیشنهادی شیراز</p>

            {{----------- [ Liste terminal ha ] -----------}}
            <div class="container-fluid text-right">
                @for($i = 0; $i < 4; $i++)
                    <div class="row px-0">
                        <div class="col-4 px-0">
                            <img class="img-fluid" src="{{asset('images_site/pic5.jpg')}}">
                        </div>
                        <div class="col-8 pr-2 pl-0 pt-2">
                            <p class="hi-fontSize-13">ترمینال سیر و سفر</p>
                            <p class="hi-fontSize-13 tosi-theme">از ۲۲۵۰۰ تومان برای دو مسافر</p>
                        </div>
                    </div>

                    @if($i != 3)
                        <div class="row">
                            <div class="col-12 px-0">
                                <hr class="line-theme">
                            </div>
                        </div>
                    @endif

                @endfor

            </div>
        </div>

    </div>

    {{----------- [ Left buttons mover ] -----------}}
    <div class="col-lg-1 hidden-md-down mt-5 pl-0 text-center">

        <div class="l-stickyMover">
            <a data-scroll href="#main">
                <button class="m-btn-moveSection px-3 py-3 hi-shadow-0"><img class="img-fluid" src="{{asset('images_site/hotel.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>مشخصات هتل</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#detailsSection">
                <button class="m-btn-moveSection px-4 pt-2 pb-2 hi-shadow-0"><img class="img-fluid" src="{{asset('images_site/center-text.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>توضیحات</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#featuresSection">
                <button class="m-btn-moveSection px-4 pt-2 pb-2 hi-shadow-0"><img class="img-fluid" src="{{asset('images_site/sofa.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>امکانات</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#google-map">
                <button class="m-btn-moveSection px-4 pt-2 pb-2 hi-shadow-0"><img class="img-fluid" src="{{asset('images_site/pin-on-a-paper.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>مکان روی نقشه</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#ticketsSection">
                <button class="m-btn-moveSection px-3 pt-2 pb-1 hi-shadow-0"><img class="img-fluid" src="{{asset('images_site/bed2.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>لیست بلیط</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#main">
                <button class="m-btn-moveSection px-3 py-3 hi-shadow-0"><img class="img-fluid" src="{{asset('images_site/hotel.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>مشخصات ترمینال</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#google-map">
                <button class="m-btn-moveSection px-4 pt-2 pb-2 hi-shadow-0"><img class="img-fluid" src="{{asset('images_site/pin-on-a-paper.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>ترمینال روی نقشه</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#ticketsSection">
                <button class="m-btn-moveSection px-3 pt-2 pb-1 hi-shadow-0"><img class="img-fluid" src="{{asset('images_site/bus2.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>بلیط اتوبوس</b></p>
                <hr class="line-theme my-0">
            </a>

        </div>

    </div>

@endsection

@section('js_resources')
    <script src="{{ asset('Hi_Framework/javascript/Carousel/Other Libraries/Flicklity/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('Hi_Framework/javascript/Scroll/Other Libraries/smooth-scroll.min.js') }}"></script>

    <script>
        function initMap() {
            var uluru = {lat: 48.8583739, lng: 2.2924872};
            var map = new google.maps.Map(document.getElementById('google-map'), {
                zoom: 14,
                center: uluru,
                scrollwheel: false
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });

            var uluru = {lat: 48.8583739, lng: 2.2924872};
            var terminal_map = new google.maps.Map(document.getElementById('terminal-map'), {
                zoom: 14,
                center: uluru,
                scrollwheel: false
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: terminal_map
            });
        }

        smoothScroll.init();
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaKuMOTrKgymjzEvHe_Rz7SDzUIZnvNrQ&callback=initMap">
    </script>
@endsection