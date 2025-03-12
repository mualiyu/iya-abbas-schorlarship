@extends('layouts.main')

@section('content')
    <section class="legislative-work py-5">
        <div class="container">
            <h1 class="mb-5">Legislative Work</h1>
            
            <div class="bills-section mb-5">
                <h2>Bills Sponsored</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="bill-card">
                            <h4>Science and Technology Development Bill</h4>
                            <p class="bill-status">Status: In Progress</p>
                            <p class="bill-description">Aims to promote technological advancement...</p>
                        </div>
                    </div>
                    <!-- More bill cards -->
                </div>
            </div>

            <div class="projects-section">
                <h2>Constituency Projects</h2>
                <div class="project-timeline">
                    <!-- Project items -->
                </div>
            </div>
        </div>
    </section>
@endsection
