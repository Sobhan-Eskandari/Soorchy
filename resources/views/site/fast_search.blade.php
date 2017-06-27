@extends('layouts.all')

@section('hotels')


<div class="col-12">

    <div class="row mt-4">
        <div class="col-12">
            <div class="m-card p-0">
                <div class="row justify-content-center">
                    <div class="col-5 col-lg-3 col-8">
                        <img class="img-fluid mt-lg-3 mr-lg-3 mb-lg-3 mt-3" src="{{asset('images_site/pic3.jpg')}}">
                    </div>

                    <div class="col-5 col-lg-9 col-12">

                        {{-- =========[ Hotel Name ]======== --}}
                        <div class="row mt-3 mr-2">
                            <div class="col-lg-auto col-xl-auto col-12">
                                <h4 id="main" class="">هتل آپارتمان ستارگان</h4>
                            </div>

                            <div class="col-12 col-md-12 col-lg-3 pull-xl-4 pull-lg-3">
                                <img class="m-stars" src="{{asset('images_site/stars.png')}}">
                            </div>

                        </div>

                        {{-- =========[ Hotel Off Percent ]======== --}}
                        <div class="row">
                            <div class="col-12">
                                <p class="red-text mt-2 mb-0 mr-4" ><b>۲۲ ٪ تخفیف </b></p>
                                <p class="tosi-theme mt-2 mb-0 mr-4"><i class="fa fa-map-pin"></i>سبزه میدان پیرسرا</p>
                            </div>
                        </div>

                        {{-- =========[ Hotel Cost ]======== --}}
                        <div class="row mb-1 mt-3 mt-xl-5">
                            <div class="col-lg-8 col-12">
                                <p class="tosi-theme mb-2 px-4">هزینه اقامتگاه : <span class="m-offpercentLine">۱۷۸۰۰۰ تومان </span> <span class="sormeie-theme"><b>۱۵۰۰۰۰ تومان</b></span> برای ۲ نفر</p>
                            </div>
                            <div class="col-lg-4 col-12">
                                <button class="m-btn-tranparent green-text hi-shadow-0 mr-4"><a href="#">
                                        جزییات بیشتر
                                        <br><i class="fa fa-chevron-down"></i></a></button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-5 col-lg-3 col-8">
                        <img class="img-fluid mt-lg-3 mr-lg-3 mb-lg-3 mt-3" src="{{asset('images_site/pic4.jpg')}}">
                    </div>

                    <div class="col-5 col-lg-9 col-12">

                        <div class="row mt-5 mr-2">
                            <div class="col-6">
                                <h5 class="sormeie-theme">دو تخته دابل</h5>
                            </div>
                            <div class="col-6">
                                <h5 class="sormeie-theme">شامل صبحانه میباشد</h5>
                            </div>
                        </div>

                        <div class="row mt-5 mr-2">
                            <div class="col-6">
                                <h5 class="tosi-theme medium-title">ظرفیت <span class="sormeie-theme">۲ نفر</span> </h5>
                            </div>
                            <div class="col-6">
                                <h5 class="sormeie-theme medium-title">۱۸۵۰۰۰ تومان <span class="tosi-theme">برای ۳ شب</span> </h5>
                            </div>
                        </div>

                    </div>
                </div>

                <hr class="dottedLine-theme">

                <div class="row justify-content-center">
                    <div class="col-5 col-lg-3 col-8">
                        <img class="img-fluid mt-lg-3 mr-lg-3 mb-lg-3" src="{{asset('images_site/pic5.jpg')}}">
                    </div>

                    <div class="col-5 col-lg-9 col-12">

                        {{-- =========[ Terminal Name ]======== --}}
                        <div class="row mt-3 mr-2">
                            <div class="col-lg-auto col-xl-auto col-12">
                                <h4 id="main" class="">ترمینال دیرسیر گیتی</h4>
                            </div>

                            {{-- =========[ Terminal Route ]======== --}}
                            <div class="col-12 col-md-12 col-lg-3 pull-xl-4 pull-lg-3">
                                <p class="sormeie-theme mb-1">رشت - شیراز </p>
                            </div>

                        </div>

                        {{-- =========[ Terminal off ]======== --}}
                        <div class="row">
                            <div class="col-12">
                                <p class="red-text mt-2 mb-0 mr-4" ><b>۲۲ ٪ تخفیف </b></p>
                                <p class="tosi-theme mt-2 mb-0 mr-4"><i class="fa fa-map-pin"></i>سبزه میدان پیرسرا</p>
                            </div>
                        </div>

                        {{-- =========[ Terminal Cost ]======== --}}
                        <div class="row mb-1 mt-3 mt-xl-5">
                            <div class="col-lg-8 col-12">
                                <p class="tosi-theme mb-2 px-4">هزینه اقامتگاه : <span class="m-offpercentLine">۱۷۸۰۰۰ تومان </span> <span class="sormeie-theme"><b>۱۵۰۰۰۰ تومان</b></span> برای ۲ نفر</p>
                            </div>
                            <div class="col-lg-4 col-12">
                                <button class="m-btn-tranparent green-text hi-shadow-0 mr-4"><a href="#">
                                        جزییات بیشتر
                                    <br><i class="fa fa-chevron-down"></i></a></button>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- =========[ Terminal Info Opened ]======== --}}
                <div class="row justify-content-center">
                    <div class="col-5 col-lg-3 col-8">
                        <img class="img-fluid mt-lg-3 mr-lg-3 mb-lg-3 mt-3" src="{{asset('images_site/pic3.jpg')}}">
                    </div>

                    <div class="col-5 col-lg-9 col-12">

                        <div class="row mt-5 mr-2">
                            <div class="col-6">
                                <h5 class="tosi-theme medium-title">مسیر حرکت <span class="sormeie-theme">تهران ـ شیراز</span> </h5>
                            </div>
                            <div class="col-6">
                                <h5 class="tosi-theme medium-title">ساعت حرکت <span class="sormeie-theme">۱۴:۳۰</span> </h5>
                            </div>
                        </div>

                        <div class="row mt-5 mr-2">
                            <div class="col-6">
                                <h5 class="tosi-theme medium-title">زمان حرکت <span class="sormeie-theme">سه شنبه ۲ فروردین</span> </h5>
                            </div>
                            <div class="col-6">
                                <h5 class="tosi-theme medium-title">نوع اتوبوس <span class="sormeie-theme">VIP</span> </h5>
                            </div>
                        </div>

                    </div>
                </div>

                <hr class="dottedLine-theme">

                <div class="row justify-content-end ">
                    <div class="col-lg-3 col-md-6 col-6 ">
                        <button class="m-btn-round btn-round-filled-theme hi-shadow-2">رزرو بسته</button>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 ml-lg-3">
                        <button class="m-btn-round btn-round-theme hi-shadow-1">جزئیات بسته</button>
                    </div>
                </div>

                <br>

            </div>
        </div>
    </div>


</div>

@endsection
