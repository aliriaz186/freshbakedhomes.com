@extends('website.layout.main')

@section('title', 'Disaster Relief')

@section('content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Disaster Relief</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Disaster Relief</li>
            </ol>
        </div>

    </div>
</section>

<div class="container mb-lg-3">

    <div class="row">

        <div class="col-md-9">

            <h3 class="pt-4">Homes For Disaster Relief
            </h3>
            <p><small> Emergency Response / Temporary Shelter homes </small></p>
            <div class="text-justify py-4">
                {!! \App\Models\WebsiteText::where('type', 'disaster-relief-text')->first()['text'] !!}

            </div>


        </div>

        <div class="col-lg-8 shadow-sm">


                @php
                    $videos = App\Models\Video::where('type', 'Homes For Disaster Relief')->get();
                @endphp
                @foreach ($videos as $key => $video)

                <div style="margin-top: 25px">


                    <h5>{{$key+1}}.  {{$video->title}}:</h5>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ $video->link }}"
                                allowfullscreen></iframe>
                    </div>
{{--                    <small>This is the standard emergency shelter. Foldable unit. Stacks and ships inside a standard--}}
{{--                        shipping--}}
{{--                        container. Low cost, easy to assemble.</small>--}}
                </div>
                @endforeach



{{--            <div>--}}


{{--                <h5>1. First Generation of Emergency Shelter:</h5>--}}

{{--                <div class="embed-responsive embed-responsive-16by9">--}}
{{--                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_TjosZt3zM0"--}}
{{--                            allowfullscreen></iframe>--}}
{{--                </div>--}}
{{--                <small>This is the standard emergency shelter. Foldable unit. Stacks and ships inside a standard--}}
{{--                    shipping--}}
{{--                    container. Low cost, easy to assemble.</small>--}}


{{--            </div>--}}




{{--            <div class="py-5">--}}
{{--                <h5>2.Second Generation of Emergency Shelter:</h5>--}}

{{--                <div class="embed-responsive embed-responsive-16by9">--}}
{{--                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Vykwcq0R9XQ"--}}
{{--                        allowfullscreen></iframe>--}}
{{--                </div>--}}
{{--                <small>Comes in prepacked kits. More space for the victim but also more of a home feel. Takes two people--}}
{{--                    a--}}
{{--                    few hours to assemble.--}}
{{--                </small>--}}
{{--            </div>--}}

{{--            <div class="pb-4">--}}
{{--                <h5>3. Third Generation of Emergency Shelter:</h5>--}}

{{--                <div class="embed-responsive embed-responsive-16by9">--}}
{{--                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_TjosZt3zM0"--}}
{{--                        allowfullscreen></iframe>--}}
{{--                </div>--}}
{{--                <small>--}}
{{--                    This is the newest version of emergency shelter. This one most resembles a home and is the quicker--}}
{{--                    to--}}
{{--                    assemble than the second generation. It is also easier to disassemble.--}}
{{--                </small>--}}

{{--            </div>--}}

        </div>

        {{-- <div class="col-lg-6 shadow-sm">

            <h6>Second Generation of Emergency Shelter:</h6>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Vykwcq0R9XQ"
                    allowfullscreen></iframe>
            </div>
            <small>Comes in prepacked kits. More space for the victim but also more of a home feel. Takes two people a
                few hours to assemble.
            </small>

        </div> --}}

        {{-- <div class="col-lg-6 mt-5 offset-lg-3 shadow">

            <h6>Third Generation of Emergency Shelter:</h6>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_TjosZt3zM0"
                    allowfullscreen></iframe>
            </div>
            <small>
                This is the newest version of emergency shelter. This one most resembles a home and is the quicker to
                assemble than the second generation. It is also easier to disassemble.
            </small>



        </div> --}}





    </div>

</div>


@endsection
