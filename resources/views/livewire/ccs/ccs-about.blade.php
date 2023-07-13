@section('data-wf-page', '634a56edc54c30ecfad2d1e6')
@section('seo_title', $item->translation()['get']->seo_title)
@section('seo_description', $item->translation()['get']->seo_description ? $item->translation()['get']->seo_description
    : strip_tags(substr($item->translation()['get']->content, 0, 230)))
    <main>
        <header class="header wf-section">
            <div class="container_1240px">
                <div class="container_heading"></div>
            </div><img src="/theme/ccs/images/20221107_CompriCoating_183-bewerkt.jpg" loading="lazy" sizes="100vw"
                srcset="/theme/ccs/images/20221107_CompriCoating_183-bewerkt-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_183-bewerkt-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_183-bewerkt-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_183-bewerkt.jpg 1500w"
                alt="" class="header-image">
        </header>
        <section class="section bg-gray wf-section">
            <main data-w-id="5db74cb3-82ec-a834-7004-ca8dd734ed5e"
                style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0 ) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="text-page_wrapper">
                <article>
                    <h1>{!! $item->translation()['get']->title !!}</h1>
                    <div class="divider margin-bottom_m"></div>
                    <p>{!! $item->translation()['get']->content !!} </p>
                    @if (app()->getLocale() == 'nl')
                        <img src="/theme/ccs/images/passie-voor-het-vak.png" loading="lazy"
                            sizes="(max-width: 479px) 90vw, 300px"
                            srcset="/theme/ccs/images/passie-voor-het-vak-p-500.png 500w, /theme/ccs/images/passie-voor-het-vak-p-800.png 800w, /theme/ccs/images/passie-voor-het-vak.png 903w"
                            alt="" class="passie-voor-het-vak">
                    @endif
                    <div class="about-content">
                        <a href="#" class="lightbox-link w-inline-block w-lightbox">
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_394.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_394-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_394-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_394-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_394.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_361.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_361-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_361-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_361-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_361.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_342.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_342-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_342-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_342-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_342.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_325.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_325-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_325-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_325-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_325.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_339.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_339-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_339-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_339-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_339.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_226.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_226-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_226-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_226-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_226.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_242.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_242-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_242-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_242-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_242.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_308.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_308-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_308-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_308-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_308.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_284.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_284-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_284-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_284-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_284.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_225.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_225-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_225-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_225-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_225.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_175.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_175-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_175-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_175-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_175.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_023.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_023-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_023-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_023-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_023.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_051.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_051-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_051-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_051-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_051.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_002.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_002-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_002-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_002-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_002.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_213.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_213-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_213-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_213-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_213.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <div class="lightbox-wrapper"><img src="/theme/ccs/images/20221107_CompriCoating_254.jpg"
                                    srcset="/theme/ccs/images/20221107_CompriCoating_254-p-500.jpg 500w, /theme/ccs/images/20221107_CompriCoating_254-p-800.jpg 800w, /theme/ccs/images/20221107_CompriCoating_254-p-1080.jpg 1080w, /theme/ccs/images/20221107_CompriCoating_254.jpg 1500w"
                                    sizes="(max-width: 479px) 45vw, (max-width: 991px) 44vw, 182.5px" alt=""
                                    class="lightbox-image"></div>
                            <script type="application/json" class="w-json">{
      "items": [
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_254.jpg",
          "fileName": "20221107_CompriCoating_254.jpg",
          "fileSize": 330887,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64eea0716a15c8027eee_20221107_CompriCoating_254.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_226.jpg",
          "fileName": "20221107_CompriCoating_226.jpg",
          "fileSize": 283190,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64ebbcb191d9c9d2ee81_20221107_CompriCoating_226.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_213.jpg",
          "fileName": "20221107_CompriCoating_213.jpg",
          "fileSize": 269709,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64e98e743580a972fa52_20221107_CompriCoating_213.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_002.jpg",
          "fileName": "20221107_CompriCoating_002.jpg",
          "fileSize": 177951,
          "height": 956,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64db38e93f8db6dd926d_20221107_CompriCoating_002.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_051.jpg",
          "fileName": "20221107_CompriCoating_051.jpg",
          "fileSize": 392655,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64de7a191cc083ca2262_20221107_CompriCoating_051.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_023.jpg",
          "fileName": "20221107_CompriCoating_023.jpg",
          "fileSize": 333457,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64dda4494152f591eb4e_20221107_CompriCoating_023.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_175.jpg",
          "fileName": "20221107_CompriCoating_175.jpg",
          "fileSize": 329135,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64e7e553bf97dd869054_20221107_CompriCoating_175.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_225.jpg",
          "fileName": "20221107_CompriCoating_225.jpg",
          "fileSize": 367468,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64eb3c2d58563d6a58fd_20221107_CompriCoating_225.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_284.jpg",
          "fileName": "20221107_CompriCoating_284.jpg",
          "fileSize": 415212,
          "height": 1000,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64f3e9b474f2da16fbbe_20221107_CompriCoating_284.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_308.jpg",
          "fileName": "20221107_CompriCoating_308.jpg",
          "fileSize": 142166,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64f2caead80d6d93863c_20221107_CompriCoating_308.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_242.jpg",
          "fileName": "20221107_CompriCoating_242.jpg",
          "fileSize": 520028,
          "height": 1500,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64eebf9aaf2d9ee4342d_20221107_CompriCoating_242.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_339.jpg",
          "fileName": "20221107_CompriCoating_339.jpg",
          "fileSize": 383732,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64f56949fb95189e5ffe_20221107_CompriCoating_339.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_325.jpg",
          "fileName": "20221107_CompriCoating_325.jpg",
          "fileSize": 427311,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64f566f416858cf3a632_20221107_CompriCoating_325.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_394.jpg",
          "fileName": "20221107_CompriCoating_394.jpg",
          "fileSize": 251407,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64fa3c2d583b6e6a5913_20221107_CompriCoating_394.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_361.jpg",
          "fileName": "20221107_CompriCoating_361.jpg",
          "fileSize": 411113,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64f78defc0de4bc49edd_20221107_CompriCoating_361.jpg",
          "width": 1500,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "20221107_CompriCoating_342.jpg",
          "fileName": "20221107_CompriCoating_342.jpg",
          "fileSize": 296405,
          "height": 1001,
          "url": "https://uploads-ssl.webflow.com/6353ba7f7a9a6eea41614c03/639d64f788734f954c18858a_20221107_CompriCoating_342.jpg",
          "width": 1500,
          "type": "image"
        }
      ],
      "group": "lightbox"
    }</script>
                        </a>
                    </div>
                </article>
            </main>
            {{-- <main data-w-id="e963ab43-a757-6438-8cd7-a898827483b6"
            style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
            class="text-page_wrapper-second">
            <article>
                <h2>Brochure Culturele Vereniging Julianadorp</h2>
                <p>Download hier onze brochure:</p>
                <a href="https://compricoatingservice.eu/documents/Brochure_MAES-1.pdf" target="_blank"
                    class="button margin-bottom_s margin-right_s w-inline-block">
                    <div class="flex_align-center">
                        <div class="fontawesome"></div>
                        <div class="margin-left_xs">Download</div>
                    </div>
                </a>
            </article>
        </main> --}}
        </section>
        <a href="#" class="lightbox_over-compri w-inline-block w-lightbox">
            <div class="lightbox_over-compri_image-wrapper"><img src="/theme/ccs/images/ND_93858.jpg" loading="lazy"
                    sizes="(max-width: 479px) 49vw, (max-width: 767px) 33vw, (max-width: 991px) 24vw, 20vw"
                    srcset="/theme/ccs/images/ND_93858-p-500.jpg 500w, /theme/ccs/images/ND_93858-p-800.jpg 800w, /theme/ccs/images/ND_93858-p-1080.jpg 1080w, /theme/ccs/images/ND_93858.jpg 1200w"
                    alt="" class="lightbox_over-compri_image"></div>
            <div class="lightbox_over-compri_image-wrapper"><img src="/theme/ccs/images/ND_94120.jpg" loading="lazy"
                    sizes="(max-width: 479px) 49vw, (max-width: 767px) 33vw, (max-width: 991px) 24vw, 20vw"
                    srcset="/theme/ccs/images/ND_94120-p-500.jpg 500w, /theme/ccs/images/ND_94120-p-800.jpg 800w, /theme/ccs/images/ND_94120-p-1080.jpg 1080w, /theme/ccs/images/ND_94120.jpg 1200w"
                    alt="" class="lightbox_over-compri_image"></div>
            <div class="lightbox_over-compri_image-wrapper"><img src="/theme/ccs/images/ND_94126.jpg" loading="lazy"
                    sizes="(max-width: 479px) 49vw, (max-width: 767px) 33vw, (max-width: 991px) 24vw, 20vw"
                    srcset="/theme/ccs/images/ND_94126-p-500.jpg 500w, /theme/ccs/images/ND_94126-p-800.jpg 800w, /theme/ccs/images/ND_94126-p-1080.jpg 1080w, /theme/ccs/images/ND_94126.jpg 1200w"
                    alt="" class="lightbox_over-compri_image"></div>
            <div class="lightbox_over-compri_image-wrapper"><img src="/theme/ccs/images/ND_94044.jpg" loading="lazy"
                    sizes="(max-width: 479px) 49vw, (max-width: 767px) 33vw, (max-width: 991px) 24vw, 20vw"
                    srcset="/theme/ccs/images/ND_94044-p-500.jpg 500w, /theme/ccs/images/ND_94044-p-800.jpg 800w, /theme/ccs/images/ND_94044-p-1080.jpg 1080w, /theme/ccs/images/ND_94044.jpg 1200w"
                    alt="" class="lightbox_over-compri_image"></div>
            <div class="lightbox_over-compri_image-wrapper"><img src="/theme/ccs/images/ND_93990.jpg" loading="lazy"
                    sizes="(max-width: 479px) 49vw, (max-width: 767px) 33vw, (max-width: 991px) 24vw, 20vw"
                    srcset="/theme/ccs/images/ND_93990-p-500.jpg 500w, /theme/ccs/images/ND_93990-p-800.jpg 800w, /theme/ccs/images/ND_93990-p-1080.jpg 1080w, /theme/ccs/images/ND_93990.jpg 1200w"
                    alt="" class="lightbox_over-compri_image"></div>
            <div class="lightbox_over-compri_image-wrapper"><img src="/theme/ccs/images/ND_94026.jpg" loading="lazy"
                    sizes="(max-width: 479px) 49vw, (max-width: 767px) 33vw, (max-width: 991px) 24vw, 20vw"
                    srcset="/theme/ccs/images/ND_94026-p-500.jpg 500w, /theme/ccs/images/ND_94026-p-800.jpg 800w, /theme/ccs/images/ND_94026-p-1080.jpg 1080w, /theme/ccs/images/ND_94026.jpg 1200w"
                    alt="" class="lightbox_over-compri_image"></div>
            <div class="lightbox_over-compri_image-wrapper"><img src="/theme/ccs/images/ND_94012.jpg" loading="lazy"
                    sizes="(max-width: 479px) 49vw, (max-width: 767px) 33vw, (max-width: 991px) 24vw, 20vw"
                    srcset="/theme/ccs/images/ND_94012-p-500.jpg 500w, /theme/ccs/images/ND_94012-p-800.jpg 800w, /theme/ccs/images/ND_94012-p-1080.jpg 1080w, /theme/ccs/images/ND_94012.jpg 1200w"
                    alt="" class="lightbox_over-compri_image"></div>
            <div class="lightbox_over-compri_image-wrapper"><img src="/theme/ccs/images/ND_93821.jpg" loading="lazy"
                    sizes="(max-width: 479px) 49vw, (max-width: 767px) 33vw, (max-width: 991px) 24vw, 20vw"
                    srcset="/theme/ccs/images/ND_93821-p-500.jpg 500w, /theme/ccs/images/ND_93821-p-800.jpg 800w, /theme/ccs/images/ND_93821-p-1080.jpg 1080w, /theme/ccs/images/ND_93821.jpg 1200w"
                    alt="" class="lightbox_over-compri_image"></div>
            <div class="lightbox_over-compri_image-wrapper"><img src="/theme/ccs/images/ND_93961.jpg" loading="lazy"
                    sizes="(max-width: 479px) 49vw, (max-width: 767px) 33vw, (max-width: 991px) 24vw, 20vw"
                    srcset="/theme/ccs/images/ND_93961-p-500.jpg 500w, /theme/ccs/images/ND_93961-p-800.jpg 800w, /theme/ccs/images/ND_93961-p-1080.jpg 1080w, /theme/ccs/images/ND_93961.jpg 1200w"
                    alt="" class="lightbox_over-compri_image"></div>
            <div class="lightbox_over-compri_image-wrapper"><img src="/theme/ccs/images/ND_93986.jpg" loading="lazy"
                    sizes="(max-width: 479px) 49vw, (max-width: 767px) 33vw, (max-width: 991px) 24vw, 20vw"
                    srcset="/theme/ccs/images/ND_93986-p-500.jpg 500w, /theme/ccs/images/ND_93986-p-800.jpg 800w, /theme/ccs/images/ND_93986-p-1080.jpg 1080w, /theme/ccs/images/ND_93986.jpg 1200w"
                    alt="" class="lightbox_over-compri_image"></div>
            <script type="application/json" class="w-json">{
      "items": [
        {
          "_id": "example_img",
          "origFileName": "ND_93986.jpg",
          "fileName": "ND_93986.jpg",
          "fileSize": 240852,
          "height": 801,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd920081ad76762682151f_ND_93986.jpg",
          "width": 1200,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "ND_93961.jpg",
          "fileName": "ND_93961.jpg",
          "fileSize": 489582,
          "height": 801,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd9201ec85a78644f5b29b_ND_93961.jpg",
          "width": 1200,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "ND_93970.jpg",
          "fileName": "ND_93970.jpg",
          "fileSize": 322282,
          "height": 801,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd9200c4b11ebfda7fd459_ND_93970.jpg",
          "width": 1200,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "ND_93970.jpg",
          "fileName": "ND_93970.jpg",
          "fileSize": 322282,
          "height": 801,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd9200c4b11ebfda7fd459_ND_93970.jpg",
          "width": 1200,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "ND_94012.jpg",
          "fileName": "ND_94012.jpg",
          "fileSize": 303954,
          "height": 801,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd92023edff1dc00b9c498_ND_94012.jpg",
          "width": 1200,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "ND_94026.jpg",
          "fileName": "ND_94026.jpg",
          "fileSize": 441703,
          "height": 675,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd9202b0729c39ca24076d_ND_94026.jpg",
          "width": 1200,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "ND_93990.jpg",
          "fileName": "ND_93990.jpg",
          "fileSize": 426316,
          "height": 675,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd9202ec85a79e51f5b29d_ND_93990.jpg",
          "width": 1200,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "ND_94044.jpg",
          "fileName": "ND_94044.jpg",
          "fileSize": 477677,
          "height": 675,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd92033e482741de636e3c_ND_94044.jpg",
          "width": 1200,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "ND_94126.jpg",
          "fileName": "ND_94126.jpg",
          "fileSize": 482320,
          "height": 675,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd9205f92343b8bc430079_ND_94126.jpg",
          "width": 1200,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "ND_94120.jpg",
          "fileName": "ND_94120.jpg",
          "fileSize": 550900,
          "height": 675,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd920681ad76d7aa821530_ND_94120.jpg",
          "width": 1200,
          "type": "image"
        },
        {
          "_id": "example_img",
          "origFileName": "ND_93858.jpg",
          "fileName": "ND_93858.jpg",
          "fileSize": 299822,
          "height": 675,
          "url": "https://uploads-ssl.webflow.com/6263b9f75db7f582c587fc68/62cd91fc23172a83aaf6daf8_ND_93858.jpg",
          "width": 1200,
          "type": "image"
        }
      ],
      "group": ""
    }</script>
        </a>
    </main>
