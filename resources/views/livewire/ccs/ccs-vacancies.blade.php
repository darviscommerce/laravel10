@section('data-wf-page', '63490731a37b6ac92441ac87')
@section('seo_title', __('ccs.vacancies'))
@section('seo_description', __('ccs.working at Compri Coating Service'))
<main>
    <section class="section bg-color_gray wf-section">
        <div class="container_1240px">
            <div class="margin-bottom_s"><span data-w-id="b35543eb-b2b3-d606-eef8-9dac81f814e4"
                    style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                    class="lowercase">{!! __('ccs.working at Compri Coating Service') !!}</span></div>
            <h1 data-w-id="2a631418-a1d0-cad6-8694-7ab0e706b365"
                style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="heading-large">{!! __('ccs.vacancies') !!}</h1>
            <div class="thumnails-parent">
                @foreach ($items as $item)
                    @php
                        if (count($item->images) > 0) {
                            $image_500 = $item->images[0]->full_path(500, false);
                            $image_800 = $item->images[0]->full_path(800, false);
                            $image_1080 = $item->images[0]->full_path(1080, false);
                            $image_1500 = $item->images[0]->full_path(1500, false);
                        }
                    @endphp

                    <article data-w-id="0cabd131-e9ab-a18a-2ebd-1d4848e84e1b"
                        style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        class="thumbnail-wrapper">
                        <div class="news">
                            @if (count($item->images) > 0)
                                <div class="thumbnail"><img src="{{ $image_500 }}"
                                        srcset="{{ $image_500 }} 500w, {{ $image_800 }} 800w, {{ $image_1080 }} 1080w, {{ $image_1500 }} 1500w"
                                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 95vw, (max-width: 991px) 29vw, 30vw"
                                        alt="" class="thumbnail-image"></div>
                            @endif
                            <div class="thumbnial_text-wrapper">
                                <h2 class="heading-small margin-bottom_s">{!! $item->translation()['get']->title !!}</h2>
                                <div class="tags-parent">
                                    @foreach (explode(',', $item->translation()['get']->tags) as $tag)
                                        @if (!empty($tag))
                                            <div class="tag is--no-link">
                                                <div class="flex_align-center">
                                                    <div class="margin-right_xs">{{ $tag }}</div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <p class="text-color_gray-light">{!! $item->translation()['get']->excerpt !!}</p>
                                <a href="{{ route('ccs.vacancies.view', ['input' => $item->translation()['get']->slug]) }}"
                                    class="button w-inline-block">
                                    <div class="flex_align-center">
                                        <div class="margin-right_xs">{{ __('ccs.view vacancy') }}</div>
                                        <div class="fontawesome"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach

            </div>
        </div>
    </section>
</main>
