@extends('frontend.layout.master')

@section('content')
        <div class="templateux-cover" style="background-image: url( {{ asset('frontend/images/hero_1.jpg') }})">
            <div class="container">
                <div class="row align-items-lg-center">

                    <div class="col-lg-6 order-lg-1 text-center mx-auto">
                        <h1 class="heading mb-3 text-white" data-aos="fade-up">Company's Blog</h1>
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



        <div class="templateux-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/slider-2.jpg') }} ) " data-aos="fade" data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/slider-3.jpg') }} ) " data-aos="fade" data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/slider-1.jpg') }} ) " data-aos="fade" data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/hero_2.jpg') }} ) " data-aos="fade" data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/hero_3.jpg') }} ) " data-aos="fade"
                            data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/img_4.jpg') }} ) " data-aos="fade" data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/slider-2.jpg') }} ) " data-aos="fade"
                            data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/slider-3.jpg') }} ) " data-aos="fade"
                            data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/slider-1.jpg') }} ) " data-aos="fade"
                            data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/hero_2.jpg') }} ) " data-aos="fade"
                            data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/hero_3.jpg') }} ) " data-aos="fade"
                            data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                            style="background-image: url( {{ asset('frontend/images/img_4.jpg') }} ) " data-aos="fade" data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>Behind the word mountains</h2>
                                <span class="post-meta">January 20, 2019 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>

                </div> <!-- .row -->

                <div class="row mt-5">
                    <div class="col-md-12 pt-5">
                        <ul class="pagination custom-pagination">
                            <li class="page-item prev"><a class="page-link" href="#"><i
                                        class="icon-keyboard_arrow_left"></i></a></li>
                            <li class="page-item active"><a class="page-linkx href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item next"><a class="page-link" href="#"><i
                                        class="icon-keyboard_arrow_right"></i></a></li>
                        </ul>


                    </div>
                </div>

            </div>
        </div> <!-- .templateux-section -->

@endsection
