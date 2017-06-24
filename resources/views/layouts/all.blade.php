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
                            <a class="nav-link grey-text text-darken-3" href="{{url('/')}}">خانه<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link grey-text text-darken-3" href="#">بسته پیشنهادی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link grey-text text-darken-3" href="{{url('hotels')}}">هتل ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link grey-text text-darken-3" href="{{url('terminals')}}">حمل و نقل</a>
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

@component('components_site.footer')@endcomponent



<script src="{{ asset('Resources/js/Jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/wNumb.js') }}"></script>
<script src="{{ asset('Hi_Framework/components/Slider/Other Libraries/noUI/nouislider.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/css/Animation/Other Libraries/Waves/waves.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/css/Animation/Other Libraries/Animate/dropdownAnim.js') }}"></script>
<script src="{{ asset('Hi_Framework/javascript/Carousel/Other Libraries/Flicklity/flickity.pkgd.min.js') }}"></script>
@yield('js_resources')
<script src="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('js/application.js') }}"></script>
<script src="{{ asset('js/application_site.js') }}"></script>




{{--on pages we wanna user bootstrap-select the following should be included--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
{{--<script src="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap.min.js') }}"></script>--}}

</body>
</html>
