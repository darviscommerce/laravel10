<?php

use App\Http\Livewire\Otterlo\OtterloArea;
use App\Http\Livewire\Otterlo\OtterloBooking;
use App\Http\Livewire\Otterlo\OtterloContact;
use App\Http\Livewire\Otterlo\OtterloHomepage;
use App\Http\Livewire\Otterlo\OtterloPage;
use App\Http\Livewire\Otterlo\OtterloVilla;
use Illuminate\Support\Facades\Route;

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

Route::get('/',OtterloHomepage::class)->name('otterlo.homepage');
Route::get('/boeken',OtterloBooking::class)->name('otterlo.booking');
Route::get('/contact',OtterloContact::class)->name('otterlo.contact');
Route::get('/omgeving',OtterloArea::class)->name('otterlo.area');
Route::get('/pagina',OtterloPage::class)->name('otterlo.page');
Route::get('/villa/{input}',OtterloVilla::class)->name('otterlo.villa');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => config('manta-cms.prefix'), 'middleware' => config('manta-cms.middleware')], function () {
    Route::get('/dashboard', App\Http\Livewire\Cms\CmsGeneral::class)->name('manta.cms.general');
    Route::get('/algemene-instellingen', App\Http\Livewire\Cms\CmsGeneral::class)->name('manta.cms.general');

    Route::get('/gebruikers', App\Http\Livewire\Users\UsersList::class)->name('manta.users.list');
    Route::get('/gebruikers/toevoegen', App\Http\Livewire\Users\UsersCreate::class)->name('manta.users.create');
    Route::get('/gebruikers/aanpassen/{input}', App\Http\Livewire\Users\UsersUpdate::class)->name('manta.users.update');
});

Route::group(['prefix' => config('manta-cms.prefix'), 'middleware' => config('manta-cms.middleware')], function () {
   Route::get('/pagina', App\Http\Livewire\Pages\PagesList::class)->name('manta.pages.list');
    Route::get('/pagina/toevoegen', App\Http\Livewire\Pages\PagesCreate::class)->name('manta.pages.create');
    Route::get('/pagina/aanpassen/{input}', App\Http\Livewire\Pages\PagesUpdate::class)->name('manta.pages.update');
    Route::get('/pagina/uploads/{input}', App\Http\Livewire\Pages\PagesUploads::class)->name('manta.pages.uploads');
});

Route::group(['prefix' => config('manta-cms.prefix'), 'middleware' => config('manta-cms.middleware')], function () {
    Route::get('/uploads', App\Http\Livewire\Uploads\UploadsList::class)->name('manta.uploads.list');
    Route::get('/uploads/toevoegen', App\Http\Livewire\Uploads\UploadsCreate::class)->name('manta.uploads.create');
    Route::get('/uploads/aanpassen/{input}', App\Http\Livewire\Uploads\UploadsUpdate::class)->name('manta.uploads.update');
    Route::get('/uploads/crop/{input}', App\Http\Livewire\Uploads\UploadsCrop::class)->name('manta.uploads.crop');
});

/**
 * * Downloads
 */
Route::get('/file/download/{uploads}', [App\Http\Controllers\MantaUploadController::class, 'download'])->name('file.download');
Route::get('/file/serve/{uploads}', [App\Http\Controllers\MantaUploadController::class, 'serve'])->name('file.serve');
