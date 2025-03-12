@extends('layouts.main')

@section('content')
    <section class="about-senator pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="about-title">About Senator Aminu Iya Abbas</h1>
                    <div class="biography-section mt-4">
                        <h3>Biography</h3>
                        <p>Senator Aminu Iya Abbas represents Adamawa Central in the National Assembly...</p>
                    </div>
                    <div class="mission-section mt-4">
                        <h3>Mission Statement</h3>
                        <p>Dedicated to serving the people of Adamawa Central through effective legislation...</p>
                    </div>
                    <div class="philosophy-section mt-4">
                        <h3>Political Philosophy</h3>
                        <ul>
                            <li>Commitment to democratic values</li>
                            <li>Youth empowerment through education</li>
                            <li>Sustainable development</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="senator-sidebar">
                        <img src="{{ asset('/assets/main/aminu-2.jpg') }}" alt="Senator Profile" class="img-fluid mb-4">
                        <div class="quick-info">
                            <h4>Quick Facts</h4>
                            <ul>
                                <li>Representing: Adamawa Central</li>
                                <li>Committee: Science and Technology</li>
                                <li>Term: 2023-2027</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
