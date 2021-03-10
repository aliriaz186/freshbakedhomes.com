@extends('website.layout.main')

@section('title', 'Video')



@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Video</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Video</li>
            </ol>
        </div>

    </div>
</section>

<div class="container mb-lg-3">

    <div class="row">

        <div class="col-md-9">
            <h3 class="pt-4">The First Container Home video diary:
            </h3>
        </div>

        <div class="col-lg-8 shadow-sm">

            @php
            $videos = App\Models\Video::where('type', 'The First Container Home video diary')->get();
            @endphp
            @foreach ($videos as $video)

            <div class="py-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $video->link }}" allowfullscreen></iframe>
                </div>
                <small>
                    {{$video->title}}</small>
            </div>

            @endforeach


        </div>

    </div>

</div>


@endsection
