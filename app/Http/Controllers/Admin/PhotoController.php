<?php

namespace App\Http\Controllers\admin;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.pages.photo.index')->with(['images' => Photo::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.photo.create')->with(['photos' => Photo::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'image' => 'required'
            ]
        );

        if ($request->has('image')) {
            $imagePath = $this->imageUpload($request);
            Photo::create(
                [
                    'title' => $request->title,
                    'image' => $imagePath
                ]
            );

            return redirect(route('image.index'))->with('success', 'Successpully Image added');
        }
    }


    // public function show($id)
    // {
    // }


    public function edit(Photo $image)
    {


        return view('admin.pages.photo.edit')->with(['image' => $image]);
    }


    public function update(Request $request, Photo $image)
    {

        $request->validate(
            [
                'title' => 'required',
            ]
        );

        if ($request->has('image')) {
            File::delete($image->image);
            $imagePath = $this->imageUpload($request);
            $image->update([
                'title' => $request->title,
                'image' => $imagePath
            ]);
        } else {
            $image->update([
                'title' => $request->title,
            ]);
        }
        return redirect(route('image.index'))->with('success', 'Successpully Updated');
    }



    public function destroy(Photo $image)
    {

        File::delete($image->image);
        $image->delete();
        return redirect(route('image.index'))->with('success', 'Successpully Deleted');
    }



    protected function imageUpload(Request $request)
    {
        $image = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $imagePath = $request->file('image')->move('assets/img/portfolio', $image);
        return $imagePath;
    }
}