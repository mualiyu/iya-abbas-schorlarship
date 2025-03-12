@extends('layouts.main')

@section('content')
    <section class="contact-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info mb-5">
                        <h2>Contact Information</h2>
                        <div class="office-locations mt-4">
                            <h4>Office Locations</h4>
                            <div class="location-item">
                                <h5>Adamawa Central Office</h5>
                                <p>123 Main Street, Yola<br>
                                Phone: +234-XXX-XXXX<br>
                                Email: info@aminuiyaabbas.com</p>
                            </div>
                        </div>

                        <div class="social-links mt-4">
                            <h4>Social Media</h4>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-form-wrapper">
                        <h2>Send us a Message</h2>
                        <form class="contact-form mt-4">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="theme-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
