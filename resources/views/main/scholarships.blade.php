@extends('layouts.main')

@section('content')
    <!-- Scholarship Header -->
    <section class="scholarship-header py-5" style="background-color: rgba(104,12,13,0.1);">
        <div class="container">
            <h1>Scholarship Programs</h1>
            <p class="lead">Empowering students from Adamawa Central through education</p>
        </div>
    </section>

    <!-- Application Portal -->
    <section class="application-portal py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="application-steps mb-4">
                        <h3>How to Apply</h3>
                        <div class="step-items">
                            <div class="step">
                                <span class="step-number">1</span>
                                <p>Check Eligibility Requirements</p>
                            </div>
                            <div class="step">
                                <span class="step-number">2</span>
                                <p>Prepare Required Documents</p>
                            </div>
                            <div class="step">
                                <span class="step-number">3</span>
                                <p>Fill Online Application</p>
                            </div>
                        </div>
                    </div>

                    <div class="eligibility-criteria mb-4">
                        <h3>Eligibility Criteria</h3>
                        <ul>
                            <li>Must be from Adamawa Central Senatorial District</li>
                            <li>Currently enrolled in a recognized institution</li>
                            <li>Maintain minimum CGPA of 2.5</li>
                            <li>Must be a full-time student</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="application-sidebar">
                        <div class="action-card">
                            <h4>Ready to Apply?</h4>
                            <a href="/application/start" class="theme-btn w-100">Start Application</a>
                        </div>

                        <div class="faq-section mt-4">
                            <h4>FAQs</h4>
                            <!-- Add FAQ items -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
