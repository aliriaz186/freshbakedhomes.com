@extends('website.layout.main')

@section('title', 'Home For Americans')

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
            <h2></h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Homes Made For Americans</li>
            </ol>
        </div>

    </div>
</section>

<div class="container">

    <div class="row">

        <div class="col-md-9">

            <h3 class="pt-4">Home Designs
            </h3>
            <div class="text-justify py-4">
                <p>Here are some galleries of our homes and our home floorplans. We will be constantly adding to these with every new design we build.</p>
            </div>
            <h3 class="pt-4">Home Designs:
            </h3>
            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="row">

                        @php
                            $images = App\Models\Photo::where('type', 'Home Designs')->get();
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

            <h3 class="pt-4">Floor Plans:
            </h3>
            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="row">

                        @php
                            $images = App\Models\Photo::where('type', 'Floorplans')->get();
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


            <h3 class="pt-4">Homes For Americans
            </h3>
            <div class="text-justify py-4">
                {!! \App\Models\WebsiteText::where('type', 'home-for-american-text')->first()['text'] !!}
                {{--                <p>The first location for our container homes in the United States is South Florida. Building for the--}}
{{--                    American marketplace requires the assistance of an Engineering firm for the Certificate of--}}
{{--                    Occupancy. Many people who want to build their own home, or order a home online either skip this--}}
{{--                    step or don’t know the importance of this step. The worst thing that can happen to a new homeowner--}}
{{--                    who bought a container home is to receive it only to realize its not up to code. All of our homes--}}
{{--                    are designed in partnership with an engineering group that makes sure the homes are up to code in--}}
{{--                    South Florida..</p>--}}
{{--                <p>You deserve a safe, healthy environment to live. Fresh Baked Homes uses only virgin Ocean containers--}}
{{--                    and new design construction from new materials. If you buy a used container you never know what has--}}
{{--                    been shipped in it. You never know what materials have permeated the floor With our homes you are--}}
{{--                    assured that not only are we using world class materials that will last a lifetime, but also that--}}
{{--                    the </p>--}}
{{--                <p>materials have not been tainted by poisons or chemicals that can hurt your health over time.</p>--}}
{{--                <p>See the gallery of models that we currently build on the <b> <a href="{{url('how-to-buy')}}" style="color: black">“HOW TO BUY”</a> </b>page. Choose from one--}}
{{--                    of those--}}
{{--                    or tell us what you are dreaming of and we will help you build it. </p>--}}

            </div>

        </div>

    </div>

</div>


@endsection
