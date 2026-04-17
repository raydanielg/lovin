<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.landing');
});

// Landing Pages Routes
Route::get('/about', function () { return view('pages.about'); })->name('about');
Route::get('/solutions', function () { return view('pages.solutions'); })->name('solutions');
Route::get('/industries', function () { return view('pages.industries'); })->name('industries');
Route::get('/products', function () { return view('pages.products'); })->name('products');
Route::get('/projects', function () { return view('pages.projects'); })->name('projects');
Route::get('/blog', function () { return view('pages.blog'); })->name('blog');
Route::get('/blog/{slug}', function ($slug) { return view('pages.blog-detail', compact('slug')); })->name('blog.detail');
Route::get('/careers', function () { return view('pages.careers'); })->name('careers');
Route::get('/contact', function () { return view('pages.contact'); })->name('contact');
Route::get('/demo', function () { return view('pages.demo'); })->name('demo');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile Setup Routes
Route::get('/profile/setup', [App\Http\Controllers\ProfileSetupController::class, 'index'])->name('profile.setup');
Route::post('/profile/setup/basic', [App\Http\Controllers\ProfileSetupController::class, 'storeBasic'])->name('profile.store.basic');
Route::post('/profile/setup/region', [App\Http\Controllers\ProfileSetupController::class, 'storeRegion'])->name('profile.store.region');

// Districts API
Route::get('/districts/{region}', [App\Http\Controllers\ProfileSetupController::class, 'getDistricts'])->name('districts.by.region');

// Manager Routes
Route::middleware(['auth'])->prefix('manager')->group(function () {
    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\ManagerController::class, 'dashboard'])->name('manager.dashboard');
    
    // Schools
    Route::get('/schools', [App\Http\Controllers\ManagerController::class, 'schoolsIndex'])->name('manager.schools.index');
    Route::get('/schools/create', [App\Http\Controllers\ManagerController::class, 'schoolsCreate'])->name('manager.schools.create');
    Route::post('/schools/store', [App\Http\Controllers\ManagerController::class, 'schoolsStore'])->name('manager.schools.store');
    Route::delete('/schools/{id}', [App\Http\Controllers\ManagerController::class, 'schoolsDestroy'])->name('manager.schools.destroy');

    // Import Schools
    Route::get('/schools/import', [App\Http\Controllers\ManagerController::class, 'schoolsImportPreview'])->name('manager.schools.import.preview');
    Route::post('/schools/import', [App\Http\Controllers\ManagerController::class, 'schoolsImportStore'])->name('manager.schools.import.store');
    
    // Students
    Route::get('/students', [App\Http\Controllers\ManagerController::class, 'students'])->name('manager.students');
    Route::get('/students/create', [App\Http\Controllers\ManagerController::class, 'studentsCreate'])->name('manager.students.create');
    
    // Subjects
    Route::get('/subjects', [App\Http\Controllers\ManagerController::class, 'subjectsIndex'])->name('manager.subjects.index');
    Route::get('/subjects/create', [App\Http\Controllers\ManagerController::class, 'subjectsCreate'])->name('manager.subjects.create');
    
    // Examinations
    Route::get('/exams', [App\Http\Controllers\ManagerController::class, 'examsIndex'])->name('manager.exams.index');
    Route::get('/exams/manage', [App\Http\Controllers\ManagerController::class, 'examsManage'])->name('manager.exams.manage');
    
    // Enter Marks
    Route::get('/marks', [App\Http\Controllers\ManagerController::class, 'marks'])->name('manager.marks');
    Route::get('/marks/live', [App\Http\Controllers\ManagerController::class, 'marksLive'])->name('manager.marks.live');
    
    // Reports
    Route::get('/reports', [App\Http\Controllers\ManagerController::class, 'reports'])->name('manager.reports');
    Route::get('/reports/school', [App\Http\Controllers\ManagerController::class, 'reportsSchool'])->name('manager.reports.school');
    Route::get('/reports/student', [App\Http\Controllers\ManagerController::class, 'reportsStudent'])->name('manager.reports.student');
    Route::get('/reports/class', [App\Http\Controllers\ManagerController::class, 'reportsClass'])->name('manager.reports.class');
    Route::get('/reports/ward', [App\Http\Controllers\ManagerController::class, 'reportsWard'])->name('manager.reports.ward');
    Route::get('/reports/district', [App\Http\Controllers\ManagerController::class, 'reportsDistrict'])->name('manager.reports.district');
    Route::get('/reports/regional', [App\Http\Controllers\ManagerController::class, 'reportsRegional'])->name('manager.reports.regional');
    Route::get('/reports/national', [App\Http\Controllers\ManagerController::class, 'reportsNational'])->name('manager.reports.national');
    
    // Subscription & Feedback
    Route::get('/subscription', [App\Http\Controllers\ManagerController::class, 'subscription'])->name('manager.subscription');
    Route::get('/feedback', [App\Http\Controllers\ManagerController::class, 'feedback'])->name('manager.feedback');
    
    // Settings
    Route::get('/settings', [App\Http\Controllers\ManagerController::class, 'settings'])->name('manager.settings');
});
