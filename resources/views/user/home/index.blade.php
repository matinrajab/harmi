@php
    use App\Helpers\DateFormatter;
    $home_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="slider">
        <div class="slick-carousel m-slides-0">
            <div class="slide-item align-v-h">
                <div class="bg-img"><img src="{{ asset('user/assets') }}/images/sliders/5.jpg" alt="slide img">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide__content">
                                <h2 class="slide__title">{{ $home->title }}</h2>
                                <p class="slide__desc">{{ $home->subtitle }}</p>
                                <div class="d-flex flex-wrap align-items-center">
                                    <a href="{{ $home->cta_url }}" class="btn btn__primary btn__rounded mr-30">
                                        <span>{{ $home->cta_label }}</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <section class="about-layout1 mb-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2">
                        <h3 class="heading__title mb-40">About Us</h3>
                    </div><!-- /heading -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about__Text2 text-justify">
                        <p hidden class="mb-30"></p>
                        <p class="mb-30">
                            {!! nl2br($home->about_us) !!}
                        </p>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="video-banner">
                        <img src="{{ asset('files') }}/homepage/{{ $home->about_us_image }}" alt="about">
                    </div><!-- /.video-banner -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

    <section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
        <div class="bg-img"><img src="{{ asset('user/assets') }}/images/banners/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row heading-layout2 text-justify">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
                    <h3 class="heading__title color-white">Our Vision & Mission
                    </h3>
                </div><!-- /.col-xl-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
                    <p class="heading__desc font-weight-bold color-gray mb-40">
                        {{ $home->vision }}
                    </p>
                    <ul class="list-items list-items-layout2 list-items-light list-unstyled">
                        @foreach ($missions as $mission)
                            <li>
                                {{ $mission->content }}
                            </li>
                        @endforeach
                    </ul>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="carousel-container mt-90">
                        <div class="slick-carousel"
                            data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                            <!-- process item #1 -->
                            <div class="process-item">
                                <span class="process__number">01</span>
                                <div class="process__icon">
                                    <i class="icon-stethoscope"></i>
                                </div><!-- /.process__icon -->
                                <h4 class="process__title">Kesehatan</h4>
                                <p class="process__desc">
                                    {{ $home->bidang_kesehatan }}
                                </p>
                            </div><!-- /.process-item -->
                            <!-- process-item #2 -->
                            <div class="process-item">
                                <span class="process__number">02</span>
                                <div class="process__icon">
                                    <i class="icon-health-report"></i>
                                </div><!-- /.process__icon -->
                                <h4 class="process__title">Pendidikan</h4>
                                <p class="process__desc">
                                    {{ $home->bidang_pendidikan }}
                                </p>
                            </div><!-- /.process-item -->
                            <!-- process-item #3 -->
                            <div class="process-item">
                                <span class="process__number">03</span>
                                <div class="process__icon">
                                    <i class="icon-head"></i>
                                </div><!-- /.process__icon -->
                                <h4 class="process__title">Kepemudaan</h4>
                                <p class="process__desc">
                                    {{ $home->bidang_kepemudaan }}
                                </p>
                            </div><!-- /.process-item -->
                            <!-- process-item #4 -->
                            <div class="process-item">
                                <span class="process__number">04</span>
                                <div class="process__icon">
                                    <i class="icon-dna"></i>
                                </div><!-- /.process__icon -->
                                <h4 class="process__title">Lingkungan</h4>
                                <p class="process__desc">
                                    {{ $home->bidang_lingkungan }}
                                </p>
                            </div><!-- /.process-item -->
                        </div><!-- /.carousel -->
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Work Process -->

    <section class="blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h3 class="heading__title">Latest volunteer Projects</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                @foreach ($openVolunteers as $item)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="post-item">
                            <div class="post__img">
                                <a href="{{ route('open-volunteers.show', $item) }}">
                                    <img src="{{ asset('files') }}/volunteer/{{ $item->image }}" alt="post image"
                                        loading="lazy">
                                </a>
                            </div><!-- /.post__img -->
                            <div class="post__body">
                                <div class="post__meta-cat">
                                    <a>{{ $item->volunteerType->name }}</a>
                                </div><!-- /.blog-meta-cat -->
                                <div class="contact-info d-flex align-items-center mb-10">
                                    <i class="icon-location"></i>
                                    <p class="member__job mb-0 ml-2">{{ $item->location }}</p>
                                </div>
                                <div class="contact-info d-flex align-items-center mb-10">
                                    <i class="icon-calendar"></i>
                                    <p class="member__job mb-0 ml-2">
                                        {{ DateFormatter::startToEnd($item->start_date, $item->end_date) }}</p>
                                </div>
                                <h4 class="post__title"><a
                                        href="{{ route('open-volunteers.show', $item) }}">{{ $item->program_name }}</a>
                                </h4>

                                <p class="post__desc">{!! nl2br(substr($item->description, 0, 100)) !!}...
                                </p>
                                <a href="{{ route('open-volunteers.show', $item) }}"
                                    class="btn btn__secondary btn__link btn__rounded">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.post__body -->
                        </div><!-- /.post-item -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <section class="testimonials-layout1 pt-130 pb-80">
        <div class="container">
            <div class="testimonials-wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-5">
                        <div class="heading-layout2">
                            <h3 class="heading__title">Testimonials</h3>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-7 -->
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="slider-nav mb-60">
                            @foreach ($testimonials as $item)
                                <div class="testimonial__meta">
                                    <div class="testimonial__thmb">
                                        <img src="{{ asset('files') }}/testimonial/{{ $item->profile_picture }}"
                                            alt="author thumb">
                                    </div><!-- /.testimonial-thumb -->
                                    <div>
                                        <h4 class="testimonial__meta-title">{{ $item->name }}</h4>
                                        <p class="testimonial__meta-desc">{{ $item->title }}</p>
                                    </div>
                                </div><!-- /.testimonial-meta -->
                            @endforeach
                        </div><!-- /.slider-nav -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="slider-with-navs">
                            @foreach ($testimonials as $item)
                                <div class="testimonial-item">
                                    <h3 class="testimonial__title">“{!! nl2br($item->content) !!}”
                                    </h3>
                                </div><!-- /. testimonial-item -->
                            @endforeach
                        </div><!-- /.slick-carousel -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.testimonials-wrapper -->
        </div><!-- /.container -->
    </section><!-- /.testimonials layout 1 -->

    <section class="team-layout3 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h3 class="heading__title">Latest Events</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
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
