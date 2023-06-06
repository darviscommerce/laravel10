@section('data-wf-page', '634bca8036d9ff4a8fdd73bd')
@section('seo_title', $item->translation()['get']->seo_title)
@section('seo_description', $item->translation()['get']->seo_description ? $item->translation()['get']->seo_description : strip_tags(substr($item->translation()['get']->content, 0,230)))
<main>
    <header class="header wf-section">
        <div class="container_1240px">
            <div class="container_heading"></div>
        </div><img src="/theme/ccs/images/20221107_CompriCoating_225.jpg" loading="lazy" sizes="100vw"
            srcset="/theme/ccs/images/20221107_CompriCoating_225-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_225-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_225-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_225.jpg 1500w"
            alt="" class="header-image">
    </header>

    <section class="section bg-gray wf-section">
        <main data-w-id="890552b0-01c7-9e10-5640-03c1cd54a712"
            style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
            class="text-page_wrapper">
            <article class="w-clearfix">
                <h1>{!! $item->translation()['get']->title !!}</h1>
                <div class="divider margin-bottom_m"></div><img src="/theme/ccs/images/shutterstock_471421337-p-800.jpg"
                    srcset="/theme/ccs/images/shutterstock_471421337-p-800-p-500.jpg 500w, /theme/ccs/images/shutterstock_471421337-p-800-p-800.jpg 800w, /theme/ccs/images/shutterstock_471421337-p-800.jpg 800w"
                    sizes="(max-width: 479px) 90vw, (max-width: 991px) 44vw, 369px" alt=""
                    class="inline-image_right">
                <article class="article w-richtext">
                    <p>{!! $item->translation()['get']->content !!}</p>
                    <blockquote>{!! __('ccs.service_quote') !!}</blockquote>
                </article>
            </article>
        </main>
    </section>
</main>
