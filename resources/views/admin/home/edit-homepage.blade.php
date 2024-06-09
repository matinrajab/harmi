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
                                <label for="about_us">About Us</label>
                                <textarea class="form-control" id="about_us" rows="10" placeholder="About Us" name="about_us" required>{{ $home->about_us }}</textarea>
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
                                <label for="one_day_care" class="form-control-label">One Day Care</label>
                                <input class="form-control" type="text" value="{{ $home->one_day_care }}"
                                    placeholder="One Day Care" id="one_day_care" name="one_day_care" required
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="one_day_action" class="form-control-label">One Day Action</label>
                                <input class="form-control" type="text" value="{{ $home->one_day_action }}"
                                    placeholder="One Day Action" id="one_day_action" name="one_day_action" required
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="one_day_share" class="form-control-label">One Day Share</label>
                                <input class="form-control" type="text" value="{{ $home->one_day_share }}"
                                    placeholder="One Day Share" id="one_day_share" name="one_day_share" required
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="one_day_trip" class="form-control-label">One Day Trip</label>
                                <input class="form-control" type="text" value="{{ $home->one_day_trip }}"
                                    placeholder="One Day Trip" id="one_day_trip" name="one_day_trip" required
                                    onfocus="focused(this)" onfocusout="defocused(this)">
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
