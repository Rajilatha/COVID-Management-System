<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Appointment2Controller;
use App\Http\Controllers\AppointmetDetailsController;
use App\Http\Controllers\SheduleController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\SheduleTwoController;
use App\Http\Controllers\VaccineTwoController;
use App\Http\Controllers\AppointmetDetailsTwoController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\Notice2Controller;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MyEmailController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\SecondCertificateController;
use App\Http\Controllers\MyEmailController2;
use App\Http\Controllers\MyEmailController3;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\PcrappointmentController;
use App\Http\Controllers\AppointmentResultController;
use App\Http\Controllers\PcrScheduleController;
use App\Http\Controllers\ViewResultController;
use App\Http\Controllers\QuarantineController;
use App\Http\Controllers\ViewQuarantineController;
use App\Http\Controllers\ViewPcrBookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin area
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('admin.home')->
middleware('admin');
//gs

Route::get('/gs/home', [App\Http\Controllers\HomeController::class, 'gsindex1'])->name('gs.home')->
middleware('gs');
//phi
Route::get('/phi/home', [App\Http\Controllers\HomeController::class, 'phiindex'])->name('phi.home')->
middleware('phi');
//user
Route::get('/user/home', [App\Http\Controllers\HomeController::class, 'userindex'])->name('user.home');


