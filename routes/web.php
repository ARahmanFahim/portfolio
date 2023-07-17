<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\EducationContrller;
use App\Http\Controllers\TastimonialController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\WellcomeController;
use App\Http\Controllers\SkilController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('admin.home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/add-portfolio',[PortfolioController::class,'index'])->name('add-portfolio');
Route::post('/create-portfolio',[PortfolioController::class,'create'])->name('create-portfolio');
Route::get('/manage-portfolio',[PortfolioController::class,'manage'])->name('manage-portfolio');
Route::get('/edit-portfolio/{id}',[PortfolioController::class,'edit'])->name('edit-portfolio');
Route::post('/update-portfolio/{id}',[PortfolioController::class,'update'])->name('update-portfolio');
Route::get('/delete-portfolio/{id}',[PortfolioController::class,'delete'])->name('delete-portfolio');

Route::get('/add-education',[EducationContrller::class,'index'])->name('add-education');
Route::get('/manage-education',[EducationContrller::class,'manage'])->name('manage-education');
Route::post('/create-education',[EducationContrller::class,'create'])->name('create-education');
Route::get('/edit-education/{id}',[EducationContrller::class,'edit'])->name('edit-education');
Route::post('/update-education/{id}',[EducationContrller::class,'update'])->name('update-education');
Route::get('/delete-education/{id}',[EducationContrller::class,'delete'])->name('delete-education');


Route::get('/add-tastimonial',[TastimonialController::class,'index'])->name('add-tastimonial');
Route::post('/create-tastimonial',[TastimonialController::class,'create'])->name('create-tastimonial');
Route::get('/manage-tastimonial',[TastimonialController::class,'manage'])->name('manage-tastimonial');
Route::get('/edit-tastimonial/{id}',[TastimonialController::class,'edit'])->name('edit-tastimonial');
Route::post('/update-tastimonial/{id}',[TastimonialController::class,'update'])->name('update-tastimonial');
Route::get('/delete-tastimonial/{id}',[TastimonialController::class,'delete'])->name('delete-tastimonial');


Route::get('/add-experience',[ExperienceController::class,'index'])->name('add-experience');
Route::get('/manage-experience',[ExperienceController::class,'manage'])->name('manage-experience');
Route::post('/create-experience',[ExperienceController::class,'create'])->name('create-experience');
Route::get('/edit-experience/{id}',[ExperienceController::class,'edit'])->name('edit-experience');
Route::post('/update-experience/{id}',[ExperienceController::class,'update'])->name('update-experience');
Route::get('/delete-experience/{id}',[ExperienceController::class,'delete'])->name('delete-experience');


Route::get('/add-features',[FeaturesController::class,'index'])->name('add-features');
Route::get('/manage-features',[FeaturesController::class,'manage'])->name('manage-features');
Route::post('/create-features',[FeaturesController::class,'create'])->name('create-features');
Route::get('/edit-features/{id}',[FeaturesController::class,'edit'])->name('edit-features');
Route::post('/update-features/{id}',[FeaturesController::class,'update'])->name('update-features');
Route::get('/delete-features/{id}',[FeaturesController::class,'delete'])->name('delete-features');


Route::get('/add-wellcome',[WellcomeController::class,'index'])->name('add-wellcome');
Route::get('/manage-wellcome',[WellcomeController::class,'manage'])->name('manage-wellcome');
Route::post('/create-wellcome',[WellcomeController::class,'create'])->name('create-wellcome');
Route::get('/edit-wellcome/{id}',[WellcomeController::class,'edit'])->name('edit-wellcome');
Route::post('/update-wellcome/{id}',[WellcomeController::class,'update'])->name('update-wellcome');
Route::get('/delete-wellcome/{id}',[WellcomeController::class,'delete'])->name('delete-wellcome');


Route::get('/add-skill',[SkilController::class,'index'])->name('add-skill');
Route::post('/create-skill',[SkilController::class,'create'])->name('create-skill');
Route::get('/manage-skill',[SkilController::class,'manage'])->name('manage-skill');
Route::get('/edit-skill/{id}',[SkilController::class,'edit'])->name('edit-skill');
Route::post('/update-skill/{id}',[SkilController::class,'update'])->name('update-skill');
Route::get('/delete-skill/{id}',[SkilController::class,'delete'])->name('delete-skill');


Route::get('/add-footer',[FooterController::class,'index'])->name('add-footer');
Route::post('/create-footer',[FooterController::class,'create'])->name('create-footer');
Route::get('/manage-footer',[FooterController::class,'manage'])->name('manage-footer');
Route::get('/edit-footer/{id}',[FooterController::class,'edit'])->name('edit-footer');
Route::post('/update-footer/{id}',[FooterController::class,'update'])->name('update-footer');
Route::get('/delete-footer/{id}',[FooterController::class,'delete'])->name('delete-footer');



Route::post('/create-contact',[ContactController::class,'create'])->name('create-contact');
Route::get('/manage-contact',[ContactController::class,'manage'])->name('manage-contact');
Route::get('/delete-contact/{id}',[ContactController::class,'delete'])->name('delete-contact');



Route::get('/add-settings',[SettingsController::class,'index'])->name('add-settings');
Route::post('/create-settings',[SettingsController::class,'create'])->name('create-settings');
Route::get('/manage-settings',[SettingsController::class,'manage'])->name('manage-settings');
Route::get('/edit-settings/{id}',[SettingsController::class,'edit'])->name('edit-settings');
Route::post('/update-settings/{id}',[SettingsController::class,'update'])->name('update-settings');
Route::get('/delete-settings/{id}',[SettingsController::class,'delete'])->name('delete-settings');


require __DIR__.'/auth.php';
