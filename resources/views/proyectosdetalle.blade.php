<x-app-layout>
    @section('content')
        <section class="events-details-page">
            <div class="events-details-page__bg"
                style="background-image: url({{ asset('assets/images/pattern/events-details-pattern.jpg') }});"></div>
            <div class="container">
                <div class="events-details-page__top">
                    <div class="events-details-page__top-img">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                        <div class="text-box">
                            <p>{{ $project['date'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="events-details-page__bottom">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="events-details-page__content">
                                <div class="events-details-page__text-box1">
                                    <h2>{{ $project['title'] }}</h2>
                                    <p>{{ $project['description'] }}</p>
                                </div>

                                <div class="events-details-page__text-box2">
                                    <h2>Misión del Evento</h2>
                                    <p>{{ $project['details']['objectives'] }}</p>
                                </div>

                                <div class="events-details-page__text-box3">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="events-details-page__text-box3-list">
                                                <ul>
                                                    @foreach ($project['details']['achievements'] as $achievement)
                                                        <li>
                                                            <p><span class="icon-check2"></span> {{ $achievement }}</p>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="events-details-page__text-box4">
                                    <p class="text1">{{ $project['details']['impact'] }}</p>

                                    <h2>Requisitos del Evento</h2>

                                    <p class="text2">{{ $project['details']['objectives'] }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="events-details__sidebar">
                                <div class="events-details__sidebar-single">
                                    <div class="contact-info-box">
                                        <div class="top-text">
                                            <p><span class="icon-location1"></span> {{ $project['location'] }}</p>
                                        </div>
                                        <div class="contact-info-box-inner">
                                            <ul class="contact-info-box-list">
                                                <li>
                                                    <div class="inner">
                                                        <div class="icon-box">
                                                            <span class="icon-clock-svgrepo"></span>
                                                        </div>
                                                        <div class="text-box">
                                                            <span>Horario del Evento:</span>
                                                            <h3>{{ $project['time'] ?? 'TBD' }}</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="inner">
                                                        <div class="icon-box">
                                                            <span class="icon-calendar"></span>
                                                        </div>
                                                        <div class="text-box">
                                                            <span>Fecha :</span>
                                                            <h3>{{ $project['date'] }}</h3>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="inner">
                                                        <div class="icon-box">
                                                            <span class="icon-folder-open"></span>
                                                        </div>
                                                        <div class="text-box">
                                                            <span>Categoria:</span>
                                                            <p>{{ $project['category'] ?? 'General' }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar__single sidebar__donation-two">
                                    <div class="sidebar__donation-two-box text-center">
                                        <div class="text-box">
                                            <h2>Become A Donation</h2>
                                            <p>Your support makes a difference in our events and activities.</p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="#">Contribute</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