Route::get('/admin/covid', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.covid')->
middleware('admin');

Route::get('/admin/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create')->
middleware('admin');

Route::post('/admin/store', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store')->
middleware('admin');

Route::delete('/admin/destroy/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy')->
middleware('admin');

Route::put('/admin/{covid}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update')->
middleware('admin');

Route::get('/admin/{covid}/edit/', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit')->
middleware('admin');

// Route::get('/admin/user', [App\Http\Controllers\AdminController::class, 'user'])->name('admin.user')->
// middleware('admin');

Route::get('/admin/admincreate', [App\Http\Controllers\AdminDashboardController::class, 'create'])->name('admin.admincreate')->
middleware('admin');

Route::post('/admin/adminstore', [App\Http\Controllers\AdminDashboardController::class, 'store'])->name('admin.adminstore')->
middleware('admin');

Route::delete('/admin/admindestroy/{id}', [App\Http\Controllers\AdminDashboardController::class, 'destroy'])->name('admin.admindestroy')->
middleware('admin');

Route::put('/adminupdate/{country}', [App\Http\Controllers\AdminDashboardController::class, 'update'])->name('admin.adminupdate')->
middleware('admin');

Route::get('/admin/{country}/adminedit/', [App\Http\Controllers\AdminDashboardController::class, 'edit'])->name('admin.adminedit')->
middleware('admin');

// Route::get('admin.adminhome', [App\Http\Controllers\AdminDashboardController::class, 'chart'])->
// middleware('admin');

Route::get('/admin/adminindex', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin.adminindex')->
middleware('admin');

Route::get('/gs/post',[DetailController::class,'getAllPost'])->name('post.get')->
middleware('gs');
Route::get('/gs/add-post',[DetailController::class,'addPost'])->name('post.add')->
middleware('gs');
Route::post('/gs/add-post',[DetailController::class,'addPostSubmit'])->name('post.addsubmit')->
middleware('gs');
Route::get('/gs/post/{id}',[DetailController::class,'getPostById'])->name('post.getbyid')->
middleware('gs');
Route::get('/gs/delete-post/{id}',[DetailController::class,'deletePost'])->name('post.delete')->
middleware('gs');
Route::get('/gs/edit-post/{id}',[DetailController::class,'editPost'])->name('post.edit')->
middleware('gs');
Route::post('/gs/update-post',[DetailController::class,'updatePost'])->name('post.update')->
middleware('gs');
Route::get('/gs/postv',[AppointmetDetailsController::class,'getAllDetails'])->name('postv.get')->
middleware('gs');
Route::post('/gs/update-postv',[DetailController::class,'updatePost'])->name('post.updatev')->
middleware('gs');
Route::get('/gs/edit-postv/{detail_id}',[DetailController::class,'editPost'])->name('post.editv')->
middleware('gs');
Route::get('/mails/send-mail/{send}',[DetailController::class,'sendUserId'])->name('post.mail')->
middleware('gs');
Route::get('/gs/shedule/post',[SheduleController::class,'getAllPost'])->name('post.getshedule')->
middleware('gs');
Route::get('/gs/shedule/add-post',[SheduleController::class,'addPost'])->name('post.addshedule')->
middleware('gs');
Route::post('/gs/shedule/add-post',[SheduleController::class,'addPostSubmit'])->name('post.addsubmitshedule')->
middleware('gs');
Route::get('/gs/shedule/post/{id}',[SheduleController::class,'getPostById'])->name('post.getbyidshedule')->
middleware('gs');
Route::get('/gs/shedule/delete-post/{id}',[SheduleController::class,'deletePost'])->name('post.deleteshedule')->
middleware('gs');
Route::get('/gs/shedule/edit-post/{id}',[SheduleController::class,'editPost'])->name('post.editvac')->
middleware('gs');
Route::post('/gs/shedule/update-post',[SheduleController::class,'updatePost'])->name('post.updatevac')->
middleware('gs');
Route::get('/gs/shedule/post/{id}',[SheduleController::class,'getPostById'])->name('post.getbyid')->
middleware('gs');
Route::get('/gs/shedule/edit-postv/{id}',[VaccineController::class,'editPost'])->name('post.editvaccine1');
Route::post('/gs/shedule/update-postv',[VaccineController::class,'updatePost'])->name('post.updatevaccine1');
Route::get('/user/post',[VaccineController::class,'getAllPost'])->name('post.getv');
Route::get('/gs/shedule2/post',[SheduleTwoController::class,'getAllPost'])->name('post.getshedule2')->
middleware('gs');
Route::get('/gs/shedule2/add-post',[SheduleTwoController::class,'addPost'])->name('post.addshedule2')->
middleware('gs');
Route::post('/gs/shedule2/add-post',[SheduleTwoController::class,'addPostSubmit'])->name('post.addsubmitshedule2')->
middleware('gs');
Route::get('/gs/shedule2/post/{id}',[SheduleTwoController::class,'getPostById'])->name('post.getbyidshedule2')->
middleware('gs');
Route::get('/gs/shedule2/delete-post/{id}',[SheduleTwoController::class,'deletePost'])->name('post.deleteshedule2')->
middleware('gs');
Route::get('/gs/shedule2/edit-post/{id}',[SheduleTwoController::class,'editPost'])->name('post.editvac2')->
middleware('gs');
Route::post('/gs/shedule2/update-post',[SheduleTowController::class,'updatePost'])->name('post.updatevac2')->
middleware('gs');
Route::get('/gs/shedule2/edit-postv/{id}',[VaccineTwoController::class,'editPost'])->name('post.editvaccine2');
Route::post('/gs/shedule2/update-postv',[VaccineTwoController::class,'updatePost'])->name('post.updatevaccine2');
Route::get('/user/post2',[VaccineTwoController::class,'getAllPost'])->name('post.getv2');
Route::get('/gs/postv2',[AppointmetDetailsTwoController::class,'getAllDetails'])->name('postv.get2')->
middleware('gs');
Route::post('/gs/update-postv2',[AppointmetDetailsTwoController::class,'updatePost'])->name('post.updatev2')->
middleware('gs');
Route::get('/gs/edit-postv2/{id}',[AppointmetDetailsTwoController::class,'editPost'])->name('post.editv2')->
middleware('gs');
Route::post('/gs/update-postv1',[AppointmetDetailsController::class,'updatePost'])->name('post.updatev1')->
middleware('gs');
Route::get('/gs/edit-postv1/{id}',[AppointmetDetailsController::class,'editPost'])->name('post.editv1')->
middleware('gs');
Route::resource('notices', NoticeController::class);
Route::resource('notices2', Notice2Controller::class);

Route::get('/gs/edit-poste/{id}',[EmailController::class,'editPost'])->name('poste.edit')->
middleware('gs');
Route::post('sendemail',[MyEmailController::class,'sendMyData'])->name('sendMyMail')->
middleware('gs');
Route::post('sendemail2',[MyEmailController2::class,'sendMyData'])->name('sendMyMail2')->
middleware('gs');
Route::post('sendemail3',[MyEmailController3::class,'sendMyData'])->name('sendMyMail3')->
middleware('gs');
Route::get('/gs/edit-postc/{deatil_id}',[CertificateController::class,'editPost'])->name('postc.edit')->
middleware('gs');
Route::get('/gs/edit-postc2/{deatil_id}',[SecondCertificateController::class,'editPost'])->name('postc2.edit')->
middleware('gs');
Route::get('/',[WelComeController::class,'getAllPost'])->name('post.geth');

Route::get('/districts',[WelComeController::class,'getAll'])->name('post.getdistricts');
Route::get('/vaccine', function () {
    return view('vaccine');
});


Route::get('/phi/post',[ResultController::class,'getAllPost'])->name('post.getphi')->
middleware('phi');
Route::get('/phi/add-post',[ResultController::class,'addPost'])->name('post.addphi')->
middleware('phi');
Route::post('/phi/add-post',[ResultController::class,'addPostSubmit'])->name('post.addsubmitphi')->
middleware('phi');
Route::get('/phi/post/{id}',[ResultController::class,'getPostById'])->name('post.getbyidphi')->
middleware('phi');
Route::get('/phi/delete-post/{id}',[ResultController::class,'deletePost'])->name('post.deletephi')->
middleware('phi');
Route::get('/phi/edit-post/{id}',[ResultController::class,'editPost'])->name('post.editphi')->
middleware('phi');
Route::post('/phi/update-post',[ResultController::class,'updatePosts'])->name('post.updatephi')->
middleware('phi');
Route::post('/phi/update-postpcr',[ResultController::class,'updatePosts'])->name('post.updatepcr')->
middleware('phi');
Route::get('/phi/edit-postpcr/{detail_id}',[ResultController::class,'editPost'])->name('post.editpcr')->
middleware('phi');

Route::get('/phi/pcr_schedule/edit-postpcr/{id}',[PcrappointmentController::class,'editPost'])->name('post.editpcr');
Route::post('/phi/pcr_schedule/update-postpcr',[PcrappointmentController::class,'updatePost'])->name('post.updatepcr');
Route::get('/user/pcr/post',[PcrappointmentController::class,'getAllPost'])->name('post.getpcr');

Route::get('/phi/postpcr',[AppointmentResultController::class,'getAllDetails'])->name('postpcr.get')->
middleware('phi');

Route::get('/phi/pcr_schedule/post',[PcrScheduleController::class,'getAllPost'])->name('post.getpcrschedule')->
middleware('phi');
Route::get('/phi/pcr_schedule/add-post',[PcrScheduleController::class,'addPost'])->name('post.addpcrschedule')->
middleware('phi');
Route::post('/phi/pcr_schedule/add-post',[PcrScheduleController::class,'addPostSubmit'])->name('post.addsubmitpcrschedule')->
middleware('phi');
Route::get('/phi/pcr_schedule/post/{id}',[PcrScheduleController::class,'getPostById'])->name('post.getbyidpcrschedule')->
middleware('phi');
Route::get('/phi/pcr_schedule/delete-post/{id}',[PcrScheduleController::class,'deletePost'])->name('post.deletepcrschedule')->
middleware('phi');
Route::get('/phi/pcr_schedule/edit-post/{id}',[PcrScheduleController::class,'editPost'])->name('post.editpcrtest')->
middleware('phi');
Route::post('/phi/pcr_schedule/update-post',[PcrScheduleController::class,'updatePost'])->name('post.updatepcrtest')->
middleware('phi');
Route::get('/phi/pcr_schedule/post/{id}',[PcrScheduleController::class,'getPostById'])->name('post.getbyidpcr')->
middleware('phi');

Route::get('/phi/quarantine/post',[QuarantineController::class,'getAllPost'])->name('post.getq')->
middleware('phi');
Route::get('/phi/quarantine/add-post',[QuarantineController::class,'addPost'])->name('post.addq')->
middleware('phi');
Route::post('/phi/quarantine/add-post',[QuarantineController::class,'addPostSubmit'])->name('post.addsubmitq')->
middleware('phi');
Route::get('/phi/quarantine/post/{id}',[QuarantineController::class,'getPostById'])->name('post.getbyidq')->
middleware('phi');
Route::get('/phi/quarantine/delete-post/{id}',[QuarantineController::class,'deletePost'])->name('post.deleteq')->
middleware('phi');
Route::get('/phi/quarantine/edit-post/{id}',[QuarantineController::class,'editPost'])->name('post.editq')->
middleware('phi');
Route::post('/phi/quarantine/update-post',[QuarantineController::class,'updatePosts'])->name('post.updateq')->
middleware('phi');
Route::post('/phi/quarantine/update-postquarantine',[QuarantineController::class,'updatePosts'])->name('post.updatepq')->
middleware('phi');
Route::get('/phi/quarantine/edit-postquarantine/{detail_id}',[QuarantineController::class,'editPost'])->name('post.editpq')->
middleware('phi');

Route::get('/user/result/posts',[ViewResultController::class,'getAllDetails'])->name('post.getuserresult');

Route::get('/user/quarantine/posts',[ViewQuarantineController::class,'getAllDetails'])->name('post.getuserquarantine');
Route::get('/nonuserpcrbooking/posts',[ViewPcrBookController::class,'getAllDetails'])->name('post.getnonuser');