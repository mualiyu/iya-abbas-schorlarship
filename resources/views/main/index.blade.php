@extends('layouts.main')

@section('content')
    <!-- about area start -->
    <section class="mt-6">
    <div class="swiper mySwiper max-w-2xl mx-auto rounded-lg shadow-lg overflow-hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide h-[400px] sm:h-64 flex items-center justify-center">
                <img src="{{ asset('/assets/main/1.jpg') }}" class="w-full h-full object-cover">
            </div>
            <div class="swiper-slide h-[400px] sm:h-64 flex items-center justify-center">
                <img src="{{ asset('/assets/main/2.jpg') }}" class="w-full h-full object-cover">
            </div>
            <div class="swiper-slide h-[400px] sm:h-64 flex items-center justify-center">
                <img src="{{ asset('/assets/main/3.jpg') }}" class="w-full h-full object-cover">
            </div>
            <div class="swiper-slide h-[400px] sm:h-64 flex items-center justify-center">
                <img src="{{ asset('/assets/main/1.jpg') }}" class="w-full h-full object-cover">
            </div>
            <div class="swiper-slide h-[400px] sm:h-64 flex items-center justify-center">
                <img src="{{ asset('/assets/main/6.png') }}" class="w-full h-full object-cover">
            </div>
        </div>
        <!-- Navigation Buttons -->
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<section class="h3_space-area pt-30 pb-50">
<div class="section-area-3 mb-35 small-section-area-3 justify-center">
    <h2 class="section-title mb-20 "></h2>
</div>
</section>
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
                            <h2 class="section-title mb-20" style="font-size: 30px;">A Visionary Leader Committed to Progress</h2>
                            <p>
                                <strong>Dis. Senator Aminu Iya Abbas FCE, CFE, ACTI (IYAN ADAMAWA AND MADAWAKI SHELLENG)</strong> is a distinguished lawmaker representing the
                                Adamawa Central Senatorial District. As the Chairman of the Senate Committee on Science and
                                Technology, he is dedicated to driving innovation, education, and sustainable development in
                                Nigeria.
                            </p>
                            <p>
                                With a deep passion for community empowerment, Senator Aminu Iya Abbas has initiated several
                                impactful programs, including the Senator Aminu Iya Abbas Scholarship Trust Fund, which
                                provides financial support to underprivileged students in Adamawa Central.
                            </p>
                        </div>
                        <div class="h3_about-content mb-10">
                            <span class="section-subtitle" style="color:rgb(123, 22, 23); font-size:16px;">Leadership &
                                Achievements</span>
                            <div class="row">
                                <div class="col-sm-12">
                                    <span><i class="fa-regular fa-check"></i>Championing Education & Youth
                                        Empowerment</span>
                                </div>
                                <div class="col-sm-12">
                                    <span><i class="fa-regular fa-check"></i>Advocating for Science & Technological
                                        Advancements</span>
                                </div>
                                <div class="col-sm-12">
                                    <span><i class="fa-regular fa-check"></i> Driving Infrastructure & Economic
                                        Development</span>
                                </div>
                                <div class="col-sm-12">
                                    <span><i class="fa-regular fa-check"></i>Advocating for Science & Technological
                                        Advancements</span>
                                </div>
                            </div>
                        </div>
                        <div class="h3_about-button">
                            <a href="/about" class="theme-btn theme-btn-medium theme-btn-3"
                                style="text-decoration: none;  background-color:rgb(104,12,13);">Learn more<i
                                    class="fa-light fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about area end -->

@endsection
