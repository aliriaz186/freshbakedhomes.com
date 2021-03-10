@extends('website.layout.main')

@section('title', 'Our Concept')

@section('content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Our Concept</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Concept</li>
            </ol>
        </div>

    </div>
</section>

<div class="container">

    <div class="row">

        <div class="col-md-9">

            <h3 class="pt-4">THE HURRICANE-PROOF HOME
            </h3>
            <div class="text-justify py-4">
                {!! \App\Models\WebsiteText::where('type', 'our-concept-text')->first()['text'] !!}


            </div>

        </div>

    </div>

</div>


@endsection
