@php
    use App\Helpers\DateFormatter;
    $blog_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-title pt-30 pb-30 text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> {{ $blog->title }} </li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="blog blog-single pt-0 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="post-item mb-0">
                        <div class="post__img2">
                            <img src="{{ asset('files') }}/blog/{{ $blog->image }}" alt="post image" loading="lazy">
                        </div><!-- /.post-img -->
                        <div class="post__body pb-0">
                            <div class="post__meta-cat2">
                            </div><!-- /.blog-meta-cat -->
                            <div class="post__meta d-flex align-items-center mb-20">
                                <span class="post__meta-date">{{ DateFormatter::date($blog->publication_date) }}</span>
                                <a class="post__meta-author" href="#">{{ $blog->author }}</a>
                            </div><!-- /.blog-meta -->
                            <h1 class="post__title mb-30">
                                {{ $blog->title }}
                            </h1>
                            <div class="post__desc text-justify">
                                <p> {!! nl2br($blog->content) !!} </p>
                            </div><!-- /.blog-desc -->
                        </div>
                    </div><!-- /.post-item -->
                    <div class="flex-wrap justify-content-between border-top border-bottom pt-30 pb-30 mb-40">
                        <div id="disqus_thread"></div>
                        <script>
                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                            var disqus_config = function() {
                                this.page.url =
                                    "{{ route('blogs.show', $blog) }}"; // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier =
                                    "{{ $blog->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = 'https://harmi.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>
                    </div>
                </div><!-- /.col-lg-8 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar">
                        <div class="widget widget-posts">
                            <h5 class="widget__title">Recent Posts</h5>
                            <div class="widget__content">
                                @foreach ($blogs as $blog)
                                    <div class="widget-post-item d-flex align-items-center">
                                        <div class="widget-post__img">
                                            <a href="{{ route('blogs.show', $blog) }}"><img
                                                    src="{{ asset('files') }}/blog/{{ $blog->image }}"
                                                    alt="thumb"></a>
                                        </div><!-- /.widget-post-img -->
                                        <div class="widget-post__content">
                                            <span
                                                class="widget-post__date">{{ DateFormatter::date($blog->publication_date) }}</span>
                                            <h4 class="widget-post__title"><a href="{{ route('blogs.show', $blog) }}">
                                                    {{ substr($blog->title, 0, 35) }}{{ Str::length($blog->title) > 35 ? '...' : '' }}
                                                </a>
                                            </h4>
                                        </div><!-- /.widget-post-content -->
                                    </div><!-- /.widget-post-item -->
                                @endforeach
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-posts -->
                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Single -->
@endsection
