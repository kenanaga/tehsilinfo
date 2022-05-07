@include('front/source/header')
         <!-- end rt-mobile-header -->

         <!-- Start Main -->
         <main>
            <!-- start rt-sidebar-section-layout-2 -->
            <section class="rt-sidebar-section-layout-2">
               <div class="container">
                  <div class="row gutter-40 sticky-coloum-wrap">

                     <div class="col-xl-9 sticky-coloum-item">
                        <div class="rt-left-sidebar-sapcer-5">

                           <div class="rt-main-post-single grid-meta">
                              @foreach($news as $data)
                              <!-- start post header -->
                              <div class="post-header">
                                 Kateqoriya: <span class="rt-cat-primary">{{$data->GetCategory->name}}</span>
                                 <h2 class="title">
                                    {{$data->title}}
                                 </h2>
                                 <div class="post-meta">
                                    <ul>
                                       <li>
                                          <span class="rt-meta">
                                             yazar: <a href="#" class="name">{{$data->GetUser->name}}</a>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="rt-meta">
                                             <i class="far fa-calendar-alt icon"></i>
                                              {{$data['created_at']->diffForHumans()}}
                                          </span>
                                       </li>
                                         
                                          <span class="rt-meta">
                                             <i class="fas fa-signal icon"></i>
                                             oxunma sayı:{{$data->hit}}
                                          </span>
                                          @endforeach
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="share-box-area">
                                    <div class="left-area">
                                       <div class="social-share-box">
                                          <div class="share-text mb--10">
                                             <span class="rt-meta">
                                                <i class="fas fa-share-alt icon"></i>
                                                Paylaş
                                             </span>
                                          </div>
                                          <ul class="social-share-style-1 mb--10">
                                             <li>
                                                <a class="fb" target="_blank" href="https://www.facebook.com/">
                                                   <i class="social-icon fab fa-facebook-f"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <a class="tw" target="_blank" href="https://twitter.com/">
                                                   <i class="social-icon fab fa-twitter"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <a class="yu" target="_blank" href="https://www.youtube.com/">
                                                   <i class="social-icon fab fa-youtube"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <a class="dr" target="_blank" href="https://dribbble.com/">
                                                   <i class="social-icon fab fa-dribbble"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <a class="dw" target="_blank" href="https://cloud.google.com/">
                                                   <i class="social-icon fas fa-cloud"></i>
                                                </a>
                                             </li>

                                             <li>
                                                <a class="wh" target="_blank" href="https://www.whatsapp.com/">
                                                   <i class="social-icon fab fa-whatsapp"></i>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="right-area">
                                       <ul class="social-share-style-1 layout-2 mb--10">
                                          <li>
                                             <a target="_blank" href="https://www.facebook.com/">
                                                <i class="social-icon fas fa-envelope"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a target="_blank" href="https://twitter.com/">
                                                <i class="social-icon fas fa-print"></i>
                                             </a>
                                          </li>

                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <!-- end post-header -->

                              <!-- strat post img -->
                              <figure class="post-img">
                                 <img src="{{asset('public/upload')}}/{{$data->image}}" alt="post-img" width="960" height="520">
                              </figure>
                              <!-- end post-img -->

                              <!-- strat psot body -->
                              <div class="post-body">
                                 <p>
                                  {!! nl2br($data->content) !!}
                                 </p>
                                  <!-- end post -->
                               

                                 <!-- ad banner -->
                                 <div class="ad-banner-img mt--45 mb--40">
                                    <a href="#">
                                       <img src="{{asset('front/media/gallery/ad-banner_4.jpg')}}" alt="ad-banner" width="960"
                                          height="150">
                                    </a>
                                 </div>

                              </div>
                             
                              <!-- end post body -->

                              
                              <!-- start related-post-box -->
                              <div class="related-post-box">
                                 <div class="titile-wrapper mb--40">
                                    <h2 class="rt-section-heading mb-0 flex-grow-1 me-3">
                                       <span class="rt-section-text">Uyğun Postlar</span>
                                       <span class="rt-section-dot"></span>
                                       <span class="rt-section-line"></span>
                                    </h2>

                                    <div class="slider-navigation style-2">
                                       <i class="fas fa-chevron-left slider-btn btn-prev"></i>
                                       <i class="fas fa-chevron-right slider-btn btn-next"></i>
                                    </div>
                                 </div>
                                 <!-- end titile-wrapper -->

                                 <div class="swiper-container rt-post-slider-style-5">
                                    <div class="swiper-wrapper">

                                       <!-- end swiper slide -->
                                       @foreach($related as $rnews)
                                       <div class="swiper-slide">
                                          <div class="slide-item">
                                             <div class="rt-post-grid grid-meta">
                                                <div class="post-img">
                                                   <a href="{{asset('/singlepost')}}/{{$rnews->id}}/{{$rnews->slug}}">
                                                      <img src="{{asset('public/upload')}}/{{$rnews->image}}" alt="post" width="551"
                                                         height="431">
                                                   </a>
                                                </div>
                                                <div class="post-content">
                                                   <a href="graphics.html" class="rt-post-cat-normal">{{$rnews->GetCategory->name}}</a>
                                                   <h4 class="post-title">
                                                      <a href="single-post1.html">
                                                         {{$rnews->title}}
                                                      </a>
                                                   </h4>
                                                   <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      {{$rnews['created_at']->diffForHumans()}}
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       @endforeach
                                       <!-- end swiper slide -->
                                    </div>
                                    <!-- end swiper wrapper -->
                                 </div>
                                 <!-- end swiper container + editor-choice-slider-style-1  -->

                              </div>
                              <!-- end related-post-box -->

                           </div> 
                           <!-- end rt-main-post-single -->
                        </div>
                        <!-- end rt-left-sidebar-sapcer-5 -->
                     </div>
                     <!-- end col-->

                     <div class="col-xl-3 col-lg-8 mx-auto sticky-coloum-item">
                        <div class="rt-sidebar sticky-wrap">

                           <div class="sidebar-wrap mb--40">
                              <div class="search-box">
                                 <form action="#" class="form search-form-box">
                                    <div class="form-group">
                                       <input type="text" name="sarch" id="search" placeholder="Axtar..."
                                          class="form-control rt-search-control">
                                       <button type="submit" class="search-submit">
                                          <i class="fas fa-search"></i>
                                       </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                           <!-- end sidebar wrap -->

                           <div class="sidebar-wrap mb--40">
                              <div class="post-banner-style-1">
                                 <a href="#" class="image-link">&nbsp;</a>
                                 <div class="post-content">
                                    <div class="logo">
                                       <a href="index.html">
                                          <img src="media/logo/logo-light.svg" alt="logo" width="162" height="52">
                                       </a>
                                    </div>
                                    <h3 class="title">
                                       <a href="#">
                                          The Most Powerful
                                          <span>News & Magazine WP Theme</span>
                                       </a>
                                    </h3>
                                    <div class="btn-wrap">
                                       <a href="#" class="btn-white-sm">
                                          shop now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end slidebar wrap  -->

                           <!-- end slidebar wrap  -->

                           <div class="sidebar-wrap mb--40">
                              <h2 class="rt-section-heading style-2 mb--30">
                                 <span class="rt-section-text">Xüsusi Elanlar </span>
                                 <span class="rt-section-dot"></span>
                                 <span class="rt-section-line"></span>
                              </h2>
                              <div class="post-list">
                                 @foreach($pspecial as $snews)
                                 <div class="item">
                                    <div class="rt-post post-sm style-1">
                                       <div class="post-img">
                                          <a href="{{asset('/singlepost')}}/{{$snews->id}}/{{$snews->slug}}">
                                             <img src="{{asset('public/upload')}}/{{$snews->image}}" alt="post" width="100" height="100">
                                          </a>
                                       </div>
                                       <div class="ms-4 post-content">
                                          <a href="{{asset('/kateqoriya')}}/{{$snews->GetCategory->slug}}" class="rt-post-cat-normal">{{$snews->GetCategory->name}}</a>
                                          <h4 class="post-title">
                                             <a href="{{asset('/singlepost')}}/{{$snews->id}}/{{$snews->slug}}">
                                                {{$snews->title}}
                                             </a>
                                          </h4>
                                          <span class="rt-meta">
                                             <i class="far fa-calendar-alt icon"></i>
                                             {{$rnews['created_at']->diffForHumans()}}
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                           <!-- end slidebar wrap  -->
                        </div>
                        <!-- end rt-sidebar -->
                     </div>
                     <!-- end col -->

                  </div>
                  <!-- end row  -->
               </div>
               <!-- end container -->
            </section>
            <!-- end rt-sidebar-section-layout-2 -->

         </main>
         <!-- End Main -->

@include('front/source/footer')
