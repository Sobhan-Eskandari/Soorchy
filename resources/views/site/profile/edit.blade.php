@extends('layouts.profile')

@section('profile')

    <h4 class="sormeie-theme dinar-title mt-5 text-center">اطلاعات خود را ویرایش کنید</h4>


    <div class="row py-5">
        <div class="col-6 pull-3 col-md-4 pull-md-4 ">
            <input type="password" class="form-control m-input mt-3" id="exampleInputPassword1" placeholder="نام و نام خانوادگی">
            <input type="password" class="form-control m-input mt-3" id="exampleInputPassword1" placeholder="پست الکترونیکی">
            <input type="text" class="form-control m-input mt-3" id="exampleInputPassword1" placeholder="شماره تماس">

            <button type="submit" class="col-12 col-lg-6 pull-lg-3 m-btn-round btn-round-filled-theme hi-shadow-1 mt-5 mb-5">تایید</button>
        </div>
    </div>
@endsection