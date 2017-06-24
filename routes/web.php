<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Support\Facades\Request;



Auth::routes();

Route::get('/home', 'HomeController@index');

/* mersede */

Route::get('/profile', function () {
    return view('dashboard.admins.profile');
});

Route::get('/createAdmin', function () {
    return view('dashboard.admins.create');
});

Route::get('/category', function () {
    return view('dashboard.category.index');
});
Route::get('/tag', function () {
    return view('dashboard.tag.index');
});

Route::get('/villa/create', function () {
    return view('dashboard.posts.villa.create');
});

Route::get('/backup', function () {
    return view('dashboard.backup.backup');
});

Route::get('/answerMsg', function () {
    return view('dashboard.answerMsg.index');
});

Route::get('/FAQ', function () {
    return view('dashboard.FAQ.index');
});

/* mersede */

Route::get('/layout', function () {
    return view('layouts.main');
});

Route::get('/users', function () {
    return view('dashboard.users.index');
});
Route::get('/users/trash', function () {
    return view('dashboard.users.trash');
});

Route::get('/admins', function () {
    return view('dashboard.admins.index');
});
Route::get('/admins/trash', function () {
    return view('dashboard.admins.trash');
});

Route::get('/posts', function () {
    return view('dashboard.posts.villa.index');
});
Route::get('/posts/trash', function () {
    return view('dashboard.posts.villa.trash');
});



Route::get('/files', function () {
    return view('dashboard.media.index');
});
Route::get('/files/trash', function () {
    return view('dashboard.media.trash');
});

Route::get('/comments', function () {
    return view('dashboard.comments.index');
});
Route::get('/comments/trash', function () {
    return view('dashboard.comments.trash');
});

Route::get('/messages/outbox', function () {
    return view('dashboard.messages.outbox.index');
});
Route::get('/messages/outbox/trash', function () {
    return view('dashboard.messages.outbox.trash');
});

Route::get('/messages/inbox', function () {
    return view('dashboard.messages.inbox.index');
});
Route::get('/messages/inbox/trash', function () {
    return view('dashboard.messages.inbox.trash');
});

Route::get('/sliders', function () {
    return view('dashboard.sliders.index');
});


Route::get('/settings', function () {
    return view('dashboard.settings.index');
});

Route::get('/home', function (){
    return view('dashboard.home.index');
});

Route::get('/email', function (){
    Mail::to('nima.s8888@yahoo.com')->send(new \App\Mail\TestMail());
});

Route::post('/tiny', function (Request $request){
    $input = $request->all();
    dd($input);
});

Route::resource('/textboxio', 'TextboxioController');

//--------------[ Site Routes ]--------------

Route::get('/', function () {
    return view('site.index');
});

//Route::get('/site/home', function (){
//    return view('site.index');
//});

Route::get('/site/layout', function (){
    return view('layouts.site');
});

Route::get('/terminal', function (){
    return view('site.terminal_detail');
});
Route::get('/terminals', function (){
    return view('site.all_terminals');
});

Route::get('/hotel', function (){
    return view('site.hotel_detail');
});
Route::get('/hotels', function (){
    return view('site.all_hotels');
});

Route::get('/site/package', function (){
    return view('site.package_detail');
});
Route::get('/site/profile/password', function (){
    return view('site.profile.change_pass');
});

Route::get('/site/profile/edit', function (){
    return view('site.profile.edit');
});

Route::get('/site/profile/reserves', function (){
    return view('site.profile.reserves');
});

Route::get('/site/factor/terminal', function (){
    return view('site..factor.terminal');
});
Route::get('/site/factor/package', function (){
    return view('site.factor.package');
});
Route::get('/site/factor/hotel', function (){
    return view('site.factor.hotel');
});
Route::get('/site/factor/specs', function (){
    return view('site.factor.specifications');
});
Route::get('/site/aboutus', function (){
    return view('site.aboutus');
});
Route::get('/site/contactus', function (){
    return view('site.contactus');
});