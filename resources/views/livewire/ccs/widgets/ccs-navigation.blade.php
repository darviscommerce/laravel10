<nav class="navigation">
    <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease"
        data-doc-height="1" role="banner" class="navbar w-nav">
        <div class="nav-top">
            <div class="nav-top-wrapper">
                <div class="nav-top_left">
                    <a href="tel:+3214480478" class="nav-top_link w-inline-block">
                        <div class="flex_align-center">
                            <div class="fontawesome is-solid margin-right_xs"></div>
                            <div>+32 (0)14 48 04 78</div>
                        </div>
                    </a>
                    <a href="mailto:coating@compri.eu" class="nav-top_link phone_hide w-inline-block">
                        <div class="flex_align-center">
                            <div class="fontawesome margin-right_xs"></div>
                            <div>coating@compri.eu</div>
                        </div>
                    </a>
                    <a href="https://goo.gl/maps/D61E2y9hmptiiXay9" target="_blank"
                        class="nav-top_link phone_hide w-inline-block">
                        <div class="flex_align-center">
                            <div class="fontawesome is-solid margin-right_xs"></div>
                            <div><strong></strong>Everdongenlaan 5, 2300 Turnhout, BE</div>
                        </div>
                    </a>
                </div>
                <div class="nav-top_right">
                    <div class="language-wrapper">
                        <a href="/nl/"
                            class="language-link {{ app()->getLocale() != 'nl' ? 'deactive' : null }} w-inline-block"
                            aria-label="Nederlands"><img src="/theme/ccs/images/Nederlandsevlag.png" alt=""
                                class="language-flag-img"></a>
                        <a href="/en/"
                            class="language-link {{ app()->getLocale() != 'en' ? 'deactive' : null }} w-inline-block"
                            aria-label="English"><img src="/theme/ccs/images/engelsevlag.png" alt=""
                                class="language-flag-img"></a>
                        <a href="/de/"
                            class="language-link {{ app()->getLocale() != 'de' ? 'deactive' : null }} w-inline-block"
                            aria-label="Deutsch"><img src="/theme/ccs/images/duitsevlag.png" alt=""
                                class="language-flag-img"></a>
                        <a href="/es/"
                            class="language-link {{ app()->getLocale() != 'es' ? 'deactive' : null }} w-inline-block"
                            aria-label="Español"><img src="/theme/ccs/images/vlagspanje.png"
                                sizes="(max-width: 479px) 20px, (max-width: 991px) 30px, 25px"
                                srcset="/theme/ccs/images/vlagspanje-p-500.png 500w, /theme/ccs/images/vlagspanje-p-800.png 800w, /theme/ccs/images/vlagspanje-p-1080.png 1080w, /theme/ccs/images/vlagspanje.png 1200w"
                                alt="" class="language-flag-img"></a>
                        <a href="/se/"
                            class="language-link {{ app()->getLocale() != 'se' ? 'deactive' : null }} w-inline-block"
                            aria-label="Svenska"><img src="/theme/ccs/images/zweden.png" alt=""
                                class="language-flag-img"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-wrapper">
            <div class="nav-content">
                <a href="/{{ app()->getLocale() }}/" aria-current="page" class="logo w-nav-brand w--current"><img
                        src="/theme/ccs/images/logo_acs.png" alt="Logo Compri Coating Service"
                        sizes="(max-width: 991px) 196.640625px, 252.3671875px"
                        srcset="/theme/ccs/images/logo_acs-p-500.png 500w, /theme/ccs/images/logo_acs.png 651w"
                        class="logo-img"></a>
                <nav role="navigation" class="navbar-menu w-nav-menu">
                    <a href="/{{ app()->getLocale() }}/" aria-current="page" class="nav-link w-inline-block w--current">
                        <div>
                            <div>{!! __('ccs.home') !!}</div>
                            <div class="nav-stripe"></div>
                        </div>
                    </a>
                    <div data-hover="false" data-delay="0" class="nav-link is-dropdown w-dropdown">
                        <div class="nav-dropdown_toggle w-dropdown-toggle">
                            <div>
                                <div class="nav-dropdown_icon w-icon-dropdown-toggle"></div>
                                <div>{!! __('ccs.about') !!}</div>
                            </div>
                            <div class="nav-stripe"></div>
                        </div>
                        <nav class="nav-dropdown_list w-dropdown-list">
                            <div class="nav-compri_item-wrapper_left">
                                <div class="nav-compri_item-content">
                                    <div class="nav-compri_item">
                                        <a href="/{{ app()->getLocale() }}/{{ LaravelLocalization::transRoute('routes_ccs.about') }}"
                                            class="nav-compri_link-wrapper w-inline-block">
                                            <div class="nav-compri_image"><img
                                                    src="/theme/ccs/images/20221107_CompriCoating_183-bewerkt.jpg"
                                                    srcset="/theme/ccs/images/20221107_CompriCoating_183-bewerkt-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_183-bewerkt-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_183-bewerkt-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_183-bewerkt.jpg 1500w"
                                                    sizes="100vw" alt="" class="image-cover"></div>
                                            <div class="link-styled">{!! __('ccs.about-compri-coating') !!}</div>
                                        </a>
                                    </div>
                                    <div class="nav-compri_item">
                                        <a href="/{{ app()->getLocale() }}/{{ LaravelLocalization::transRoute('routes_ccs.why') }}"
                                            class="nav-compri_link-wrapper w-inline-block">
                                            <div class="nav-compri_image"><img
                                                    src="/theme/ccs/images/20221107_CompriCoating_175.jpg"
                                                    srcset="/theme/ccs/images/20221107_CompriCoating_175-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_175-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_175-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_175.jpg 1500w"
                                                    sizes="100vw" alt="" class="image-cover"></div>
                                            <div class="link-styled">{!! __('ccs.why-compri-coating') !!}</div>
                                        </a>
                                    </div>
                                    <div class="nav-compri_item">
                                        <a href="/{{ app()->getLocale() }}/{{ LaravelLocalization::transRoute('routes_ccs.service') }}"
                                            class="nav-compri_link-wrapper w-inline-block">
                                            <div class="nav-compri_image"><img
                                                    src="/theme/ccs/images/20221107_CompriCoating_225.jpg"
                                                    srcset="/theme/ccs/images/20221107_CompriCoating_225-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_225-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_225-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_225.jpg 1500w"
                                                    sizes="100vw" alt="" class="image-cover"></div>
                                            <div class="link-styled">{!! __('ccs.service') !!}</div>
                                        </a>
                                    </div>
                                    <div class="nav-compri_item">
                                        <a href="/{{ app()->getLocale() }}/{{ LaravelLocalization::transRoute('routes_ccs.coating-systems-colours') }}"
                                            class="nav-compri_link-wrapper w-inline-block">
                                            <div class="nav-compri_image"><img
                                                    src="/theme/ccs/images/content-image-home4.jpg"
                                                    srcset="/theme/ccs/images/content-image-home4-p-500.jpg 500w, /theme/ccs/images/content-image-home4-p-800.jpg 800w, /theme/ccs/images/content-image-home4-p-1080.jpg 1080w, /theme/ccs/images/content-image-home4.jpg 1500w"
                                                    sizes="100vw" alt="" class="image-cover"></div>
                                            <div class="link-styled">{!! __('ccs.coating-systems-to-colour') !!}</div>
                                        </a>
                                    </div>
                                    <div class="nav-compri_item">
                                        <a href="/{{ app()->getLocale() }}/{{ LaravelLocalization::transRoute('routes_ccs.capacity') }}"
                                            class="nav-compri_link-wrapper w-inline-block">
                                            <div class="nav-compri_image"><img
                                                    src="/theme/ccs/images/20221107_CompriCoating_210.jpg"
                                                    srcset="/theme/ccs/images/20221107_CompriCoating_210-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_210-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_210-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_210.jpg 1500w"
                                                    sizes="100vw" alt="" class="image-cover"></div>
                                            <div class="link-styled">{!! __('ccs.capacity') !!}</div>
                                        </a>
                                    </div>
                                    <div class="nav-compri_item">
                                        <a href="/{{ app()->getLocale() }}/{{ LaravelLocalization::transRoute('routes_ccs.certification-qualicoat') }}"
                                            class="nav-compri_link-wrapper w-inline-block">
                                            <div class="nav-compri_image"><img
                                                    src="/theme/ccs/images/20221107_CompriCoating_361.jpg"
                                                    srcset="/theme/ccs/images/20221107_CompriCoating_361-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_361-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_361-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_361.jpg 1500w"
                                                    sizes="100vw" alt="" class="image-cover"></div>
                                            <div class="link-styled">{!! __('ccs.qualicoat-certification') !!}</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    @if ($vacancies > 0)
                        <a href="/{{ app()->getLocale() }}/{{ LaravelLocalization::transRoute('routes_ccs.vacancies') }}"
                            class="nav-link w-inline-block">
                            <div>
                                <div>{!! __('ccs.vacancies') !!}</div>
                                <div class="nav-stripe"></div>
                            </div>
                        </a>
                    @endif
                    <div class="nav-contact-wrapper">
                        <a href="/{{ app()->getLocale() }}/{{ LaravelLocalization::transRoute('routes_ccs.contact') }}"
                            class="button w-inline-block">
                            <div class="flex_align-center">
                                <div class="margin-right_xs">{!! __('ccs.contact') !!}</div>
                                <div class="fontawesome"></div>
                            </div>
                        </a>
                    </div>
                </nav>
                <div data-w-id="109b2876-aa13-31e1-71b3-e5ac94b40d92" class="menu-button w-nav-button">
                    <div class="menu-button_content">
                        <div class="menu-button_active">
                            <div class="menu-stripe_x"></div>
                            <div class="menu-stripe_y"></div>
                        </div>
                        <div class="menu-button_inactive">
                            <div class="menu-stripe"></div>
                            <div class="menu-stripe"></div>
                            <div class="menu-stripe"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-w-id="109b2876-aa13-31e1-71b3-e5ac94b40d9b" class="overlay"></div>
    <div data-w-id="109b2876-aa13-31e1-71b3-e5ac94b40d9c" class="overlay-responsive"></div>
</nav>
