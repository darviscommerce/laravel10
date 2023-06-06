@section('data-wf-page', '634bca55ee4611d9cebdddc7')
@section('title', $item->translation()['get']->seo_title)
@section('description', $item->translation()['get']->seo_description)
<main>
    <header class="header wf-section">
        <div class="container_1240px">
            <div class="container_heading"></div>
        </div><img src="/theme/ccs/images/20221107_CompriCoating_175.jpg" loading="lazy" sizes="100vw"
            srcset="/theme/ccs/images/20221107_CompriCoating_175-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_175-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_175-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_175.jpg 1500w"
            alt="" class="header-image">
    </header>
    <section class="section bg-gray wf-section">
        <main data-w-id="5db74cb3-82ec-a834-7004-ca8dd734ed5e"
            style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
            class="text-page_wrapper">
            <article>
                <h1>{!! $item->translation()['get']->title !!}</h1>
                <div class="divider margin-bottom_m"></div>
                <p>{!! $item->translation()['get']->content !!}</p>
            </article>
        </main>
    </section>
</main>
