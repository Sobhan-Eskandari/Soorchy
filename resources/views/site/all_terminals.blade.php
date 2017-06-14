@extends('layouts.all')

@section('suggestionSlider_title')
   ترمینال های شیراز
@endsection

@section('cost_filter_title')
    بلیط بر اساس قیمت
@endsection

@section('hotels')

    @for($i = 0; $i < 3; $i++)

        {{----------- [ Hotels ] -----------}}
        <div class="row InfoSection l-autoHeight khakestari-bc-theme mx-0">
            <div class="col-lg-4 mb-5">
                @component('components_site.hotel-card')

                    @slot('card_title')
                        ترمینال گیتی پیما
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
                        ۳ نفر
                    @endslot

                @endcomponent

            </div>
            <div class="col-lg-4 mb-5">

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
            <div class="col-lg-4 mb-5">

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
        </div>

    @endfor


@endsection

