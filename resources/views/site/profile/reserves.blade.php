@extends('layouts.profile')

@section('profile')

    <h4 class="sormeie-theme dinar-title mt-5 text-center">سابقه رزروهای شما</h4>

     {{--============[ Reserves Table in profile ]=========== --}}
    <div class="row py-5 px-5">
        @component('components_site.reserve_table')

            @slot('reserve_type')
                رزرو هتل
            @endslot

                @slot('reserve_code')
                    ۱۲۳۴۵۶۷
                @endslot

                @slot('hotel_name')
                    هتل ستارگان
                @endslot

                @slot('room_type')
                    دو تخته دوبلکس رویال
                @endslot

                @slot('rent_date')
                    ۱۳۹۵/۵/۵
                @endslot

                @slot('from_date')
                    ۱۳۹۵/۵/۵
                @endslot

                @slot('to_date')
                    ۱۳۹۵/۵/۵
                @endslot

                @slot('guests_count')
                    ۲ نفر
                @endslot

                @slot('cost')
                    ۲۵۰۰۰۰۰ تومان
                @endslot

                @slot('final_cost')
                    ۲۵۰۰۰۰۰ تومان
                @endslot

                @slot('reserve_status')
                    کنسلی
                @endslot
        @endcomponent
    </div>

    {{--============[ Reserves Table in profile ]=========== --}}
    <div class="row py-5 px-5">
        @component('components_site.reserve_table')

            @slot('reserve_type')
                رزرو هتل
            @endslot

            @slot('reserve_code')
                ۱۲۳۴۵۶۷
            @endslot

            @slot('hotel_name')
                هتل ستارگان
            @endslot

            @slot('room_type')
                دو تخته دوبلکس رویال
            @endslot

            @slot('rent_date')
                ۱۳۹۵/۵/۵
            @endslot

            @slot('from_date')
                ۱۳۹۵/۵/۵
            @endslot

            @slot('to_date')
                ۱۳۹۵/۵/۵
            @endslot

            @slot('guests_count')
                ۲ نفر
            @endslot

            @slot('cost')
                ۲۵۰۰۰۰۰ تومان
            @endslot

            @slot('final_cost')
                ۲۵۰۰۰۰۰ تومان
            @endslot

            @slot('reserve_status')
                کنسلی
            @endslot
        @endcomponent
    </div>

    {{--============[ Reserves Table in profile ]=========== --}}
    <div class="row py-5 px-5">
        @component('components_site.reserve_table')

            @slot('reserve_type')
                رزرو هتل
            @endslot

            @slot('reserve_code')
                ۱۲۳۴۵۶۷
            @endslot

            @slot('hotel_name')
                هتل ستارگان
            @endslot

            @slot('room_type')
                دو تخته دوبلکس رویال
            @endslot

            @slot('rent_date')
                ۱۳۹۵/۵/۵
            @endslot

            @slot('from_date')
                ۱۳۹۵/۵/۵
            @endslot

            @slot('to_date')
                ۱۳۹۵/۵/۵
            @endslot

            @slot('guests_count')
                ۲ نفر
            @endslot

            @slot('cost')
                ۲۵۰۰۰۰۰ تومان
            @endslot

            @slot('final_cost')
                ۲۵۰۰۰۰۰ تومان
            @endslot

            @slot('reserve_status')
                کنسلی
            @endslot
        @endcomponent
    </div>

@endsection