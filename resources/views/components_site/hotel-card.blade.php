<div class="topCard">
    <div class="m-ribbon">
        <img class="img-fluid off_ribbon"  src="{{asset('images_site/ribbon.png')}}">
        <h2 class="off-percentage" >{{$card_offPercent}}٪ تخفیف</h2>
    </div>
    <img class="m-stars l-stars" src="{{asset('images_site/starts.png')}}">
    <img class="img-fluid hotel-image" src="{{ asset('images_site/ghasr.jpg') }}">
    <div class="hotel-trasPlaceHolder">
        <div class="row underImageSection">
            <div class="col-12 text-right">
                <p class="hotel-tranName mb-2"> {{$card_title}} <span class="tosi-theme"><i class="fa fa-map-marker"></i> {{$card_location}}</span> </p>
            </div>
            <div class="col-12">
                <p class="tosi-theme hi-fontSize-12 my-1">
                    از <span class="tosi-theme m-offpercentLine">{{$card_fromCost}} تومان</span> <span class="sormeie-theme">{{$card_toCost}} تومان</span> برای {{$card_Count}}
                </p>
            </div>
        </div>
    </div>
</div>
<div class="downCard">
    <div class="hotel-trasPlaceHolder">
        <div class="row downCard_info">
            <div class="col-12 px-0">
                <button class="joziateBishtarBtn">جزئیات بیشتر</button>
            </div>
        </div>
    </div>
</div>