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
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">خشک شویی</p>
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">مبلمان</p>
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">سیستم تهویه</p>
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">سرویس غذا</p>
                </div>

                <div class="col-6 col-md-4 col-lg-3 pull-lg-2 text-right">
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">خشک شویی</p>
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">مبلمان</p>
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">سیستم تهویه</p>
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">سرویس غذا</p>
                </div>

                <div class="col-6 col-md-4 col-lg-3 pull-lg-2 text-right">
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">خشک شویی</p>
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">مبلمان</p>
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">سیستم تهویه</p>
                    <p><img class="m-features-icon" src="{{asset('images/checked.png')}}">سرویس غذا</p>
                </div>
            </div>

            <h4><i class="fa fa-map-marker mt-3"></i> شیراز خیابان طالقانی  </h4>

            <div id="google-map" class="google-map mt-3"></div>
        </div>

        {{----------- [ Tickets Section ] -----------}}
        <div class="m-card mt-4">

            <div class="container-fluid">
                <p class="sormeie-theme" id="ticketsSection">لیست اتاق های هتل ستارگان</p>
                <p class="tosi-theme hi-fontSize-14">با تغییر تاریخ حرکت و تعداد مسافران میتوانید اطلاعات مربوط به بلیط های موجود را مشاهده کنید.</p>

                {{----------- [ Tickets Filter ] -----------}}
                <div class="row my-3 mr-1">
                    <div class="col-6 col-md-3 px-0">
                        <div class="Topbar_dropdown dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ۹۶/۶/۶
                            </button>
                            <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-user ml-2" aria-hidden="true"></i> پروفایل من</a>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-file-text-o ml-2" aria-hidden="true"></i> مدیران</a>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-download ml-2" aria-hidden="true"></i> نسخه پشتیبانی</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-power-off ml-2" aria-hidden="true"></i>خروج</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 px-0">
                        <div class="Topbar_dropdown dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ۲ مسافر
                            </button>
                            <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-user ml-2" aria-hidden="true"></i> پروفایل من</a>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-file-text-o ml-2" aria-hidden="true"></i> مدیران</a>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-download ml-2" aria-hidden="true"></i> نسخه پشتیبانی</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-power-off ml-2" aria-hidden="true"></i>خروج</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 px-0">
                        <div class="Topbar_dropdown dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ۲ شب اقامت
                            </button>
                            <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-user ml-2" aria-hidden="true"></i> پروفایل من</a>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-file-text-o ml-2" aria-hidden="true"></i> مدیران</a>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-download ml-2" aria-hidden="true"></i> نسخه پشتیبانی</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-power-off ml-2" aria-hidden="true"></i>خروج</a>
                            </div>
                        </div>
                    </div>
                </div>

                @for($i = 0; $i < 4;$i++)
                {{----------- [ Ticket ] -----------}}
                <div class="row mt-5">
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset('images/pic3.jpg')}}">
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
                                <button class="m-btn-round btn-round-theme hi-shadow-1">رزرو اتاق</button>
                            </div>
                        </div>
                        <hr class="line-theme">
                        <div class="row">
                            <div class="col-6 text-right">
                                <p class="my-1"><img class="m-features-icon" src="{{asset('images/checked.png')}}">خشک شویی</p>
                                <p class="my-1"><img class="m-features-icon" src="{{asset('images/checked.png')}}">مبلمان</p>
                                <p class="my-1"><img class="m-features-icon" src="{{asset('images/checked.png')}}">سیستم تهویه</p>
                            </div>

                            <div class="col-6 text-right">
                                <p class="my-1"><img class="m-features-icon" src="{{asset('images/checked.png')}}">خشک شویی</p>
                                <p class="my-1"><img class="m-features-icon" src="{{asset('images/checked.png')}}">مبلمان</p>
                                <p class="my-1"><img class="m-features-icon" src="{{asset('images/checked.png')}}">سیستم تهویه</p>
                            </div>
                        </div>
                    </div>
                </div>

                @endfor
            </div>
        </div>
    </div>

    {{----------- [ Filter haie Hotel ha ] -----------}}
    <div class="col-12 col-md-4 push-md-8 push-lg-8 col-lg-3  mt-5">

        @component('components_site.select-hotel-trans')
            @slot('title')
                انتخاب هتل
            @endslot
        @endcomponent

        {{----------- [ Terminal haie pishnehadi dar raste safe ] -----------}}
        <div class="m-card Topbar_dropdown_container mb-5">
            <p class="mb-4 sormeie-theme text-center">هتل های پیشنهادی شیراز</p>

            {{----------- [ Liste terminal ha ] -----------}}
            <div class="container-fluid text-right">
                @for($i = 0; $i < 4; $i++)
                <div class="row px-0">
                    <div class="col-4 px-0">
                        <img class="img-fluid" src="{{asset('images/pic4.jpg')}}">
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

    </div>

    {{----------- [ Left buttons mover ] -----------}}
    <div class="col-lg-1 hidden-md-down mt-5 pl-0 text-center">

        <div class="l-stickyMover">
            <a data-scroll href="#main">
                <button class="m-btn-moveSection px-3 py-3"><img class="img-fluid" src="{{asset('images/hotel.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>مشخصات هتل</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#detailsSection">
                <button class="m-btn-moveSection px-4 pt-4 pb-2"><img class="img-fluid" src="{{asset('images/center-text.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>توضیحات</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#featuresSection">
                <button class="m-btn-moveSection px-4 pt-4 pb-2"><img class="img-fluid" src="{{asset('images/sofa.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>امکانات</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#google-map">
                <button class="m-btn-moveSection px-4 pt-4 pb-2"><img class="img-fluid" src="{{asset('images/pin-on-a-paper.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>مکان روی نقشه</b></p>
                <hr class="line-theme my-0">
            </a>

            <a data-scroll href="#ticketsSection">
                <button class="m-btn-moveSection px-3 pt-4 pb-1"><img class="img-fluid" src="{{asset('images/bed2.png')}}"></button>
                <p class="hi-fontSize-11 mb-1"><b>لیست بلیط</b></p>
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
        }

        smoothScroll.init();
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaKuMOTrKgymjzEvHe_Rz7SDzUIZnvNrQ&callback=initMap">
    </script>
@endsection