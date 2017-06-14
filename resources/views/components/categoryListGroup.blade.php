<ul class="list-group hi-categoryListGroup">
    <li class="list-group-item justify-content-between pl-4 pr-3 flip hi-infoPostListGroupFlip py-2" id="{{$createCategoryTagsID}}">
        <span class="categoryTitle">{{$categoryName}}</span>
        <span>
            <div class="row">
                <div class="col-1">
                                    <i class="fa fa-search iconSearch-2 pt-3" aria-hidden="true"></i>
                                </div>
                <div class="col-9">
                                    <input type="text" class="form-control searchFormListGroup mr-2 pb-1 hi-fontSize-13"
                                           placeholder="جستجو کنید">
                                </div>
                <div class="col-1 pr-0">
                                    <i class="fa fa-times iconClose-2 pt-3 mr-3" aria-hidden="true"></i>
                                </div>
            </div>
            <i class="fa fa-search iconSearch-1" aria-hidden="true"></i>
            <i class="fa fa-caret-down pull-left pt-1 caretIcon" aria-hidden="true"></i>
        </span>
    </li>
    <div id="hi-CategoryListGroupPanel" class="panel">
        <li class="list-group-item justify-content-between ">
            <label class='hi-categoryListGroup_li_square-checkbox'>
                <input type='checkbox' class="pull-right">
                &nbsp;
                <span>آمار</span>
            </label>
            <i class="fa fa-times" aria-hidden="true"></i>
        </li>
        <li class="list-group-item justify-content-between ">
            <label class='hi-categoryListGroup_li_square-checkbox'>
                <input type='checkbox' class="pull-right">
                &nbsp;
                <span>داده کاوی</span>
            </label>
            <i class="fa fa-times" aria-hidden="true"></i>
        </li>

        <li class="list-group-item justify-content-between ">
            <label class='hi-categoryListGroup_li_square-checkbox'>
                <input type='checkbox' class="pull-right">
                &nbsp;
                <span>هوش مصنوعی</span>
            </label>
            <i class="fa fa-times" aria-hidden="true"></i>
        </li>
        <li class="list-group-item justify-content-between ">
            <label class='hi-categoryListGroup_li_square-checkbox'>
                <input type='checkbox' class="pull-right">
                &nbsp;
                <span>آمار</span>
            </label>
            <i class="fa fa-times" aria-hidden="true"></i>
        </li>
        <li class="list-group-item justify-content-between ">
            <label class='hi-categoryListGroup_li_square-checkbox'>
                <input type='checkbox' class="pull-right">
                &nbsp;
                <span>داده کاوی</span>
            </label>
            <i class="fa fa-times" aria-hidden="true"></i>
        </li>
        <li class="list-group-item justify-content-between ">
            <label class='hi-categoryListGroup_li_square-checkbox'>
                <input type='checkbox' class="pull-right">
                &nbsp;
                <span>هوش مصنوعی</span>
            </label>
            <i class="fa fa-times" aria-hidden="true"></i>
        </li>
        <li class="list-group-item categoryListGroupButton">
            <form class="form-inline TodoWidget ltr-direction my-2">
                <label class="sr-only" for="inlineFormInputGroup">new note</label>
                <div class="input-group" id="addTodo">
                    <button type="button" id="addTodo_addBtn"><img class="img-fluid" src="{{asset('images/Add-icone.png')}}"></button>
                    <input type="text" class="form-control" id="todoText" placeholder="{{$category_btn}} جدید">
                </div>
                <button type="submit" id="hiddenSubmitBtn">Sign in</button>
            </form>
        </li>
    </div>
</ul>