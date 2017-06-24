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

<section class="Header">
    <div class="imageContainer">
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
                                        <a class="nav-link" href="{{url('/')}}">خانه<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">بسته پیشنهادی</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/hotels')}}">هتل ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('terminals')}}">حمل و نقل</a>
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

                    {{--=========[ Quick Search ]======== --}}
                    <div class="row header_quickSearch">
                        <div class="col-md-4 pull-md-4 col-12 text-center">
                            <h5 class="text-white">بسته مسافرتی خود را جست و جو کنید!</h5>

                            {{--=========[ Filters ]======== --}}
                            <div class="row mt-4">
                                <div class="col-md-6 pr-4 pl-1 col-12">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            شهر مبدا
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-4 pr-1 col-12">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            شهر مبدا
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--=========[ Filters ]======== --}}
                            <div class="row mt-3">
                                <div class="col-md-6 pr-4 pl-1 col-12">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            شهر مبدا
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-4 pr-1 col-12">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            شهر مبدا
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12 col-12">
                                    <button class="searchBtn">جست و جوی بسته پیشنهادی</button>
                                </div>
                            </div>

                            {{--=========[ Arrow Down ]======== --}}
                            <div class="row downArrow">
                                <div class="col-md-12 col-12">
                                    <div><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{--=========[ End of Quick Search ]======== --}}
                </div>
            </div>
        </div>
    </div>
</section>

{{--=========[ Site Info Section ]======== --}}
<section class="siteInfo">
    <div class="container">
        <div class="row">
            <div class="col-8 pull-2">
                <hr class="mt-5">
                <p class="text-center">سلسله مراتبی است که کلاس هایی را از کلاس عام تر به زیرکلاس های خاص تر طبقه بندی
                    یا درجه بندی می کند که گاهی سلسله مرتب های ارث بری نیز نامیده می شوند.سلسله مراتبی است که
                    کلاس هایی را از کلاس عام تر به زیرکلاس های خاص تر طبقه بندی یا درجه بندی می کند که
                    گاهی سلسله مرتب های ارث بری نیز نامیده می شوند.</p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 text-center siteinfo_bed">
                <p class="siteinfo_detail">هتل مورد علاقه خود را انتخاب کنید</p>
            </div>
            <div class="col-12 col-md-4 text-center siteinfo_bus">
                <p class="siteinfo_detail"> بلیط اتوبوس خود را برای رفتن تهیه کنید</p>
            </div>
            <div class="col-12 col-md-4 text-center siteinfo_coin">
                <p class="siteinfo_detail">هزینه سفر خود را مدیریت کنید</p>
            </div>

        </div>
    </div>
</section>

{{--=========[ Boxes Section ]========--}}
<section class="BoxesSection‌">
    <div class="imageContainer">
        <div class="container">
            <div class="row pt-4">
                <div class="col-12">
                    <div class="carousel" data-flickity>
                        <div class="carousel-cell">
                            <!--sample div which can be put here-->
                            @component('components_site.box-card')@endcomponent
                        </div>
                        <div class="carousel-cell">
                            <!--sample div which can be put here-->
                            @component('components_site.box-card')@endcomponent
                        </div>
                        <div class="carousel-cell">
                            <!--sample div which can be put here-->
                            @component('components_site.box-card')@endcomponent
                        </div>
                        <div class="carousel-cell">
                            <!--sample div which can be put here-->
                            @component('components_site.box-card')@endcomponent
                        </div>
                        <div class="carousel-cell">
                            <!--sample div which can be put here-->
                            @component('components_site.box-card')@endcomponent
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <button class="showAllPackage">بسته مناسب خود را بسازید</button>
                </div>
            </div>

        </div>
    </div>


</section>


{{--=========[ Hotels Section ]======== --}}
<section class="InfoSection">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h1 class="infoTitle">هتل ها</h1>
                <hr class="infoUnderline">
                <br>
                <div class="row mt-5">
                    @for($i = 0; $i < 4; $i++)
                    <div class="col-md-3 px-4 col-12">
                        @component('components_site.hotel-card')

                            @slot('card_title')
                                ستارگان
                            @endslot

                            @slot('card_location')
                                رشت
                            @endslot

                            @slot('card_offPercent')
                                ۲۲
                            @endslot

                            @slot('card_fromCost')
                                ۲۲۲۰۰۰
                            @endslot

                            @slot('card_toCost')
                                ۱۸۵۰۰۰
                            @endslot

                            @slot('card_Count')
                                ۳ شب
                            @endslot

                        @endcomponent
                    </div>
                    @endfor
                </div>
                <br>
                {{--//vbh--}}
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <button class="showAllHotels">هتل های بیشتر</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--=========[ Transportation Section ]======== --}}
<section class="InfoSection grey lighten-3">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h1 class="infoTitle">حمل و نقل</h1>
                <hr class="infoUnderline">

                <br>
                <div class="row mt-5">
                    @for($i = 0; $i < 4; $i++)
                        <div class="col-md-3 px-4 col-12">
                            @component('components_site.hotel-card')

                                @slot('card_title')
                                    ترمینال گیتی پیما
                                @endslot

                                @slot('card_offPercent')
                                    ۲۲
                                @endslot

                                @slot('card_location')
                                    رشت
                                @endslot

                                @slot('card_fromCost')
                                    ۲۲۲۰۰۰
                                @endslot

                                @slot('card_toCost')
                                    ۱۸۵۰۰۰
                                @endslot

                                @slot('card_Count')
                                    ۳ نفر
                                @endslot

                            @endcomponent

                        </div>
                    @endfor
                </div>
                <br>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <button class="showAllHotels">ترمینال های بیشتر</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@component('components_site.footer')@endcomponent




<!-- Bootstrap core JavaScript
================================================== -->
<script src="{{ asset('Resources/js/Jquery/jquery-3.2.0.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/javascript/Carousel/Other Libraries/Flicklity/flickity.pkgd.min.js') }}"></script>

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
