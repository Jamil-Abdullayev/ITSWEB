<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function mainSettingsView(){

        $linkedin['description'] = Setting::where('name','linkedin')->first()->description ?? '';
        $instagram['description'] = Setting::where('name','instagram')->first()->description ?? '';
        $email['description'] = Setting::where('name','email')->first()->description ?? '';
        $phone['description'] = Setting::where('name','phone')->first()->description ?? '';
        $mainLogo['description'] = Setting::where('name','mainLogo')->first()->description ?? '';

        return view('modules.settings.site-main-settings',compact('linkedin','instagram','email','phone','mainLogo'));
    }

    public function mainSettingsStore(Request $request){
        //storing datas
        foreach ($request->all() as $key => $value){
            if( !in_array($key, ['_token', 'mainLogo'])){
                Setting::updateOrCreate(['name' => $key], [
                    'name' => $key,
                    'description' => $value
                ]);
            }
            if ($key == 'mainLogo'){
                if ($request->file('mainLogo')) {
                    //Deleting old data
                    $oldFileName = Setting::where("name","mainLogo")->get('description')->first();
                    Storage::disk('public')->delete($oldFileName->description);
                    //Create new file
                    $file = $request->file('mainLogo');
                    $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('images', $fileName, 'public');
                    Setting::updateOrCreate(['name' => 'mainLogo'], [
                        'name' => 'mainLogo',
                        'description' => $path
                    ]);
                }
            }
        }

        return redirect()->route('site-main-settings');
    }
}
