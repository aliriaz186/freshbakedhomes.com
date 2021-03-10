@extends('website.layout.main')

@section('title', 'The Grow Home')


@section('extra-css')
    <link href="{{ asset('assets/vendor/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/flickity.min.css') }}" rel="stylesheet">


@endsection



@section('extra-js')
    <script src=" {{ asset('assets/vendor/lightbox/js/lightbox.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/flickity.pkgd.min.js') }}"></script>


    <script>
        $(document).ready(function () {
            $('.carousely').flickity({ // options
                // cellAlign: 'left',
                // wrapAround: true,
                cellAlign: 'left',
                prevNextButtons: true,
                autoPlay: 7000,
                contain: true

            });


        })

        lightbox.option({
            'resizeDuration': 500,
            'wrapAround': true,
            'alwaysShowNavOnTouchDevices': true
        })

    </script>

@endsection

@section('content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>The Grow Home</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Grow Home</li>
            </ol>
        </div>

    </div>
</section>

<div class="container">

    <div class="row">

        <div class="col-md-9">

            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="section-title">
                        {{--      <h2>Portfolio</h2>--}}
                        <p>Grow Containers</p>
                    </div>

                    <div class="row">

                        @php
                            $images = App\Models\Photo::where('type', 'Grow Containers')->get();
                        @endphp
                        @foreach ($images as $image)

                            <div class="col-lg-4 col-md-6 mb-2">

                                <div class="portfolio-wrap" style="height:200px">
                                    <a href="{{ url('') }}/{{$image->image}}" data-lightbox="id" data-title="{{ $image->title }}"
                                       title="{{ $image->title }}"> <img src="{{ url('') }}/{{$image->image}}" alt="IMG"
                                                                         class="img-fluid img-thumbnail shadow-sm"></a>

                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>
            </section>
            <h3 class="pt-4">The Grow Home
            </h3>
            <div class="text-justify py-4">
                {!! \App\Models\WebsiteText::where('type', 'grow-home-text')->first()['text'] !!}
{{--                <p>If you are planning for severe weather changes to come in the near future OR if you just want to have--}}
{{--                    as much food security as housing security in your home plan, then consider our Grow Home.</p>--}}
{{--                <p>Our grow home concept is very simple. We take a standard container home and add a grow pod. A grow--}}
{{--                    pod is a 40 foot container that is pre-fitted with LED grow lights, a water management system, an--}}
{{--                    environmental control system, and a small workshop. Enough to keep a family of 4 fed well year round--}}
{{--                    OR to create income from a cash crop. Our LED lighting partner has begun assisting us in building--}}
{{--                    the first prototype that will be shipped to Washington State this summer.</p>--}}
{{--                <p>We will create a video diary of the build so you can see the quality and thoughtful engineering that--}}
{{--                    went into this design.</p>--}}
{{--                <p>Stay Tuned!</p>--}}

            </div>

        </div>

    </div>

</div>


@endsection
