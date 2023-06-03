<div>
    @if (count($items) > 0)
        <section class="overflow-hidden section bg-color_gray wf-section">
            <div class="container_1240px">
                <div>
                    <div class="news-header">
                        <div>
                            <div class="margin-bottom_s"><span data-w-id="58cf70da-d84a-72f0-f1c5-d61a459c571b"
                                    style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                    class="lowercase">{{ __('ccs.news') }}</span></div>
                            <h2 data-w-id="2a631418-a1d0-cad6-8694-7ab0e706b365"
                                style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                class="heading-large">{{ __('ccs.last news') }}</h2>
                        </div>
                        <div class="slider-nav-wrapper">
                            <a data-w-id="2a631418-a1d0-cad6-8694-7ab0e706b368"
                                style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                href="/{{ app()->getLocale() }}/{{ route('ccs.news') }}"
                                class="link-styled margin-bottom_s">{{ __('ccs.view all news items') }}</a>
                        </div>
                    </div>
                    <div class="thumnails-parent">
                        @foreach ($items as $item)
                            @php
                                $image_500 = false;
                                if (count($item->images) > 0) {
                                    $image_500 = $item->images[0]->full_path(500, false);
                                    // $image_800 = $item->images[0]->full_path(800, false);
                                    // $image_1080 = $item->images[0]->full_path(1080, false);
                                    // $image_1500 = $item->images[0]->full_path(1500, false);
                                }
                            @endphp
                            <article data-w-id="0cabd131-e9ab-a18a-2ebd-1d4848e84e1b"
                                style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                class="thumbnail-wrapper">
                                <div class="news">
                                    @if ($image_500)
                                        <div class="thumbnail"><img src="{{ $image_500 }}"
                                                srcset="{{ $image_500 }} 500w, {{ $image_500 }} 600w"
                                                sizes="(max-width: 479px) 90vw, (max-width: 767px) 95vw, (max-width: 991px) 29vw, 30vw"
                                                alt="{{ $item->translation()['get']->title }}" class="thumbnail-image">
                                        </div>
                                    @endif
                                    <div class="thumbnial_text-wrapper">
                                        <h3 class="margin-bottom_s">{!! $item->translation()['get']->title !!}</h3>
                                        <p class="text-color_gray-light">{!! $item->translation()['get']->excerpt !!}</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
    @endif
</div>
