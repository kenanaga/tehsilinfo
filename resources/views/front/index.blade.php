
         @include('front/source/header')

         <!-- Start Main -->
         <main>

            <!-- start feature-section-style-1  -->
            <section class="rt-feature-section feature-section-style-1 overflow-hidden"
               data-bg-image="media/elements/element_1.png">
               <div class="container">
                  <div class="row gutter-24">

                     <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                        <div class="rt-post post-sm style-1">
                           <div class="post-img">
                              <a href="single-post1.html">
                                 <img src="https://ubuntustorage.eu-central-1.linodeobjects.com/mobilpage.png" alt="post" width="100" height="100">
                              </a>
                           </div>
                           <div class="ms-4 post-content">
                              <a href="gaming.html" class="rt-post-cat-normal">Sports</a>
                              <h3 class="post-title">
                                 <a href="single-post1.html">
                                    Top Beste ampute are
                                    Speak Market.
                                 </a>
                              </h3>
                              <span class="rt-meta">
                                 <i class="far fa-calendar-alt icon"></i>
                                 DECEMBER 9, 2022
                              </span>
                           </div>
                        </div>
                     </div>
                     <!-- end col -->

                     <div class="col-xl-3 col-md-6  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                        <div class="rt-post post-sm style-1">
                           <div class="post-img">
                              <a href="single-post1.html">
                                 <img src="https://ubuntustorage.eu-central-1.linodeobjects.com/mobilpage.png" alt="post" width="100" height="100">
                              </a>
                           </div>
                           <div class="ms-4 post-content">
                              <a href="technology.html" class="rt-post-cat-normal">Technology</a>
                              <h3 class="post-title">
                                 <a href="single-post1.html">
                                    Top Beste ampute are
                                    Speak Market.
                                 </a>
                              </h3>
                              <span class="rt-meta">
                                 <i class="far fa-calendar-alt icon"></i>
                                 DECEMBER 9, 2022
                              </span>
                           </div>
                        </div>
                     </div>
                     <!-- end col -->

                     <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
                        <div class="rt-post post-sm style-1">
                           <div class="post-img">
                              <a href="single-post1.html">
                                 <img src="media/gallery/post-sm_3.jpg" alt="post" width="100" height="100">
                              </a>
                           </div>
                           <div class="ms-4 post-content">
                              <a href="life-style.html" class="rt-post-cat-normal">Fashion</a>
                              <h3 class="post-title">
                                 <a href="single-post1.html">
                                    Top Beste ampute are
                                    Speak Market
                                 </a>
                              </h3>
                              <span class="rt-meta">
                                 <i class="far fa-calendar-alt icon"></i>
                                 DECEMBER 9, 2022
                              </span>
                           </div>
                        </div>
                     </div>    
                     <!-- end col -->
                     <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="800ms">
                        <div class="rt-post post-sm style-1">
                           <div class="post-img">
                              <a href="single-post1.html">
                                 <img src="https://ubuntustorage.eu-central-1.linodeobjects.com/mobilpage.png" alt="post" width="100" height="100">
                              </a>
                           </div>
                           <div class="ms-4 post-content">
                              <a href="life-style.html" class="rt-post-cat-normal">Life Style</a>
                              <h3 class="post-title">
                                 <a href="single-post1.html">
                                    Top Beste ampute are
                                    Speak Market.
                                 </a>
                              </h3>
                              <span class="rt-meta">
                                 <i class="far fa-calendar-alt icon"></i>
                                 DECEMBER 9, 2022
                              </span>
                           </div>
                        </div>
                     </div>
                     <!-- end col -->

                  </div>
                  <!-- end row -->
               </div>
               <!-- end container -->
            </section>
            <!-- end feature-section-style-1  -->

            <!-- start rt ad banner -->
            <div class="rt-ad-banner rt-ad-banner-style-1 section-padding pt-0">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="ad-banner-img">
                           <a href="#">
                              <img src="{{asset('front/media/gallery/ad-banner_1.jpg')}}" alt="ad-banner" width="1400" height="181">
                           </a>
                        </div>
                     </div>
                     <!-- end col -->
                  </div>
                  <!-- end row -->
               </div>
               <!-- end container -->
            </div>
            <!-- end rt ad banner -->

            <!-- start top stories style 1 -->
            <section class="top-stories-style-1 section-padding motion-effects-wrap">
               <ul class="element-list d-none d-xl-block">
                  <li class="motion-effects1"><img class="wow fadeInLeft" data-wow-delay="200ms"
                        data-wow-duration="800ms" src="{{asset('front/media/elements/element_2.png')}}" alt="element_1" width="88"
                        height="58"></li>
                  <li><img class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="800ms"
                        src="{{asset('front/media/elements/element_3.png')}}" alt="element_2" width="182" height="72"></li>
                  <li><img class="wow fadeInRight" data-wow-delay="600ms" data-wow-duration="800ms"
                        src="{{asset('front/media/elements/element_4.png')}}" alt="element_3" width="199" height="128"></li>
               </ul>
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <h2 class="rt-section-heading">
                           <span class="rt-section-text">Son Xəbərlər </span>
                           <span class="rt-section-dot"></span>
                           <span class="rt-section-line"></span>
                        </h2>
                     </div>
                  </div>
                  <div class="row gutter-24">

            
                     @foreach ($news as $ndata)
                         
                     

                     <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                        <div class="rt-post-grid grid-meta">
                           <div class="post-img">
                              <a href="{{asset('/singlepost')}}/{{$ndata->id}}/{{$ndata->slug}}">
                                 <img src="{{asset('public/upload')}}/{{$ndata->image}}" alt="post" loading="lazy" object-fit:cover width="551" height="431">
                              </a>
                           </div>
                           <div class="post-content">
                              <a href="life-style.html" class="rt-post-cat-normal">{{$ndata->GetCategory->name}}</a>
                              <h3 class="post-title">
                                 <a href="{{asset('/singlepost')}}/{{$ndata->id}}/{{$ndata->slug}}">
                                    {{$ndata->title}}
                                 </a>
                              </h3>
                              <div class="post-meta">
                                 <ul>
                                    <li>
                                       <span class="rt-meta">
                                          by <a href="author.html" class="name">{{$ndata->GetUser->name}}</a>
                                       </span>
                                    </li>
                                    <li>
                                       <span class="rt-meta">
                                          <i class="far fa-calendar-alt icon"></i>
                                         {{ $ndata['created_at']->diffForHumans()}}
                                       </span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end col -->
                     @endforeach
                     {{$news->links()}}
                  </div>
                  <!-- end row -->
               </div>
               <!-- end container -->
            </section>
            <!-- end top stories style 1 -->

           

         </main>
         <!-- End Main -->

         <!-- Start Footer -->
        @include('front/source/footer')