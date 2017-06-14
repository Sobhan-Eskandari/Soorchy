<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<link rel="icon" href="../../favicon.ico">--}}

    <title>سورچی</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Bootstrap/bootstrap.min.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/application.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Font/font-awesome.min.css') }}">

    <!-- Hi_Frameworkwork Styles -->
    <link rel="stylesheet" href="{{ asset('Hi_Framework/dist/Hi_Framework.css') }}">

</head>

<body>

<section class="Header">
    <div class="imageContainer l-profile-imageHeader">
        <div class="container text-center">
            <h3 class="pt-3 text-white">سورچی</h3>

            <div class="row mt-3">
                <div class="col-12">

                    {{--=========[ Nav Bar ]======== --}}
                    <section class="navbarSection">
                        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">

                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav pr-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">خانه<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">بسته پیشنهادی</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">هتل ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">حمل و نقل</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">بلاگ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">درباره ما</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">تماس با ما</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link py-0" id="loginBtn" href="#">ورود</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="signupBtn" href="#">ثبت نام</a>
                                    </li>
                                </ul>
                            </div>

                        </nav>
                    </section>
                    {{-- =========[ End of Nav Bar ]======== --}}


                </div>
            </div>
        </div>
    </div>
</section>

{{-- =========[ Profile Section ]======== --}}
<section class="l-profile">
    <div class="container hi-shadow-5 my-5">
        <div class="row">
            <div class="col-3 grey lighten-3 text-center">
                <img class="img-fluid m-profileAvatar hi-shadow-3" src="{{asset('images/pro.png')}}">

                <h4 class="dinar-title mt-4">فیهمه رفیعی</h4>
                <p class="tosi-theme frab-title mt-3">fahim@gmail.com</p>

                <button class="m-btn-tranparent dinar-title py-4">رزروهای من</button>

                <button class="m-btn-tranparent dinar-title py-4">ویرایش پروفایل</button>

                <button class="m-btn-tranparent dinar-title py-4">تغییر کلمه عبور</button>

                <button class="m-btn-tranparent dinar-title py-4">خروج</button>
            </div>

            <div class="col-9 white">

                @yield('profile')




            </div>

        </div>
    </div>
</section>

<section class="Footer">
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
                    <img class="img-fluid" src="{{ asset('images/logo.png') }}">
                </div>
                <div class="Logo col-xl-1 push-xl-1 col-lg-2 col-md-4">
                    <img class="img-fluid" src="{{ asset('images/logosamandehi.png') }}">
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
</section>




<!-- Bootstrap core JavaScript
================================================== -->
<script src="{{ asset('Resources/js/Jquery/jquery-3.2.0.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('Resources/js/Flickity/flickity.pkgd.min.js') }}"></script>

<script>
    $('.carousel').flickity({
        // options
        contain: false,
        pageDots: false,
        rightToLeft: true,
        wrapAround: true
    });
</script>
</body>
</html>
