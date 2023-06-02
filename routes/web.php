<?php

use App\Http\Livewire\Ccs\CcsAbout;
use App\Http\Livewire\Ccs\CcsCapacity;
use App\Http\Livewire\Ccs\CcsCertification;
use App\Http\Livewire\Ccs\CcsCoatingsystems;
use App\Http\Livewire\Ccs\CcsContact;
use App\Http\Livewire\Ccs\CcsHomepage;
use App\Http\Livewire\Ccs\CcsNews;
use App\Http\Livewire\Ccs\CcsNewsView;
use App\Http\Livewire\Ccs\CcsService;
use App\Http\Livewire\Ccs\CcsVacancies;
use App\Http\Livewire\Ccs\CcsVacancy;
use App\Http\Livewire\Ccs\CcsView;
use App\Http\Livewire\Ccs\CcsWhy;
use App\Http\Livewire\Cms\CmsSandbox;
use App\Http\Livewire\Otterlo\OtterloArea;
use App\Http\Livewire\Otterlo\OtterloBooking;
use App\Http\Livewire\Otterlo\OtterloContact;
use App\Http\Livewire\Otterlo\OtterloHomepage;
use App\Http\Livewire\Otterlo\OtterloVilla;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/sandbox', CmsSandbox::class)->name('manta.sandbox');

    Route::get('/woningen', App\Http\Livewire\Houses\HousesList::class)->name('manta.houses.list');
    Route::get('/woningen/toevoegen', App\Http\Livewire\Houses\HousesCreate::class)->name('manta.houses.create');
    Route::get('/woningen/aanpassen/{input}', App\Http\Livewire\Houses\HousesUpdate::class)->name('manta.houses.update');
    Route::get('/woningen/tags/{input}', App\Http\Livewire\Houses\HousesTags::class)->name('manta.houses.tags');
    Route::get('/woningen/details/{input}', App\Http\Livewire\Houses\HousesDetails::class)->name('manta.houses.details');
    Route::get('/woningen/headers/{input}', App\Http\Livewire\Houses\HousesHeaders::class)->name('manta.houses.headers');
    Route::get('/woningen/fotos/{input}', App\Http\Livewire\Houses\HousesPhotos::class)->name('manta.houses.photos');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
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

Route::group(['prefix' => config('manta-cms.prefix'), 'middleware' => config('manta-cms.middleware')], function () {
    Route::get('/contact', App\Http\Livewire\Contact\ContactList::class)->name('manta.contact.list');
    Route::get('/contact/toevoegen', App\Http\Livewire\Contact\ContactCreate::class)->name('manta.contact.create');
    Route::get('/contact/aanpassen/{input}', App\Http\Livewire\Contact\ContactUpdate::class)->name('manta.contact.update');
    Route::get('/contact/bekijken/{input}', App\Http\Livewire\Contact\ContactRead::class)->name('manta.contact.read');
});

Route::group(['prefix' => config('manta-cms.prefix'), 'middleware' => config('manta-cms.middleware')], function () {
    Route::get('/vacature', App\Http\Livewire\Vacancy\VacancyList::class)->name('manta.vacancies.list');
    Route::get('/vacature/toevoegen', App\Http\Livewire\Vacancy\VacancyCreate::class)->name('manta.vacancies.create');
    Route::get('/vacature/aanpassen/{input}', App\Http\Livewire\Vacancy\VacancyUpdate::class)->name('manta.vacancies.update');
    Route::get('/vacature/bekijken/{input}', App\Http\Livewire\Vacancy\VacancyRead::class)->name('manta.vacancies.read');
    Route::get('/vacature/uploads/{input}', App\Http\Livewire\Vacancy\VacancyUploads::class)->name('manta.vacancies.uploads');
});

Route::group(['prefix' => config('manta-cms.prefix'), 'middleware' => config('manta-cms.middleware')], function () {
    Route::get('/blog', App\Http\Livewire\Blog\BlogList::class)->name('manta.blog.list');
    Route::get('/blog/toevoegen', App\Http\Livewire\Blog\BlogCreate::class)->name('manta.blog.create');
    Route::get('/blog/aanpassen/{input}', App\Http\Livewire\Blog\BlogUpdate::class)->name('manta.blog.update');
    Route::get('/blog/bekijken/{input}', App\Http\Livewire\Blog\BlogRead::class)->name('manta.blog.read');
    Route::get('/blog/uploads/{input}', App\Http\Livewire\Blog\BlogUploads::class)->name('manta.blog.uploads');
});

/**
 * * Downloads
 */
Route::get('/file/download/{uploads}', [App\Http\Controllers\MantaUploadController::class, 'download'])->name('file.download');
Route::get('/file/serve/{uploads}', [App\Http\Controllers\MantaUploadController::class, 'serve'])->name('file.serve');


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize']
], function () {

    if (env("THEME") == "CCS") {
        Route::get('/', CcsHomepage::class)->name('ccs.homepage');

        Route::get(LaravelLocalization::transRoute('routes_ccs.about'), CcsAbout::class)->name('ccs.about');
        Route::get(LaravelLocalization::transRoute('routes_ccs.why'), CcsWhy::class)->name('ccs.why');
        Route::get(LaravelLocalization::transRoute('routes_ccs.service'), CcsService::class)->name('ccs.service');
        Route::get(LaravelLocalization::transRoute('routes_ccs.coating-systems-colours'), CcsCoatingsystems::class)->name('ccs.coatingsystems');
        Route::get(LaravelLocalization::transRoute('routes_ccs.capacity'), CcsCapacity::class)->name('ccs.capacity');
        Route::get(LaravelLocalization::transRoute('routes_ccs.certification-qualicoat'), CcsCertification::class)->name('ccs.certification');

        Route::get(LaravelLocalization::transRoute('routes_ccs.news'), CcsNews::class)->name('ccs.news');
        Route::get(LaravelLocalization::transRoute('routes_ccs.news') . '/{input}', CcsNewsView::class)->name('ccs.news.view');

        Route::get(LaravelLocalization::transRoute('routes_ccs.vacancies'), CcsVacancies::class)->name('ccs.vacancies.list');
        Route::get(LaravelLocalization::transRoute('routes_ccs.vacancies') . '/{input}', CcsVacancy::class)->name('ccs.vacancies.view');

        Route::get(LaravelLocalization::transRoute('routes_ccs.contact'), CcsContact::class)->name('ccs.contact');

        Route::get('/{input}', CcsView::class)->name('ccs.view');
    }

    if (env("THEME") == "OTTERLO") {
        Route::get('/', OtterloHomepage::class)->name('otterlo.homepage');
        Route::get(LaravelLocalization::transRoute('routes_otterlo.book'), OtterloBooking::class)->name('otterlo.booking');
        Route::get(LaravelLocalization::transRoute('routes_otterlo.contact'), OtterloContact::class)->name('otterlo.contact');
        Route::get(LaravelLocalization::transRoute('routes_otterlo.surroundings'), OtterloArea::class)->name('otterlo.area');
        // Route::get('/pagina',OtterloPage::class)->name('otterlo.page');
        Route::get('/villa/{input}', OtterloVilla::class)->name('otterlo.villa');

        Route::get('/{input}', App\Http\Livewire\Pages\PagesView::class)->name('otterlo.view');
    }
});
