@extends('layouts.main')

@section('content')
    <section class="empowerment-header py-5" style="background-color: rgba(104,12,13,0.1);">
        <div class="container">
            <h1>Empowerment Programs</h1>
            <p class="lead">Creating opportunities for youth and women in Adamawa Central</p>
        </div>
    </section>

    <section class="empowerment-content py-5">
        <div class="container">
            <div class="youth-programs mb-5">
                <h2>Youth Empowerment Initiatives</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="program-card">
                            <img src="{{ asset('assets/programs/skills-training.jpg') }}" alt="Skills Training">
                            <h4>Skills Training</h4>
                            <p>Vocational and technical skills development...</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="women-programs">
                <h2>Women Empowerment Programs</h2>
                <div class="testimonials mt-4">
                    <h3>Success Stories</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="testimonial-card">
                                <p class="testimony">"The program helped me start my business..."</p>
                                <div class="beneficiary-info">
                                    <span class="name">- Aisha M.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
