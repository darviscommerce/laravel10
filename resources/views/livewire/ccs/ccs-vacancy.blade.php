@section('data-wf-page', '63490731a37b6a7f4941ac86')
@section('title', $item->translation()['get']->title)
@section('description', $item->translation()['get']->excerpt)
<div>
    @php
        $image_500 = false;
        if (count($item->translation()['org']->images) > 0) {
            $image_500 = $item->translation()['org']->images[0]->full_path(500, false);
            $image_800 = $item->translation()['org']->images[0]->full_path(800, false);
            $image_1080 = $item->translation()['org']->images[0]->full_path(1080, false);
            $image_1500 = $item->translation()['org']->images[0]->full_path(1500, false);
        }
    @endphp
    <header class="header wf-section">
        <div class="container_1240px">
            <div class="container_heading"></div>
        </div>
        @if ($image_500)
            <img src="{{ $image_1500 }}" loading="lazy"
                srcset="{{ $image_500 }} 500w, {{ $image_800 }} 800w, {{ $image_1080 }} 1080w, {{ $image_1500 }} 1176w"
                sizes="100vw" alt="" class="header-image">
        @endif
    </header>
    <section class="section bg-gray wf-section">
        <main data-w-id="e364947c-4ca1-748f-cefe-3e8924438383"
            style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
            class="text-page_wrapper">
            <div class="margin-bottom_m">
                <div>vacature</div>
                <h1 class="margin-bottom_m">{!! $item->translation()['get']->title !!}</h1>
                <div class="tags-parent margin-top_s">
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
            </div>
            <p>{!! nl2br($item->translation()['get']->excerpt) !!}</p>
            <p>Wij zoeken gemotiveerde kandidaten met de volgende competenties:</p>
            <ul role="list">
                @foreach (explode(PHP_EOL, $item->translation()['get']->characteristics) as $value)
                    <li>
                        <div>{{ $value }}</div>
                    </li>
                @endforeach
            </ul>
            <p>Wij bieden:</p>
            <ul role="list">
                @foreach (explode(PHP_EOL, $item->translation()['get']->to_offer) as $value)
                    <li>
                        <div>{{ $value }}</div>
                    </li>
                @endforeach
            </ul>
            <p>{!! nl2br($item->translation()['get']->content) !!}
            </p>
            <div class="margin-top_l">
                <h2 class="margin-bottom_m">Direct solliciteren</h2>
                <div class="form-parent double">
                    @livewire('ccs.widgets.ccs-vacancy-form', ['item' => $item])
                </div>
            </div>
        </main>
    </section>
</div>
