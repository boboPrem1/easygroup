@extends('layouts.default')

@section('content')
<!-- home banner section html start -->
<section class="home-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex flex-wrap align-items-center">
                <div class="banner-content">
                    <h3>Demain s’invente avec vous !</h3>
                    <div class="banner-text">
                        <p> L'aventure commence en 2017 sous le nom "EasyCrypto", née d’une réelle passion pour la
                            blockchain et les crypto-actifs.</br></br>
                            Au départ, le concept était de proposer un espace éducatif pour la communauté
                            Francophone Africaine passionnée de blockchain et de crypto-actifs afin de partager et
                            d’échanger autour de ces sujets.</br></br>
                        </p>
                    </div>
                    <div class="banner-button">
                        <a href="{{ route('about') }}" class="button-round">Lire Plus</a>
                        <a href="{{ route('contact') }}" class="outline-round outline-round-white">DECOUVRIR</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex flex-wrap align-items-end">
                <figure class="banner-img">
                    <img src="{{ asset('assets/images/banner-img1.png') }}" alt="">
                </figure>
            </div>
        </div>
    </div>
    <div class="banner-pattern" style="background-image: url(assets/images/banner-pattern1.png);"></div>
</section>

<!-- home banner section html end -->
<!-- home about section html start -->
<section class="home-about bg-white">
    <div class="container">
        <div class="about-head-wrap">
            <div class="section-head-outer">
                <div class="section-head">
                    <div class="title-divider"></div>
                    <h2 class="section-title">Immergez-vous dans <span class="primary-color">notre monde</span>
                    </h2>
                </div>
            </div>
            <div class="about-dec">
                <p>A EASY GROUPE nous concilions les fortes contraintes de l'environnement cryptographique et
                    les
                    enjeux actuels,</br>pour faire aboutir vos projets et intentions </br> dans les meilleures
                    conditions possibles.</p>
            </div>
            <div class="exp-date-wrap">
                <div class="exp-date">
                    <h2>+5</h2>
                    <a href="{{ route('about') }}">
                        <h4>ANNEES D'EXPERIENCE</h4>
                    </a>
                </div>
            </div>
        </div>
        <!-- home service section html end -->
           <div class="title-square-icone-square">
                <div class="title-square">ACTUALITES CRYPTO</div>
                <div class="icone-in-square">
                    <li>
                        <a href="https://cutt.ly/easycrypto15" target="_blank">
                            <i class="fab fa-telegram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="www.twitter.com/easycrypto15/" target="_blank">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                </div>
            </div>
                <div class="high-box">
                    <div class="left-side-box">
                        @if ($lastArticle)
                            <div class="left-side-image-box">
                                <img src="{{ asset("storage/" . $lastArticle->poster) }}" alt="">
                            </div>
                            <div class="left-side-text-container">
                                <a href="{{ route('article', $lastArticle->id) }}">
                                    <div class="text-cont">{{ $lastArticle->titre }}</div>
                                </a>
                                
                            </div>
                        @else
                             <div class="big-image-text">Aucun article disponible pour l'instant</div>
                        @endif
                    </div>
                    <div class="right-side-box">
                        @php
                            $i = 0;
                        @endphp
                        
                        @forelse ($articles as $article)
                        @if ($i==1) 
                        <div class="right-side-container">
                            <div class="right-side-image">
                                 <img src="{{ asset("storage/" . $article->poster) }}" alt="">
                            </div>
                            <div class="right-side-text">
                                <a href="{{ route('article', $article->id) }}">
                                  <div class="concilier">{{ $article->titre }}</div>
                                </a>
                            </div>
                        </div>
                        @endif
                        @if ($i==2 || $i==3)
                        <div class="right-side-container">
                            <div class="right-side-image">
                                <img src="{{ asset("storage/" . $article->poster) }}" alt="">
                            </div>
                            <div class="right-side-text">
                                <a href="{{ route('article', $article->id) }}">
                                  <div class="concilier">{{ $article->titre }}</div>
                                </a>
                            </div>
                            
                        </div>
                       @endif

                        @php
                        $i++;
                        @endphp
                        @empty
                        @endforelse
                        <!--<div class="right-side-container">-->
                        <!--    <div class="right-side-image">-->
                        <!--        <img src="{{ asset('assets/images/imol.jpg') }}" alt="">-->
                        <!--    </div>-->
                        <!--    <div class="right-side-text">-->
                        <!--        <div class="concilier">Comment concilier lorem ipsum et orem arsedi forep lorenvo</div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>

    <div class="vplus">
        <a href="{{ route('blog') }}">
            <div class="vplus-button">
                <div class="tous-voir">Tous voir</div>
            </div>
        </a>
    </div>
        </div>
</section>

