@section('data-wf-page', '634bca984241cce340eb75c6')
@section('seo_title', $item->translation()['get']->seo_title)
@section('seo_description', $item->translation()['get']->seo_description ? $item->translation()['get']->seo_description : strip_tags(substr($item->translation()['get']->content, 0,230)))
<main>
    <header class="header wf-section">
        <div class="container_1240px">
            <div class="container_heading"></div>
        </div><img src="/theme/ccs/images/20221107_CompriCoating_210.jpg" loading="lazy" sizes="100vw"
            srcset="/theme/ccs/images/20221107_CompriCoating_210-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_210-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_210-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_210.jpg 1500w"
            alt="" class="header-image">
    </header>
    <section class="section bg-gray wf-section">
        <main data-w-id="0328a841-086c-0cfc-2db9-a3fe0d938e2e"
            style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
            class="text-page_wrapper">
            <article class="w-clearfix">
                <h1>{!! $item->translation()['get']->title !!}</h1>
                <div class="divider margin-bottom_m"></div><img src="/theme/ccs/images/20221107_CompriCoating_242.jpg"
                    srcset="/theme/ccs/images/20221107_CompriCoating_242-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_242-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_242-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_242.jpg 1500w"
                    sizes="(max-width: 479px) 90vw, (max-width: 991px) 44vw, 369px" alt=""
                    class="inline-image_right">
                <article class="article w-richtext">
                    <h4>{!! $item->translation()['get']->subtitle !!}</h4>
                    <p>{!! $item->translation()['get']->content !!}</p>
                    {{-- <ul role="list">
                        <li><strong>Laklijn 1 :<br></strong>Volledig automatische poederlakcabine met aansluitend een
                            kameroven geïntegreerd in een uitgebreid monorailsysteem met voldoende
                            bufferzones.<br>‍<br>Te behandelen dimensies zijn:  6500 x 1500 x 700 mm<br></li>
                    </ul>
                    <ul role="list">
                        <li><strong>Laklijn 2 :<br></strong>Een compact monorailsysteem met een poederlakcabine voorzien
                            van 1 handpistool en een kameroven voor de kleinere volumes en stukwerken.<br>‍<br>Te
                            behandelen dimensies zijn: 3000 x 2000 x 1000 mm</li>
                    </ul> --}}
                </article>
            </article>
        </main>
    </section>

</main>
