@php
    $collaboration_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-title page-title-layout5 bg-overlay">
        <div class="bg-img"><img src="{{ asset('user/assets') }}/images/page-titles/8.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading">Partnership</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Partnership</li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="about-layout1 mb-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2">
                        <h3 class="heading__title mb-40">Description</h3>
                    </div><!-- /heading -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about__Text2 text-justify">
                        <p hidden class="mb-30"> </p>
                        <p class="mb-30">
                            {{ $partnership->description }}
                        </p>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="video-banner">
                        <img src="{{ asset('user/assets') }}/images/about/1.jpg" alt="about">
                    </div><!-- /.video-banner -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

    <section class="contact-layout5 bg-overlay bg-overlay-blue-gradient pb-60">
        <div class="bg-img"><img src="{{ asset('user/assets') }}/images/banners/3.jpg" alt="banner"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 d-flex flex-column justify-content-between">
                    <div>
                        <div class="heading heading-light mb-30 text-justify">
                            <h3 class="heading__title mb-30">Benefits</h3>
                            <p class="heading__desc">
                                {{ $partnership->benefits }}
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-30">
                        <a href="https://wa.me/{{ $partnership->contact_person }}?text=Halo%20saya%20tertarik%20untuk%20join%20{{ $partnership->type }}"
                            class="btn btn__white btn__white-style2 btn__rounded mr-30">
                            <span>Join Our Partnership</span> <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 5 -->

    <section class="team-layout1 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h3 class="heading__title">Our Partnership</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row justify-content-center">
                @foreach ($partners as $partner)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="member">
                            <div class="member__img">
                                <img src="{{ asset('files') }}/partner/{{ $partner->image }}" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info text-center">
                                <h5 class="member__name">{{ $partner->name }}</h5>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div> <!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Team -->
@endsection
