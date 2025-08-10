@extends('frontend.layout.master')

@section('content')

    <!-- Hero Section -->
    <div class="templateux-cover" style="background-image: url({{ asset('frontend/images/hero_1.jpg') }})">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-6 order-lg-1 text-center mx-auto">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">About Us</h1>
                    <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="100">
                        Empowering businesses with tailored human resource solutions that drive growth and success.
                    </p>
                    <p data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="btn btn-primary py-3 px-4 mr-3">Get Started</a>
                        <a href="#" class="text-white">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Agency -->
    <div class="templateux-section">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="mb-5">Our Agency</h2>
                    <p>At C2B Human Resource, we’re not just recruiters — we’re your strategic HR partner. We help organizations hire smarter, retain top talent, and build future-ready teams. Whether you're a startup or a large enterprise, we offer scalable, human-centered HR solutions designed to drive long-term success.</p>
                    <div class="owl-carousel wide-slider mt-4">
                        <div class="item">
                            <img src="{{ asset('frontend/images/slider-1.jpg') }}" alt="Agency Image" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/slider-2.jpg') }}" alt="Agency Image" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/slider-3.jpg') }}" alt="Agency Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 pl-lg-5">
                    <h2 class="mb-5">Why Us?</h2>
                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Proven Expertise
                                </a>
                            </h2>
                            <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our team brings decades of hands-on HR and recruitment experience across industries — giving your business the edge in today’s talent market.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Human-Centered Approach
                                </a>
                            </h2>
                            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We believe people are your greatest asset. Our strategies focus on cultural fit, engagement, and long-term alignment with your business goals.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Scalable Solutions
                                </a>
                            </h2>
                            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Whether you’re growing a team or building a department, our HR services scale with your company’s evolving needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    End-to-End Support
                                </a>
                            </h2>
                            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>From sourcing and onboarding to performance management and retention, we support every stage of your employee journey.</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- .accordion -->
                </div>
            </div>
        </div>
    </div>

    <!-- Our Team -->
    <div class="templateux-section pb-0">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2>Our Team</h2>
                </div>
            </div>
            <div class="row">
                @php
                    $team = [
                        ['name' => 'Bob Miller', 'role' => 'Chief Executive Officer', 'image' => 'person_1.jpg'],
                        ['name' => 'Jean Smith', 'role' => 'Chief Operations Officer', 'image' => 'person_2.jpg'],
                        ['name' => 'David Wilson', 'role' => 'Chief Talent Officer', 'image' => 'person_3.jpg'],
                    ];
                @endphp

                @foreach(array_merge($team) as $member)
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4">
                        <div class="staff" style="background-image: url({{ asset('frontend/images/' . $member['image']) }})">
                            <a href="#" class="desc">
                                <h3>{{ $member['name'] }}</h3>
                                <span>{{ $member['role'] }}</span>
                                <div class="parag">
                                    <p>{{ $member['name'] }} brings valuable leadership and a passion for transforming HR strategies into business growth.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
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
                                <p>&ldquo;Working with C2B Human Resource has revolutionized the way we hire. Their insight and attention to detail gave us access to candidates we wouldn't have found otherwise.&rdquo;</p>
                                <p><cite>Drew Wilson, CEO and Founder of CoLab</cite></p>
                            </blockquote>
                        </div>

                        <div class="item">
                            <blockquote class="block-testomonial">
                                <p>&ldquo;C2B is more than a recruitment firm — they’re a partner in our company’s growth strategy. Their tailored HR support is unmatched.&rdquo;</p>
                                <p><cite>Craig Smith, CEO and Founder of Slite</cite></p>
                            </blockquote>
                        </div>

                        <div class="item">
                            <blockquote class="block-testomonial">
                                <p>&ldquo;They helped us build a scalable hiring process from the ground up. We’ve seen reduced turnover and better team alignment since working with C2B.&rdquo;</p>
                                <p><cite>Bob Robe, CEO and Founder of Fixer</cite></p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
