@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('css_resources')
    <script src="//cdn.ckeditor.com/4.6.1/full/ckeditor.js"></script>
@endsection

@section('content')

    <div class="row hi-createPostBox">

        <div class="col-8">
            <div class="row">
                <div class="form-group makeCreatePostTitleBox">
                    <label for="makeCreatePostTitle" class="createPostLabel">ایجاد ویلای جدید</label>
                    <input tabindex="1" type="text" class="form-control makeCreatePostTitle" placeholder=" عنوان ویلا را وارد کنید.">
                    <div class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                </div>
            </div>
            <br>

            {{--------------------- Villa Info ---------------------}}
            <div class="row">
                <div class="col-11 bgCard hi-shadow-1 px-3">
                    <h3>اطلاعات ویلا</h3>

                    <div class="form-group row mt-4">

                        <div class="col-sm-4">
                            <label for="makeCreatePostTitle" class="createPostLabel">ظرفیت ویلا</label>
                            <input tabindex="2" type="number" class="form-control makeCreatePostTitle" placeholder=" ظرفیت ویلا را وارد کنید.">
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                        <div class="col-sm-4">
                            <label for="makeCreatePostTitle" class="createPostLabel">تعداد طبقات</label>
                            <input tabindex="3" type="number" class="form-control makeCreatePostTitle" placeholder=" تعداد طبقات را وارد کنید.">
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                        <div class="col-sm-4">
                            <label for="makeCreatePostTitle" class="createPostLabel">تعداد اتاق ها</label>
                            <input tabindex="4" type="number" class="form-control makeCreatePostTitle" placeholder=" تعداد اتاق ها را وارد کنید.">
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-sm-4">
                            <label for="makeCreatePostTitle" class="createPostLabel">متراژ ویلا</label>
                            <input tabindex="2" type="number" class="form-control makeCreatePostTitle" placeholder=" متراژ ویلا را وارد کنید.">
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                        <div class="col-sm-4">
                            <label for="makeCreatePostTitle" class="createPostLabel">میزان تخفیف</label>
                            <input tabindex="3" type="number" class="form-control makeCreatePostTitle" placeholder=" میزان تخفیف را وارد کنید.">
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                        <div class="col-sm-4">
                            <label for="makeCreatePostTitle" class="createPostLabel red-text text-darken-2">هزینه ویلا</label>
                            <input tabindex="4" type="number" class="form-control makeCreatePostTitle" placeholder=" هزینه ویلا را وارد کنید.">
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-sm-12">
                            <label for="makeCreatePostTitle" class="createPostLabel">آدرس ویلا</label>
                            <input tabindex="2" class="form-control makeCreatePostTitle" placeholder=" آدرس ویلا را وارد کنید.">
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                        <div class="col-sm-12 mt-3">
                            <label for="makeCreatePostTitle" class="createPostLabel">توضیحات ویلا</label>
                            <textarea name="vila_desc" tabindex="3" type="number" class="form-control makeCreatePostTitle" placeholder=" توضیحات ویلا را وارد کنید."></textarea>
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                    </div>
                </div>
            </div>

            {{--------------------- Villa Owner Info ---------------------}}
            <div class="row mt-4">
                <div class="col-11 bgCard hi-shadow-1 px-3">
                    <h3>اطلاعات صاحب ویلا</h3>

                    <div class="form-group row mt-4">

                        <div class="col-sm-4">
                            <label for="makeCreatePostTitle" class="createPostLabel">نام صاحب ویلا</label>
                            <input tabindex="2" type="text" class="form-control makeCreatePostTitle" placeholder=" نام صاحب ویلا را وارد کنید.">
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                        <div class="col-sm-4">
                            <label for="makeCreatePostTitle" class="createPostLabel">شماره تماس صاحب ویلا</label>
                            <input tabindex="3" type="number" class="form-control makeCreatePostTitle" placeholder=" شماره تماس را وارد کنید.">
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                        <div class="col-sm-4">
                            <label for="makeCreatePostTitle" class="createPostLabel">شماره تلفن ویلا</label>
                            <input tabindex="3" type="number" class="form-control makeCreatePostTitle" placeholder=" شماره تماس را وارد کنید.">
                            <div hidden class="form-control-feedback">مکان نمایش متن اررور در صورت وجود</div>
                        </div>

                    </div>
                </div>
            </div>

            {{--------------------- Villa Info ---------------------}}
            <section class="usersSection mt-4">
                <div class="row">
                    <div class="col-11 bgCard hi-shadow-1 px-3">
                        <div class="container-fluid">
                            <h3>اضافه کردن تصاویر ویلا</h3>
                            {{--==========[ Row of buttons above table ]========= --}}
                            <div class="row mt-4">
                                <div class="col-auto ml-2 text-right">
                                    <button class="hi-button-simple hi-shadow-0 green darken-3">اضافه کردن تصویر</button>
                                </div>
                            </div>

                            {{--==========[ Table Of Users ]========= --}}
                            <div class="row mt-3">
                                <div class="col-12 px-0">
                                    <table class="sliders_table">
                                        <thead class="table_tableHeader white-text">

                                        {{--==========[ Table Headers ]========= --}}
                                        <tr>
                                            <th class="pl-0">
                                                <div class="pure-checkbox mt-2">
                                                    <input id="selectAllSliders" class="selectAllCheckboxes" name="checkbox" type="checkbox" onclick="selectAllCmnt()">
                                                    <label for="selectAllSliders"></label>
                                                </div>
                                            </th>
                                            <th class="text-right">علامت زدن همه</th>
                                            <th></th>
                                            <th></th>
                                        </tr>

                                        </thead>
                                        <tbody>

                                        @for ($i = 0; $i < 4; $i++)
                                            <tr>
                                                {{--==========[ Gallery Table Row items ]========= --}}
                                                @component('components.SlidersTableRow')

                                                    @slot('chk_name')
                                                        {{ $i }}
                                                    @endslot

                                                    @slot('slider_text')
                                                       اسلایدر شماره {{ $i }}
                                                    @endslot

                                                    @slot('slider_edited')
                                                        توسط حمید وتر ایجاد شده در : ۹۶/۶/۶
                                                    @endslot

                                                @endcomponent
                                            </tr>
                                        @endfor

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            {{--------------------- Villa Google Mao Location ---------------------}}
            <div class="row mt-4">
                <div class="col-11 bgCard hi-shadow-1 px-3">
                    <h3>مشخص کردن آدرس روی نقشه</h3>

                    <div class="row">
                        <div class="col-9">
                            <div id="m-google-map" style="border-radius: 10px" class="google-map mt-3"></div>
                        </div>
                        <div class="col-3">
                            <form>
                                <input readonly hidden type="number" name="hi">
                                <input readonly hidden type="number" name="hi">
                            </form>
                            <button class="hi-button-simple green mt-4">افزودن آدرس</button>
                            <button class="hi-button-simple red mt-3">حذف آدرس</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-4 mt-1">
            <br>
            <div class="row">
                <ul class="list-group hi-infoPostListGroup">
                    <li class="list-group-item justify-content-between pl-4 pr-3 flip py-2" id="hi-infoPostListGroupFlip">
                        اطلاعات پست
                        <i class="fa fa-caret-down pull-left" aria-hidden="true"></i>
                    </li>
                    <div id="hi-infoPostListGroupPanel" class="panel">
                        <li class="list-group-item justify-content-between list-group-item_border">
                            <button class="btn btn-secondary btn-secondary-postInfo btn-sm active p-2">پیش نویس</button>
                            <button class="btn btn-secondary btn-secondary-postInfo btn-sm active p-2">پیش نمایش
                            </button>
                        </li>
                        <li class="list-group-item"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; 25 بازدید</li>
                        <li class="list-group-item"><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;10 نظر</li>
                        <li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;1396/5/25
                        </li>
                        <li class="list-group-item">ایجاد شده توسط:حمید وتر</li>
                        <li class="list-group-item">تعداد ویرایش&nbsp;<span
                                    class="badge badge-pill badge-default">1</span></li>
                        <li class="list-group-item">آخرین ویرایش : 1396/6/25 - حمید وتر</li>
                    </div>
                </ul>
            </div>
            <br>
            <div class="row">
                @component('components.categoryListGroup')
                    @slot('createCategoryTagsID')
                        categoriesList
                    @endslot

                    @slot('categoryName')
                        دسته بندی ها
                    @endslot

                        @slot('category_btn')
                            دسته بندی
                        @endslot
                @endcomponent
            </div>
            <br>
            <div class="row">
                @component('components.categoryListGroup')
                    @slot('createCategoryTagsID')
                        tagsList
                    @endslot

                    @slot('categoryName')
                        برچسب ها
                    @endslot

                        @slot('category_btn')
                            برچسب
                        @endslot
                @endcomponent
            </div>
            <br>
            <div class="row">
                @component('components.categoryListGroup')
                    @slot('createCategoryTagsID')
                        tagsList
                    @endslot

                    @slot('categoryName')
                         امکانات
                    @endslot

                    @slot('category_btn')
                        ویژگی
                    @endslot

                @endcomponent
            </div>

        </div>
    </div>

    <script>
        CKEDITOR.replace( 'vila_desc' );

        function initMap() {
            var uluru = {lat: 48.8583739, lng: 2.2924872};
            var map = new google.maps.Map(document.getElementById('m-google-map'), {
                zoom: 14,
                center: uluru,
                scrollwheel: false
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }

    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaKuMOTrKgymjzEvHe_Rz7SDzUIZnvNrQ&callback=initMap">
    </script>


@endsection
@section('posts')
    show
@endsection
@section('createVilla')
    sidebar-active
    @endsection