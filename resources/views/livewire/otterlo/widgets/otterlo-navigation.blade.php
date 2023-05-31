<div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner"
    class="navigation w-nav">
    <div class="container_1200px">
        <div class="nav-top">
            <div class="nav-detail-wrapper">
                <a href="mailto:{{ __('otterlo.contact_email') }}?subject=Contact"
                    class="nav-detail is-color hide-mobile w-inline-block">
                    <div class="fontawesome margin-right_xs"></div>
                    <div>{{ __('otterlo.contact_email') }}</div>
                </a>
                <a href="tel:{{ __('otterlo.contact_phone_link') }}" class="nav-detail is-color w-inline-block">
                    <div class="fontawesome margin-right_xs"></div>
                    <div>{{ __('otterlo.contact_phone') }}</div>
                </a>
                <a href="{{ __('otterlo.contact_maps') }}" target="_blank"
                    class="nav-detail is-color hide-mobile w-inline-block">
                    <div class="fontawesome margin-right_xs"></div>
                    <div>{{ __('otterlo.contact_location') }}</div>
                </a>
            </div>
            <div class="nav-language-wrapper">
                <a href="/nl/"
                    class="language-link {{ app()->getLocale() != 'nl' ? 'deactive' : null }} w-inline-block"><img
                        src="/theme/otterlo/images/Nederlandsevlag.png" alt="" class="language-flag-img"></a>
                <a href="/en/"
                    class="language-link {{ app()->getLocale() != 'en' ? 'deactive' : null }} w-inline-block"><img
                        src="/theme/otterlo/images/engelsevlag.png" alt="" class="language-flag-img"></a>
                <a href="/de/"
                    class="language-link {{ app()->getLocale() != 'de' ? 'deactive' : null }} w-inline-block"><img
                        src="/theme/otterlo/images/duitsevlag.png" alt="" class="language-flag-img"></a>
            </div>
        </div>
        <div class="navigation-bar">
            <a href="/" aria-current="page" class="logo w-nav-brand w--current"><img
                    src="/theme/otterlo/images/theme_logo.jpg" loading="lazy" sizes="(max-width: 479px) 50px, 65px"
                    srcset="/theme/otterlo/images/theme_logo-p-500.jpg 500w, /theme/otterlo/images/theme_logo.jpg 523w"
                    alt="" class="logo-image">
                <div class="logo-font is--color_text">{{ __('Holiday in Otterlo') }}</div>
            </a>
            <nav role="navigation" class="nav-menu w-nav-menu">
                <div class="nav-link-wrapper">
                    <a href="/{{ app()->getLocale() }}/villa/mariposa" class="nav-ink w-nav-link">Villa Mariposa</a>
                    <a href="/{{ app()->getLocale() }}/villa/vlinder" class="nav-ink w-nav-link">Villa Vlinder</a>
                    <a href="{{ LaravelLocalization::transRoute('routes_otterlo.surroundings') }}"
                        class="nav-ink w-nav-link">{!! __('otterlo.surroundings') !!}</a>
                    <a href="{{ LaravelLocalization::transRoute('routes_otterlo.contact') }}"
                        class="nav-ink w-nav-link">{{ __('otterlo.contact') }}</a>
                </div>
                <a href="{{ LaravelLocalization::transRoute('routes_otterlo.book') }}" class="button w-inline-block">
                    <div class="flex-align-center">
                        <div class="margin-right_xs">{{ __('otterlo.book') }}</div>
                    </div>
                </a>
            </nav>
            <div class="nav-menu-button w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
</div>
