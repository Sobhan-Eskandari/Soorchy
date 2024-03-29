{{--==========[ Table Row items ]========= --}}
<td>
    <div class="pure-checkbox mt-2 mr-2">
        <input id="posts_checkbox-{{$chk_name}}" class="checkbox-{{$chk_name}}" onclick="selectCmntCheckbox(event)" name="posts_checkbox-{{$chk_name}}" type="checkbox" >
        <label for="posts_checkbox-{{$chk_name}}"></label>
    </div>
</td>
<td class="text-right py-1">
    <p class="my-1">{{$post_name}}</p>
    <p class="grey-text my-1 hi-fontSize-12">{{$post_editedBy}}</p>
</td>
<td>{{$post_author}}</td>
<td>{{$post_category}}</td>
<td>{{$post_tag}}</td>
{{--==========[ Post Info ]========= --}}
<td class="py-1">
    <p class="my-1 text-right hi-fontSize-12"><i class="fa fa-calendar" aria-hidden="true"></i> {{$post_date}}</p>
    <p class="my-1 text-right hi-fontSize-12"><i class="fa fa-comments" aria-hidden="true"></i> {{$post_commentsCount}}</p>
    <p class="my-1 text-right hi-fontSize-12"><i class="fa fa-eye" aria-hidden="true"></i> {{$post_views}}</p>
</td>

{{--==========[ More Button Dropdown ]========= --}}
<td>
    <div class="Topbar_dropdown dropdown table_dropDown">
        <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
        </button>
        @if(isset($trash))
            {{--==========[ Dropdown Menu ]========= --}}
            <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-undo ml-2" aria-hidden="true"></i>بازگردانی</a>
                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
            </div>
        @else
            {{--==========[ Dropdown Menu ]========= --}}
            <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-eye ml-2" aria-hidden="true"></i>مشاهده</a>
                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-pencil ml-2" aria-hidden="true"></i> ویرایش</a>
                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-lock ml-2" aria-hidden="true"></i>قفل پست</a>
            </div>
        @endif
    </div>
</td>