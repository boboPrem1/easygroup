@extends('layouts.default')

@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/banner-pattern1.png);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">{{ $article->titre }}</h1>
                    <div class="entry-meta">
                        <span class="byline">
                            <a href="#">{{ $article->administrateur->nom }}
                                {{ $article->administrateur->prenom }}</a>
                        </span>
                        <span class="posted-on">
                            <a href="#">{{ $article->created_at }}</a>
                        </span>
                        <span class="comments-link">
                            <a href="#commentArea">{{$article->commentaires->count()}} Commentaire(s)</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner html end-->
    <!-- Blog html start -->
    <div class="single-post-section">
        <div class="single-post-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 primary right-sidebar">
                        <!-- single blog post html start -->
                        <figure class="feature-image">
                            <img src="{{ asset('storage/' . $article->poster) }}" alt="">
                        </figure>
                        <article class="single-content-wrap">
                            {!! $article->description !!}
                        </article>
                        <br />
                        {{-- <div class="meta-wrap">
                            <div class="tag-links">
                                <a href="#">Business</a>,
                                <a href="#">Corporate</a>,
                                <a href="#">Management</a>
                            </div>
                        </div> --}}
                        <div class="post-socail-wrap">
                            <div class="social-icon-wrap">
                                <div class="social-icon social-facebook">
                                    <a href="http://www.facebook.com/sharer.php?u=https://easygoupe.org/article/{{$article->id}}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                </div>

                                <div class="social-icon social-linkedin">
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://easygoupe.org/article/{{$article->id}}" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                        <span>Linkedin</span>
                                    </a>
                                </div>
                                <div class="social-icon social-twitter">
                                    <a href="https://twitter.com/share?url=https://easygoupe.org/article/{{$article->id}}&amp;text=Je%20partage%20avec%20vous%20un%20article%20pris%20sur%20le%20site%20de%20EasyGroupe&amp;hashtags=EasyGroup" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="author-wrap">
                            <div class="author-thumb">
                            @if($article->administrateur->profil != null) 
                                <img src="{{ asset('storage/' . $article->administrateur->profil) }}" class="avatar avatar-sm me-3" alt="user1">
                            @else
                                <img src="{{ asset("admin/img/team-2.jpg")}}" class="" alt="user1">
                            @endif
                            </div>
                            <div class="author-content">
                                <h4 class="author-name">{{ $article->administrateur->nom }} {{ $article->administrateur->prenom }}</h4>
                                {{-- <p>Anim eligendi error magnis. Pretium fugiat cubilia ullamcorper adipisci, lobortis
                                    repellendus sit culpa maiores!</p> --}}

                            </div>
                        </div>
                        <!-- post comment html -->
                        <div id="commentArea" class="comment-area">
                            <h3 class="comment-title">Commentaires</h3>
                            <div class="comment-area-inner">
                                {{-- <ol>
                                    <li>
                                        <figure class="comment-thumb">
                                            <img src="assets/images/img16.jpg" alt="">
                                        </figure>
                                        <div class="comment-content">
                                            <div class="comment-header">
                                                <h5 class="author-name">Tom Sawyer</h5>
                                                <span class="post-on">Jana 10 2020</span>
                                            </div>
                                            <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam
                                                quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                            <a href="#replyComment" class="reply"><i class="fas fa-reply"></i>Repondre</a>
                                        </div>
                                    </li>
                                    <li>
                                        <ol>
                                            <li>
                                                <figure class="comment-thumb">
                                                    <img src="assets/images/img17.jpg" alt="">
                                                </figure>
                                                <div class="comment-content">
                                                    <div class="comment-header">
                                                        <h5 class="author-name">John Doe</h5>
                                                        <span class="post-on">Jana 10 2020</span>
                                                    </div>
                                                    <p>Officia amet posuere voluptates, mollit montes eaque accusamus
                                                        laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                                    <a href="#replyComment" class="reply"><i
                                                            class="fas fa-reply"></i>Repondre</a>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol> --}}

                                @forelse ($article->commentaires as $commentaire)
                                    <ol>
                                        <li>
                                            <figure class="comment-thumb">
                                                <img src="assets/images/img18.jpg" alt="">
                                            </figure>
                                            <div class="comment-content">
                                                <div class="comment-header">
                                                    <h5 class="author-name">{{ $commentaire->nom }}
                                                        {{ $commentaire->prenom }}</h5>
                                                    <span class="post-on">{{ $commentaire->created_at }}</span>
                                                </div>
                                                <p>{{ $commentaire->description }}</p>
                                                <a href="#replyComment" class="reply"><i
                                                        class="fas fa-reply"></i>Repondre</a>
                                            </div>
                                        </li>
                                    </ol>
                                @empty
                                    Aucun commentaire pour le moment
                                @endforelse

                            </div>
                            <div id="replyComment" class="comment-form-wrap">
                                <h3 class="comment-title">Laissez un commentaire</h3>
                                <p>Votre e-mail ne sera pas divulgué.</p>
                                <form class="comment-form" method="POST" action="{{ route('commentaire.store') }}">
                                    @csrf
                                    @method('post')
                                    <p class="full-width">
                                        <label></label>
                                        <textarea rows="9" name="description" placeholder="Votre commentaire"></textarea>
                                        <input type="hidden" name="article" value="{{ $article->id }}" />
                                    </p>
                                    <p>
                                        <label>Nom *</label>
                                        <input type="text" name="nom">
                                    </p>
                                    <p>
                                        <label>Email *</label>
                                        <input type="email" name="email">
                                    </p>
                                    {{-- <p>
                                        <label>Website</label>
                                        <input type="text" name="web">
                                    </p> --}}

                                    <p class="full-width">
                                        <input type="submit" name="submit" value="Poster">
                                    </p>
                                </form>
                            </div>
                            <!-- post navigation html -->
                        </div>
                        <!-- blog post item html end -->
                    </div>
                    <div class="col-lg-4 secondary">
                        <div class="sidebar">
                            <aside class="widget widget_latest_post widget-post-thumb">
                                <h3 class="widget-title">Posts Récents</h3>
                                <ul>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($articles as $art)
                                        @if ($i < 2)
                                            <li>
                                                <figure class="post-thumb">
                                                    <a href="{{ route('article', $art->id) }}"><img
                                                            src="{{ asset('storage/' . $art->poster) }}"
                                                            alt=""></a>
                                                </figure>
                                                <div class="post-content">
                                                    <h5>
                                                        <a
                                                            href="{{ route('article', $art->id) }}">{{ $art->titre }}</a>
                                                    </h5>
                                                    <div class="entry-meta">
                                                        <span class="posted-on">
                                                            <a
                                                                href="{{ route('article', $art->id) }}">{{ $art->created_at }}</a>
                                                        </span>
                                                        <span class="comments-link">
                                                            <a href="{{ route('article', $art->id) }}">No Comments</a>
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
                            </aside>
                        </div>
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
