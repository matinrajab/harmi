@php
    use App\Helpers\DateFormatter;
    $event_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-title page-title-layout5 bg-overlay">
        <div class="bg-img"><img src="{{ asset('user/assets') }}/images/page-titles/8.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading">Event List</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event</li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="team-layout3 pb-40">
        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="member">
                            <div class="member__img">
                                <img src="{{ asset('files') }}/event/{{ $event->image }}" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a
                                        href="{{ route('events.show', $event) }}">{{ $event->name }}</a></h5>
                                <div class="contact-info d-flex align-items-center mb-10">
                                    <i class="icon-location"></i>
                                    <p class="member__job mb-0 ml-2">{{ $event->location }}</p>
                                </div>
                                <div class="contact-info d-flex align-items-center mb-10">
                                    <i class="icon-calendar"></i>
                                    <p class="member__job mb-0 ml-2">
                                        {{ DateFormatter::startToEnd($event->start_date, $event->end_date) }}</p>
                                </div>
                                <p class="member__desc">
                                    {!! nl2br(substr($event->description, 0, 100)) !!}...
                                </p>
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    <a href="{{ route('events.show', $event) }}"
                                        class="btn btn__secondary btn__link btn__rounded">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div> <!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Team layout 3  -->
@endsection
