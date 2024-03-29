<nav class="navbar navbar-expand-lg" aria-label="Ninth navbar example" style="background-color: #e3f2fd;">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ route('manta.event.list') }}">
            <img src="/images/manta/manta-logo.svg" alt="Manta" height="24">
        </a>
        <div class="collapse navbar-collapse" id="navbarsExample07XL">
            <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                @if (Route::has('dashboard'))
                    <li class="nav-item">
                        <a class="nav-link {{ $activeHome }}" aria-current="page"
                            href="{{ route('manta.event.list') }}">Home</a>
                    </li>
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $activeModules }}" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Modules</a>
                    <ul class="dropdown-menu">
                        @if (Route::has('manta.event.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.event.') ? 'active' : null }}"
                                    href="{{ route('manta.event.list') }}">Evenementen</a></li>
                        @endif
                        @if (Route::has('manta.facebook.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.facebook.') ? 'active' : null }}"
                                    href="{{ route('manta.facebook.list') }}">Dorper van 't jaar</a></li>
                        @endif


                        @if (Route::has('manta.contact.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.contact.') ? 'active' : null }}"
                                    href="{{ route('manta.contact.list') }}">Contact</a></li>
                        @endif
                        @if (Route::has('manta.member.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.member.') ? 'active' : null }}"
                                    href="{{ route('manta.member.list') }}">Nieuwe leden</a></li>
                        @endif
                        {{-- @if (Route::has('manta.houses.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.houses.') ? 'active' : null }}"
                                    href="{{ route('manta.houses.list') }}">Huisjes</a></li>
                        @endif --}}
                        @if (Route::has('manta.blog.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.blog.') ? 'active' : null }}"
                                    href="{{ route('manta.blog.list') }}">Nieuws</a></li>
                        @endif
                        @if (Route::has('manta.pages.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.pages.') ? 'active' : null }}"
                                    href="{{ route('manta.pages.list') }}">Tekst pagina's</a></li>
                        @endif
                        {{-- @if (Route::has('cms.openinghours.update'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.openinghours.') ? 'active' : null }}"
                                    href="{{ route('cms.openinghours.update') }}">Openingstijden</a></li>
                        @endif --}}
                        @if (Route::has('manta.photoalbum.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.photoalbum.') ? 'active' : null }}"
                                    href="{{ route('manta.photoalbum.list') }}">Fotoalbums</a></li>
                        @endif
                        {{-- @if (Route::has('manta.vacancies.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.vacancies.') ? 'active' : null }}"
                                    href="{{ route('manta.vacancies.list') }}">Vacatures</a></li>
                        @endif --}}
                        {{-- @if (Route::has('cms.rentalrates.update'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.rentalrates.') ? 'active' : null }}"
                                    href="{{ route('cms.rentalrates.update') }}">Verhuurtarieven</a></li>
                        @endif --}}
                        @if (Route::has('manta.newsletter.subscriber.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, 'manta.newsletter.subscriber.') ? 'active' : null }}"
                                    href="{{ route('manta.newsletter.subscriber.list') }}">Nieuwsbrief
                                    inschrijvingen</a></li>
                        @endif
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $activeModules }}" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Tools</a>
                    <ul class="dropdown-menu">
                        @if (Route::has('manta.users.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, 'manta.users.') ? 'active' : null }}"
                                    href="{{ route('manta.users.list') }}">Gebruikers</a></li>
                        @endif

                        @if (Route::has('manta.uploads.list'))
                            <li><a class="dropdown-item {{ str_contains($currentRouteName, '.uploads.') ? 'active' : null }}"
                                    href="{{ route('manta.uploads.list') }}">Uploads</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
            <div id="intro" class="pull-right">
                <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('logout') }}">Uitloggen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ env('APP_URL') }}" target="_blank">Website</a>
                    </li>
                </ul>
            </div>
            {{-- <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form> --}}
        </div>
    </div>
</nav>
