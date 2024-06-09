@php
    use App\Helpers\DateFormatter;
    $volunteer_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-title page-title-layout5">
        <div class="bg-img"><img src="{{ asset('user/assets') }}/images/backgrounds/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading">Harmi Project</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Harmi Project</li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="blog-grid">
        <div class="container">
            <div class="row">
                @foreach ($openVolunteers as $item)
                    <!-- Post Item #1 -->
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
                                    <a> {{ $item->volunteerType->name }}
                                    </a>
                                </div><!-- /.blog-meta-cat -->
                                <div class="contact-info d-flex align-items-center mb-10">
                                    <i class="icon-location"></i>
                                    <p class="member__job mb-0 ml-2"> {{ $item->location }} </p>
                                </div>
                                <div class="contact-info d-flex align-items-center mb-10">
                                    <i class="icon-calendar"></i>
                                    <p class="member__job mb-0 ml-2">
                                        {{ DateFormatter::startToEnd($item->start_date, $item->end_date) }} </p>
                                </div>
                                <h4 class="post__title"><a href="{{ route('open-volunteers.show', $item) }}">
                                        {{ $item->program_name }} </a></h4>

                                <p class="post__desc">
                                    {!! nl2br(substr($item->description, 0, 100)) !!}...
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
@endsection
