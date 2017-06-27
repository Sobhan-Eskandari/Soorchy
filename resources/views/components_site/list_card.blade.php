<div class="row">
    <div class="col-5 col-lg-3">
        <img class="img-fluid mt-lg-3 mt-xl-0 mr-lg-2 mr-xl-0" src="{{asset('images_site/pic2.jpg')}}">
    </div>
    <div class="col-5 col-lg-9">

        <div class="row mt-3 hidden-md-down">
            <div class="col-lg-auto col-xl-auto">
                <h4 id="main" class="">{{$title}}</h4>
            </div>

            <div class="col-12 col-md-3 col-lg-auto">
                <img class="m-stars" src="{{asset('images_site/stars.png')}}">
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <p class="red-text mt-1 mb-0" ><b>{{$off_percent}} ٪ تخفیف </b></p>
                <p class="tosi-theme mb-0"><i class="fa fa-map-pin"></i>{{$address}}</p>
            </div>
            @isset($route)
                <div class="col-12 mb-xl-0 mt-xl-2">
                    <p class="sormeie-theme mb-1"> {{$route}} </p>
                </div>
            @endisset
        </div>

        <div class="row mb-1 mt-2">
            <div class="col-lg-9 col-12">
                <p class="tosi-theme mb-2">هزینه اقامتگاه : <span class="m-offpercentLine">{{$full_cost}} تومان </span> <span class="sormeie-theme"><b>{{$offed_cost}} تومان</b></span> برای {{$passengers_count}} نفر</p>
            </div>
            <div class="col-lg-3 col-12">
                <button class="joziateBishtarBtn"><a href="/"> جزئیات بیشتر</a></button>
            </div>
        </div>
    </div>

</div>