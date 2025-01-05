<div id="header">
 {{--    <div class="top-nav style-four bg-purple">
        <div class="container flex-between h-60">
            <div class="left-block flex-item-center">
                <div class="mail flex-item-center"><i class="ph-light ph-envelope text-white fs-20"></i><span class="pl-8 caption1 text-white">contact.itsweb@gmail.com</span></div>
        </div>
            <div class="right-block flex-item-center gap-12">
                <div class="follow-block flex-item-center gap-12">

                    <div class="list-social flex-item-center gap-12">
   <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="https://www.instagram.com/itsweb.agency" target="_blank"><i class="icon-instagram fs-14 display-block"></i></a>
                </div>
                </div>
            </div>
        </div>
    </div>--}}
    <div class="header-menu style-four style-purple bg-black-surface">
        <div class="container">
            <div class="header-main flex-between"><a class="logo" href="">
                    <img width="47" height="46" src="{{asset('app-assets/images/logo/itsweb-logo.png')}}" alt="itsweb"></a>
                <div class="menu-main">
                    <ul class="flex-item-center">
                        <li class="flex-center"><a class="text-subtitle" href="{{route('site-home')}}">Home</a></li>
                        <li class="flex-center"><a class="text-subtitle" href="{{route('site-services')}}">Services</a></li>
                        <li class="flex-center"><a class="text-subtitle" href="#!">Useful Pages<i class="ph ph-caret-down fs-12 pl-4"></i></a>
                            <div class="sub-nav">
                                <div class="sub-nav-main bg-black-surface p-24">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="list-pages p-24 flex-between bg-line-dark bora-16">
                                                <a class="item flex-item-center gap-8" href="{{route('site-about')}}"><i class="icon-infor icon-purple fs-28"> </i>
                                                    <div class="text-button text-white">About Us</div></a>

                                                <a class="item flex-item-center gap-8" href="{{route('site-pricing')}}"><i class="icon-pricing icon-purple fs-28"> </i>
                                                    <div class="text-button text-white">Pricing</div></a>

                                                <a class="item flex-item-center gap-8" href="{{route('site-faq')}}"><i class="icon-faq icon-purple fs-28"> </i>
                                                    <div class="text-button text-white">FAQs</div></a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex-center"><a class="text-subtitle" href="{{route('site-blogs')}}">Blog</a></li>
                        <li class="flex-center"><a class="text-subtitle" href="{{route('site-contact')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="right-block flex-item-center">
                  {{--   <div class="search-icon pr-24 pointer">
                        <div class="flags">
                            <span class="flag-icon flag-icon-az" data-language="az"></span> <!-- Azerbaijan -->
                            <span class="flag-icon flag-icon-gb" data-language="en"></span> <!-- United Kingdom -->
                            <span class="flag-icon flag-icon-ru" data-language="ru"></span> <!-- Russia -->
                        </div>
                    </div>--}}
                    <div class="menu-humburger display-none pr-24 pointer"><i class="ph ph-list text-white fs-24"></i></div>
                    <div class="call-block flex-item-center gap-8 bg-white bora-99 pt-4 pb-4 pl-8 pr-8"><i class="ph-fill ph-phone p-4 bora-50 bg-on-surface text-white"></i>
                        <div class="text-on-surface fw-700">+994 51 587 56 13</div>
                    </div>
                </div>
            </div>
            <div id="menu-mobile-block">
                <div class="menu-mobile-main">
                    <div class="heading flex-between"><a class="logo" href="">
                            <img width="47" height="46" src="{{asset('app-assets/images/logo/itsweb-logo.png')}}" alt="itsweb"></a>
                        <div class="close-block"> <i class="ph-bold ph-x d-block fs-18 text-white pointer"></i></div>
                    </div>
                    <ul class="nav d-block">
                        <li><a class="text-subtitle text-white flex-between" href="{{route('site-home')}}"><span>Home</span><i class="ph ph-caret-right text-white fs-12"></i></a></li>

                        <li><a class="text-subtitle text-white flex-between" href="{{route('site-services')}}"><span>Services</span><i class="ph ph-caret-right text-white fs-12"></i></a></li>

                        <li><a class="text-subtitle text-white flex-between" href="#!"><span>Useful Pages</span><i class="ph ph-caret-right text-white fs-12"></i></a>
                            <div class="sub-nav-mobile bg-black-surface">
                                <div class="heading flex-between">
                                    <div class="back-block pointer"><i class="ph ph-caret-left text-white fs-18 d-block"></i></div>
                                    <div class="heading7 text-uppercase text-white">Pages</div>
                                    <div class="close-block"> <i class="ph-bold ph-x d-block fs-18 text-white pointer"></i></div>
                                </div>
                                <div class="list-pages"><a class="item flex-item-center gap-8" href="{{route('site-about')}}"><i class="icon-infor icon-purple fs-28"> </i>
                                        <div class="text-button text-white">About Us</div></a>
                                    <a class="item flex-item-center gap-8 mt-16" href="{{route('site-pricing')}}"><i class="icon-pricing icon-purple fs-28"> </i>
                                        <div class="text-button text-white">Pricing</div></a>
                                    <a class="item flex-item-center gap-8 mt-16" href="{{route('site-faq')}}"><i class="icon-faq icon-purple fs-28"> </i>
                                        <div class="text-button text-white">FAQs</div></a>
                                </div>

                            </div>
                        </li>
                        <li><a class="text-subtitle text-white flex-between" href="{{route('site-blogs')}}"><span>Blog</span><i class="ph ph-caret-right text-white fs-12"></i></a></li>
                        <li><a class="text-subtitle text-white flex-between" href="{{route('site-contact')}}"><span>Contact</span><i class="ph ph-caret-right text-white fs-12"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

