/**
 * Created by sobhaneskandari on 5/27/17.
 */
$('.city-carousel').flickity({
    // options
    contain: true,
    pageDots: false,
    groupCells: 4,
    rightToLeft: true
});

// <!------------ Cost Slider ------------------>
var slider = document.getElementById('cost-slider');

noUiSlider.create(slider, {
    start: [50000, 5000000],
    step: 50000,
    connect: true,
    direction: 'rtl',
    tooltips: true,
    range: {
        'min': 50000,
        'max': 5000000
    },
    format: wNumb({
        decimals: 0,
        thousand: ',',
        postfix: ' تومان',
    })

});
