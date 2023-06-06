@section('data-wf-page', '634bca8d74f2982467f838b2')
@section('title', $item->translation()['get']->seo_title)
@section('description', $item->translation()['get']->seo_description)
<main>
    <header class="header wf-section">
        <div class="container_1240px">
            <div class="container_heading"></div>
        </div><img src="/theme/ccs/images/content-image-home4.jpg" loading="lazy" sizes="100vw"
            srcset="/theme/ccs/images/content-image-home4-p-500.jpg 500w, /theme/ccs/images/content-image-home4-p-800.jpg 800w, /theme/ccs/images/content-image-home4-p-1080.jpg 1080w, /theme/ccs/images/content-image-home4.jpg 1500w"
            alt="" class="header-image">
    </header>
    <section class="section bg-gray wf-section">
        <main data-w-id="125da30a-30f6-9586-a423-16069a040036"
            style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
            class="text-page_wrapper">
            <article>
                <h1>{!! $item->translation()['get']->title !!}</h1>
                <p><strong>{!! $item->translation()['get']->subtitle !!}</strong></p>
                <div class="page-image_cover-wrapper"><img src="/theme/ccs/images/content-image-home4.jpg"
                        alt="Coatingsystemen en kleuren"
                        sizes="(max-width: 479px) 90vw, (max-width: 767px) 88vw, (max-width: 991px) 89vw, 738px"
                        srcset="/theme/ccs/images/content-image-home4-p-500.jpg 500w, /theme/ccs/images/content-image-home4-p-800.jpg 800w, /theme/ccs/images/content-image-home4-p-1080.jpg 1080w, /theme/ccs/images/content-image-home4.jpg 1500w"
                        class="page-image_cover"></div>
                <p>{!! $item->translation()['get']->content !!}</p>
            </article>
        </main>
    </section>
</main>
