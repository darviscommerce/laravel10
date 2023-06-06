@section('data-wf-page', '63490731a37b6aa7c641ac72')
@section('title', __('ccs.last news'))
@section('description', 'Nieuws')
<main>
    <section class="section bg-color_gray wf-section">
        <div class="container_1240px">
            <h1 data-w-id="2a631418-a1d0-cad6-8694-7ab0e706b365"
                style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="heading-large">{{ __('ccs.last news') }}</h1>
            <div class="thumnails-parent">
                @foreach ($items as $item)
                    @php
                        $image_500 = false;
                        if (count($item->translation()['org']->images) > 0) {
                            $image_500 = $item->translation()['org']->images[0]->full_path(500, false);
                            // $image_800 = $item->translation()['org']->images[0]->full_path(800, false);
                            // $image_1080 = $item->translation()['org']->images[0]->full_path(1080, false);
                            // $image_1500 = $item->translation()['org']->images[0]->full_path(1500, false);
                        }
                    @endphp
                    <article data-w-id="0cabd131-e9ab-a18a-2ebd-1d4848e84e1b"
                        style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        class="thumbnail-wrapper">
                        <div class="news">
                            @if ($image_500)
                                <div class="thumbnail"><img src="{{ $image_500 }}"
                                        sizes="(max-width: 479px) 90vw, (max-width: 767px) 95vw, (max-width: 991px) 29vw, 30vw"
                                        srcset="{{ $image_500 }} 500w, {{ $image_500 }} 600w" alt=""
                                        class="thumbnail-image"></div>
                            @endif
                            <div class="thumbnial_text-wrapper">
                                <h2 class="heading-small margin-bottom_s">{!! $item->translation()['get']->title !!}</h2>
                                <p class="text-color_gray-light">{!! $item->translation()['get']->excerpt !!}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</main>
