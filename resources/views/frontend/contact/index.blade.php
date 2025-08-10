@extends('frontend.layout.master')

@section('content')
    <div class="templateux-cover" style="background-image: url({{ asset('frontend/images/slider-1.jpg') }})">
        <div class="container">
            <div class="row align-items-lg-center">

                <div class="col-lg-6 order-lg-1 text-center mx-auto">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">Get in Touch with Us</h1>
                    <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="100">
                        Join the C2B revolution! Whether you’re a consumer offering services or a business seeking collaboration, we’re here to connect and empower you.
                    </p>
                    <p data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="btn btn-primary py-3 px-4 mr-3">Start Collaborating</a>
                        <a href="#" class="text-white">Learn More About C2B</a>
                    </p>
                </div>

            </div>
        </div>
    </div> <!-- .templateux-cover -->

    <div class="templateux-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 pr-md-7 mb-5">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                        </div>
                        <div class="form-group">
                            <label for="message">How Can We Help?</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Tell us about your C2B ideas or questions"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary py-3 px-5" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3"><span class="ion-ios-location-outline"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Innovation Hub, 5th Avenue, New York City, USA</h3>
                        </div>
                    </div> <!-- .block-icon-1 -->

                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3"><span class="ion-ios-telephone-outline"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">+1 212 555 7890</h3>
                        </div>
                    </div> <!-- .block-icon-1 -->

                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3"><span class="ion-ios-email-outline"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">contact@c2bplatform.com</h3>
                        </div>
                    </div> <!-- .block-icon-1 -->

                </div>
            </div> <!-- .row -->
        </div>
    </div> <!-- .templateux-section -->

    <footer class="templateux-footer bg-light">
        <div class="container">

            <div class="row mb-5">
                <div class="col-md-4 pr-md-5">
                    <div class="block-footer-widget">
                        <h3>About C2B Connect</h3>
                        <p>Empowering consumers to offer their talents and ideas directly to businesses, creating a more collaborative and innovative marketplace.</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="block-footer-widget">
                                <h3>Learn More</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">How C2B Works</a></li>
                                    <li><a href="#">Our Platform</a></li>
                                    <li><a href="#">Pricing Plans</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="block-footer-widget">
                                <h3>Support</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Contact Support</a></li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Resources</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="block-footer-widget">
                                <h3>Company</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="block-footer-widget">
                                <h3>Connect With Us</h3>
                                <ul class="list-unstyled block-social">
                                    <li><a href="#" class="p-1"><span class="icon-facebook-square"></span></a></li>
                                    <li><a href="#" class="p-1"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#" class="p-1"><span class="icon-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- .row -->

                </div>
            </div> <!-- .row -->

            <div class="row pt-5 text-center">
                <div class="col-md-12 text-center">
                    <p>
                        &copy; <script>document.write(new Date().getFullYear());</script> C2B Connect. All rights reserved. Made with <i class="icon-heart text-danger" aria-hidden="true"></i>.
                    </p>
                </div>
            </div> <!-- .row -->

        </div>
    </footer> <!-- .templateux-footer -->

    </div> <!-- .js-animsition -->

    <script src="js/scripts-all.js"></script>
    <script src="js/main.js"></script>
@endsection
