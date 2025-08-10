@extends('frontend.layout.master')

@section('content')

    <!-- Hero Section -->
    <div class="templateux-cover" style="background-image: url({{ asset('frontend/images/hero_1.jpg') }})">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-6 order-lg-1 text-center mx-auto">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">Services</h1>
                    <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="100">
                        Discover how C2B Human Resource transforms people strategies into business success through our comprehensive HR services.
                    </p>
                    <p data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="btn btn-primary py-3 px-4 mr-3">Get Started</a>
                        <a href="#" class="text-white">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Highlights Section -->
    <div class="templateux-section pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 templateux-overlap">
                    <div class="row">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                            <div class="media block-icon-1 d-block text-left">
                                <div class="icon mb-3">
                                    <img src="{{ asset('frontend/images/flaticon/svg/001-consultation.svg') }}" alt="Consulting" class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mb-4">Corporate Collaboration</h3>
                                    <p>We bridge the gap between business goals and HR strategy through long-term corporate partnerships built on trust and performance.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="700">
                            <div class="media block-icon-1 d-block text-left">
                                <div class="icon mb-3">
                                    <img src="{{ asset('frontend/images/flaticon/svg/002-discussion.svg') }}" alt="Strategy" class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mb-4">Strategic Partnerships</h3>
                                    <p>Our solutions are rooted in a consultative approach — aligning workforce strategies with your company’s mission and vision.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
                            <div class="media block-icon-1 d-block text-left">
                                <div class="icon mb-3">
                                    <img src="{{ asset('frontend/images/flaticon/svg/003-turnover.svg') }}" alt="Possibilities" class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mb-4">Infinite Possibilities</h3>
                                    <p>We adapt our HR models to match the evolving workforce landscape, offering flexibility, scalability, and innovation.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="templateux-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center mb-5">
                    <h2>Our Services</h2>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/004-gear.svg') }}" alt="Automation" class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Process Optimization</h3>
                            <p>Streamline recruitment and onboarding with tailored workflows and automation that reduce time-to-hire and improve compliance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/005-conflict.svg') }}" alt="Conflict Resolution" class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Conflict Management</h3>
                            <p>We provide coaching and mediation services to help businesses resolve internal challenges and foster a positive workplace culture.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/006-meeting.svg') }}" alt="Security" class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">HR Compliance & Security</h3>
                            <p>Ensure legal and regulatory compliance across your HR operations while protecting employee data with robust privacy practices.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/007-brainstorming.svg') }}" alt="HR Management" class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">End-to-End HR Management</h3>
                            <p>From workforce planning to performance evaluations, we manage your entire HR lifecycle with strategic precision.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/001-consultation.svg') }}" alt="Thinking" class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">HR Consulting & Advisory</h3>
                            <p>We deliver expert advice on everything from organizational design to change management, tailored to your business structure.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/009-brainstorming-2.svg') }}" alt="Training" class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Training & Development</h3>
                            <p>Equip your team with the skills they need to thrive through personalized training, workshops, and leadership development programs.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Testimonials -->
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
                                <p>&ldquo;C2B Human Resource helped us overhaul our entire hiring process. We saw better candidate quality, lower turnover, and a stronger team culture within months.&rdquo;</p>
                                <p><cite>Drew Wilson, CEO and Founder of CoLab</cite></p>
                            </blockquote>
                        </div>

                        <div class="item">
                            <blockquote class="block-testomonial">
                                <p>&ldquo;The strategic insights and customized HR solutions from C2B gave us a competitive edge in talent acquisition and retention.&rdquo;</p>
                                <p><cite>Craig Smith, CEO and Founder of Slite</cite></p>
                            </blockquote>
                        </div>

                        <div class="item">
                            <blockquote class="block-testomonial">
                                <p>&ldquo;They’re more than just HR consultants — they’re business enablers. Their team integrated seamlessly with ours and delivered real results.&rdquo;</p>
                                <p><cite>Bob Robe, CEO and Founder of Fixer</cite></p>
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