<!-- home about section html end -->
<!-- home service section html start -->
<section class="domaine-competence bg-light-grey">
    <div class="section-head text-center ">
        <div class="row">
            <div class="">
                <div class="title-divider"></div>
                <h2 class="section-title">Une Vue sur nos domaines de</h2>
                <span class="primary-color ">Compétences</span>
                <p class="title-paragraph">Apporter une réponse concrète, complète et durable en matière de finance
                    en agissant
                    sur les différentes composantes des systèmes numériques.</p>
            </div>
        </div>
    </div>

    <div class="rectangular-square-container">
        <div class="rectangular-square">
            <div class="box-content">
                <div class="box-icone-title">Web3</div>
                <div class="rectangular-square-text">De nombreux espoirs sont placés sur la Web3, en particulier en
                    ce qui concerne la
                    confidentialité
                    des utilisateurs et une meilleure sécurité en ligne. Le web 3.0 vient avec son lot
                    d’opportunités
                    pour les entreprises.</div>
            </div>
            <div class="icone-box">
                <i aria-hidden="true" class="icon icon-idea"></i>
            </div>
        </div>
        <div class="rectangular-square">
            <div class="box-content">
                <div class="box-icone-title">Comptoir des cryptomonnaies
                </div>
                <div class="rectangular-square-text">Le moyen le plus simple et le plus sûr pour d'acheter
                    et de vendre du bitcoin, de l'Ethereum et d'autres cryptomonnaies. Réalisez vos opérations à
                    distance comme en agence en toute sécurité.</div>
            </div>
            <div class="icone-box">
                <i aria-hidden="true" class="icon icon-Mechanic"></i>
            </div>
        </div>
        <!-- fermeture -->
        <div class="rectangular-square">
            <div class="box-content">
                <div class="box-icone-title">Marketing</div>
                <div class="rectangular-square-text">Nous aidons les entreprises grâce aux nouvelles techniques à
                    exister dans l’esprit de
                    leurs
                    prospects. Intégrer complètement le consommateur dans la stratégie marketing de la sorte
                    que
                    le
                    consommateur devienne un acteur actif.</div>
            </div>
            <div class="icone-box">
                <i aria-hidden="true" class="icon icon-Consultancy"></i>
            </div>
        </div>
        <div class="rectangular-square">
            <div class="box-content">
                <div class="box-icone-title">Prestations de </br>services</div>
                <div class="rectangular-square-text">Nous fournissons des prestations dans le commerce de gros pour
                    les entreprises et
                    commerçants</br>
                    grâce à nos partenaires établies un peu partout </br>dans le monde. Nos offres
                    sont sur
                    mesure.</div>
            </div>
            <div class="icone-box">
                <i aria-hidden="true" class="icon icon-Target"></i>
            </div>
        </div>
        <div class="rectangular-square">
            <div class="box-content">
                <div class="box-icone-title">E-commerce</div>
                <div class="rectangular-square-text">L’innovation a toujours été notre marque de fabrique, d’où la
                    nécessité de
                    s’adapter à des moyens de paiement plus intelligents. Nous sommes fiers d'être la première
                    boutique en ligne au TOGO compatible avec les cryptos.</div>
            </div>
            <div class="icone-box">
                <i aria-hidden="true" class="icon icon-speed"></i>
            </div>
        </div>
        <div class="rectangular-square">
            <div class="box-content">
                <div class="box-icone-title">Conseils
                </div>
                <div class="rectangular-square-text">Des prestations complètes pour optimiser et sécuriser votre
                    portefeuille, et ainsi vous
                    aider
                    à gérer vos différentes cryptos. Nous vous proposons de vous guider à investir selon
                    votre rythme.</div>
            </div>
            <div class="icone-box">
                <i aria-hidden="true" class="icon icon-graph-2"></i>
            </div>
        </div>
    </div>
</section>

<section class="home-client bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="section-head">
                    <div class="title-divider"></div>
                    <h2 class="section-title"> <span class="primary-color">Nos Partenaires</span>
                    </h2>
                    <p>Depuis sa création, Easygroupe s’attache à nouer et à développer des partenariats forts avec
                        différents fournisseurs de services et de solutions pour les entreprises, particuliers et
                        administrations.</br>
                        Ensemble, nous travaillons en synergie pour vous offrir les meilleurs services.</p>
                    <a href="about.html" class="button-round">Lire Plus</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="client-section">
                    <ul>
                        <li>
                            <figure class="client-img">
                                <img src="assets/images/clinet-img1.png" alt="">
                            </figure>
                        </li>
                        <li>
                            <figure class="client-img">
                                <img src="assets/images/clinet-img2.jpg" alt="">
                            </figure>
                        </li>
                        <li>
                            <figure class="client-img">
                                <img src="assets/images/clinet-img3.png" alt="">
                            </figure>
                        </li>
                        <li>
                            <figure class="client-img">
                                <img src="assets/images/binance.png" alt="">
                            </figure>
                        </li>
                        <li>
                            <figure class="client-img">
                                <img src="assets/images/orty.png" alt="">
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
<div style="display: none;" id="newsletter">
    <div class="news-letter-square">
        <div class="news-letter">
            <h3 class="hold-on">
                RECEVEZ GRATUITEMENT
            </h3>
            <p class="discount">
                <h4>Notre Guide de l'investissseur</h4>
            </p>
            <form action="{{ route('newsletter.store') }}" method="POST" class="form-news-letter">
                @csrf
                @method('post')
                <input type="email" name="email" id="email" placeholder="Votre adresse mail" size="23px">
                <buton type="submit" onclick="SubmitClose()" class="button-square"><i class="fab fa-telegram" aria-hidden="true"></i></buton>
            </form>
            <button onclick="ClosePopUp()" id="close">X</button>
        </div>

    </div>
</div>
@endsection

@section('home')
current-menu-item
@endsection
