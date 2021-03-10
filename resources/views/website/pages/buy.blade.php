@extends('website.layout.main')

@section('title', 'How To Buy')

@section('content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2></h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Homes To Buy</li>
            </ol>
        </div>

    </div>
</section>

<div class="container">

    <div class="row">

        <div class="col-md-9 shadow-sm">

            <h3 class="pt-4">Ready to make the leap? Here are some things you should know.
            </h3>
            <div class="text-justify py-4">
                {!! \App\Models\WebsiteText::where('type', 'how-to-buy-text')->first()['text'] !!}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <p>There is no limit to the number of containers that can be--}}
{{--                            joined to make your home. The idea--}}
{{--                            that--}}
{{--                            container homes are small and cramped is simply not true.</p>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <p>A container home is really just a very strong steel frame. You should think of the walls of--}}
{{--                            the--}}
{{--                            container home as a canvas. Cut the way you want. Open as much as you want. Paint the way--}}
{{--                            you--}}
{{--                            want.--}}
{{--                            Cover the way you want.</p>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <p>The steel frames make excellent solar panel frame holders. It is very simple for us to--}}
{{--                            construct--}}
{{--                            an--}}
{{--                            OFF GRID container home for you. Our sister company builds battery systems and solar panels--}}
{{--                            that--}}
{{--                            match our quality. If you are looking for an off grid solution simply mention it when--}}
{{--                            ordering.--}}
{{--                        </p>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <p>We support dreams! One of our services is the creation of a complete floorplan and 3D full--}}
{{--                            color--}}
{{--                            drawings of your dream at NO COST TO YOU. Simply request a design template questionnaire--}}
{{--                            when--}}
{{--                            you--}}
{{--                            contact us. Fill it out and we will do the rest.</p>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <p>Like the idea of going with something that is already built and proven? Great! We have put--}}
{{--                            together--}}
{{--                            a slide show of our current models, each with a model number. Simply tell us which model--}}
{{--                            number--}}
{{--                            you--}}
{{--                            like when you contact us and we will send you the floorplan so you can study it further--}}
{{--                            before--}}
{{--                            ordering.</p>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <p>Local manufacturing support. We are a global manufacturer. We are able to quote you--}}
{{--                            independently on--}}
{{--                            each step of construction and assembly. You want local furniture and appliances? No problem.--}}
{{--                            We--}}
{{--                            will--}}
{{--                            quote you without them. You want to do your own wiring? No problem. We will box the wall--}}
{{--                            panels--}}
{{--                            and--}}
{{--                            put them in the middle of the container home for you to assemble. You simply pull your--}}
{{--                            wiring--}}
{{--                            through the “pre-threaded” conduit and place your own breaker box. You want to do your own--}}
{{--                            windows--}}
{{--                            and doors? No problem. We will secure the window frames for shipping and you can install--}}
{{--                            your--}}
{{--                            own--}}
{{--                            when the container home arrives.</p>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <p>Foundation. Again, this is another part of construction that we can provide as much or as--}}
{{--                            little--}}
{{--                            support as you require. We can pack and include the I-beams and pylon mesh in the container--}}
{{--                            home.--}}
{{--                            You simply dig the holes, insert the mesh, insert the ibeams, level them, and pour the--}}
{{--                            concrete.--}}
{{--                            When dry you weld the home to the ibeams and you are ready to move in! If you want to do you--}}
{{--                            own--}}
{{--                            foundation…No Problem. We will quote you without the ibeam and mesh cost.</p>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <p>Questions always welcome. We consider each customer a new friend. We want you to have a--}}
{{--                            successful--}}
{{--                            life in your new home. Join us in the discussions room where you can see the insight of--}}
{{--                            other--}}
{{--                            people--}}
{{--                            and also add your own insight so that future customers will become as educated as you are on--}}
{{--                            the--}}
{{--                            benefits and delights of a container home. <a href="http://freshbakedhomes.com/contact-us" style="color: blue">Contact</a></p>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <p>Contact us to start your path to a new home: <a href="http://freshbakedhomes.com/contact-us" style="color: blue">Contact</a> We look forward to--}}
{{--                            meeting you.</p>--}}
{{--                    </li>--}}
{{--                </ul>--}}


            </div>

        </div>

    </div>

</div>


@endsection
