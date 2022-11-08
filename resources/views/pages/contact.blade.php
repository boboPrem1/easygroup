@extends('layouts.default')

@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/banner-pattern1.png);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Contact</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner html end-->
    <!-- contact form html start -->
    <div class="contact-page-section">
        <div class="contact-form-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-detail-container">
                            <div class="section-heading">
                                <div class="title-divider"></div>
                                <h2 class="section-title">Joignez <span class="primary-color">Nous!</span></h2>
                                <p>Si vous souhaitez avoir plus d'informations sur l'une de nos offres, contactez-nous
                                    directement via appel,</br> Ou laissez-nous un message via le formulaire de contact,
                                    nous vous repondons dans les plus bref délai.</p>
                            </div>
                            <div class="contact-details-list">
                                <!-- <h3 class="primary-bg">50+ Branches Worldwide</h3> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-details">
                                            <h4>LOME</h4>
                                            <ul>
                                                <li>
                                                    <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                                    Agoè Minamadou
                                                </li>
                                                <li>
                                                    <a href="mailto:company@domain.com">
                                                        <i aria-hidden="true" class="fas fa-envelope-open-text"></i>
                                                        infos@easygroupe.org
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="tellto:22892227680">
                                                        <i aria-hidden="true" class="fas fa-phone-volume"></i>
                                                        (+228) 92227680
                                                    </a></br>
                                                    <a href="tellto:22898203002">
                                                        <i aria-hidden="true" class="fas fa-phone-volume"></i>
                                                        (+228) 98203002
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="toll-feee">
                                    <ul>
                                        <li>

                                            <a href="tellto:+22892227680"> (228) 92227680</a>
                                        </li>
                                        <li>
                                            <a href="mailto:infos@easygroupe.org">infos@easygroupe.org</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-from-wrap">
                            <form class="contact-from" method="POST" action="{{ route('message.store') }}">
                                @csrf
                                @method('post')
                                <p>
                                    <input type="text" name="nom" placeholder="Votre Nom*">
                                </p>
                                <p>
                                    <input type="email" name="email" placeholder="Votre adresse mail*">
                                </p>
                                <p>
                                    <input type="text" name="titre" placeholder="Titre*">
                                </p>
                                <p>
                                    <textarea rows="8" name="message" placeholder="Votre Message*"></textarea>
                                </p>
                                <p>
                                    <input type="submit" name="submit" value="Soumettre">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.285723709429!2d1.1989391!3d6.226008199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159b133cd63cb%3A0x6ad22c760c714502!2sMaison%20du%20Digital!5e0!3m2!1sfr!2sfr!4v1654454113751!5m2!1sfr!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- contact form html end -->
    @if (session()->has('message'))
        <div id="flash-msg" class="container position-absolute top-0 start-50 translate-middle-x pt-5 pt-md-3">
            <div class="row">
                <div class="col-10 col-md-6 mx-auto">
                    <div class="alert alert-success alert-dissmissible show fade" id="alertM">
                        <div class="p-1">
                            <p>{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (session()->has('error'))
        <div id="flash-msg" class="container position-absolute top-0 start-50 translate-middle-x pt-5 pt-md-3">
            <div class="row">
                <div class="col-10 col-md-6 mx-auto">
                    <div class="alert alert-danger alert-dissmissible show fade" id="alertM">
                        <div class="p-1">
                            <p>{{ session('error') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (!session()->has('message'))
        <div style=" " id="newsletter">
            <div class="news-letter-square">
                <div class="news-letter position-relative">
                    <h3 class="hold-on">
                        RECEVEZ GRATUITEMENT
                    </h3>
                    <p class="discount">
                    <h4>Notre Guide de l'investissseur</h4>
                    </p>
                    <form action="{{ route('newsletter.store') }}" method="POST" class="form-news-letter">
                        @csrf
                        @method('post')
                        <input type="email" name="email" id="email" placeholder="Votre adresse mail" size="20px">
                        <button type="submit" onclick="SubmitClose()" class="btn button-square my-auto"><i
                                class="fab fa-telegram" aria-hidden="true"></i></button>
                    </form>
                    <button onclick="ClosePopUp()" class="btn btn-outline btn-close position-absolute top-0 end-0 me-2 mt-2"
                        id="close"></button>
                </div>

            </div>
        </div>
    @endif
@endsection
