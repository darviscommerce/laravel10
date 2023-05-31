<footer class="footer wf-section">
    <div class="container_1240px">
        <div class="footer-parent">
            <div class="footer-column-1"><img src="/theme/ccs/images/logo_wit.png" alt="Logo Compri Aluminium"
                    sizes="(max-width: 479px) 90vw, 253.3046875px"
                    srcset="/theme/ccs/images/logo_wit-p-500.png 500w, /theme/ccs/images/logo_wit.png 651w"
                    class="footer-logo">
                <div class="footer-in-column w-row">
                    <div class="w-col w-col-6">
                        <div>
                            <strong>{!! __('ccs.address') !!}</strong><br>
                            Everdongenlaan 5<br>
                            2300 Turnhout<br>
                            België
                        </div>
                        <div class="social-media">
                            <a href="{!! __('ccs.linkedin') !!}" target="_blank"
                                class="icon_social-media linkedin w-inline-block">
                                <div class="icon-footer w-embed"><svg width="100%" height="100%"
                                        viewbox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M150.65,100.682c0,27.992-22.508,50.683-50.273,50.683c-27.765,0-50.273-22.691-50.273-50.683
        C50.104,72.691,72.612,50,100.377,50C128.143,50,150.65,72.691,150.65,100.682z M143.294,187.333H58.277V462h85.017V187.333z
        M279.195,187.333h-81.541V462h81.541c0,0,0-101.877,0-144.181c0-38.624,17.779-61.615,51.807-61.615
        c31.268,0,46.289,22.071,46.289,61.615c0,39.545,0,144.181,0,144.181h84.605c0,0,0-100.344,0-173.915
        s-41.689-109.131-99.934-109.131s-82.768,45.369-82.768,45.369V187.333z">
                                        </path>
                                    </svg></div>
                            </a>
                            <a href="{!! __('ccs.facebook') !!}" target="_blank"
                                class="icon_social-media facebook w-inline-block">
                                <div class="icon-footer w-embed"><svg width="100%" height="100%" viewbox="0 0 9 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.29749 18V9.55388H0V6.51287H2.29749V3.91545C2.29749 1.87438 3.65463 0 6.78176 0C8.04789 0 8.98413 0.11799 8.98413 0.11799L8.91036 2.95778C8.91036 2.95778 7.95554 2.94874 6.9136 2.94874C5.78591 2.94874 5.60524 3.45391 5.60524 4.29237V6.51287H9L8.85229 9.55388H5.60524V18H2.29749Z"
                                            fill="currentColor"></path>
                                    </svg></div>
                            </a>
                        </div>
                    </div>
                    <div class="footer-in-column_right w-col w-col-6">
                        <div><strong>{!! __('ccs.opening-hours') !!}</strong><br>
                            {!! __('ccs.monday-to-thursday') !!}: 08.00 - 16.30<br>
                            {!! __('ccs.friday') !!}: 08.00 - 15.30<br>
                            {!! __('ccs.saturday-sunday') !!}: {!! __('ccs.gesloten') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-column-2">
                <div class="footer-header">
                    <div>Compri Coating Service</div>
                </div>
                <a href="/{{ app()->getLocale() }}/" aria-current="page" class="footer-link w-inline-block w--current">
                    <div>{!! __('ccs.home') !!}</div>
                    <div class="fontawesome margin-left_xs"></div>
                </a>
                <a href="{{ LaravelLocalization::transRoute('routes_ccs.about') }}" class="footer-link w-inline-block">
                    <div>{!! __('ccs.about-compri-coating') !!}</div>
                    <div class="fontawesome margin-left_xs"></div>
                </a>
                <a href="{{ LaravelLocalization::transRoute('routes_ccs.why') }}" class="footer-link w-inline-block">
                    <div>{!! __('ccs.why-compri-coating') !!}</div>
                    <div class="fontawesome margin-left_xs"></div>
                </a>
                <a href="{{ LaravelLocalization::transRoute('routes_ccs.service') }}"
                    class="footer-link w-inline-block">
                    <div>{!! __('ccs.service') !!}</div>
                    <div class="fontawesome margin-left_xs"></div>
                </a>
                <a href="{{ LaravelLocalization::transRoute('routes_ccs.coating-systems-colours') }}"
                    class="footer-link w-inline-block">
                    <div>{!! __('ccs.coating-systems-to-colour') !!}</div>
                    <div class="fontawesome margin-left_xs"></div>
                </a>
            </div>
            <div class="footer-column-3">
                <div class="footer-header hide-mobile-portrait"></div>
                <a href="{{ LaravelLocalization::transRoute('routes_ccs.capacity') }}"
                    class="footer-link w-inline-block">
                    <div>{!! __('ccs.capacity') !!}</div>
                    <div class="fontawesome margin-left_xs"></div>
                </a>
                <a href="{{ LaravelLocalization::transRoute('routes_ccs.certification-qualicoat') }}"
                    class="footer-link w-inline-block">
                    <div>{!! __('ccs.qualicoat-certification') !!}</div>
                    <div class="fontawesome margin-left_xs"></div>
                </a>
                <a href="{{ LaravelLocalization::transRoute('routes_ccs.vacancies') }}"
                    class="footer-link w-inline-block">
                    <div>{!! __('ccs.vacancies') !!}</div>
                    <div class="fontawesome margin-left_xs"></div>
                </a>
                <a href="https://compri.eu/" target="_blank" class="footer-link w-inline-block">
                    <div>Compri Aluminium</div>
                    <div class="fontawesome margin-left_xs"></div>
                </a>
                <a href="{{ LaravelLocalization::transRoute('routes_ccs.contact') }}"
                    class="footer-link w-inline-block">
                    <div>{!! __('ccs.contact') !!}</div>
                    <div class="fontawesome margin-left_xs"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div><a href="https://darvis.nl" target="_blank" title="Darvis webdesign" style="color: white;">Darvis</a>
            | © {{ date('Y') }} {!! __('ccs.compri-group') !!}. {!! __('ccs.footer_text_1') !!}</div>
        <div class="footer-bottom_links-wrapper">
            <a href="##LINK##" class="footer-bottom_link">{!! __('ccs.terms-and-conditions') !!}</a>
            <a href="##LINK##" class="footer-bottom_link">{!! __('ccs.privacy-policy') !!}</a>
            <a href="##LINK##" class="footer-bottom_link">{!! __('ccs.disclaimer') !!}</a>
        </div>
    </div>
</footer>
