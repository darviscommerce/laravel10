@section('data-wf-page', '634bcaaf42850285a356f7b3')
@section('title', $item->translation()['get']->seo_title)
@section('description', $item->translation()['get']->seo_description)
<main>
    <header class="header wf-section">
        <div class="container_1240px">
            <div class="container_heading"></div>
        </div><img src="/theme/ccs/images/20221107_CompriCoating_361.jpg" loading="lazy" sizes="100vw"
            srcset="/theme/ccs/images/20221107_CompriCoating_361-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_361-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_361-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_361.jpg 1500w"
            alt="" class="header-image">
    </header>
    <section class="section bg-gray wf-section">
        <main data-w-id="5db74cb3-82ec-a834-7004-ca8dd734ed5e"
            style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
            class="text-page_wrapper">
            <article>
                <h1>{!! $item->translation()['get']->title !!}</h1>
                <div class="divider margin-bottom_m"></div>
                <p>{!! $item->translation()['get']->content !!}
                </p>
                <div class="qualicoat-logo-wrapper"><img src="/theme/ccs/images/image001-p-500.png"
                        srcset="/theme/ccs/images/image001-p-500-p-500.png 500w, /theme/ccs/images/image001-p-500.png 500w"
                        sizes="(max-width: 479px) 132.609375px, 225.21875px" alt="" class="qualicoat-logo"><img
                        src="/theme/ccs/images/Schermafbeelding-2022-06-30-om-08.15.56.png"
                        srcset="/theme/ccs/images/Schermafbeelding-2022-06-30-om-08.15.56-p-500.png 500w, /theme/ccs/images/Schermafbeelding-2022-06-30-om-08.15.56-p-800.png 800w, /theme/ccs/images/Schermafbeelding-2022-06-30-om-08.15.56-p-1080.png 1080w, /theme/ccs/images/Schermafbeelding-2022-06-30-om-08.15.56-p-1600.png 1600w, /theme/ccs/images/Schermafbeelding-2022-06-30-om-08.15.56-p-2000.png 2000w, /theme/ccs/images/Schermafbeelding-2022-06-30-om-08.15.56.png 2180w"
                        sizes="(max-width: 479px) 157.625px, 275.25px" alt="" class="qualicoat-logo"></div>
                <a href="/documents/qualicoat-seaside-2023.pdf" download class="link-styled"
                    title="Qualicoat certificate">{{ __('ccs.qualicoat_download') }}</a>
            </article>
        </main>
    </section>
</main>
