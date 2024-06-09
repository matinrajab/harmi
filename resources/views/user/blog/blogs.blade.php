@php
    use App\Helpers\DateFormatter;
    $blog_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-title page-title-layout5">
        <div class="bg-img"><img src="{{ asset('user/assets') }}/images/backgrounds/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading">Blog List</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="blog-grid">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="post-item">
                            <div class="post__img">
                                <a href="{{ route('blogs.show', $blog) }}">
                                    <img src="{{ asset('files') }}/blog/{{ $blog->image }}" alt="post image"
                                        loading="lazy">
                                </a>
                            </div><!-- /.post__img -->
                            <div class="post__body">
                                <div class="post__meta-cat2">
                                </div><!-- /.blog-meta-cat -->
                                <div class="post__meta d-flex">
                                    <span class="post__meta-date"> {{ DateFormatter::date($blog->publication_date) }}
                                    </span>
                                    <a class="post__meta-author" href="#">{{ $blog->author }}</a>
                                </div>
                                <h4 class="post__title"><a>{{ $blog->title }}</a></h4>

                                <p class="post__desc">{!! nl2br(substr($blog->content, 0, 100)) !!}...
                                </p>
                                <a href="{{ route('blogs.show', $blog) }}"
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
