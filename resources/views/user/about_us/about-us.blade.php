@php
    $about_us_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="google-map py-0">
        <iframe frameborder="0" height="500" width="100%"
            src="https://maps.google.com/maps?q={{ $contact->address }}&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"></iframe>
    </section><!-- /.GoogleMap -->

    <section class="contact-layout1 pt-0 mt--100 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-panel d-flex flex-wrap">
                        <form class="contact-panel__form" method="post"
                            action="https://7oroof.com/demos/medcity/{{ asset('user/assets') }}/php/contact.php"
                            id="contactForm">
                            <div class="row">
                                <div class="col-sm-12 text-justify">
                                    <h4 class="contact-panel__title">About Us </h4>
                                    <div class="contact-panel__desc mb-30">
                                        {!! nl2br($aboutUs->about_us) !!}
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </form>
                        <div
                            class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                            <div class="bg-img"><img src="{{ asset('user/assets') }}/images/banners/1.jpg" alt="banner">
                            </div>
                            <div>
                                <h4 class="contact-panel__title color-white">Address</h4>
                                <p class="contact-panel__desc font-weight-bold color-white mb-30">
                                    {{ $contact->address }}
                                </p>
                            </div>
                            <div>
                                <ul class="contact__list list-unstyled mb-30">
                                    <li>
                                        <a>Phone: {{ $contact->phone_number }}</a>
                                    </li>
                                    <li>
                                        <a>Email: {{ $contact->email }}</a>
                                    </li>
                                    <li>
                                        <a>Instagram: {{ $contact->instagram }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->

    <section class="team-layout2 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h3 class="heading__title">Meet Our Experts Team</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="member text-center">
                            <div class="member__img">
                                <img src="{{ asset('files') }}/team/{{ $team->image }}" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a href="doctors-single-doctor1.html">{{ $team->name }}</a></h5>
                                <p class="member__job">{{ $team->position }}</p>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ route('teams') }}" class="btn btn__secondary btn__rounded">
                        <span>Meet All Members</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Team -->

    @if ($achievements->isNotEmpty())
        <section class="team-layout2" style="padding-bottom:80px;padding-top:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-40">
                            <h3 class="heading__title">Achievements</h3>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row justify-content-center">
                    @foreach ($achievements as $item)
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="member">
                                <div class="member__img">
                                    <img src="{{ asset('files') }}/achievement/{{ $item->image }}" alt="member img">
                                </div><!-- /.member-img -->
                                <div class="member__info">
                                    <h5 class="member__name"><a>{{ $item->name }}</a></h5>
                                    <p class="member__desc">{{ $item->description }}</p>
                                </div><!-- /.member-info -->
                            </div><!-- /.member -->
                        </div><!-- /.col-lg-4 -->
                    @endforeach
                </div> <!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Team -->
    @endif
@endsection
