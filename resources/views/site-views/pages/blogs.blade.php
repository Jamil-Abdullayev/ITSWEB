@extends('site-views.layouts.main')
@section('content')
    <div id="content">
        <div class="breadcrum pt-80 pb-80">
            <div class="bg-img"> <img src="site-assets/assets/images/slider/breadcrum.png" alt=""/></div>
            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-7 col-md-8 col-sm-10">
                        <div class="heading-nav flex-center gap-8"><a class="hover-underline caption1 text-placehover" href="index.html">Home </a><i class="ph-fill ph-dot-outline text-purple"></i><a class="caption1 text-placehover" href="#!">Page</a><i class="ph-fill ph-dot-outline text-purple"></i>
                            <div class="caption1 text-white">Blog</div>
                        </div>
                        <div class="text-nav text-center mt-12">
                            <div class="heading3 text-white text-center display-inline-block">Blog
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="46" viewbox="0 0 38 46" fill="none">
                                    <path d="M10.1501 28.6324C13.835 25.1233 24.0331 16.9879 35.3457 12.5187M13.8035 40.7067C17.0357 40.4323 25.4105 40.4869 33.0524 42.9013M2.95566 19.8167C4.12796 16.7921 7.85358 9.29141 13.3777 3.48513" stroke="#7D3CF3" stroke-width="5" stroke-linecap="round"></path>
                                </svg>
                            </div>
                            <div class="sub-heading mt-8 text-white text-center fw-400">We offer a variety of pricing packages to meet the unique needs of our freelancers. Contact us today to discuss which package is right for you.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-list pt-100 pb-100">
            <div class="container">
                <div class="row row-gap-40">
                    <div class="col-12 col-lg-12 d-flex flex-column row-gap-40"><a class="blog-item item-filter" href="blog-detail.html" data-name="tab-one">
                            <div class="bg-img w-100 overflow-hidden bora-16"><img class="w-100 h-100 d-block" src="site-assets/assets/images/blog/850x566.png" alt=""/></div>
                            <div class="blog-infor mt-24">
                                <div class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-line-dark bora-16 d-inline-block bg-purple">Creative</div>
                                <div class="title">
                                    <div class="heading5 mt-12">Exploring AI Generation Create Image</div>
                                </div>
                                <div class="flex-item-center gap-8 mt-8 flex-wrap">
                                    <div class="author text-placehover">by <span class="text-white">Peter Parker </span></div><i class="ph-fill ph-dot-outline text-placehover d-block"></i>
                                    <div class="caption1 text-placehover">Oct 12, 2023</div>
                                    <div class="cmt flex-item-center"><i class="ph-fill ph-dot-outline text-placehover d-block"></i><i class="ph ph-chats text-placehover fs-24 pl-8"></i>
                                        <div class="caption2 text-placehover pl-4">02 comments</div>
                                    </div>
                                </div>
                                <div class="body2 text-placehover mt-8 pb-12">The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…</div>
                                <div class="read fw-700 text-underline text-purple-hover">Read More</div>
                            </div></a><a class="blog-item item-filter" href="blog-detail.html" data-name="tab-one">
                            <div class="bg-img w-100 overflow-hidden bora-16"><img class="w-100 h-100 d-block" src="site-assets/assets/images/blog/850x566.png" alt=""/></div>
                            <div class="blog-infor mt-24">
                                <div class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-line-dark bora-16 d-inline-block bg-purple">Creative</div>
                                <div class="title">
                                    <div class="heading5 mt-12">Exploring AI Generation Create Image</div>
                                </div>
                                <div class="flex-item-center gap-8 mt-8 flex-wrap">
                                    <div class="author text-placehover">by <span class="text-white">Peter Parker </span></div><i class="ph-fill ph-dot-outline text-placehover d-block"></i>
                                    <div class="caption1 text-placehover">Oct 12, 2023</div>
                                    <div class="cmt flex-item-center"><i class="ph-fill ph-dot-outline text-placehover d-block"></i><i class="ph ph-chats text-placehover fs-24 pl-8"></i>
                                        <div class="pl-4 caption2 text-placehover">02 comments</div>
                                    </div>
                                </div>
                                <div class="body2 text-placehover mt-8 pb-12">The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…</div>
                                <div class="read fw-700 text-underline text-purple-hover">Read More</div>
                            </div></a><a class="blog-item item-filter" href="blog-detail.html" data-name="tab-one">
                            <div class="bg-img w-100 overflow-hidden bora-16"><img class="w-100 h-100 d-block" src="site-assets/assets/images/blog/850x566.png" alt=""/></div>
                            <div class="blog-infor mt-24">
                                <div class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-line-dark bora-16 d-inline-block bg-purple">Creative</div>
                                <div class="title">
                                    <div class="heading5 mt-12">Exploring AI Generation Create Image</div>
                                </div>
                                <div class="flex-item-center gap-8 mt-8 flex-wrap">
                                    <div class="author text-placehover">by <span class="text-white">Peter Parker </span></div><i class="ph-fill ph-dot-outline text-placehover d-block"></i>
                                    <div class="caption1 text-placehover">Oct 12, 2023</div>
                                    <div class="cmt flex-item-center"><i class="ph-fill ph-dot-outline text-placehover d-block"></i><i class="ph ph-chats text-placehover fs-24 pl-8"></i>
                                        <div class="pl-4 caption2 text-placehover">02 comments</div>
                                    </div>
                                </div>
                                <div class="body2 text-placehover mt-8 pb-12">The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…</div>
                                <div class="read fw-700 text-underline text-purple-hover">Read More</div>
                            </div></a>
                        <div class="list-nav-number flex-item-center gap-8"><a class="nav-item bora-50 flex-center active" href="blog.html">1</a><a class="nav-item bora-50 flex-center" href="blog-two.html">2</a><a class="nav-item bora-50 flex-center" href="blog-two.html"><i class="ph ph-caret-right text-white"></i></a></div>
                    </div>
                    {{--
                    <div class="col-12 col-lg-4 pl-65">
                        <div class="search-block bora-44 overflow-hidden">
                            <input class="bg-line-dark w-100" type="text" placeholder="Search"/><i class="ph ph-magnifying-glass"></i>
                        </div>
                        <div class="cate-block mt-40">
                            <div class="heading7 text-white pb-12">Categories</div>
                            <div class="list-cate mt-24"><a class="nav-item flex-between pb-12 text-white pointer" href="blog.html">
                                    <div class="left flex-item-center"><i class="ph-bold ph-caret-right text-purple"></i>
                                        <div class="text-button transition-0-3s pl-8">adventure</div>
                                    </div>
                                    <div class="right">
                                        <div class="text-button flex-center bora-50 bg-line-dark">3</div>
                                    </div></a><a class="nav-item flex-between pt-12 pb-12 text-white pointer" href="blog-four.html">
                                    <div class="left flex-item-center"><i class="ph-bold ph-caret-right text-purple"></i>
                                        <div class="text-button transition-0-3s pl-8">console</div>
                                    </div>
                                    <div class="right">
                                        <div class="text-button flex-center bora-50 bg-line-dark">3</div>
                                    </div></a><a class="nav-item flex-between pt-12 pb-12 text-white pointer" href="blog-five.html">
                                    <div class="left flex-item-center"><i class="ph-bold ph-caret-right text-purple"></i>
                                        <div class="text-button transition-0-3s pl-8">action</div>
                                    </div>
                                    <div class="right">
                                        <div class="text-button flex-center bora-50 bg-line-dark">2</div>
                                    </div></a><a class="nav-item flex-between pt-12 pb-12 text-white pointer" href="blog-three.html">
                                    <div class="left flex-item-center"><i class="ph-bold ph-caret-right text-purple"></i>
                                        <div class="text-button transition-0-3s pl-8">esport</div>
                                    </div>
                                    <div class="right">
                                        <div class="text-button flex-center bora-50 bg-line-dark">3</div>
                                    </div></a><a class="nav-item flex-between pt-12 pb-12 text-white pointer" href="blog-two.html">
                                    <div class="left flex-item-center"><i class="ph-bold ph-caret-right text-purple"></i>
                                        <div class="text-button transition-0-3s pl-8">racing</div>
                                    </div>
                                    <div class="right">
                                        <div class="text-button flex-center bora-50 bg-line-dark">3</div>
                                    </div></a></div>
                        </div>
                        <div class="tags-popular-block mt-40">
                            <div class="heading7 pb-12 border-underline">Popular Tags</div>
                            <div class="list-tag mt-24 d-flex flex-wrap gap-12"><a class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-line-dark bora-16 transition-0-3s" href="blog.html">Creative</a><a class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-line-dark bora-16 transition-0-3s" href="blog-three.html">3d Art</a><a class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-line-dark bora-16 transition-0-3s" href="blog-four.html">Binance</a><a class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-line-dark bora-16 transition-0-3s" href="blog-two.html">Business</a><a class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-line-dark bora-16 transition-0-3s" href="blog-five.html">Marketing</a></div>
                        </div>
                        <div class="recent-post-block mt-40">
                            <div class="heading7 pb-12 border-underline">Recent Posts</div>
                            <div class="list-recent-post mt-24">
                                <div class="recent-post-item d-flex item-start gap-16"><a class="item-img bora-8 d-block" href="blog-detail.html"><img class="d-block" src="site-assets/assets/images/blog/80x80.png" alt=""/></a>
                                    <div class="item-infor"><a href="blog-detail.html">
                                            <div class="text-button transition-0-3s">10 Effective Tips to Improve Your Running Form</div>
                                            <div class="caption1 text-placehover">Oct 12, 2023</div></a></div>
                                </div>
                                <div class="recent-post-item d-flex item-start gap-16 mt-24"><a class="item-img bora-8 d-block" href="blog-detail.html"><img class="d-block" src="site-assets/assets/images/blog/80x80.png" alt=""/></a>
                                    <div class="item-infor"><a href="blog-detail.html">
                                            <div class="text-button transition-0-3s">5 Rules to keep in mind when negotiating a job</div>
                                            <div class="caption1 text-placehover">Oct 12, 2023</div></a></div>
                                </div>
                                <div class="recent-post-item d-flex item-start gap-16 mt-24"><a class="item-img bora-8 d-block" href="blog-detail.html"><img class="d-block" src="site-assets/assets/images/blog/80x80.png" alt=""/></a>
                                    <div class="item-infor"><a href="blog-detail.html">
                                            <div class="text-button transition-0-3s">Strategies to increase salary with job offers</div>
                                            <div class="caption1 text-placehover">Oct 12, 2023</div></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </div>
        <div id="preload">
            <div class="main-content flex-center">
                <div class="circle flex-center"><span></span>
                    <div class="circle-child"></div>
                </div>
                <div class="circle flex-center"></div>
            </div>
        </div>
        <div id="popup-newsletter-block">
            <div class="popup-newsletter-main">
                <div class="bg-img"> <img class="w-100 h-100" src="site-assets/assets/images/components/bg-popup-newsletter.png" alt=""/></div>
                <div class="content p-40 bg-on-surface">
                    <div class="close-block text-end"><i class="ph-bold ph-x d-block fs-18 text-white pointer"></i></div>
                    <div class="heading6 text-white">News letter</div>
                    <div class="text-placehover mt-8">Sign up to get all the latest AIZAN news, website updates, offers and promos.</div>
                    <form class="mt-32">
                        <div class="form-input">
                            <input class="bg-line-dark text-white" type="text" placeholder="Email"/>
                            <button><i class="ph ph-paper-plane-tilt text-placehover"></i></button>
                        </div>
                        <div class="flex-item-center gap-8 mt-12">
                            <input class="prevent-popup-input" type="checkbox" name="prevent"/>
                            <div class="caption1 text-placehover">Prevent this Pop-up</div>
                        </div>
                    </form>
                </div>
            </div>
        </div><a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
    </div>
@endsection
