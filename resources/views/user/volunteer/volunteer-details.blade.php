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
                    <h1 class="pagetitle__heading">Harmi Project details</h1>
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

    <section class="shop pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row product-item-single">
                        <div class="col-sm-6">
                            <div class="product__img">
                                <img src="{{ asset('files') }}/volunteer/{{ $openVolunteer->image }}" alt="product"
                                    loading="lazy">
                            </div><!-- /.product-img -->
                        </div>
                        <div class="col-sm-6">
                            <h1 class="product__title">{{ $openVolunteer->program_name }}</h1>
                            <br>
                            <div class="product__meta-details">
                                <ul class="list-unstyled mb-30">
                                    <li><span>Category :</span> <span>{{ $openVolunteer->volunteerType->name }}</span></li>
                                    <li><span>Location :</span> <span>{{ $openVolunteer->location }}</span></li>
                                    <li><span>Date :</span>
                                        <span>{{ DateFormatter::startToEnd($openVolunteer->start_date, $openVolunteer->end_date) }}</span>
                                    </li>
                                    <li><span>Application Deadline :</span>
                                        <span>{{ DateFormatter::date($openVolunteer->application_deadline) }}</span>
                                    </li>
                                </ul>
                            </div><!-- /.product__meta-details -->
                        </div>
                    </div><!-- /.row -->
                    <div class="product__details mt-100">
                        <nav class="nav nav-tabs">
                            <a class="nav__link active" data-toggle="tab" href="#Description">Description</a>
                            <a class="nav__link" data-toggle="tab" href="#Requirements">Requirements</a>
                            <a class="nav__link" data-toggle="tab" href="#ApplicationProcess">Application
                                Process</a>
                        </nav>
                        <div class="tab-content mb-50 text-justify" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="Description">
                                <p>{!! nl2br($openVolunteer->description) !!}</p>
                            </div><!-- /.desc-tab -->
                            <div class="tab-pane fade" id="Requirements">
                                <p>{!! nl2br($openVolunteer->requirements) !!}
                                </p>
                            </div><!-- /.details-tab -->
                            <div class="tab-pane fade" id="ApplicationProcess">
                                <p>{!! nl2br($openVolunteer->application_process) !!}</p>
                            </div><!-- /.reviews-tab -->
                        </div>
                    </div><!-- /.product-tabs -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.shop single -->
@endsection
