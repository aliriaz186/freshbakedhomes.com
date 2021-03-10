<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Photo;
use App\Models\WebsiteText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function home(){
        return view('admin/pages/home-page')->with(['images' => Photo::where('type', 'Initial Container Home Concept Images')->orWhere('type', 'Initial Container Home Concept Images')->latest()->get()]);
    }

    public function ourConcept(){
        return view('admin/pages/our-concept-text')->with(['ourconcept' => WebsiteText::where('type', 'our-concept-text')->first()['text']]);
    }

    public function disasterText(){
        return view('admin/pages/disaster-relief-text')->with(['ourconcept' => WebsiteText::where('type', 'disaster-relief-text')->first()['text']]);
    }

    public function growHomeText(){
        return view('admin/pages/grow-home-text')->with(['ourconcept' => WebsiteText::where('type', 'grow-home-text')->first()['text']]);
    }

    public function homeForAmerican(){
        return view('admin/pages/home-for-american-text')->with(['ourconcept' => WebsiteText::where('type', 'home-for-american-text')->first()['text']]);
    }

    public function howToBuy(){
        return view('admin/pages/how-to-buy-text')->with(['ourconcept' => WebsiteText::where('type', 'how-to-buy-text')->first()['text']]);
    }

    public function blogs(){
        return view('admin/pages/blogs')->with(['blogs' => Blog::latest()->get()]);
    }

    public function createBlog(){
        return view('admin/pages/create-blog');
    }

    public function blogSave(Request $request){

            $request->validate(
                [
                    'title' => 'required',
                    'image' => 'required',
                    'description' => 'required'
                ]
            );

            if ($request->has('image')) {
                $imagePath = $this->imageUpload($request);
                Blog::create(
                    [
                        'title' => $request->title,
                        'description' =>  $request->description,
                        'image' => $imagePath
                    ]
                );

                return redirect('/admin/blogs')->with('success', 'Successfully Blog added');
            }

    }

    public function updateBlog(Request $request)
    {

        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
            ]
        );
        $blog = Blog::where('id', $request->id)->first();
        if ($request->has('image')) {
            File::delete($blog->image);
            $imagePath = $this->imageUpload($request);
            $blog->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imagePath
            ]);
        } else {
            $blog->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
        }
        return redirect('/admin/blogs')->with('success', 'Successfully Blog updated');
    }

    public function deleteBlog(Request $request, $id){
        $blog = Blog::where('id', $id)->first()->delete();
        return redirect('/admin/blogs')->with('success', 'Successfully Blog deleted');
    }

    public function editBlog(Request $request, $id){
        $blog = Blog::where('id', $id)->first();
        return view('/admin/pages/edit-blog')->with(['blog' => $blog]);
    }

    public function updateText(Request $request){
        $websiteText = WebsiteText::where('type', $request->type)->first();
        $websiteText->text =  $request->ourconcept;
        $websiteText->type =  $request->type;
        $websiteText->update();
        return redirect('admin/' . $request->type);
    }

    protected function imageUpload(Request $request)
    {
        $image = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $imagePath = $request->file('image')->move('assets/img/portfolio', $image);
        return $imagePath;
    }
}
