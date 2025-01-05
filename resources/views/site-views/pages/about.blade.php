@extends('site-views.layouts.main')
@section('content')
    <div id="content">
        <div class="breadcrum pt-80 pb-80">
            <div class="bg-img"> <img src="site-assets/assets/images/slider/breadcrum.png" alt=""/></div>
            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-7 col-md-8 col-sm-10">
                        <div class="heading-nav flex-center gap-8"><a class="hover-underline caption1 text-placehover" href="index.html">Home </a><i class="ph-fill ph-dot-outline text-purple"></i><a class="caption1 text-placehover" href="#!">Page</a><i class="ph-fill ph-dot-outline text-purple"></i>
                            <div class="caption1 text-white">About Us</div>
                        </div>
                        <div class="text-nav text-center mt-12">
                            <div class="heading3 text-white text-center display-inline-block">About Us
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="46" viewbox="0 0 38 46" fill="none">
                                    <path d="M10.1501 28.6324C13.835 25.1233 24.0331 16.9879 35.3457 12.5187M13.8035 40.7067C17.0357 40.4323 25.4105 40.4869 33.0524 42.9013M2.95566 19.8167C4.12796 16.7921 7.85358 9.29141 13.3777 3.48513" stroke="#7D3CF3" stroke-width="5" stroke-linecap="round"></path>
                                </svg>
                            </div>
                            <div class="sub-heading mt-8 text-white text-center fw-400">Learn more about our digital agency and what sets us apart. Discover our story, our mission, and our passion for creativity and innovation.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us style-about pt-80 pb-80 bg-black-surface">
            <div class="container">
                <div class="row row-gap-40 flex-between">
                    <div class="col-12 col-lg-6 flex-column row-gap-20">
                        <div class="heading3">We Provide <span>Brilliant </span>
                            <p>Ideas & Adding</p>
                        </div>
                        <div class="body2 text-placehover mt-16">We are a full-service creative agency that helps businesses build brands, tell stories, and engage audiences through bold and strategic design.</div>
                        <div class="list-service mt-32">
                            <div class="service-item flex-item-center"><i class="ph-bold ph-check text-purple fs-24"> </i>
                                <div class="heading7 pl-12">Free Live Chat Software</div>
                            </div>
                            <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-purple fs-24"> </i>
                                <div class="heading7 pl-12">Real Time Language Translation</div>
                            </div>
                            <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-purple fs-24"> </i>
                                <div class="heading7 pl-12">18,000+ Websites Used Aizan</div>
                            </div>
                        </div>
                        <div class="button-block mt-32"><a class="button bg-purple button-purple-hover text-white" href="#!"> <span> <span> </span></span><span class="bg-purple">Find out more</span></a></div>
                    </div>
                    <div class="col-12 col-xl-5 col-lg-6 pl-65 pl-col-lg-0">
                        <div class="bg-img bora-16 overflow-hidden"><img class="w-100 d-block" src="site-assets/assets/images/components/bg-about.png" alt=""/></div>
                        <div class="count flex-between mt-20">
                            <div class="item">
                                <div class="heading3 text-purple">350<span>+</span></div>
                                <div class="heading7 text-placehover mt-8">Completed projects</div>
                            </div>
                            <div class="item">
                                <div class="heading3 text-purple">2500<span>+</span></div>
                                <div class="heading7 text-placehover mt-8">Great photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      {{--   <div class="list-partner bg-line-dark pt-40 pb-40">
            <div class="container gap-32 row-gap-32 flex-between flex-wrap">
                <div class="partner-item"><img src="site-assets/assets/images/partners/mega.svg" alt=""/></div>
                <div class="partner-item"><img src="site-assets/assets/images/partners/mian.svg" alt=""/></div>
                <div class="partner-item"><img src="site-assets/assets/images/partners/beta.svg" alt=""/></div>
                <div class="partner-item"><img src="site-assets/assets/images/partners/mian2.svg" alt=""/></div>
                <div class="partner-item"><img src="site-assets/assets/images/partners/genvi.svg" alt=""/></div>
            </div>
        </div> --}}
        <div class="style-purple">
            <div class="how-it-work pt-100 pb-100">
                <div class="container">
                    <div class="row heading flex-between row-gap-8">
                        <div class="col-lg-6">
                            <div class="heading3">Intelligent Solutions for Enhanced Customer </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="body1 text-placehover">Power up your website with our advanced chat bot that offers image and video tools, as well as quick and accurate question answering capabilities</div>
                        </div>
                    </div>
                    <div class="row flex-between mt-40 row-gap-40">
                        <div class="col-lg-4">
                            <div class="feature-item flex-item-center gap-24 scroll-bottom-to-top1">
                                <div class="icon"><i class="icon-box-group icon-white fs-40 p-16 bg-line-dark bora-50"></i></div>
                                <div class="infor">
                                    <div class="heading6">Sign up</div>
                                    <div class="text-placehover mt-8">Online banking allows you to manage your finances from anywhere, anytime.</div>
                                </div>
                            </div>
                            <div class="feature-item flex-item-center gap-24 mt-40 scroll-bottom-to-top2">
                                <div class="icon"><i class="icon-chart-box icon-white fs-40 p-16 bg-line-dark bora-50"></i></div>
                                <div class="infor">
                                    <div class="heading6">Get personalized </div>
                                    <div class="text-placehover mt-8">Empowering you to achieve your goals with precision and efficiency.</div>
                                </div>
                            </div>
                            <div class="feature-item flex-item-center gap-24 mt-40 scroll-bottom-to-top3">
                                <div class="icon"><i class="icon-flash icon-white fs-40 p-16 bg-line-dark bora-50"></i></div>
                                <div class="infor">
                                    <div class="heading6">Explore and engage</div>
                                    <div class="text-placehover mt-8">Embark on a journey of discovery and engagement with our dynamic content.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="bg-img bora-24 overflow-hidden"><img class="w-100" src="site-assets/assets/images/components/bg-how-it-work.png" alt=""/>
                                <div class="count bg-blue bora-12 flex-item-center gap-60 pt-20 pb-20 pl-32 pr-32 scroll-left-to-right4">
                                    <div class="item">
                                        <div class="heading4">1.77<span>k+</span></div>
                                        <div class="text-button">Business Problem </div>
                                    </div>
                                    <div class="item">
                                        <div class="heading4">2.3<span>k+</span></div>
                                        <div class="text-button">Business Setup </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="style-purple">
            <div class="counter bg-surface pt-80 pb-80">
                <div class="container">
                    <div class="row flex-between row-gap-40">
                        <div class="col-lg-5 pr-16 pr-col-lg-0">
                            <div class="heading3 text-on-surface">We Provide brilliant Ideas & Adding</div>
                            <div class="body2 text-secondary mt-24">We are a full-service creative agency that helps businesses build brands, tell stories, and engage audiences through bold and strategic design.</div>
                        </div>
                        <div class="col-lg-6 pl-0 pl-col-lg-0 flex-between gap-16">
                            <div class="item">
                                <div class="icon flex-center w-60 h-60 bg-green bora-50 d-inline-flex"> <i class="ph-bold ph-check fs-24 text-white"></i></div>
                                <div class="count-number heading2 text-on-surface mt-20">350</div>
                                <div class="body1 text-secondary mt-8">Completed projects</div>
                            </div>
                            <div class="item">
                                <div class="icon flex-center w-60 h-60 bg-green bora-50 d-inline-flex"> <i class="ph-bold ph-check fs-24 text-white"></i></div>
                                <div class="count-number heading2 text-on-surface mt-20">2500</div>
                                <div class="body1 text-secondary mt-8">Great photography</div>
                            </div>
                            <div class="item">
                                <div class="icon flex-center w-60 h-60 bg-green bora-50 d-inline-flex"><i class="ph-bold ph-check fs-24 text-white"></i></div>
                                <div class="flex-item-center mt-20">
                                    <div class="count-number heading2 text-on-surface">150</div><span class="heading2 text-on-surface">k</span>
                                </div>
                                <div class="body1 text-secondary mt-8">Satisfied users</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-benefit pt-100 pb-100">
            <div class="container">
                <div class="heading3">Our Benefit</div>
                <div class="list-benefit mt-40">
                    <div class="row row-gap-32"><a class="col-md-4 col-sm-6" href="#!">
                            <div class="heading6 pb-20">Enhanced Decision-Making</div>
                            <div class="line-dark"> </div>
                            <div class="text-placehover pt-20">Leverage AI's data analysis capabilities to make informed and strategic decisions that drive growth.</div></a><a class="col-md-4 col-sm-6" href="#!">
                            <div class="heading6 pb-20">Efficient Operations</div>
                            <div class="line-dark"> </div>
                            <div class="text-placehover pt-20">Automate repetitive tasks, streamline processes, and optimize resource allocation, leading to increased efficiency.</div></a><a class="col-md-4 col-sm-6" href="#!">
                            <div class="heading6 pb-20">24/7 Availability</div>
                            <div class="line-dark"> </div>
                            <div class="text-placehover pt-20">AI-powered systems can provide seamless customer support and engagement around the clock.</div></a><a class="col-md-4 col-sm-6" href="#!">
                            <div class="heading6 pb-20">Predictive Analytics</div>
                            <div class="line-dark"> </div>
                            <div class="text-placehover pt-20">Anticipate market trends and customer behavior patterns to stay ahead of the competition.</div></a><a class="col-md-4 col-sm-6" href="#!">
                            <div class="heading6 pb-20">Data-driven Insights</div>
                            <div class="line-dark"> </div>
                            <div class="text-placehover pt-20">Extract valuable insights from large datasets, enabling you to uncover hidden opportunities and address challenges.</div></a><a class="col-md-4 col-sm-6" href="#!">
                            <div class="heading6 pb-20">Cost Savings</div>
                            <div class="line-dark"> </div>
                            <div class="text-placehover pt-20">Reduce operational costs by automating manual tasks and enhancing resource allocation.</div></a></div>
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
