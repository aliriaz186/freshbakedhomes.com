@extends('website.layout.main')


@section('title', 'Fresh Baked Homes')


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

<!-- ======= Banner ======= -->

<div id="banner">
  <div class="" id="banner-heading">
    <h2 class="border font-weight-bold p-2 text-light text-nowrap" style="font-size: 4.5vw;">Welcome to <span>Fresh
        Baked Homes</span></h2>
  </div>
</div>


<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Service</h2>
      <p>The Services We Offer</p>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="icon-box shadow-sm rounded-lg">
          <div class="blockquote-custom-icon shadow-sm">
            <i class="icofont-tick-mark" style="font-size: 27px;"></i>
          </div>

          <p>Fresh baked homes was started with the idea of creating a home
            that can withstand any hurricane without sustaining damage. An open floorplan home with lots
            of sunlight
            flooding the home, but a home that can be easily “shuttered” to withstand anything nature
            throws at you.
          </p>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mt-md-0">
        <div class="icon-box shadow-sm">
          <div class="blockquote-custom-icon shadow-sm">
            <i class="icofont-tick-mark" style="font-size: 27px;"></i>
          </div>

          <p>Fresh baked homes is an independent steel home manufacturer using
            mainly virgin ocean shipping containers to
            make homes for every style, taste, and financial capability.</p>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mt-md-0">
        <div class="icon-box shadow-sm">
          <div class="blockquote-custom-icon shadow-sm">
            <i class="icofont-tick-mark" style="font-size: 27px;"></i>
          </div>

          <p>By independent we mean that we assemble and decorate with as many
            locally supplied parts and pieces. We give
            our customers the best quality and the lowest price by combining overseas and domestic
            components to the
            project. In the end the customer always gets exactly what they want.
          </p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Services Section -->



<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h2>Portfolio</h2>
      <p>Recent Works</p>
    </div>

    <div class="row">

      @php
      $images = App\Models\Photo::all();
      @endphp
      @foreach ($images as $image)

      <div class="col-lg-4 col-md-6 mb-2">

        <div class="portfolio-wrap" style="height:200px">
          <a href="{{ asset($image->image) }}" data-lightbox="id" data-title="{{ $image->title }}"
            title="{{ $image->title }}"> <img src="{{ asset($image->image) }}" alt="IMG"
              class="img-fluid img-thumbnail shadow-sm"></a>

        </div>
      </div>

      @endforeach

    </div>

  </div>
</section><!-- End Portfolio Section -->




<!---------------------------------Promise  Section------------>


<div class="container mb-5">
  <div class="section-title">
    <h2>Promises</h2>
    <p>Our promises to our customers</p>
  </div>
  <div class="carousely">
    <div class="carousel-cell">
      <div class="container">

        <p> When using shipping containers we ONLY use virgin ocean shipping containers with natural bamboo
          flooring. No
          chemicals or poisons from prior use.</p>
      </div>

    </div>
    <div class="carousel-cell">

      <div class="container">
        <p>In assembly we use the highest level of construction.</p>
        <li>Full weld bead along every joint (not spot welding)</li>
        <li>Double paned windows and doors.</li>
        <li>UL certified wiring, outlets and appliances
        </li>
        <li>Triple layer of exterior paint. (rust proof primer, main color paint, clear UV protective paint)
        </li>
        <li>Natural Bamboo composite wall covering and flooring.
        </li>
      </div>

    </div>

    <div class="carousel-cell">
      <div class="container">

        <p> We build to your needs and desires. We have a whole set of options but we are always looking for new
          ideas. We
          know that sometimes customers can come up with ideas that we would never have thought of on our own. So we
          provide
          a NO cost full design set of your dream home before you ever pay a penny</p>
      </div>

    </div>
    <div class="carousel-cell">
      <div class="container">

        <p> We are here to serve the rich and the poor. We are here to serve anyone, anywhere on the planet who needs
          a home. We will work with engineers from any country in the world to meet the zoning and construction
          requirements of your government.</p>
      </div>

    </div>
    <div class="carousel-cell">
      <div class="container">

        <p> We are here to support emergency response teams. We are always looking to support any emergency response
          team globally with solutions to temporary (OR permanent) housing for victims of natural disasters. We offer
          multiple solutions right of the shelf for easy to store, easy to assemble shelters that make people feel at
          home. Tents are no longer the best solution for temporary shelters. Our shelters are stronger, more durable,
          and help maintain morale among those whose lives are devastated by the disaster.</p>
      </div>

    </div>

  </div>

</div>


@endsection