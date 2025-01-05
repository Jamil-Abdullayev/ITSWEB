<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{

    public function index()
    {
        $blogs = Blogs::all();
        return view('modules.blogs.list', compact('blogs'));
    }


    public function create()
    {
        return view('modules.blogs.add');
    }


    public function store(Request $request)
    {
        if ($request->file('image')) {
            //Create new file
            $file = $request->file('image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $imagePath = $file->storeAs('images', $fileName, 'public');
        }else{
            $imagePath = null;
        }

        $data = $request->except(['image']);
        $data['image'] = $imagePath;

        Blogs::create($data);
        return redirect()->route('blogs.index');
    }

    public function edit(string $id)
    {
        $blog = Blogs::find($id);
        return view('modules.blogs.edit', compact('blog'));
    }

    public function update(Request $request, string $id)
    {
        $blog = Blogs::findOrFail($id);
        if($request->file('image')){
            //Deleting old data
            Storage::disk('public')->delete($blog->image);
            //Create new file
            $file = $request->file('image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('images', $fileName, 'public');
        }
        else{
            $path = $blog->image;
        }

        $data = $request->except(['image']);
        $data['image'] = $path;

        $blog->update($data);

        return redirect()->route('blogs.index');
    }


    public function destroy(string $id)
    {
       $blog = Blogs::find($id);

       if($blog->image != null){
           //Deleting old data
           Storage::disk('public')->delete($blog->image);
       }

       $blog->delete();

       return redirect()->route('blogs.index');

    }
}
