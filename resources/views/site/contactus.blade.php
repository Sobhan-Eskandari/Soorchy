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
    <link rel="stylesheet" href="{{ asset('css_site/application.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Font/font-awesome.min.css') }}">

    <!-- Hi_Frameworkwork Styles -->
    <link rel="stylesheet" href="{{ asset('Hi_Framework/dist/Hi_Framework.css') }}">

</head>

<body>

<section>
    <div class="imageContainer l-contactus-imageHeader">
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

                    <h2 class="dinar-title white-text mt-5">هدف ما جلب رضایت مشتری است</h2>
                    <h3 class="dinar-title-thin white-text mt-5">تیم توسعه ایمگنا دو سال پیش این ایده را مطرح کرد</h3>
                    <h3 class="dinar-title-thin white-text">و در حال حاظر در حال پیاده سازی آن میباشد</h3>
                    <hr style="width: 25%" class="green-line-theme">

                    <div class="row justify-content-center mt-4">
                        <div class="col-3 col-md-1 ">
                            <img class="hi-size-5" src="{{asset('images_site/instagram-soorchy.png')}}">
                        </div>
                        <div class="col-3 col-md-1">
                            <img class="hi-size-5" src="{{asset('images_site/twiter.png')}}">
                        </div>
                        <div class="col-3 col-md-1">
                            <img class="hi-size-5" src="{{asset('images_site/facebook.png')}}">
                        </div>
                    </div>

                    {{--=========[ Arrow Down ]======== --}}
                    <div class="row m-downArrow mt-md-5">
                        <div class="col-md-12 col-12">
                            <div class="mt-md-5"><i class="fa fa-chevron-down white-text" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row mt-5">
        <div class="col-12 mt-1">
            <h1 class="dinar-title text-center green-text">نظرات خود را برای ما بفرستید</h1>
            <hr style="width: 20%" class="green-line-theme">

            <div class="row justify-content-center mt-4">
                <div class="col-11 col-md-7 col-lg-6">
                    <div class="m-card p-5">
                        <form>
                            <div class="form-group row px-5 mb-5">
                                <input class="m-simple-input" name="name" placeholder="نام و نام خانوادگی">
                            </div>

                            <div class="form-group row px-5 my-5">
                                <input class="m-simple-input" name="name" placeholder="پست الکترونیکی خود را وارد کنید">
                            </div>

                            <div class="form-group row px-5 my-5">
                                <input class="m-simple-input" name="name" placeholder="پیغام">
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-12 col-md-4">
                                    <button class="m-btn-round btn-round-filled-theme mt-4">ارسال</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@component('components_site.footer')@endcomponent