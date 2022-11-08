<?php

use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsLetterSubscribersController;
use App\Http\Middleware\Login;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/blog', [ArticleController::class, 'blog'])->name('blog');

Route::get('/contact', function () {
    // dd(session());
    return view('pages.contact');
})->name('contact');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article');

// Routes pour le back-office

Route::get('/administration', [HomeController::class, 'admin_index'])->name('admin.index')->middleware([Login::class]);

Route::get('/blog-admin', [ArticleController::class, 'index'])->name('admin.blog')->middleware([Login::class]);

Route::get('/ajouter-article', function () {
    return view('admin.blog.create');
})->name('article.create')->middleware([Login::class]);

Route::post('/ajout-article', [ArticleController::class, 'store'])->name('article.store')->middleware([Login::class]);

Route::get('/editer-article/{id}', [ArticleController::class, 'edit'])->name('article.edit')->middleware([Login::class]);

Route::put('/update-article/{id}', [ArticleController::class, 'update'])->name('article.updating')->middleware([Login::class]);

Route::delete('/delete-article/{id}', [ArticleController::class, 'destroy'])->name('article.deleting')->middleware([Login::class]);

Route::get('/messages', [MessageController::class, 'index'])->name('messages')->middleware([Login::class]);

Route::post('/send-message', [MessageController::class, 'store'])->name('message.store');

Route::get('/newsletter', [NewsLetterSubscribersController::class, 'index'])->name('newsletter.index')->middleware([Login::class]);

Route::post('/add-to-newsletter', [NewsLetterSubscribersController::class, 'store'])->name('newsletter.store');

Route::post('/add-commentaire', [CommentaireController::class, 'store'])->name('commentaire.store');

//Routes pour l'authentification
Route::get('/connexion', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AdministrateurController::class, 'login'])->name('admin.login');

Route::get('/inscription', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AdministrateurController::class, 'store'])->name('admin.store');

Route::get('logout', [AdministrateurController::class, 'destroy'])->name('logout');

//Routes pour les adminstrateurs
Route::get('/administrateurs', [AdministrateurController::class, 'index'])->name('admins.index');

Route::get('/administrateur-role/{id}', [AdministrateurController::class, 'setRole'])->name('admin.role');

Route::get('/administrateur-activation/{id}', [AdministrateurController::class, 'activate'])->name('admin.activate');

//Route pour le mailing
Route::get('/mailer', [MailController::class, 'index'])->name('mail.send');
