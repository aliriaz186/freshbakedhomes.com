@extends('website.layout.main')

@section('title', 'Discuss Room')

@section('content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Contact</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Contact</li>
            </ol>
        </div>

    </div>
</section>



<section id="contact" class="contact">
    <div class="container">

        <div>
            <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0" allowfullscreen=""></iframe>
        </div>

        <div class="row mt-5">
            <div class="col-lg-5 text-justify">

                <p><b>Your name and email:</b> We confirm each email and create a username to make sure we are not being
                    spammed.</p>
                <p>
                    <b> NOTE: </b>No advertising allowed in the discussion room. No vile language is tolerated either.
                    Negative
                    comments are ok, just keep the language clean please.</p>



            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 ">

                <form action="{{ route('message') }}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="{{ old('name') }}">

                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                data-rule="email" data-msg="Please enter a valid email" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        </div>
                    </div>
                    <div class="form-group">

                        <select id="my-select" class="form-control" name="subject">
                            <option value="" selected>Select Topic</option>
                            <option value="Ocean Container Questions"> Ocean Container Questions</option>
                            <option value="Windows and Doors">Windows and Doors</option>
                            <option value="Foundation Questions"> Foundation Questions</option>
                            <option value="Electrical Questions">Electrical Questions</option>
                            <option value="Bedroom Questions">Bedroom Questions</option>
                            <option value="Bathroom Questions">Bathroom Questions</option>
                            <option value="Kitchen Questions">Kitchen Questions</option>
                            <option value="Deck Questions">Deck Questions</option>
                            <option value="Appliances Questions">Appliances Questions</option>
                            <option value="Furniture Questions"> Furniture Questions</option>
                            <option value="Praise / Complaints">Praise / Complaints</option>

                        </select>

                        @error('subject')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us"
                            placeholder="Message">{{ old('message') }}</textarea>
                        @error('message')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    @if(session('success'))
                    <small class="text-danger font-weight-bold">{{ session('success') }}</small>
                    @endif
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section>



@endsection