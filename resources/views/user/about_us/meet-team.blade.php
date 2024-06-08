@php
    $about_us_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-title page-title-layout1 bg-overlay">
        <div class="bg-img"><img src="{{ asset('user/assets') }}/images/page-titles/7.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <h1 class="pagetitle__heading">Meet The Team</h1>
                    <p class="pagetitle__desc">Our team is special. They are chosen for their competence.
                    </p>
                </div><!-- /.col-xl-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="team-layout1 pb-40">
        <div class="container">
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="member text-center">
                            <div class="member__img">
                                <img src="{{ asset('files') }}/team/{{ $team->image }}" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a>{{ $team->name }}</a></h5>
                                <p class="member__job">{{ $team->position }}</p>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div> <!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Team layout 1  -->
@endsection
