@extends('layouts.main')

@section('content')
    <section class="news-header py-5" style="background-color: rgba(104,12,13,0.1);">
        <div class="container">
            <h1>News & Updates</h1>
            <p class="lead">Stay informed about our latest activities and announcements</p>
        </div>
    </section>

    <section class="news-content py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Articles -->
                    <article class="news-item mb-4">
                        <div class="news-date">January 15, 2024</div>
                        <h2>2024 Scholarship Application Window Opens</h2>
                        <img src="{{ asset('assets/news/scholarship-2024.jpg') }}" alt="Scholarship News" class="img-fluid mb-3">
                        <p>Applications are now open for the 2024 academic session...</p>
                        <a href="#" class="read-more">Read More</a>
                    </article>
                </div>

                <div class="col-lg-4">
                    <!-- Sidebar -->
                    <div class="news-sidebar">
                        <div class="upcoming-events p-4 mb-4">
                            <h3>Upcoming Events</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="event-date">Feb 1</span>
                                    <span class="event-title">Town Hall Meeting</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
