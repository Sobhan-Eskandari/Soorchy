{{----------------   Suggestin Slider  --------------}}
<div class="container-fluid l-cities mb-5">
    <div class="row px-5">
        <div class="col-12 text-center">
            <h3 class="dinar-title white-text mt-5">{{$title}}</h3>
            <div class="city-carousel" data-flickity>

                @component('components_site.suggester-slider-card')

                    @slot('card_title')
                        ترمینال رشت
                    @endslot

                @endcomponent

                @component('components_site.suggester-slider-card')

                    @slot('card_title')
                            ترمینال تهران
                    @endslot

                @endcomponent

                @component('components_site.suggester-slider-card')

                    @slot('card_title')
                        ترمینال اصفهان
                    @endslot

                @endcomponent

                @component('components_site.suggester-slider-card')

                    @slot('card_title')
                        ترمینال مشهد
                    @endslot

                @endcomponent

                @component('components_site.suggester-slider-card')

                    @slot('card_title')
                            ترمینال مشهد
                    @endslot

                @endcomponent

                @component('components_site.suggester-slider-card')

                    @slot('card_title')
                            ترمینال مشهد
                    @endslot

                @endcomponent

            </div>
        </div>
    </div>

</div>