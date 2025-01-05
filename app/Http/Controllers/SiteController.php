<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SiteController extends Controller
{
    public function home(){
        return view("site-views.pages.home");
    }

    public function changeLanguage(){
        $language = request('language');
        if (in_array($language, ['az', 'ru', 'en'])) {
            Session::put('language', $language);
            return response()->json(['status' => Session::get('language')]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid language code.']);
        }
    }

    public function services(){
        return view("site-views.pages.services");
    }

    public function about(){
        return view("site-views.pages.about");
    }

    public function faqs(){
        return view("site-views.pages.faqs");
    }

    public function pricings(){
        return view("site-views.pages.pricings");
    }

    public function blogs(){
        return view("site-views.pages.blogs");
    }

    public function blogsDetail(){
        return view("site-views.pages.blogs-detail");
    }

    public function contact(){
        return view("site-views.pages.contact");
    }
}
