@extends('layouts.all')

@section('suggestionSlider_title')
    هتل های محبوب شیراز
@endsection

@section('cost_filter_title')
    هتل بر اساس قیمت
@endsection

@section('hotels')

    @for($i = 0; $i < 3; $i++)

        {{----------- [ Hotels ] -----------}}
        <div class="row InfoSection l-autoHeight khakestari-bc-theme mx-0">
            <div class="col-lg-4 mb-5">
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
            <div class="col-lg-4 mb-5">

                @component('components_site.hotel-card')

                    @slot('card_title')
                        ستارگان
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
            <div class="col-lg-4 mb-5">

                @component('components_site.hotel-card')

                    @slot('card_title')
                        ستارگان
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
        </div>
    @endfor

    @component('components_site.list_card')

        @slot('title')
            هتل ستارگان
        @endslot

        @slot('address')
            رشت سبزه میدان پیرسرا
        @endslot

        @slot('route')

        @endslot

        @slot('full_cost')
            ۲۲۰۰۰۰
        @endslot

        @slot('offed_cost')
            ۱۹۵۰۰۰
        @endslot

        @slot('passengers_count')
۲
        @endslot

        @slot('off_percent')
۲۲
        @endslot

    @endcomponent

    @component('components_site.list_card')

        @slot('title')
            هتل ستارگان
        @endslot

        @slot('address')
            رشت سبزه میدان پیرسرا
        @endslot

        @slot('route')

        @endslot

        @slot('full_cost')
            ۲۲۰۰۰۰
        @endslot

        @slot('offed_cost')
            ۱۹۵۰۰۰
        @endslot

        @slot('passengers_count')
            ۲
        @endslot

        @slot('off_percent')
            ۲۲
        @endslot

    @endcomponent



@endsection

