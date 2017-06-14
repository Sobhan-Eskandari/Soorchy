@extends('layouts.profile')

@section('profile')
    <h4 class="sormeie-theme dinar-title mt-5 text-center">کلمه عبور خود را تغییر دهید</h4>

    <p class="text-center mt-4">نام کاربری fahim@gmail.com</p>

    <div class="row py-5">
        <div class="col-6 pull-3 col-md-4 pull-md-4 ">
            <input type="password" class="form-control m-simple-input mt-3" id="exampleInputPassword1" placeholder="کلمه عبور فعلی">
            <input type="password" class="form-control m-simple-input mt-3" id="exampleInputPassword1" placeholder="کلمه عبور جدید">
            <input type="text" class="form-control m-simple-input mt-3" id="exampleInputPassword1" placeholder="تکرار کلمه عبور جدید">

            <button type="submit" class="col-12 col-lg-6 pull-lg-3 m-btn-round btn-round-filled-theme hi-shadow-1 mt-5 mb-5">تایید</button>
        </div>
    </div>
@endsection