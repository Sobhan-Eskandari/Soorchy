<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>سورچی</title>
    {{--<link rel="icon" href="../../favicon.ico">--}}

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Bootstrap/bootstrap.min.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css_site/application.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Font/font-awesome.min.css') }}">

    <!-- Hi_Frameworkwork Styles -->
    <link rel="stylesheet" href="{{ asset('Hi_Framework/dist/Hi_Framework.css') }}">

    @yield('css_resources')

    {{--on pages we wanna user bootstrap-select the following should be included--}}
    {{--<link rel="stylesheet" href="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap.min.css') }}">--}}

</head>

<body>

<div class="container-fluid hi-shadow-1 l-header">

    {{--=========[ Nav Bar ]======== --}}
    <div class="container">
        <section class="navbarSection">
            <!---------- Logo ---------->
            <div class="row">
                <div class="col-12 text-center">
                    <img class="img-fluid header-logo" src="{{asset('images_site/soorchy_logo.png')}}">
                </div>
            </div>

            <nav class="navbar navbar-toggleable-md navbar-light bg-faded py-0">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav pr-0 l-nav">
                        <li class="nav-item active">
                            <a class="nav-link grey-text text-darken-3" href="#">خانه<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link grey-text text-darken-3" href="#">بسته پیشنهادی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link grey-text text-darken-3" href="#">هتل ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link grey-text text-darken-3" href="#">حمل و نقل</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link grey-text text-darken-3" href="#">بلاگ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link grey-text text-darken-3" href="#">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link grey-text text-darken-3" href="#">تماس با ما</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-0 grey-text text-darken-3" data-toggle="modal" data-target="#loginModal" id="loginBtn" href="#">ورود</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="signupBtn" data-toggle="modal" data-target="#registration-2" href="#">ثبت نام</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </section>
    </div>
    {{-- =========[ End of Nav Bar ]======== --}}
</div>

@component('components_site.suggester-slider')
    @slot('title')
        @yield('suggestionSlider_title')
    @endslot
@endcomponent

<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 col-lg-3">
            <div class="row">
                {{----------- [ Filter haie Hotel ha ] -----------}}
                <div class="col-12">

                    @component('components_site.select-hotel-trans')
                        @slot('title')
                            انتخاب هتل
                        @endslot
                    @endcomponent

                    {{----------- [ Hotels Stars ] -----------}}
                    <div class="m-card text-center mb-4">
                        <p class="mb-4 sormeie-theme text-center">مشاهده هتل ها بر اساس ستاره</p>

                        <img class="img-fluid m-filter-star" src="{{asset('images_site/starts.png')}}">

                        <div class="pure-radiobutton mt-3 text-right">
                            <input id="radio2" name="radio" type="radio" class="radio mt-2" checked="checked">
                            <label for="radio2" class="mt-2"></label>
                            بدون رتبه بندی
                        </div>
                    </div>

                    {{----------- [ Hotels Stars ] -----------}}
                    <div class="m-card text-center mb-5 pb-5 px-5">
                        <p class="mb-4 sormeie-theme text-center">@yield('cost_filter_title')</p>

                        <div id="cost-slider" class="noUi-target noUi-ltr noUi-horizontal"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-8">
            <div class="row">
                {{----------- [ Top filter ] -----------}}
                <div class="col-lg-9 col-md-10 mb-4 col-10">
                    <div class="m-card py-2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-4">
                                    <p class="my-2">مرتب سازی بر اساس</p>
                                </div>
                                <div class="col-6 col-md-5 col-lg-4 px-0">
                                    <div class="Topbar_dropdown dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            پر فروش ترین
                                        </button>
                                        <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-user ml-2" aria-hidden="true"></i> پروفایل من</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-power-off ml-2" aria-hidden="true"></i>خروج</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-5 col-lg-4 px-0">
                                    <div class="Topbar_dropdown dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            میزان تخفیف
                                        </button>
                                        <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-user ml-2" aria-hidden="true"></i> پروفایل من</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-power-off ml-2" aria-hidden="true"></i>خروج</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{----------- [ Switch btween grid and list ] -----------}}
                <div class="col-lg-2 pull-lg-1 col-md-2 col-2">
                    <div class="row mt-3">
                        <div class="col-lg-5 pull-lg-3 col-md-6 px-2 px-lg-3 col-6">
                            <img class="img-fluid" src="{{asset('images_site/grid.png')}}">
                        </div>
                        <div class="col-lg-5 pull-lg-3 col-md-6 px-2 px-lg-3 col-6">
                            <img class="img-fluid" src="{{asset('images_site/list.jpg')}}">
                        </div>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    @yield('hotels')
                </div>
            </div>

            {{--============[ Pagination of Page ]===========--}}
            <div class="row mt-4">
                <div class="col-auto">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link nextBtn" href="#">بعدی</a></li>
                            <li class="page-item"><a class="page-link" href="#">۱</a></li>
                            <li class="page-item"><a class="page-link" href="#">۲</a></li>
                            <li class="page-item"><a class="page-link" href="#">۳</a></li>
                            <li class="page-item"><a class="page-link prevBtn" href="#">قبلی</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


    </div>
