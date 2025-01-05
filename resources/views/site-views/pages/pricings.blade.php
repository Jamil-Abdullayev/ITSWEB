@extends('site-views.layouts.main')
@section('content')
    <div id="content">
        <div class="breadcrum pt-80 pb-80">
            <div class="bg-img"> <img src="site-assets/assets/images/slider/breadcrum.png" alt=""/></div>
            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-7 col-md-8 col-sm-10">
                        <div class="heading-nav flex-center gap-8"><a class="hover-underline caption1 text-placehover" href="index.html">Home </a><i class="ph-fill ph-dot-outline text-purple"></i><a class="caption1 text-placehover" href="#!">Page</a><i class="ph-fill ph-dot-outline text-purple"></i>
                            <div class="caption1 text-white">Pricing</div>
                        </div>
                        <div class="text-nav text-center mt-12">
                            <div class="heading3 text-white text-center display-inline-block">Pricing
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="46" viewbox="0 0 38 46" fill="none">
                                    <path d="M10.1501 28.6324C13.835 25.1233 24.0331 16.9879 35.3457 12.5187M13.8035 40.7067C17.0357 40.4323 25.4105 40.4869 33.0524 42.9013M2.95566 19.8167C4.12796 16.7921 7.85358 9.29141 13.3777 3.48513" stroke="#7D3CF3" stroke-width="5" stroke-linecap="round"></path>
                                </svg>
                            </div>
                            <div class="sub-heading mt-8 text-white text-center fw-400">Discover our flexible and transparent pricing options. We offer tailored packages to suit your specific needs and budget.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="style-pricing">
            <div class="section-pricing pt-100 pb-100">
                <div class="container">
                    <div class="row flex-between">
                        <div class="col-xl-3 col-12">
                            <div class="heading">
                                <div class="heading3 text-white">Find Your Right Plan</div>
                                <div class="body2 text-placehover mt-16">We offer a variety of pricing packages to meet the unique needs of our services. Contact us today to discuss which package is right for you.</div>
                                <div class="choose-type bg-line-dark bora-8 p-8 flex-between gap-8 mt-32 display-inline-flex">
                                    <button class="button text-white text-button-small bg-transparent pt-12 pb-12 pl-16 pr-16 bora-8 active" data-name="monthly">Pay Monthly</button>
                                    <button class="button text-white text-button-small bg-transparent pt-12 pb-12 pl-16 pr-16 bora-8" data-name="yearly">Pay Yearly</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-12 pl-65">
                            <div class="list-pricing mt-40" data-name="monthly">
                                <div class="row row-gap-32">
                                    <div class="col-md-6 col-12">
                                        <div class="pricing-item bg-line-dark p-40 bora-20 h-100">
                                            <div class="heading5 text-white">Freebie</div>
                                            <div class="body3 text-placehover mt-12">Ideal for individuals who need quick access to basic features.</div>
                                            <div class="heading2 text-white mt-20">Free</div><a class="button bg-line-dark text-white w-100 mt-24" href="#!"> <span> <span> </span></span><span class="bg-line-dark">Get Started</span></a>
                                            <div class="list-feature d-flex flex-column gap-12 mt-40">
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i>
                                                    <div class="feature text-white">20,000+ of PNG & SVG graphics</div>
                                                </div>
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-x fs-12 p-8 bora-50 bg-placehover text-white"></i>
                                                    <div class="feature text-placehover">Upload custom icons and fonts</div>
                                                </div>
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-x fs-12 p-8 bora-50 bg-placehover text-white"></i>
                                                    <div class="feature text-placehover">Unlimited Projects</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="pricing-item bg-line-dark p-40 bora-20 h-100">
                                            <div class="heading5 text-white">Premium</div>
                                            <div class="body3 text-placehover mt-12">Ideal for individuals who who need advanced features and tools for client work.</div>
                                            <div class="price d-flex mt-20">
                                                <div class="heading2 text-white">$9.99</div>
                                                <div class="text-white">/month</div>
                                            </div><a class="button bg-line-dark text-white w-100 mt-24" href="#!"> <span> <span> </span></span><span class="bg-line-dark">Get Started</span></a>
                                            <div class="list-feature d-flex flex-column gap-12 mt-40">
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i>
                                                    <div class="feature text-white">20,000+ of PNG & SVG graphics</div>
                                                </div>
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i>
                                                    <div class="feature text-placehover">Upload custom icons and fonts</div>
                                                </div>
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i>
                                                    <div class="feature text-placehover">Access to 100 million stock images</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-pricing mt-40 hide" data-name="yearly">
                                <div class="row row-gap-32">
                                    <div class="col-md-6 col-12">
                                        <div class="pricing-item bg-line-dark p-40 bora-20 h-100">
                                            <div class="heading5 text-white">Freebie</div>
                                            <div class="body3 text-placehover mt-12">Ideal for individuals who need quick access to basic features.</div>
                                            <div class="heading2 text-white text-white mt-20">Free</div><a class="button bg-line-dark text-white w-100 mt-24" href="#!"> <span> <span> </span></span><span class="bg-line-dark">Get Started</span></a>
                                            <div class="list-feature d-flex flex-column gap-12 mt-40">
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i>
                                                    <div class="feature text-white">20,000+ of PNG & SVG graphics</div>
                                                </div>
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-x fs-12 p-8 bora-50 text-white"></i>
                                                    <div class="feature text-placehover">Upload custom icons and fonts</div>
                                                </div>
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-x fs-12 p-8 bora-50 text-white"></i>
                                                    <div class="feature text-placehover">Unlimited Projects</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="pricing-item bg-line-dark p-40 bora-20 h-100">
                                            <div class="heading5 text-white">Premium</div>
                                            <div class="body3 text-placehover mt-12">Ideal for individuals who who need advanced features and tools for client work.</div>
                                            <div class="price d-flex mt-20">
                                                <div class="heading2 text-white">$89.99</div>
                                                <div class="text-white">/year</div>
                                            </div><a class="button bg-line-dark text-white w-100 mt-24" href="#!"> <span> <span> </span></span><span class="bg-line-dark">Get Started</span></a>
                                            <div class="list-feature d-flex flex-column gap-12 mt-40">
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i>
                                                    <div class="feature text-white">20,000+ of PNG & SVG graphics</div>
                                                </div>
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i>
                                                    <div class="feature text-placehover">Upload custom icons and fonts</div>
                                                </div>
                                                <div class="item flex-item-center gap-16"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i>
                                                    <div class="feature text-placehover">Access to 100 million stock images</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-more-feature mt-80">
                        <div class="row p-24 bora-12 bg-line-dark flex-between">
                            <div class="col-3 col-sm-4">
                                <div class="text-button text-white">Reporting And Analytics</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                        </div>
                        <div class="row p-24 bora-12 flex-between">
                            <div class="col-3 col-sm-4">
                                <div class="text-button text-white">Basic Features</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                        </div>
                        <div class="row p-24 bora-12 bg-line-dark flex-between">
                            <div class="col-3 col-sm-4">
                                <div class="text-button text-white">Individual Data</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                        </div>
                        <div class="row p-24 bora-12 flex-between">
                            <div class="col-3 col-sm-4">
                                <div class="text-button text-white">Users</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center">
                                <div class="caption1 text-placehover">Unlimited</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                        </div>
                        <div class="row p-24 bora-12 bg-line-dark flex-between">
                            <div class="col-3 col-sm-4">
                                <div class="text-button text-white">Domain Reseller</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center">
                                <div class="caption1 text-placehover">Unlimited</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                        </div>
                        <div class="row p-24 bora-12 flex-between">
                            <div class="col-3 col-sm-4">
                                <div class="text-button text-white">Users</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center">
                                <div class="caption1 text-placehover">Unlimited</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center">
                                <div class="caption1 text-placehover">Unlimited</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                        </div>
                        <div class="row p-24 bora-12 bg-line-dark flex-between">
                            <div class="col-3 col-sm-4">
                                <div class="text-button text-white">Domain Reseller </div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center">
                                <div class="caption1 text-placehover">Unlimited</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center">
                                <div class="caption1 text-placehover">Unlimited</div>
                            </div>
                            <div class="col-3 col-sm-2 flex-center"> <i class="ph ph-check fs-12 text-white p-8 bora-50 bg-purple"></i></div>
                        </div>
                    </div>
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
