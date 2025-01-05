@extends('site-views.layouts.main')
@section('content')
    <div id="content">
        <div class="breadcrum pt-80 pb-80">
            <div class="bg-img"> <img src="site-assets/assets/images/slider/breadcrum.png" alt=""/></div>
            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-7 col-md-8 col-sm-10">
                        <div class="heading-nav flex-center gap-8"><a class="hover-underline caption1 text-placehover" href="index.html">Home </a><i class="ph-fill ph-dot-outline text-purple"></i><a class="caption1 text-placehover" href="#!">Page</a><i class="ph-fill ph-dot-outline text-purple"></i>
                            <div class="caption1 text-white">FAQs</div>
                        </div>
                        <div class="text-nav text-center mt-12">
                            <div class="heading3 text-white text-center display-inline-block">FAQs
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="46" viewbox="0 0 38 46" fill="none">
                                    <path d="M10.1501 28.6324C13.835 25.1233 24.0331 16.9879 35.3457 12.5187M13.8035 40.7067C17.0357 40.4323 25.4105 40.4869 33.0524 42.9013M2.95566 19.8167C4.12796 16.7921 7.85358 9.29141 13.3777 3.48513" stroke="#7D3CF3" stroke-width="5" stroke-linecap="round"></path>
                                </svg>
                            </div>
                            <div class="sub-heading mt-8 text-white text-center fw-400">Find answers to the most commonly asked questions. We have compiled a comprehensive list of FAQs to provide you with the information you need, quickly and effortlessly.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faqs-block pt-100 pb-100">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-6 col-md-9 col-sm-10">
                        <div class="heading3 text-white text-center">Get Started with Our Easy Setup Process</div>
                    </div>
                    <div class="col-12 col-lg-9 col-sm-10 mt-40">
                        <div class="list-question">
                            <div class=" question-item pt-24 pb-24 pointer">
                                <div class="question-item-main flex-between heading7 text-placehover">How does AI Generation Create Image work?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                                <div class="content-question">
                                    <div class="text-placehover pt-16">You can access our service from any device with an internet connection.</div>
                                </div>
                            </div>
                            <div class=" question-item pt-24 pb-24 pointer">
                                <div class="question-item-main flex-between heading7 text-placehover">What is AI Generation Create Image?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                                <div class="content-question">
                                    <div class="text-placehover pt-16">Our products and services include [describe your products/services briefly].</div>
                                </div>
                            </div>
                            <div class=" question-item pt-24 pb-24 pointer">
                                <div class="question-item-main flex-between heading7 text-placehover">Can AI-generated images match human-created art?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                                <div class="content-question">
                                    <div class="text-placehover pt-16">You can contact our customer support department by [provide contact information such as phone number or email] during our business hours. Our team is ready to assist you with any inquiries or concerns.</div>
                                </div>
                            </div>
                            <div class=" question-item pt-24 pb-24 pointer">
                                <div class="question-item-main flex-between heading7 text-placehover">What are the applications of AI Generation Create Image?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                                <div class="content-question">
                                    <div class="text-placehover pt-16">Yes, you can return items within [specify time frame] if you are not satisfied. Please review our return policy for further instructions.</div>
                                </div>
                            </div>
                            <div class=" question-item pt-24 pb-24 pointer">
                                <div class="question-item-main flex-between heading7 text-placehover">Can I customize the AI-generated images?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                                <div class="content-question">
                                    <div class="text-placehover pt-16">Yes, you can return items within [specify time frame] if you are not satisfied. Please review our return policy for further instructions.</div>
                                </div>
                            </div>
                            <div class=" question-item pt-24 pb-24 pointer">
                                <div class="question-item-main flex-between heading7 text-placehover">Is there any ethical concern with AI-generated images?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                                <div class="content-question">
                                    <div class="text-placehover pt-16">Yes, you can return items within [specify time frame] if you are not satisfied. Please review our return policy for further instructions.</div>
                                </div>
                            </div>
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
