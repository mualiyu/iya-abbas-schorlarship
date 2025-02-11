@extends('layouts.main')

@section('content')
    <!-- about area start -->
    <section class="h3_about-area pt-30 pb-50">
        <img src="assets/img/about/3/shape-5.png" alt="" class="h3_about-top-shape">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="h3_about-img mb-50">
                        <div class="h3_about-inner-img w_img mr-50">
                            <img src="{{ asset('/assets/main/aminu-2.jpg') }}" alt="">
                        </div>
                        <div class="h3_about-img-shape d-none d-sm-block">
                            <img class="h3_about-img-shape-1" src="assets/shape-1.png" alt="">
                            <img class="h3_about-img-shape-2" src="assets/shape-1.png" alt="">
                            <img class="h3_about-img-shape-3" src="assets/shape-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 ">
                    <div class="h3_about-wrap mr-40 mb-50">
                        <div class="section-area-3 mb-35 small-section-area-3">
                            <span class="section-subtitle" style="color:rgb(123, 22, 23);">About SEN. AMINU IYA ABBAS</span>
                            <h2 class="section-title mb-20" style="font-size: 30px;">A Visionary Leader Committed to Progress</h2>
                            <p class="section-text">
                                <strong>Senator Aminu Iya Abbas</strong> is a distinguished lawmaker representing the
                                Adamawa Central Senatorial District. As the Chairman of the Senate Committee on Science and
                                Technology, he is dedicated to driving innovation, education, and sustainable development in
                                Nigeria.
                            </p>
                            <p class="section-text">
                                With a deep passion for community empowerment, Senator Aminu Iya Abbas has initiated several
                                impactful programs, including the Senator Aminu Iya Abbas Scholarship Trust Fund, which
                                provides financial support to underprivileged students in Adamawa Central.
                            </p>
                        </div>
                        <div class="h3_about-content mb-10">
                            <span class="section-subtitle" style="color:rgb(123, 22, 23); font-size:16px;">Leadership &
                                Achievements</span>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Championing Education & Youth
                                        Empowerment</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Advocating for Science & Technological
                                        Advancements</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i> Driving Infrastructure & Economic
                                        Development</span>
                                </div>
                                <div class="col-sm-6">
                                    <span><i class="fa-regular fa-check"></i>Advocating for Science & Technological
                                        Advancements</span>
                                </div>
                            </div>
                            <span class="section-subtitle mt-30" style="color:rgb(123, 22, 23); font-size:16px;">He also awards scholarships to Adamawa Cetral students</span>
                        </div>
                        <div class="h3_about-button">
                            <a href="#scholarship" class="theme-btn theme-btn-medium theme-btn-3"
                                style="text-decoration: none;  background-color:rgb(104,12,13);">Learn more<i
                                    class="fa-light fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about area end -->
<div id="scholarship"></div>
    <!-- admission area start -->
    <section class="h3_admission-area pt-100 pb-90" >
        <img src="/assets/1.png" alt="" class="h3_admission-bg">
        <img src="/assets/shape-1.png" alt="" class="h3_admission-shape-1">
        <img src="/assets/shape-3.png" alt="" class="h3_admission-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 ">
                    <div class="h3_admission-wrap mr-65 mb-50">
                        <img src="/assets/3/shape-2.png" alt="" class="h3_admission-wrap-shape-2">
                        <div class="section-area-3 mb-35 small-section-area-3">
                            <span class="section-subtitle" style="color:rgb(123, 22, 23);">About the Scholarship</span>
                            <h2 class="section-title mb-25">Empowering Future Leaders Through Education</h2>
                            <p class="section-text">
                                The <strong>Senator Aminu Iya Abbas Scholarship</strong> is a dedicated initiative to
                                support students from the <strong>Adamawa Central Senatorial District</strong>.
                                This scholarship provides financial assistance to undergraduate, ND, and HND students,
                                ensuring they have the resources to excel in their academic journey.
                            </p>
                        </div>
                        <div class="h3_admission-content mb-35">
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
                        <div class="h3_admission-button">
                            <a href="/application" class="theme-btn theme-btn-medium theme-btn-3"
                                style="text-decoration: none;  background-color:rgb(104,12,13);">Apply Now<i
                                    class="fa-light fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="h3_admission-form mb-10">
                        {{-- <h5 class="h3_admission-form-title">Admissions</h5> --}}
                        
                            <div class="p-0">
                                <img src="{{ asset('/assets/main/preview.jpg') }}" alt="Application Form preview"
                                    srcset="">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- admission area end -->
@endsection
