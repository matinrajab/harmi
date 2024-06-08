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
                    <h6>Edit Homepage</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('admin.homepage.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input class="form-control" type="text" value="{{ $home->title }}" placeholder="Title"
                                    id="title" name="title" required onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="subtitle" class="form-control-label">Subtitle</label>
                                <input class="form-control" type="text" value="{{ $home->subtitle }}"
                                    placeholder="Subtitle" id="subtitle" name="subtitle" required onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="about_us">About Us</label>
                                <textarea class="form-control" id="about_us" rows="10" placeholder="About Us" name="about_us" required>{{ $home->about_us }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="about_us_image" class="form-control-label">About Us Image (max: 2 mb)</label>
                            <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/homepage/{{ $home->about_us_image }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                            <div class="col-md-7">
                                <input class="form-control" type="file" id="about_us_image" name="about_us_image">
                                <p class="text-gradient text-dark mb-2 text-sm">Abaikan jika tidak ingin mengubah gambar
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="vision">Vision</label>
                                <textarea class="form-control" id="vision" rows="3" placeholder="Vision" name="vision" required>{{ $home->vision }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="mission">Mission</label>
                                @foreach ($missions as $mission)
                                    <div
                                        class="list-group-item border-0 d-flex mb-2 pt-2 px-2 bg-gray-100 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-3 text-sm p-2">{{ $mission->content }}</h6>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <a class="btn btn-link text-danger text-gradient mb-0"
                                                href="{{ route('admin.mission.destroy', $mission->id) }}"><i
                                                    class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                            <a class="btn btn-link text-dark mb-0"
                                                href="{{ route('admin.mission.edit', $mission->id) }}"><i
                                                    class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="d-flex">
                                    <a href="{{ route('admin.mission.create') }}"
                                        class="btn bg-gradient-dark btn-md mt-2 mb-2">Add
                                        Mission</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="cta_label" class="form-control-label">CTA Label</label>
                                <input class="form-control" type="text" value="{{ $home->cta_label }}"
                                    placeholder="CTA Label" id="cta_label" name="cta_label" required onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="cta_url" class="form-control-label">CTA URL</label>
                                <input class="form-control" type="text" value="{{ $home->cta_url }}"
                                    placeholder="CTA URL" id="cta_url" name="cta_url" required onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="bidang_kesehatan" class="form-control-label">Bidang Kesehatan</label>
                                <input class="form-control" type="text" value="{{ $home->bidang_kesehatan }}"
                                    placeholder="Bidang Kesehatan" id="bidang_kesehatan" name="bidang_kesehatan" required
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="bidang_pendidikan" class="form-control-label">Bidang Pedidikan</label>
                                <input class="form-control" type="text" value="{{ $home->bidang_pendidikan }}"
                                    placeholder="Bidang Pedidikan" id="bidang_pendidikan" name="bidang_pendidikan"
                                    required onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="bidang_kepemudaan" class="form-control-label">Bidang Kepemudaan</label>
                                <input class="form-control" type="text" value="{{ $home->bidang_kepemudaan }}"
                                    placeholder="Bidang Kepemudaan" id="bidang_kepemudaan" name="bidang_kepemudaan"
                                    required onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="bidang_lingkungan" class="form-control-label">Bidang Lingkungan</label>
                                <input class="form-control" type="text" value="{{ $home->bidang_lingkungan }}"
                                    placeholder="Bidang Lingkungan" id="bidang_lingkungan" name="bidang_lingkungan"
                                    required onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scriptjs')
    <script>
        ClassicEditor
            .create(document.querySelector('#about_us'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
