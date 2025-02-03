@extends('layouts.main')

@section('content')
    <!-- about area start -->
    <section class="h3_about-area pt-50 pb-50">
        <img src="assets/img/about/3/shape-5.png" alt="" class="h3_about-top-shape">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="h3_about-img mb-50">
                        <div class="h3_about-inner-img w_img mr-50">
                            <img src="{{asset('/assets/main/aminu.jpg')}}" alt="">
                        </div>
                        <div class="h3_about-img-shape d-none d-sm-block">
                            <img class="h3_about-img-shape-1" src="assets/shape-1.png" alt="">
                            <img class="h3_about-img-shape-2" src="assets/shape-1.png" alt="">
                            <img class="h3_about-img-shape-3" src="assets/shape-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="h3_about-wrap mr-65 mb-50">
                        <img src="/assets/shape-4.png" alt="" class="h3_about-wrap-shape">
                        <div class="section-area-3 mb-35 small-section-area-3">
                            <span class="section-subtitle" style="color:rgb(123, 22, 23);">About the Scholarship</span>
                            <h2 class="section-title mb-25">Empowering Future Leaders Through Education</h2>
                            <p class="section-text">
                                The <strong>Senator Aminu Iya Abbas Scholarship</strong> is a dedicated initiative to support students from the <strong>Adamawa Central Senatorial District</strong>.  
                                This scholarship provides financial assistance to undergraduate, ND, and HND students, ensuring they have the resources to excel in their academic journey.
                            </p>
                        </div>
                        <div class="h3_about-content mb-35">
                            <div class="row">
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Available for Adamawa Central Students</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Full & Partial Scholarships</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Open to Undergraduates & ND/HND Students</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>No Application Fees</span>
                                </div>
                            </div>
                        </div>
                        <div class="h3_about-button">
                            <a href="/application" class="theme-btn theme-btn-medium theme-btn-3" style="text-decoration: none;  background-color:rgb(104,12,13);">Apply Now<i class="fa-light fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- admission area start -->
    {{-- <section class="h3_admission-area pt-140 pb-90">
        <img src="assets//img/admission/3/1.png" alt="" class="h3_admission-bg">
        <img src="assets/img/admission/3/shape-1.png" alt="" class="h3_admission-shape-1">
        <img src="assets/img/admission/3/shape-3.png" alt="" class="h3_admission-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 ">
                    <div class="h3_admission-wrap mr-65 mb-50">
                        <img src="assets/img/admission/3/shape-2.png" alt="" class="h3_admission-wrap-shape-2">
                        <div class="section-area-3 mb-35 small-section-area-3">
                            <span class="section-subtitle">Education Admissions</span>
                            <h2 class="section-title mb-25">Bridge Opportunity Gap Support Access Education!</h2>
                            <p class="section-text">
                                Maecenas Felis Tellus, dictum sed fermentum vel, various condiment dolour donec aliquot denim ut auctor molestee, era elite pharetra masa.
                            </p>
                        </div>
                        <div class="h3_admission-content mb-35">
                            <div class="row">
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Teach your way</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Record your video</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Plan your curriculum</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Launch your course</span>
                                </div>
                            </div>
                        </div>
                        <div class="h3_admission-button">
                            <a href="#" class="theme-btn theme-btn-medium theme-btn-3">Apply Now<i class="fa-light fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="h3_admission-form mb-50">
                        <h5 class="h3_admission-form-title">Admissions</h5>
                        <form action="#">
                            <div class="row g-15">
                                <div class="col-xl-6 col-sm-6">
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="h3_admission-form-input">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="Street Address">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="h3_admission-form-input">
                                        <input type="text" placeholder="Zip Code">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="h3_admission-form-input">
                                        <input type="date">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="h3_admission-form-input">
                                        <textarea name="message" placeholder="Academic Qualifications"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="h3_admission-form-btn">
                                        <button type="submit" class="theme-btn h3_admission-btn theme-btn-full theme-btn-3">Contact Us<i class="fa-light fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- admission area end -->
@endsection