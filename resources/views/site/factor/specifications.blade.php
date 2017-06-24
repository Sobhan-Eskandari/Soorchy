@extends('layouts.site')


@section('content')

    <div class="col-12 col-md-3 mt-4">
        <div class="m-card p-0">
            <img class="img-fluid" src="{{asset('images_site/pic2.jpg')}}">
        </div>

        {{----------- [ Terminal image info Card ] -----------}}
        <div class="m-card py-2">
            <div class="row">
                <div class="col-8">
                    <p class="sormeie-theme hi-fontSize-14 mb-0">هتل ستارگان</p>
                </div>
                <div class="col-4">
                    <p class="hi-fontSize-14 mb-0 text-left">تهران <i class="fa fa-map-pin"></i> </p>
                </div>
            </div>
        </div>

        <div class="m-card p-0 mt-4">
            <img class="img-fluid" src="{{asset('images_site/pic5.jpg')}}">
        </div>

        {{----------- [ Terminal image info Card ] -----------}}
        <div class="m-card py-2">
            <div class="row">
                <div class="col-8">
                    <p class="sormeie-theme hi-fontSize-14 mb-0">ترمینال دیرسیر گیتی</p>
                </div>
                <div class="col-4">
                    <p class="hi-fontSize-14 mb-0 text-left">تهران <i class="fa fa-map-pin"></i> </p>
                </div>
            </div>
        </div>



        {{----------- [ Reserve Code Cart ] -----------}}
        <div class="m-card py-2 mt-3">
            <div class="row">
                <div class="col-6">
                    <p class="sormeie-theme hi-fontSize-14 mb-0"><b>کد رزرو</b></p>
                </div>
                <div class="col-6">
                    <p class="hi-fontSize-14 mb-0 green-text text-left">۱۲۳۲۳۲۳۴ </p>
                </div>
            </div>
        </div>

        {{----------- [ Reserve person info ] -----------}}
        <div class="m-card py-2 mt-3">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="dinar-title text-center mt-3">مشخصات رزرو کننده</p>
                    <hr class="m-halfLine">

                    <p class="sormeie-theme mt-4 mb-1">فهیمه رفیعی</p>
                    <p class="frab-title my-1">ser@gmail.com</p>
                    <p class="my-1"> ۰۹۱۱۲۳۴۴۴۴۴ <i class="fa fa-phone"></i></p>
                </div>
            </div>
        </div>

        {{----------- [ Final Cost ] -----------}}
        <div class="m-card py-2 mt-3 mb-5">
            <div class="row mt-2">
                <div class="col-6 col-md-12 col-lg-5 text-md-center text-lg-right">
                    <p class="sormeie-theme mb-1">مبلغ کل</p>
                </div>
                <div class="col-6 col-md-12 col-lg-7 text-left text-md-center text-lg-left">
                    <p class="sormeie-theme mb-1">۴۵۰۰۰۰۰۰ تومان</p>
                </div>
            </div>
            <hr class="m-halfLine">
            <div class="row mt-2">
                <div class="col-6 col-md-12 col-lg-5 text-md-center text-lg-right">
                    <p class="sormeie-theme mb-1">تخفیف</p>
                </div>
                <div class="col-6 col-md-12 col-lg-7 text-left text-md-center text-lg-left">
                    <p class="red-text mb-1">۴۵۰۰۰۰۰۰ تومان</p>
                </div>
            </div>
            <hr class="m-halfLine">
            <p class="text-center mt-3">مبلغ قابل پرداخت</p>
            <p class="text-center green-text mb-2">۳۵۶۰۰۰ تومان</p>
        </div>


    </div>

    <div class="col-12 col-md-9 mt-4">

        {{----------- [ Room Info ] -----------}}
        <div class="m-card">
            <h4 class="dinar-title mt-2 text-center">مشخصات اتاق</h4>
            <hr style="width: 10%" class="m-halfLine">

            <div class="row text-center mt-5">
                <div class="col-3">
                    <p class="tosi-theme">نوع اتاق : دو تخته توبین</p>
                </div>
                <div class="col-3">
                    <p class="tosi-theme">تاریخ ورود : ۹۵/۵/۵</p>
                </div>
                <div class="col-3">
                    <p class="tosi-theme">ساعت تخلیه اتاق : ۹۶/۲/۲</p>
                </div>
                <div class="col-3">
                    <p class="tosi-theme">ظرفیت اتاق : ۲ نفر</p>
                </div>
            </div>
            <div class="row text-center mt-1">
                <div class="col-3">
                    <p class="tosi-theme">مدت اقامت : ۲ شب</p>
                </div>
                <div class="col-3">
                    <p class="tosi-theme">تاریخ خروج : ۹۵/۵/۵</p>
                </div>
                <div class="col-3">
                    <p class="tosi-theme">ساعت تحویل اتاق : ۹۶/۲/۲</p>
                </div>
                <div class="col-3">
                    <p class="tosi-theme">شامل صبحانه</p>
                </div>
            </div>

            <hr class="m-fullLine">

            {{----------- [ Location Destination Info ] -----------}}
            <p class="tosi-theme mt-5">هزینه اقامتگاه : <span class="m-offpercentLine">۲۲۰۰۰۰ تومان</span> <span class="sormeie-theme"><b>۱۹۵۰۰۰ تومان</b></span> برای ۲ نفر</p>
            <p class="tosi-theme mb-2"><i class="fa fa-map-pin"></i> رشت سبزه میدان پیرسرا</p>
        </div>

        {{----------- [ Terminal Info ] -----------}}
        <div class="m-card mt-4">
            <h4 class="dinar-title mt-2 text-center">اطلاعات بلیط اتوبوس</h4>
            <hr style="width: 10%" class="m-halfLine">
            <div class="row text-center mt-5">
                <div class="col-3">
                    <p class="tosi-theme">نوع اتوبوس : VIP</p>
                </div>
                <div class="col-3">
                    <p class="tosi-theme">نعداد صندلی رزرو شده : ۲</p>
                </div>
                <div class="col-3">
                    <p class="tosi-theme">تاریخ حرکت : ۹۶/۲/۲</p>
                </div>
                <div class="col-3">
                    <p class="tosi-theme">ساعت حرکت : ۱۴:۳۰</p>
                </div>
            </div>
            <hr class="m-fullLine">

            {{----------- [ Location Destination Info ] -----------}}
            <p class="tosi-theme mt-5">بلیط اتوبوس : <span class="m-offpercentLine">۲۲۰۰۰۰ تومان</span> <span class="sormeie-theme"><b>۱۹۵۰۰۰ تومان</b></span> برای ۲ نفر</p>
            <p class="tosi-theme mb-2"><i class="fa fa-map-pin"></i> رشت سبزه میدان پیرسرا</p>
        </div>


        {{----------- [ Passengers Info ] -----------}}
        <h4 class="dinar-title mt-5 text-center">مشخصات مسافران برای بسته</h4>
        <hr style="width: 10%" class="m-halfLine">
        <div class="m-card mt-4">
            <div class="row">
                <div class="col-12 my-2 col-lg-3">
                    <input type="text" tabindex="1" class="m-round-input" name="name" placeholder="نام و نام خانوادگی">
                </div>
                <div class="col-12 my-2 col-lg-3">
                    <input type="text" tabindex="2" class="m-round-input" name="name" placeholder="پست الکترونیکی">
                </div>
                <div class="col-12 my-2 col-lg-2">
                    <input type="number" tabindex="3" class="m-round-input" name="name" placeholder="شماره تلفن">
                </div>
                <div class="col-12 my-2 col-lg-2">
                    <div class="Topbar_dropdown dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           کشور
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
                <div class="col-12 my-2 col-lg-2">
                    <div class="Topbar_dropdown dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            جنسیت
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
        </div>

        <div class="m-card mt-4">
            <div class="row">
                <div class="col-12 my-2 col-lg-3">
                    <input type="text" tabindex="1" class="m-round-input" name="name" placeholder="نام و نام خانوادگی">
                </div>
                <div class="col-12 my-2 col-lg-3">
                    <input type="text" tabindex="2" class="m-round-input" name="name" placeholder="پست الکترونیکی">
                </div>
                <div class="col-12 my-2 col-lg-2">
                    <input type="number" tabindex="3" class="m-round-input" name="name" placeholder="شماره تلفن">
                </div>
                <div class="col-12 my-2 col-lg-2">
                    <div class="Topbar_dropdown dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            کشور
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
                <div class="col-12 my-2 col-lg-2">
                    <div class="Topbar_dropdown dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            جنسیت
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
        </div>

        <h5 class="sormeie-theme mt-4 medium-title">این اتاق قابلیت اضافه شدن تخت ندارد</h5>

        <h5 class="sormeie-theme mt-4 medium-title">این بسته قابلیت اضافه کردن کودک را دارد <button class="m-btn-round btn-round-filled-theme l-autoWidth hi-fontSize-14">+ کودک </button> </h5>

        <div class="m-card mt-4">
            <div class="row">
                <div class="col-12 my-2 col-lg-3">
                    <input type="text" tabindex="1" class="m-round-input" name="name" placeholder="نام و نام خانوادگی">
                </div>
                <div class="col-12 my-2 col-lg-3">
                    <input type="text" tabindex="2" class="m-round-input" name="name" placeholder="پست الکترونیکی">
                </div>
                <div class="col-12 my-2 col-lg-2">
                    <input type="number" tabindex="3" class="m-round-input" name="name" placeholder="شماره تلفن">
                </div>
                <div class="col-12 my-2 col-lg-2">
                    <div class="Topbar_dropdown dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            کشور
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
                <div class="col-12 my-2 col-lg-2">
                    <div class="Topbar_dropdown dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            جنسیت
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
        </div>

        <div class="mt-4 white-text">
            <div class="row">
                <div class="col-12 text-center">
                    <button class="m-btn-flat btn-flat-theme py-2">محاسبه قیمت نهایی</button>
                </div>
            </div>
        </div>

        {{----------- [ Cost Info ] -----------}}
        <div class="m-card mt-4">
            {{----------- [ Full Cost Info ] -----------}}
            <div class="row mt-2">

                <div class="col-4 text-center">
                    <p class="sormeie-theme"><b>مبلغ کل</b></p>
                    <p class="sormeie-theme">۴۵۰۰۰ تومان</p>
                </div>

                <div class="col-3 text-center m-doubleSideBorder">
                    <p class="sormeie-theme"><b>تخفیف</b></p>
                    <p class="red-text">۴۵۰۰۰ تومان</p>
                </div>

                <div class="col-4 text-center">
                    <p class="sormeie-theme"><b>مبلغ قابل پرداخت</b></p>
                    <p class="green-text">۴۵۰۰۰ تومان</p>
                </div>

            </div>
        </div>


        <div class="row mt-5">
            <div class="col-7 col-md-5 col-lg-4 col-xl-3">
                <button class="m-btn-round btn-round-filled-theme white-text-text">ادامه</button>
            </div>
            <div class="col-5 col-md-3 col-lg-3 col-xl-2">
                <button class="m-btn-round btn-round-theme green-text">انصراف</button>
            </div>
        </div>

    </div>


@endsection