</div>

<section class="Footer mt-5">
    <div class="container-fluid px-0" style="direction: ltr">
        <div class="Footer">
            <div class="FooterPlaceholder mx-0 row">

                <!--******* Start of Info of footer *******-->
                <div class="col-xs-12 col-md-3 col-lg-3 push-md-1">
                    <h5> سایت سورچی</h5>
                    <p  class="Card-Box_nightMode_text">دیجی‌کالا بزرگ‌ترین فروشگاه اینترنتی کشور، اینک در آستانه‌ی دهمین سال فعالیت، با گستره‌ای از کالاهای متنوع برای تمام اقشار جامعه و هر رده‌ی سنی، برای کاربران خود «تجربه‌ی لذت‌بخش یک خرید اینترنتی» را تداعی می‌کند. «ارسال سریع»، «ضمانت بهترین قیمت» و «تضمین اصل بودن کالا» سه اصل اولیه است که دیجی‌کالا از نخستین روز تاسیس سعی کرده به آن پایبند باشد</p>
                </div>
                <!--******* End of Info of footer *******-->

                <!--******* Start of links of footer *******-->
                <div class="col-xs-12 col-md-7 col-lg-7 push-md-1">
                    <div class="FooterLinks row">
                        <div class="LinksCol my-2 col-xs-12 col-md-6 col-lg-3">
                            <h5>کالای دیجیتال</h5>
                            <a class="LinksCol__link" href="#">موبایل</a>
                            <a class="LinksCol__link" href="#">تبلت و کتابخوان</a>
                            <a class="LinksCol__link" href="#">لپتاپ</a>
                            <a class="LinksCol__link" href="#">دوربین</a>
                            <a class="LinksCol__link" href="#">کامپیوتر و تجهیزات جانبی</a>
                        </div>
                        <div class="LinksCol my-2 col-xs-12 col-md-6 col-lg-3">
                            <h5>کالای دیجیتال</h5>
                            <a class="LinksCol__link" href="#">موبایل</a>
                            <a class="LinksCol__link" href="#">تبلت و کتابخوان</a>
                            <a class="LinksCol__link" href="#">لپتاپ</a>
                            <a class="LinksCol__link" href="#">دوربین</a>
                            <a class="LinksCol__link" href="#">کامپیوتر و تجهیزات جانبی</a>
                        </div>
                        <div class="LinksCol my-2 col-xs-12 col-md-6 col-lg-3">
                            <h5>کالای دیجیتال</h5>
                            <a class="LinksCol__link" href="#">موبایل</a>
                            <a class="LinksCol__link" href="#">تبلت و کتابخوان</a>
                            <a class="LinksCol__link" href="#">لپتاپ</a>
                            <a class="LinksCol__link" href="#">دوربین</a>
                            <a class="LinksCol__link" href="#">کامپیوتر و تجهیزات جانبی</a>
                        </div>
                        <div class="LinksCol my-2 col-xs-12 col-md-6 col-lg-3">
                            <h5>کالای دیجیتال</h5>
                            <a class="LinksCol__link" href="#">موبایل</a>
                            <a class="LinksCol__link" href="#">تبلت و کتابخوان</a>
                            <a class="LinksCol__link" href="#">لپتاپ</a>
                            <a class="LinksCol__link" href="#">دوربین</a>
                            <a class="LinksCol__link" href="#">کامپیوتر و تجهیزات جانبی</a>
                        </div>
                    </div>

                </div>
                <!--******* End of links of footer *******-->
            </div>
            <hr class="nightMode_line my-0">

            <div class="FooterPlaceholder mx-0 pb-4 row">

                <!--******* Start of Logos of footer *******-->
                <div class="Logo col-xl-1 push-xl-1 col-lg-2 col-md-4">
                    <img class="img-fluid" src="{{ asset('images_site/logo.png') }}">
                </div>
                <div class="Logo col-xl-1 push-xl-1 col-lg-2 col-md-4">
                    <img class="img-fluid" src="{{ asset('images_site/logosamandehi.png') }}">
                </div>
                <div class="Logo col-xl-2 text-left push-xl-1 col-lg-2 col-md-4">
                    {{--<img class="img-fluid p-2" src="{{ asset('images/horoofnegar.png') }}">--}}
                </div>
                <!--******** End of Logos of footer ********-->

                <!--******* Start of Signup of footer *******-->
                <div class="SignUpNewsLetter col-xl-5 push-xl-2 col-lg-6 push-lg-0 col-md-8 push-md-1 col-12 mt-md-4 mt-4">
                    <h5>برای باخبر شدن از آخرین اخبار عضو شوید</h5>
                    <form class="form-inline my-3">
                        <div class="form-group">
                            <input placeholder="آدرس پست الکترونیکی خود را وارد کنید" type="email" class="SignUpNewsLetter__input form-control ml-4">
                            <button type="button" class="btn btn-danger">عضو میشوم</button>
                        </div>
                    </form>
                </div>
                <!--******** End of Signup of footer ********-->

            </div>

            <hr class="nightMode_line my-0">

            <div class="FooterPlaceholder mx-0 pb-4 row text-center">

                <!--******* Start of Share button of footer *******-->
                <div class="shareBtn facebook_btn">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </div>
                <div class="shareBtn tweeter_btn">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </div>
                <div class="shareBtn googlePlus_btn">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </div>
                <div class="shareBtn linkedIn_btn">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </div>
                <div class="shareBtn instagram_btn">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
                <div class="shareBtn telegram_btn">
                    <i class="fa fa-telegram" aria-hidden="true"></i>
                </div>
                <!--******* End of Share button of footer *******-->
            </div>

            <hr class="nightMode_line my-0">

            <div class="FooterPlaceholder mx-0 pb-4 row">
                <div class="col-12 text-center">
                    <p>طراحی شده توسط تیم ایمگنا</p>
                </div>

            </div>

        </div>
    </div>


    {{--=========[ Login Modal ]======== --}}
    <div class="modal fade bd-example-modal-lg mt-5" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row mt-5">
                    <div class="col-10 pull-1 col-lg-6 pull-lg-3">
                        <h4 class="text-center dinar-title">وارد حساب کاربری خود شوید</h4>
                        <hr class="sormeie-theme" style="width: 50%">

                        <p class="sormeie-theme text-center mt-5">کاربر گرامی برای رزرو اقامتگاه و بلیط اتوبوس ابتدا باید وارد حساب کاربری خود شوید</p>

                        <p class="sormeie-theme text-center mt-5 mb-1">در صورتیکه در سورچی حساب ندارید</p>

                        <a href="#"><p class="green-text text-center borderBottom-green-theme my-0">اینجا را کلیک کنید</p></a>
                        <hr class="green mb-5" style="width: 35%">

                        <form class="text-center">
                            <input type="text" class="m-input mb-3" placeholder="پست الکترونیکی خود را وارد کنید">
                            <input type="text" class="m-input" placeholder="رمز عبور خود را وارد کنید">
                        </form>

                        <a href="#"><p class="green-text hi-fontSize-12 text-center borderBottom-green-theme mt-1 mb-0">رمز عبور خود را فراموش کرده اید</p></a>
                        <hr class="green mb-4" style="width: 42%">

                        <div class="row">
                            <div class="col-5 pull-3 col-lg-5 pull-lg-3">
                                <button class="m-btn-round btn-round-filled-theme hi-shadow-1 mb-5 mr-2">ورود</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--=========[ Registration Modal ]======== --}}
    <div class="modal fade bd-example-modal-lg mt-5" id="registration-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row mt-5">
                    <div class="col-10 pull-1 col-lg-6 pull-lg-3">
                        <h4 class="text-center dinar-title">حساب کاربری خود را ایجاد کنید</h4>
                        <hr class="sormeie-theme" style="width: 50%">

                        <div class="row mt-5 mb-3">
                            <div class="col-6 text-left">
                                <img class="img-fluid hi-size-9" src="{{asset('images_site/manager.png')}}">
                                <div class="pure-radiobutton mt-3 ml-4 pl-3">
                                    <input id="radio2" name="radio" type="radio" class="radio" checked="checked">
                                    <label for="radio2"></label>
                                </div>
                            </div>

                            <div class="col-6">
                                <img class="img-fluid hi-size-9" src="{{asset('images_site/woman.png')}}">
                                <div class="pure-radiobutton mr-3 mt-3">
                                    <input id="radio1" name="radio" type="radio" class="radio" checked="checked">
                                    <label for="radio1"></label>
                                </div>
                            </div>
                        </div>

                        <form class="text-center">
                            <input type="text" class="m-input mb-3" placeholder="پست الکترونیکی خود را وارد کنید">
                            <input type="text" class="m-input" placeholder="رمز عبور خود را وارد کنید">
                        </form>

                        <a href="#"><p class="green-text hi-fontSize-12 text-center borderBottom-green-theme mt-1 mb-0">رمز عبور خود را فراموش کرده اید</p></a>
                        <hr class="green mb-4" style="width: 42%">

                        <div class="row">
                            <div class="col-5 pull-3 col-lg-5 pull-lg-3">
                                <button class="m-btn-round btn-round-filled-theme hi-shadow-1 mb-5 mr-3">ثبت نام</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--=========[ Registration Modal ]======== --}}
    <div class="modal fade bd-example-modal-lg mt-5" id="registration-2" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row mt-5">
                    <div class="col-10 pull-1 col-lg-6 pull-lg-3">
                        <h4 class="text-center dinar-title">حساب کاربری خود را ایجاد کنید</h4>
                        <hr class="sormeie-theme" style="width: 50%">

                        <div class="row mt-3">
                            <div class="col-4 pull-4">
                                <button class="m-btn-round btn-round-filled-theme hi-fontSize-12 px-2">انتخاب عکس</button>
                            </div>
                        </div>

                        <p class="tosi-theme text-center hi-fontSize-13 mt-2">میتوانید عکسی برای پرفایل خود آپلود کنید</p>

                        <form class="text-center">
                            <input type="text" class="m-input mb-3 mt-3" placeholder="نام خود را وارد کنید">
                            <input type="text" class="m-input mb-3" placeholder="نام خانوادگی خود را وارد کنید">
                            <input type="text" class="m-input" placeholder="پست الکترونیکی خود را وارد کنید">
                        </form>

                        <a href="#"><p class="green-text hi-fontSize-12 text-center borderBottom-green-theme mt-1 mb-0">رمز عبور خود را فراموش کرده اید</p></a>
                        <hr class="green mb-4" style="width: 42%">

                        <div class="row">
                            <div class="col-5 pull-3 col-lg-5 pull-lg-3">
                                <button class="m-btn-round btn-round-filled-theme hi-shadow-1 mb-5 mr-3">مرحله بعد <i class="fa fa-chevron-left"></i> </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</section>



<script src="{{ asset('Resources/js/Jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/wNumb.js') }}"></script>
<script src="{{ asset('Hi_Framework/components/Slider/Other Libraries/noUI/nouislider.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/css/Animation/Other Libraries/Waves/waves.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/css/Animation/Other Libraries/Animate/dropdownAnim.js') }}"></script>
<script src="{{ asset('Hi_Framework/javascript/Carousel/Other Libraries/Flicklity/flickity.pkgd.min.js') }}"></script>
<script src="{{ asset('js/SizeDetector.js') }}"></script>
@yield('js_resources')
<script src="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('js/application.js') }}"></script>




{{--on pages we wanna user bootstrap-select the following should be included--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
{{--<script src="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap.min.js') }}"></script>--}}

</body>
</html>
