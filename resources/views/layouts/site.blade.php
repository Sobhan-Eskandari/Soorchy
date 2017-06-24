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

<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>

@component('components_site.footer')@endcomponent



<script src="{{ asset('Resources/js/Jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/css/Animation/Other Libraries/Waves/waves.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/css/Animation/Other Libraries/Animate/dropdownAnim.js') }}"></script>
@yield('js_resources')
<script src="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('js/application.js') }}"></script>
<script src="{{ asset('js/application_site.js') }}"></script>


{{--on pages we wanna user bootstrap-select the following should be included--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
{{--<script src="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap.min.js') }}"></script>--}}

</body>
</html>
