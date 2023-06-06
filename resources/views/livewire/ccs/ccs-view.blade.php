@section('data-wf-page', '63490731a37b6a163841ac80')
@section('title', $item->seo_title)
@section('description', $item->seo_description)
<main>
    <header class="header wf-section">
        <div class="container_1240px">
            <div class="container_heading"></div>
        </div><img src="/theme/ccs/images/header-org.jpg" loading="lazy"
            srcset="/theme/ccs/images/header-org-p-500.jpeg 500w, /theme/ccs/images/header-org-p-800.jpeg 800w, /theme/ccs/images/header-org-p-1080.jpeg 1080w, /theme/ccs/images/header-org.jpg 1176w"
            sizes="100vw" alt="" class="header-image">
    </header>
    <section class="section bg-gray wf-section">
        <main data-w-id="5db74cb3-82ec-a834-7004-ca8dd734ed5e"
            style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
            class="text-page_wrapper">
            <article>
                <h1>{{ $item->title }}</h1>
                <div class="divider margin-bottom_m"></div>
                {!! $item->content !!}
                {{-- <a href="#" class="button w-inline-block">
                    <div class="flex_align-center">
                        <div class="margin-right_xs">Button</div>
                        <div class="fontawesome"></div>
                    </div>
                </a> --}}
            </article>
        </main>
    </section>
</main>
