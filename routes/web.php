<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('app');
});

Route::get('/hello', function () {
    return Inertia::render('Hello', ['name' => 'Thiago Valls', 'gender' => 'Masculino', 'age' => 28])->withViewData(['data' => 'Somente para componente pai']);
})->name('hello');

Route::get('/route', function () {
    return Inertia::render('Route', []);
})->name('route');

Route::get('users', [UsersController::class, 'index']);
Route::get('users/{user}', [UsersController::class, 'show']);

Route::get('home', function(){
    return Inertia::render('Home', ['title' => 'Home']);
})->name('page.home');

Route::get('contact', function(){
    return Inertia::render('Contact', ['title' => 'Contact']);
})->name('page.contact');

Route::get('about', function(){
    return Inertia::render('About', ['title' => 'About']);
})->name('page.about');

// Route::get('/other', function () {
//     Inertia::setRootView('other');
//     return Inertia::render('app');
// });

    // <InertiaLink href={route('your.route.name')}>INDEX | </InertiaLink>
    // <InertiaLink href={route('your.route.name')}>CREATE | </InertiaLink>
    // <InertiaLink href={route('your.route.name', {user: 1})}>EDIT | </InertiaLink>
    // <InertiaLink href={route('your.route.name', {user: 1})}>SHOW | </InertiaLink>
    // <InertiaLink href={route('your.route.name', {user: 1})} method="put">UPDATE | </InertiaLink>
    // <InertiaLink href={route('your.route.name', {user: 1})} method="delete">DELETE | </InertiaLink>
    // <InertiaLink
    //     href={route('your.route.name')}
    //     method="post"
    //     data={ {name: "Thiago", email: "thiago@email.com"} }
    //     headers={ {TOKEN: "ddfojdfhudfd121332fodfddf"} }
    //     as="button"
    // >
    //     STORE |
    // </InertiaLink>
