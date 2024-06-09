@php
    use App\Helpers\DateFormatter;
    $event_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-title page-title-layout5">
        <div class="bg-img"><img src="{{ asset('user/assets') }}/images/backgrounds/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading">{{ $event->name }}</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Event</a></li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <aside class="sidebar has-marign-right">
                        <div class="widget widget-member">
                            <div class="member mb-0">
                                <div class="member__img">
                                    <img src="{{ asset('files') }}/event/{{ $event->image }}" alt="member img">
                                </div><!-- /.member-img -->
                                <div class="member__info">
                                    <h5 class="member__name">Location & Date :</h5>
                                    <p class="member__desc">{{ $event->location }},
                                        {{ DateFormatter::startToEnd($event->start_date, $event->end_date) }}</p>
                                </div><!-- /.member-info -->
                            </div><!-- /.member -->
                        </div><!-- /.widget-member -->
                        <div class="widget widget-services">
                            <h5 class="widget__title">Important Link</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled mb-0">
                                    <li><a target="_blank" href="{{ $event->guide_book_link }}"><span>Guide Book</span><i
                                                class="icon-arrow-right"></i></a></li>
                                    <li><a target="_blank" href="{{ $event->fully_funded_link }}"><span>Fully Funded
                                                Registration</span><i class="icon-arrow-right"></i></a>
                                    </li>
                                    <li><a target="_blank" href="{{ $event->partial_funded_link }}"><span>Partial Funded
                                                Registration</span><i class="icon-arrow-right"></i></a>
                                    </li>
                                    <li><a target="_blank" href="{{ $event->self_funded_link }}"><span>Self Funded
                                                Registration</span><i class="icon-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-services -->
                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="text-block mb-50">
                        <h5 class="text-block__title">Event Description</h5>
                        <p class="text-block__desc mb-20 text-justify">{!! nl2br($event->description) !!}</p>
                    </div><!-- /.text-block -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    @if ($event->galleries->isNotEmpty())
        <section class="gallery-layout2 shop pb-40 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6 class="related__products-title text-center-xs mb-25">Gallery</h6>
                        <div class="row">
                            @foreach ($event->galleries->sortByDesc('id') as $gallery)
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="member">
                                        <div class="member__img gallery-img">
                                            <a class="popup-gallery-item"
                                                href="{{ asset('files') }}/gallery/{{ $gallery->image }}"><i
                                                    class="fas fa-eye"></i></a>
                                            <img src="{{ asset('files') }}/gallery/{{ $gallery->image }}"
                                                alt="member img">
                                        </div><!-- /.member-img -->
                                        <div class="member__info">
                                            <h5 class="member__name">{{ $gallery->title }}
                                            </h5>
                                            <p class="member__desc">{{ $gallery->caption }}</p>
                                        </div><!-- /.member-info -->
                                    </div><!-- /.member -->
                                </div><!-- /.col-lg-4 -->
                            @endforeach
                        </div> <!-- /.row -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.shop single -->
    @endif
@endsection
