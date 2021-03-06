<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {

        return view('admin.pages.video.index')->with(['videos' => Video::latest()->get()]);
    }


    public function create()
    {
        return view('admin.pages.video.create');
    }

    public function store(Request $request)
    {

        Video::create(
            $request->validate(
                [
                    'title' => 'required',
                    'link' => 'required'
                ]
            )
        );

        return redirect(route('video.index'))->with('success', 'Successpully added');
    }


    public function edit(Video $video)
    {
        return view('admin.pages.video.edit')->with(['video' => $video]);
    }


    public function update(Request $request, Video $video)
    {

        $request->validate(
            [
                'title' => 'required',
            ]
        );
        $video->update([
            'title' => $request->title,
            'link' => $request->link

        ]);

        return redirect(route('video.index'))->with('success', 'Successpully Updated');
    }



    public function destroy(Video $video)
    {

        $video->delete();
        return redirect(route('video.index'))->with('success', 'Successpully Deleted');
    }
}