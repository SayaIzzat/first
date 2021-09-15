<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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

Route::get('/home', function () {
    return view('welcome');
})->name('home');

//display login page
Route::get('/login', function () {
    return view('authentication.login_page');
})->name('login_page');

//request & authentication
Route::post('/verify', function (Request $request) {
    return $request->all();
})->name('verify');

Route::get('/forgot-password', function () {
    return view('authentication.forgot-password');
})->middleware('guest')->name('forgot-password');

Route::post('/verify-forgot-password', function (Request $request) {
    // $request->validate(['email' => 'required|email']);

    // $status = Password::sendResetLink(
    //     $request->only('email')
    // );

    // return $status === Password::RESET_LINK_SENT
    //             ? back()->with(['status' => __($status)])
    //             : back()->withErrors(['email' => __($status)]);
    return $request->all();
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('authentication.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::redirect('/utama', env('APP_URL'), 301)->name('utama');
