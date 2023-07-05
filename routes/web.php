<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\ExamController;
use App\Http\Controllers\Backend\LMSController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\ProfessorController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AssignmentController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\ScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*-------- admin --------*/
Route::prefix('')->group(function(){
    //Route::get('/',[DashboardController::class, 'index']);
    //Route::get('/admin',[AdminController::class, 'index']);
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::get('/course',[CourseController::class, 'index'])->name('course');
    Route::get('/course/add',[CourseController::class, 'addCourse'])->name('addCourse');
    Route::get('/course/edit',[CourseController::class, 'edit_validate'])->name('edit_validate');
    Route::get('/course/delete/{id}',[CourseController::class, 'deleteCourse'])->name('deleteCourse');
    

    Route::get('/exam',[ExamController::class, 'index']);

    Route::get('/lms', [LMSController::class, 'index']);

    Route::get('/notice',[NoticeController::class, 'index']);

    Route::get('/professor',[ProfessorController::class, 'index']);

    Route::get('/professor/add',[ProfessorController::class, 'add'])->name('add');

    Route::get('/student',[StudentController::class, 'index']);

    Route::get('/subject',[SubjectController::class, 'index']);

    Route::get('/notice/add', [NoticeController::class, 'addNotice'])->name('addNotice');

    Route::get('/notice/edit/{id}', [NoticeController::class, 'editNotice'])->name('editNotice');

    Route::get('/notice/edit_validate', [NoticeController::class, 'edit_validate'])->name('editNotice_validate');

    Route::get('/notice/delete/{id}', [NoticeController::class, 'deleteNotice'])->name('deleteNotice');

    //Route::get('add', 'ExamController@add');
    Route::get('/exam/add',[ExamController::class, 'addExam'])->name('addExam');    
    Route::get('/exam/edit/{id}',[ExamController::class, 'editExam'])->name('editExam');
    Route::get('/exam/edit_validate',[ExamController::class, 'edit_validate'])->name('editExam_validate');
    Route::get('/exam/delete/{id}',[ExamController::class, 'deleteExam'])->name('deleteExam');
    
});

/*-------- auth --------*/
Route::prefix('/')->group(function(){
    Route::get('/', function (){
        return view('backend/auth.login');
    });
    Route::get('/register',[AuthController::class, 'register'])->name('register');

    Route::get('/login',[AuthController::class, 'index'])->name('login');

    Route::post('/login',[AuthController::class, 'login'])->name('login');
});


/*-------- student --------*/
Route::prefix('/student')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'indexStudent']);

    Route::get('/exam',[ExamController::class, 'indexStudent']);

    Route::get('/assignment',[AssignmentController::class, 'indexStudent']);

    Route::get('/notice',[NoticeController::class,'indexStudent']);

    Route::get('/schedule',[ScheduleController::class,'indexStudent']);

    Route::get('/result',[ExamController::class,'result']);

    Route::get('/subject',[SubjectController::class,'indexStudent']);

    Route::get('/notice',[NoticeController::class,'indexStudent']);
});


/*-------- professor --------*/
Route::prefix('/teacher')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'indexTeacher']);

    Route::get('/subjectProgress',[SubjectController::class, 'subjectProgress']);

    Route::get('/lecture',[SubjectController::class, 'lecture']);

    Route::get('/lms',[LMSController::class,'indexTeacher']);

    Route::get('/exam',[ExamController::class,'examProfessor']);

    Route::get('/notice',[NoticeController::class,'indexTeacher']);
});

