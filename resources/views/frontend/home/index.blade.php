@extends('frontend.layout.master')

@section('content')
    <div class="templateux-cover" style="background-image: url( {{ asset('frontend/images/hero_1.jpg') }}">
        <div class="container">
            <div class="row align-items-lg-center">

                <div class="col-lg-6 order-lg-1">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">
                        Empowering Business Through <strong>Human Capital</strong>
                    </h1>
                    <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="100">
                        At C2B Human Resource, we connect skilled individuals with organizations seeking growth, innovation,
                        and excellence in workforce management.
                    </p>
                    <p data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="btn btn-primary py-3 px-4 mr-3">Get Started</a>
                        <a href="#" class="text-white">Learn More</a>
                    </p>
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
                                    <img src="{{ asset('frontend/images/flaticon/svg/001-consultation.svg') }}"
                                        alt="Image" class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mb-4">Tailored HR Solutions</h3>
                                    <p>We offer customized human resource strategies aligned with your business goals and
                                        industry demands.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="700">
                            <div class="media block-icon-1 d-block text-left">
                                <div class="icon mb-3">
                                    <img src="{{ asset('frontend/images/flaticon/svg/002-discussion.svg') }}" alt="Image"
                                        class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mb-4">Dedicated Partnerships</h3>
                                    <p>We work closely with businesses to build long-term partnerships based on trust,
                                        transparency, and results.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
                            <div class="media block-icon-1 d-block text-left">
                                <div class="icon mb-3">
                                    <img src="{{ asset('frontend/images/flaticon/svg/003-turnover.svg') }}" alt="Image"
                                        class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mb-4">Scalable Workforce</h3>
                                    <p>Whether you're scaling up or down, our flexible solutions ensure you have the right
                                        talent at the right time.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .templateux-section -->

    <div class="templateux-section">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="mb-5">About C2B Human Resource</h2>
                    <div class="owl-carousel wide-slider">
                        <div class="item">
                            <img src="{{ asset('frontend/images/slider-1.jpg') }}" alt="Team Collaboration"
                                class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/slider-2.jpg') }}" alt="Workforce Planning"
                                class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/slider-3.jpg') }}" alt="Talent Acquisition"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5">
                    <h2 class="mb-5">Why Choose Us?</h2>
                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Client-Centric Model
                                </a>
                            </h2>
                            <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our C2B approach focuses on listening to the client’s needs first. We then deliver HR
                                        solutions that truly make an impact.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Industry Expertise
                                </a>
                            </h2>
                            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We specialize in multiple industries, allowing us to provide informed, strategic HR
                                        insights tailored to your sector.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Agile and Scalable
                                </a>
                            </h2>
                            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We adapt quickly to your evolving workforce needs—whether you’re hiring fast or
                                        optimizing existing teams.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    Proven Results
                                </a>
                            </h2>
                            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>With a client retention rate above 95%, our success speaks for itself. We deliver
                                        measurable outcomes you can trust.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .templateux-section -->

    <div class="templateux-section bg-light py-5" id="templateux-counter-section">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="templateux-counter text-center">
                        <span class="templateux-number" data-number="99399">0</span>
                        <span class="templateux-label">Clients Served</span>
                    </div>
                </div>
                <div class="col-md">
                    <div class="templateux-counter text-center">
                        <span class="templateux-number" data-number="199">0</span>
                        <span class="templateux-label">HR Professionals</span>
                    </div>
                </div>
                <div class="col-md">
                    <div class="templateux-counter text-center">
                        <span class="templateux-number" data-number="24">0</span>
                        <span class="templateux-label">Years in Business</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="templateux-section pb-0">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2>Meet Our Leadership</h2>
                    <p class="lead">Guiding the Future of Workforce Solutions</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="staff" class="staff-img"
                        style="background-image: url( {{ asset('frontend/images/person_1.jpg') }}">
                        <a href="#" class="desc">
                            <h3>Bob Miller</h3>
                            <span>Chief Executive Officer</span>
                            <div class="parag">
                                <p>With 20+ years in strategic HR leadership, Bob brings vision, direction, and innovation
                                    to C2B HR.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="staff" class="staff-img"
                        style="background-image: url( {{ asset('frontend/images/person_2.jpg') }}">
                        <a href="#" class="desc">
                            <h3>Jean Smith</h3>
                            <span>Chief Operating Officer</span>
                            <div class="parag">
                                <p>Jean’s expertise in operations and team development keeps our services streamlined and
                                    scalable.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="staff" class="staff-img"
                        style="background-image: url( {{ asset('frontend/images/person_3.jpg') }}">
                        <a href="#" class="desc">
                            <h3>David Wilson</h3>
                            <span>Chief Talent Officer</span>
                            <div class="parag">
                                <p>David leads our recruitment and talent strategies, ensuring the right people are always
                                    in the right roles.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="templateux-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2>What Our Clients Say</h2>
                    <p class="lead">Real feedback from companies that trust C2B Human Resource</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 testimonial-wrap">
                    <div class="quote">&ldquo;</div>
                    <div class="owl-carousel wide-slider-testimonial">
                        <div class="item">
                            <blockquote class="block-testomonial">
                                <p>&ldquo;C2B HR helped us scale our team quickly and with top-tier candidates. They truly
                                    understood our business needs.&rdquo;</p>
                                <p><cite>Drew Wilson, CEO of CoLab</cite></p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="block-testomonial">
                                <p>&ldquo;Their commitment to finding the perfect talent match has transformed our hiring
                                    process. Highly recommended!&rdquo;</p>
                                <p><cite>Craig Smith, CEO of Slite</cite></p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="block-testomonial">
                                <p>&ldquo;Professional, responsive, and innovative — C2B Human Resource has been our
                                    strategic HR partner for years.&rdquo;</p>
                                <p><cite>Bob Robe, CEO of Fixer</cite></p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="templateux-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center mb-5">
                    <h2>Our Services</h2>
                    <p class="lead">Innovative Solutions That Align Talent with Business Growth</p>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/004-gear.svg') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Workforce Optimization</h3>
                            <p>We help you build high-performing teams with data-driven insights and ongoing support.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/005-conflict.svg') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Talent Acquisition</h3>
                            <p>Access top-tier talent pools tailored to your industry, culture, and company goals.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/006-meeting.svg') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Compliance & Risk Management</h3>
                            <p>Ensure legal and regulatory HR compliance with our expert advisory services.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/007-brainstorming.svg') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">HR Strategy Consulting</h3>
                            <p>Align your HR approach with your company’s mission, vision, and evolving goals.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/001-consultation.svg') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Employee Engagement</h3>
                            <p>Boost morale, retention, and performance through effective engagement programs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('frontend/images/flaticon/svg/009-brainstorming-2.svg') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Training & Development</h3>
                            <p>Equip your workforce with skills for the future through curated learning programs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="100">
                    <p><a href="#" class="btn btn-black py-3 px-4">More Services</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="container templateux-section">
        <div class="row">
            <div class="col-12 col-md-7 mx-auto text-center mb-5">
                <h2>Insights & Resources</h2>
                <p class="lead">Stay informed with the latest trends in HR, recruitment, and workforce development.</p>
            </div>
        </div>

        <div class="d-flex flex-sm-row">
            <a href="#" class="block-thumbnail-1 one-third"
                style="background-image: url('{{ asset('frontend/images/slider-2.jpg') }}');" data-aos="fade">
                <div class="block-thumbnail-content">
                    <h2>Top 5 HR Tech Trends in 2025</h2>
                    <span class="post-meta">August 3, 2025 &bullet; by Admin</span>
                </div>
            </a>
            <a href="#" class="block-thumbnail-1 two-third"
                style="background-image: url('{{ asset('frontend/images/slider-1.jpg') }}');" data-aos="fade"
                data-aos-delay="100">
                <div class="block-thumbnail-content">
                    <h2>How to Build a Resilient Workforce</h2>
                    <span class="post-meta">July 21, 2025 &bullet; by Admin</span>
                </div>
            </a>
        </div>
        <div class="d-flex flex-column flex-sm-row">
            <a href="#" class="block-thumbnail-1 two-third"
                style="background-image: url('{{ asset('frontend/images/slider-3.jpg') }}');" data-aos="fade"
                data-aos-delay="200">
                <div class="block-thumbnail-content">
                    <h2>The Future of Hybrid Work</h2>
                    <span class="post-meta">June 15, 2025 &bullet; by Admin</span>
                </div>
            </a>
            <a href="#" class="block-thumbnail-1 one-third"
                style="background-image: url('{{ asset('frontend/images/slider-4.jpg') }}');" data-aos="fade"
                data-aos-delay="300">
                <div class="block-thumbnail-content">
                    <h2>Why Soft Skills Are In Demand</h2>
                    <span class="post-meta">May 12, 2025 &bullet; by Admin</span>
                </div>
            </a>
        </div>
    </div>
@endsection
