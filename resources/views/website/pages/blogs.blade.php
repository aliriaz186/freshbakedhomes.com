@extends('website.layout.main')

@section('title', 'Blogs')

@section('content')


    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Blogs</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Blogs</li>
                </ol>
            </div>

        </div>
    </section>



    <section id="contact" class="contact">
        <div class="container">
            @foreach(\App\Models\Blog::latest()->get() as $blog)
                <div style="padding: 20px;background: rgba(211,211,211,0.48);border-radius: 5px;margin-bottom: 20px">
                    <img src="{{ url('') }}/{{$blog->image}}" alt="IMG"
                         class="img-fluid img-thumbnail shadow-sm" style="height: 400px;width: 100%">
                    <h2 style="margin-top: 20px">{{$blog->title}}</h2>
                    <p style="margin-top: 10px">{{$blog->description}}</p>
                </div>
            @endforeach
        </div>
    </section>



@endsection
