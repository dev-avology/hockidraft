<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HockyController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('sign-up', [AuthController::class, 'signUp'])->name('signup');
Route::post('sign-up-post', [AuthController::class, 'signUpPost'])->name('signup.post');
Route::post('login-post', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('how-to-play', [HomeController::class, 'howToPlay'])->name('how-to-play');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-save', [HomeController::class, 'contactSave'])->name('contact.save');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy');
Route::get('/terms-conditions', [HomeController::class, 'termsCondition'])->name('terms');



Route::middleware('auth')->group(function () {

    // Route::get('/save-team', [FootballController::class, 'saveTeam'])->name('save-team');
    Route::prefix('profile')->group(function () {
        Route::get('/my-profile', [ProfileController::class, 'myProfile'])->name('profile.profile');
        Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
        Route::get('/change-password', [ProfileController::class, 'changePassword'])->name('profile.change.password');
        Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update.password');
        // Route::get('/my-matches', [ProfileController::class, 'myMatches'])->name('profile.matches');
        // Route::get('/match-detail/{leagueId}/{matchId}', [ProfileController::class, 'matchDetails'])->name('profile.match-detail');
        Route::post('/profile/update-pic', [ProfileController::class, 'updateProfilePic'])->name('profile.update-pic');
    });
});

Route::get('leagues', [HockyController::class, 'leagues'])->name('leagues');
Route::get('/league/{leagueId}/matches', [HockyController::class, 'getLeagueMatches'])->name('leagueMatches');
Route::get('/matche-detail/{matcheId}', [HockyController::class, 'matchDetails'])->name('matche-detail');





