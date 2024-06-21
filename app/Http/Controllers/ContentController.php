<?php

namespace App\Http\Controllers;

use App\Models\SameTypePages;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\PageSetting;
use App\Models\Content;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function benefitsView(){

        $sectionData = PageSetting::where('name','our_benefits')->first();

        if(is_null($sectionData) || empty($sectionData)){
            //Default values
            $sectionData = ['title_az' => '', 'title_en' => '', 'title_ru' => ''];
        }

        $benefits = Content::where('keyword','our_benefits')->get();

        if($benefits->isEmpty()) {
            //Default values
            $benefits = [0 => ['title_az' => '', 'title_en' => '', 'title_ru' => '','description_az' => '', 'description_en' => '', 'description_ru' => '']];
        }

        return view('modules.general-content.benefits',compact('sectionData','benefits'));
    }
    public function benefitsStore(Request $request){

        //Creating/Updating Section title
        PageSetting::updateOrCreate(['name' => 'our_benefits'], [
            'name' => 'our_benefits',
            'title_az' => $request->section_title_az,
            'title_en' => $request->section_title_en,
            'title_ru' => $request->section_title_ru,
            'type'     => 'content'
        ]);

        //Updating benefits
        Content::where('keyword','our_benefits')->delete();

        $orderId = 0;
        foreach ($request->benefits as $benefit){
            $orderId++;
            Content::create([
                'keyword' => 'our_benefits',
                'order_key' => $orderId,
                'title_az' => $benefit['title_az'],
                'title_en' => $benefit['title_en'],
                'title_ru' => $benefit['title_ru'],
                'description_az' => $benefit['description_az'],
                'description_en' => $benefit['description_en'],
                'description_ru' => $benefit['description_ru']
            ]);
        }

        return redirect()->route('benefits-view');
    }


    public function principlesView(){
        $sectionData = PageSetting::where('name','principles')->first();

        if(is_null($sectionData) || empty($sectionData)){
            //Default values
            $sectionData = ['title_az' => '', 'title_en' => '', 'title_ru' => '','description_az' => '', 'description_en' => '', 'description_ru' => ''];
        }

        $principles = Content::where('keyword','principles')->get();

        if($principles->isEmpty()) {
            //Default values
            $principles = [0 => ['title_az' => '', 'title_en' => '', 'title_ru' => '','description_az' => '', 'description_en' => '', 'description_ru' => '']];
        }

        return view('modules.general-content.work-principles',compact('sectionData','principles'));
    }
    public function principlesStore(Request $request){
        //Creating/Updating Section Data

            if ($request->file('image')) {
                //Deleting old data
                $oldFileName = PageSetting::where("name","principles")->get('file')->first();
                Storage::disk('public')->delete($oldFileName->file);
                //Create new file
                $file = $request->file('image');
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('images', $fileName, 'public'); // Сохраните файл с новым именем в директорию "public/images"
            } else {
                $path = null;
            }


        PageSetting::updateOrCreate(['name' => 'principles'], [
            'name' => 'principles',
            'title_az' => $request->section_title_az,
            'title_en' => $request->section_title_en,
            'title_ru' => $request->section_title_ru,
            'description_az' => $request->section_description_az,
            'description_en' => $request->section_description_en,
            'description_ru' => $request->section_description_ru,
            'file' => $path,
            'type'     => 'content'
        ]);

        //Updating benefits
        Content::where('keyword','principles')->delete();

        $orderId = 0;
        foreach ($request->benefits as $benefit){
            $orderId++;
            Content::create([
                'keyword' => 'principles',
                'order_key' => $orderId,
                'title_az' => $benefit['title_az'],
                'title_en' => $benefit['title_en'],
                'title_ru' => $benefit['title_ru'],
                'description_az' => $benefit['description_az'],
                'description_en' => $benefit['description_en'],
                'description_ru' => $benefit['description_ru']
            ]);
        }

        return redirect()->route('work-principles-view');
    }


    public function sameTypeContentView(string $keyword){
        $data = SameTypePages::where("keyword",$keyword)->first();
        if(empty($data)){
            //Default values
            $data = ['title_az' => '', 'title_en' => '', 'title_ru' => '','description_az' => '', 'description_en' => '', 'description_ru' => '','content_az' => '',
                'content_en' => '',
                'content_ru' => '',
                'meta_title_az' => '',
                'meta_title_en' => '',
                'meta_title_ru' => '',
                'meta_description_az' => '',
                'meta_description_en' => '',
                'meta_description_ru' => ''];
        }
        return view('modules.same-type-data.content', compact('data','keyword'));
    }
    public function sameTypeContentStore(Request $request,$keyword){

        SameTypePages::updateOrCreate(['keyword' => $keyword], [
            'keyword' => $keyword,
            'title_az' => $request->section_title_az,
            'title_en' => $request->section_title_en,
            'title_ru' => $request->section_title_ru,
            'description_az' => $request->section_title_az,
            'description_en' => $request->section_title_en,
            'description_ru' => $request->section_title_ru,
            'content_az' => $request->content_az,
            'content_en' => $request->content_en,
            'content_ru' => $request->content_ru,
            'meta_title_az' => $request->meta_title_az,
            'meta_title_en' => $request->meta_title_en,
            'meta_title_ru' => $request->meta_title_ru,
            'meta_description_az' => $request->meta_description_az,
            'meta_description_en' => $request->meta_description_en,
            'meta_description_ru' => $request->meta_description_ru
        ]);

        return redirect()->route('same-type-content',$keyword);
    }
}
