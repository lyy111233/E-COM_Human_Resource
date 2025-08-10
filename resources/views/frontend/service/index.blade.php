@extends('frontend.layout.master')

@section('content')
        <div class="templateux-cover" style="background-image: url({{ asset('frontend/images/hero_1.jpg') }}">
            <div class="container">
                <div class="row align-items-lg-center">

                    <div class="col-lg-6 order-lg-1 text-center mx-auto">
                        <h1 class="heading mb-3 text-white" data-aos="fade-up">Services</h1>
                        <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="100">Far far away, behind the
                            word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <p data-aos="fade-up" data-aos-delay="200"><a href="#"
                                class="btn btn-primary py-3 px-4 mr-3">Get Started</a> <a href="#"
                                class="text-white">Learn More</a></p>
                    </div>

                </div>
            </div>
        </div> <!-- .templateux-cover -->

        <div class="templateux-section pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 templateux-overlap">
                        <div class="row">
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                                <div class="media block-icon-1 d-block text-left">
                                    <div class="icon mb-3">
                                        <img src=" {{ asset('frontend/images/flaticon/svg/001-consultation.svg') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="h5 mb-4">Corporate Collaboration</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia.</p>
                                        <p><a href="#">Learn More</a></p>
                                    </div>
                                </div> <!-- .block-icon-1 -->
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="700">
                                <div class="media block-icon-1 d-block text-left">
                                    <div class="icon mb-3">
                                        <img src=" {{ asset('frontend/images/flaticon/svg/002-discussion.svg') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="h5 mb-4">Strategic Partners</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia.</p>
                                        <p><a href="#">Learn More</a></p>
                                    </div>
                                </div> <!-- .block-icon-1 -->
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
                                <div class="media block-icon-1 d-block text-left">
                                    <div class="icon mb-3">
                                        <img src=" {{ asset('frontend/images/flaticon/svg/003-turnover.svg') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="h5 mb-4">Infinite Posibilities</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia.</p>
                                        <p><a href="#">Learn More</a></p>
                                    </div>
                                </div> <!-- .block-icon-1 -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .templateux-section -->


        <div class="templateux-section bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center mb-5">
                        <h2>Our Services</h2>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up">
                        <div class="media block-icon-1 d-block text-center">
                            <div class="icon mb-3">
                                <img src=" {{ asset('frontend/images/flaticon/svg/004-gear.svg') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="media-body">
                                <h3 class="h5 mb-4">Regular Update</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div> <!-- .block-icon-1 -->
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="media block-icon-1 d-block text-center">
                            <div class="icon mb-3">
                                <img src=" {{ asset('frontend/images/flaticon/svg/005-conflict.svg') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="media-body">
                                <h3 class="h5 mb-4">Infinite Posibilities</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div> <!-- .block-icon-1 -->
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="media block-icon-1 d-block text-center">
                            <div class="icon mb-3">
                                <img src=" {{ asset('frontend/images/flaticon/svg/006-meeting.svg') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="media-body">
                                <h3 class="h5 mb-4">Good Security</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div> <!-- .block-icon-1 -->
                    </div>

                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="media block-icon-1 d-block text-center">
                            <div class="icon mb-3">
                                <img src=" {{ asset('frontend/images/flaticon/svg/007-brainstorming.svg') }}" alt="Image"
                                    class="img-fluid">
                            </div>
                            <div class="media-body">
                                <h3 class="h5 mb-4">HR Management</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div> <!-- .block-icon-1 -->
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="media block-icon-1 d-block text-center">
                            <div class="icon mb-3">
                                <img src=" {{ asset('frontend/images/flaticon/svg/001-consultation.svg') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="media-body">
                                <h3 class="h5 mb-4">Intuitive Thinking</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div> <!-- .block-icon-1 -->
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="media block-icon-1 d-block text-center">
                            <div class="icon mb-3">
                                <img src=" {{ asset('frontend/images/flaticon/svg/009-brainstorming-2.svg') }}" alt="Image"
                                    class="img-fluid">
                            </div>
                            <div class="media-body">
                                <h3 class="h5 mb-4">Play Video</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div> <!-- .block-icon-1 -->
                    </div>

                </div>
            </div>
        </div> <!-- .templateux-section -->

        <div class="templateux-section">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <h2>Happy Customers</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 testimonial-wrap">
                        <div class="quote">&ldquo;</div>
                        <div class="owl-carousel wide-slider-testimonial">
                            <div class="item">
                                <blockquote class="block-testomonial">
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language
                                        ocean.&rdquo;</p>
                                    <p><cite>Drew Wilson, CEO and Founder of CoLab</cite></p>
                                </blockquote>
                            </div>

                            <div class="item">
                                <blockquote class="block-testomonial">
                                    <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last
                                        view back on the skyline of her hometown Bookmarksgrove, the headline of
                                        Alphabet Village and the subline of her own road, the Line Lane. Pityful a
                                        rethoric question ran over her cheek, then she continued her way.&rdquo;</p>
                                    <p><cite>Craig Smith, CEO and Founder of Slite</cite></p>
                                </blockquote>
                            </div>

                            <div class="item">
                                <blockquote class="block-testomonial">
                                    <p>&ldquo;A small river named Duden flows by their place and supplies it with the
                                        necessary regelialia. It is a paradisematic country, in which roasted parts of
                                        sentences fly into your mouth.&rdquo;</p>
                                    <p><cite>Bob Robe, CEO and Founder of Fixer</cite></p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .templateux-section -->

@endsection
