@extends('layouts.main')

@section('content')
<section class="empowerment-header py-5" style="background-color: rgba(104,12,13,0.1);">
        <div class="container">
        <h1>Legislative Work</h1>
            <p class="lead">Legislatives activities and bills</p>
        </div>
</section>
<section class="legislative-work py-5">
    <div class="container">
       

        <!-- Bills Sponsored Section -->
        <div class="bills-section mb-5">
            <h2 class="mb-3">Bills Sponsored</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="bill-card p-4 shadow-sm rounded bg-light">
                        <h4>Federal University of Education, Hong Bill</h4>
                        <p class="bill-status text-primary">Status: First Reading</p>
                        <p class="bill-description">A bill seeking to establish a specialized university to enhance teacher education and training.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bill-card p-4 shadow-sm rounded bg-light">
                        <h4>Federal Institute of Technology Innovation, Yola Bill</h4>
                        <p class="bill-status text-success">Status: Second Reading</p>
                        <p class="bill-description">This bill aims to establish an institute focused on innovation and technological development.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="bill-card p-4 shadow-sm rounded bg-light">
                        <h4>Federal College of Health Technology, Song Bill</h4>
                        <p class="bill-status text-primary">Status: First Reading</p>
                        <p class="bill-description">Aims to improve access to quality healthcare education and training in Adamawa State.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="bill-card p-4 shadow-sm rounded bg-light">
                        <h4>National Hajj Commission Act Amendment Bill</h4>
                        <p class="bill-status text-warning">Status: Pending</p>
                        <p class="bill-description">Seeks to ensure accountability and efficiency in the selection of airlines for Hajj operations.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Motions Section -->
        <div class="bills-section mb-5">
            <h2 class="mb-3">Motions Moved</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="bill-card p-4 shadow-sm rounded bg-light">
                        <h4>Flood Prevention in Jimeta-Yola</h4>
                        <p class="bill-status text-success">Status: Adopted</p>
                        <p class="bill-description">Motion to prevent loss of lives caused by undredged lower River Benue around Jimeta-Yola.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bill-card p-4 shadow-sm rounded bg-light">
                        <h4>Ending Arbitrary Electricity Billing</h4>
                        <p class="bill-status text-success">Status: Adopted</p>
                        <p class="bill-description">A motion co-sponsored with 10 senators to stop unfair billing practices by electricity distribution companies.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Constituency Projects Section -->
        <div class="projects-section">
            <h2 class="mb-3">Constituency Projects</h2>
            <div class="project-timeline">
                <div class="project-item p-4 shadow-sm rounded bg-light mb-4">
                    <h4>Construction of Health Centers in Rural Areas</h4>
                    <p class="project-status text-success">Completed</p>
                    <p class="project-description">Built and equipped five primary healthcare centers across Adamawa State to improve healthcare access.</p>
                </div>
                <div class="project-item p-4 shadow-sm rounded bg-light mb-4">
                    <h4>Provision of Solar-Powered Boreholes</h4>
                    <p class="project-status text-primary">Ongoing</p>
                    <p class="project-description">Solar-powered boreholes installed in communities facing water scarcity.</p>
                </div>
                <div class="project-item p-4 shadow-sm rounded bg-light mb-4">
                    <h4>Scholarship Scheme for Underprivileged Students</h4>
                    <p class="project-status text-warning">Upcoming</p>
                    <p class="project-description">Scholarship scheme for indigent students to support tertiary education across Adamawa State.</p>
                </div>
            </div>
        </div>

        <!-- Call-to-Action -->
        <div class="text-center mt-5">
            <a href="/legislation" class="btn btn-danger btn-lg">Explore More</a>
        </div>
    </div>
</section>

@endsection
