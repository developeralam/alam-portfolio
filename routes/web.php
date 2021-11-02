<?php

use App\Models\Clients;
use App\Http\Livewire\Backend\Blog;
use App\Http\Livewire\Backend\Work;
use App\Http\Livewire\Backend\About;
use App\Http\Livewire\Backend\Skill;
use App\Http\Livewire\Frontend\Home;
use App\Http\Livewire\Backend\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backend\Counter;
use App\Http\Livewire\Backend\Partners;
use App\Http\Livewire\Backend\Dashboard;
use App\Http\Livewire\Backend\Education;
use App\Http\Livewire\Backend\NewsLetter;
use App\Http\Livewire\Backend\SiteConfig;
use App\Http\Livewire\Backend\SocialLink;

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

Route::get('/', Home::class);
Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/about', About::class)->name('admin.about');
    Route::get('/blog', Blog::class)->name('admin.blog');
    Route::get('/client', Client::class)->name('admin.client');
    Route::get('/counter', Counter::class)->name('admin.counter');
    Route::get('/education', Education::class)->name('admin.education');
    Route::get('/newsletter', NewsLetter::class)->name('admin.newsletter');
    Route::get('/partner', Partners::class)->name('admin.partner');
    Route::get('/siteconfig', SiteConfig::class)->name('admin.siteconfig');
    Route::get('/skill', Skill::class)->name('admin.skill');
    Route::get('/sociallink', SocialLink::class)->name('admin.sociallink');
    Route::get('/work', Work::class)->name('admin.work');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
