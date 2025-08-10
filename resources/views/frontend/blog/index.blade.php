@extends('frontend.layout.master')

@section('content')
    <div class="templateux-cover" style="background-image: url( {{ asset('frontend/images/hero_1.jpg') }})">
        <div class="container">
            <div class="row align-items-lg-center">

                <div class="col-lg-6 order-lg-1 text-center mx-auto">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">C2B Insights & Stories</h1>
                    <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="100">
                        Explore how consumers are reshaping the business world—one idea, review, and skill at a time.
                    </p>
                    <p data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="btn btn-primary py-3 px-4 mr-3">Get Started</a>
                        <a href="#" class="text-white">Learn More</a>
                    </p>
                </div>

            </div>
        </div>
    </div> <!-- .templateux-cover -->

    <div class="templateux-section">
        <div class="container">
            <div class="row">
                {{-- Blog Post Grid --}}
                @php
                    $posts = [
                        'How Freelancers Are Powering Modern Brands',
                        'The Rise of Influencer-Led Campaigns',
                        'Turning Customer Feedback into Product Gold',
                        'Crowdsourcing: Ideas that Scale',
                        'Consumers as Consultants: A New Era',
                        'Digital Platforms Giving Power Back to People',
                        'Monetizing Skills Through C2B Apps',
                        'Why Businesses Need to Listen to Users',
                        'The Role of C2B in Ethical Innovation',
                        'From Buyer to Brand Partner',
                        'C2B in Action: Real Stories That Inspire',
                        'Future of Work: Powered by C2B'
                    ];
                    $images = [
                        'slider-2.jpg', 'slider-3.jpg', 'slider-1.jpg',
                        'hero_2.jpg', 'hero_3.jpg', 'img_4.jpg',
                        'slider-2.jpg', 'slider-3.jpg', 'slider-1.jpg',
                        'hero_2.jpg', 'hero_3.jpg', 'img_4.jpg'
                    ];
                @endphp

                @foreach($posts as $index => $title)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('blog.single') }}" class="block-thumbnail-1 one-whole show-text height-sm"
                           style="background-image: url( {{ asset('frontend/images/' . $images[$index]) }} )" data-aos="fade" data-aos-delay="300">
                            <div class="block-thumbnail-content">
                                <h2>{{ $title }}</h2>
                                <span class="post-meta">August {{ 5 + $index }}, 2025 &bullet; 3 Comments</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div> <!-- .row -->

            <div class="row mt-5">
                <div class="col-md-12 pt-5">
                    <ul class="pagination custom-pagination">
                        <li class="page-item prev"><a class="page-link" href="#"><i class="icon-keyboard_arrow_left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item next"><a class="page-link" href="#"><i class="icon-keyboard_arrow_right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- .templateux-section -->
@endsection
