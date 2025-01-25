<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\StudentController;
// use Illuminate\Session\Middleware\AuthenticateSession;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ClassSubjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UClassController;
use App\Http\Middleware\UserMiddleware;
use App\Models\Subject;
use App\Http\Controllers\TeacherLoginController;
use App\Http\Controllers\StudentLoginController;

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// // Admin routes
// Route::middleware(['auth', 'is_admin'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.layouts.app');
//     });

// });

// // User routes
// Route::middleware(['auth', 'is_user'])->group(function () {
//     Route::get('/user/index', function () {
//         return view('user.index');
//     });
// });



// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// Route::middleware(['auth', 'checkUserRole'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });

// // Хэрэглэгчийн маршрут
// Route::middleware(['auth', 'checkUserRole'])->group(function () {
//     Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
// });




Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function ()  {
    Route::get('/admin/dashboard',function(){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::controller(AuthenticatedSessionController::class)->group(function ()  {
        Route::get('admin/logout', 'destroy')->name('admin.logout');
    });

    Route::controller(StudentController::class)->prefix('admin')->group(function(){
        Route::get('students','index')->name('admin.student.index');
        Route::get('student/create','create')->name('admin.student.create');
        Route::post('students','store')->name('admin.student.store');
        Route::get('students/edit/{id}','edit')->name('admin.student.edit');
        Route::put('students/{id}', 'update')->name('admin.student.update');

        Route::delete('students/delete/{id}', 'destroy')->name('admin.student.delete');
    });

    Route::controller(TeacherController::class)->prefix('admin')->group(function(){
        Route::get('teachers','index')->name('admin.teacher.index');
        Route::get('teacher/create','create')->name('admin.teacher.create');
        Route::post('teachers','store')->name('admin.teacher.store');
        Route::get('teacher/edit/{id}','edit')->name('admin.teacher.edit');
        Route::put('teachers/{id}', 'update')->name('admin.teacher.update');

        Route::delete('teacher/delete/{id}', 'destroy')->name('admin.teachers.delete');
    });
    Route::controller(DepartmentController::class)->prefix('admin')->group(function(){
        Route::get('departments','index')->name('admin.department.index');
        Route::get('department/create','create')->name('admin.department.create');
        Route::post('departments','store')->name('admin.department.store');
        Route::get('department/edit/{id}','edit')->name('admin.department.edit');
        Route::put('departments/{id}', 'update')->name('admin.department.update');

        Route::delete('department/delete/{id}', 'destroy')->name('admin.department.delete');
    });

    // Route::controller(DepartmentController::class)->prefix('admin')->group(function(){
    //     Route::get('departments','index')->name('admin.department.index');
    //     Route::get('department/create','create')->name('admin.department.create');
    //     Route::post('departments','store')->name('admin.department.store');
    //     Route::get('department/edit/{id}','edit')->name('admin.department.edit');
    //     Route::put('departments/{id}', 'update')->name('admin.department.update');

    //     Route::delete('department/delete/{id}', 'destroy')->name('admin.department.delete');
    // });

    Route::controller(UClassController::class)->prefix('admin')->group(function(){
        Route::get('classes','index')->name('admin.class.index');
        Route::get('class/create','create')->name('admin.class.create');
        Route::post('classes','store')->name('admin.class.store');
        Route::get('class/edit/{id}','edit')->name('admin.class.edit');
        Route::put('classes/{id}', 'update')->name('admin.class.update');

        Route::delete('class/delete/{id}', 'destroy')->name('admin.class.delete');
    });

    Route::controller(SubjectController::class)->prefix('admin')->group(function(){
        Route::get('subjects','index')->name('admin.subject.index');
        Route::get('subject/create','create')->name('admin.subject.create');
        Route::post('subjects','store')->name('admin.subject.store');
        Route::get('subject/edit/{id}','edit')->name('admin.subject.edit');
        Route::put('subjects/{id}', 'update')->name('admin.subject.update');

        Route::delete('subject/delete/{id}', 'destroy')->name('admin.subject.delete');
    });

    Route::controller(AcademicYearController::class)->prefix('admin')->group(function(){
        Route::get('academicyears','index')->name('admin.academicyear.index');
        Route::get('academicyear/create','create')->name('admin.academicyear.create');
        Route::post('academicyears','store')->name('admin.academicyear.store');
        Route::get('academicyear/edit/{id}','edit')->name('admin.academicyear.edit');
        Route::put('academicyears/{id}', 'update')->name('admin.academicyear.update');

        Route::delete('academicyear/delete/{id}', 'destroy')->name('admin.academicyear.delete');


});
    Route::controller(ClassSubjectController::class)->prefix('admin')->group(function(){
        Route::get('classsubjects','index')->name('admin.classsubject.index');
        Route::get('classsubject/create','create')->name('admin.classsubject.create');
        Route::post('classsubjects','store')->name('admin.classsubject.store');
        Route::get('classsubject/edit/{id}','edit')->name('admin.classsubject.edit');
        Route::put('classsubjects/{id}', 'update')->name('admin.classsubject.update');

        Route::delete('classsubject/delete/{id}', 'destroy')->name('admin.classsubject.delete');

    });

    Route::controller(DashboardController::class)->prefix('admin')->group(function(){
        Route::get('/dashboard', 'index')->name('admin.dashboard');
    });
    // Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


});
// User routes
Route::middleware(['auth', \App\Http\Middleware\UserMiddleware::class])->group(function ()  {
    Route::get('/user/dashboard',function(){
        return view('user.layouts.index');
    })->name('user.layouts.index');

    Route::controller(AuthenticatedSessionController::class)->group(function ()  {
        Route::get('user/logout', 'destroy')->name('user.logout');
    });
    //
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('user.profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('user.profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('user.profile.destroy');



});


Route::get('/teacher/login', [TeacherLoginController::class, 'showLoginForm'])->name('teacher.login');
Route::post('/teacher/login', [TeacherLoginController::class, 'login']);
Route::post('/teacher/logout', [TeacherLoginController::class, 'logout'])->name('teacher.logout');

Route::get('/student/login', [StudentLoginController::class, 'showLoginForm'])->name('student.login');
Route::post('/student/login', [StudentLoginController::class, 'login']);
Route::post('/student/logout', [StudentLoginController::class, 'logout'])->name('student.logout');


Route::middleware(['teacher'])->group(function () {
    Route::get('/teacher/dashboard', function () {
        return view('teacher.layouts.index');
    })->name('teacher.layouts.index');
});

Route::middleware(['student'])->group(function () {
    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    })->name('student.dashboard');
});
