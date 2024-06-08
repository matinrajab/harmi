@php
    $admin_home_page = true;
    $page_name = 'Homepage';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h5>Homepage</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Title</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->title }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Subtitle</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->subtitle }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>About Us</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {!! nl2br($home->about_us) !!} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>About Us Image</h6>
                            <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/homepage/{{ $home->about_us_image }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Vision</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{!! nl2br($home->vision) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Mission</h6>
                            <ul>
                                @foreach ($missions as $mission)
                                    <li>
                                        <p class="text-gradient text-dark mb-2 text-sm"> {{ $mission->content }} </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>CTA Label</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->cta_label }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>CTA URL</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->cta_url }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Bidang Kesehatan</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->bidang_kesehatan }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Bidang Pendidikan</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->bidang_pendidikan }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Bidang Kepemudaan</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->bidang_kepemudaan }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Bidang Lingkungan</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $home->bidang_lingkungan }} </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.homepage.edit') }}" class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
