@extends('layouts.default')

@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/banner-pattern1.png);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Blog</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner html end-->
    <!-- Blog html start -->
    <div class="blog-page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 primary right-sidebar">
                    <div class="blog-page-inner">
                        <div class="row grid">
                            @foreach ($articles as $article)
                                <div class="col-md-6 grid-item">
                                    <article class="post">
                                        <figure class="feature-image">
                                            <a href="{{ route('article', $article->id) }}">
                                                <img src="{{ asset('storage/' . $article->poster) }}" alt="">
                                            </a>
                                        </figure>
                                        <div class="entry-content">
                                            <h4>
                                                <a href="{{ route('article', $article->id) }}">{{ $article->titre }}</a>
                                            </h4>
                                            <div class="entry-meta">
                                                <span class="byline">
                                                    <a href="#">{{ $article->administrateur->nom }}
                                                        {{ $article->administrateur->prenom }}</a>
                                                </span>
                                                <span class="posted-on">
                                                    <a href="#">{{ $article->updated_at }}</a>
                                                </span>
                                                <span class="comments-link">
                                                    <a href="#">No Comments</a>
                                                </span>
                                            </div>
                                            <div>{!! substr($article->description, 0, 200) !!}</div>
                                            <a href="{{ route('article', $article->id) }}" class="button-text">LIRE
                                                PLUS...</a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 secondary">
                    <div class="sidebar">
                        <aside class="widget widget_latest_post widget-post-thumb">
                            <h3 class="widget-title">Posts Récents</h3>
                            <ul>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($articles as $article)
                                    @if ($i < 2)
                                        <li>
                                            <figure class="post-thumb">
                                                <a href="{{ route('article', $article->id) }}"><img
                                                        src="{{ asset('storage/' . $article->poster) }}" alt=""></a>
                                            </figure>
                                            <div class="post-content">
                                                <h5>
                                                    <a
                                                        href="{{ route('article', $article->id) }}">{{ $article->titre }}</a>
                                                </h5>
                                                <div class="entry-meta">
                                                    <span class="posted-on">
                                                        <a
                                                            href="{{ route('article', $article->id) }}">{{ $article->created_at }}</a>
                                                    </span>
                                                    <span class="comments-link">
                                                        <a href="{{ route('article', $article->id) }}">No Comments</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        @php
                                            $i++;
                                        @endphp
                                    @endif
                                @endforeach



                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog html end -->
@endsection

@section('blog')
    current-menu-item
@endsection
