<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Diabe-APP – Votre compagnon santé au quotidien</title>

    <!-- ✅ SEO -->
    <meta name="description"
        content="Diabe-APP vous aide à mieux vivre avec le diabète : suivi glycémique, rappels, alimentation IG, activité physique, calcul IMC et conseils. Disponible sur iOS & Android.">
    <meta name="keywords"
        content="diabète, glycémie, suivi glycémique, journal glycémique, IMC, alimentation IG, rappels médicaments, santé, application diabète">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="author" content="Diabe-APP">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="theme-color" content="#22B573">

    <!-- ✅ Open Graph -->
    <meta property="og:title" content="Diabe-APP – Votre compagnon santé au quotidien">
    <meta property="og:description"
        content="Suivi glycémique, rappels, alimentation IG, activité physique et IMC : tout-en-un pour gérer votre diabète simplement. iOS & Android.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/icon.png">
    <meta property="og:locale" content="fr_FR">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&family=Saira:wght@100..900&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        :root {
            --diabe-green: #22B573;
            --diabe-purple: #7C4DFF;
            --diabe-pink: #E84393;
            --diabe-orange: #F59E0B;
            --theme-color: var(--diabe-green);
        }

        html {
            scroll-behavior: smooth;
        }

        :is(section, div)[id] {
            scroll-margin-top: 92px;
        }

        /* ===== MENU DESKTOP ===== */
        .diabe-header {
            position: sticky;
            top: 0;
            z-index: 999;
            background: rgba(255, 255, 255, .92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, .06);
        }

        .diabe-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 12px 0;
        }

        .diabe-left {
            display: flex;
            align-items: center;
            gap: 14px;
            min-width: 280px;
        }

        .diabe-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            color: #0b1220;
            white-space: nowrap;
        }

        .diabe-brand img {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            object-fit: cover;
        }

        .diabe-email {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            color: #0b1220;
            opacity: .85;
            white-space: nowrap;
        }

        .diabe-email i {
            color: var(--diabe-green);
        }

        .diabe-center {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .diabe-menu {
            display: flex;
            align-items: center;
            gap: 18px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .diabe-menu a {
            font-weight: 700;
            color: #0b1220;
            opacity: .9;
            padding: 8px 10px;
            border-radius: 10px;
        }

        .diabe-menu a:hover {
            opacity: 1;
            background: rgba(34, 181, 115, .10);
        }

        .diabe-right {
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: flex-end;
            min-width: 280px;
        }

        .diabe-burger {
            display: none;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            border: 1px solid rgba(0, 0, 0, .08);
            background: #fff;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 18px rgba(0, 0, 0, .06);
            cursor: pointer;
        }

        /* ===== RESPONSIVE MOBILE ===== */
        @media (max-width: 992px) {
            .diabe-left {
                min-width: auto;
            }

            .diabe-email {
                display: none;
            }

            .diabe-center {
                display: none;
            }

            .diabe-right {
                min-width: auto;
                gap: 8px;
            }

            /* Masquer les boutons desktop sur mobile */
            .diabe-right .th-btn {
                display: none !important;
            }

            /* Afficher uniquement le burger */
            .diabe-burger {
                display: inline-flex !important;
            }
        }

        /* ✅ FIX MENU MOBILE (plein écran + bouton X bien placé) */
        @media (max-width: 576px) {
            .th-menu-wrapper {
                position: fixed !important;
                inset: 0 !important;
                width: 100vw !important;
                height: 100vh !important;
                background: rgba(11, 18, 32, .62) !important;
                z-index: 9999 !important;
            }

            .th-menu-area {
                width: 100% !important;
                max-width: 100% !important;
                height: 100% !important;
                left: 0 !important;
                right: 0 !important;
                border: 0 !important;
                box-shadow: none !important;
                overflow-y: auto !important;
                padding-top: 86px !important;
            }

            .th-menu-area .th-menu-toggle {
                position: absolute !important;
                top: 16px !important;
                right: 16px !important;
                left: auto !important;
                margin: 0 !important;
                z-index: 5 !important;
            }

            .th-menu-area .mobile-logo {
                margin-top: -64px !important;
                margin-bottom: 18px !important;
            }

            .th-mobile-menu ul {
                padding-left: 0 !important;
            }
        }

        /* ===== BANNIÈRE INDICATEURS ===== */
        .stats-banner {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            padding: 40px 0;
            margin-bottom: 0;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            padding: 30px 20px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
        }

        .stat-card.loaded {
            animation: fadeInUp 0.6s ease forwards;
        }

        .stat-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .stat-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .stat-card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .stat-card:nth-child(4) {
            animation-delay: 0.4s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stat-number {
            font-size: 48px;
            font-weight: 900;
            color: #fff;
            margin: 0 0 8px 0;
            font-family: 'Outfit', sans-serif;
        }

        .stat-label {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 600;
            margin: 0;
        }

        @media (max-width: 768px) {
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .stat-number {
                font-size: 36px;
            }

            .stat-label {
                font-size: 14px;
            }
        }

        .hero-lead {
            opacity: .92;
            max-width: 560px;
            font-size: 16px;
            line-height: 1.7;
        }

        .testi-slider7 .slider-pagination,
        .hero-slider7 .slider-pagination {
            display: flex;
            justify-content: center;
            margin-top: 22px;
        }
    </style>
</head>

<body>

    <!-- ===== Mobile Menu (one-page) ===== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="#hero"><img src="assets/icon.png" alt="Diabe-APP" style="border-radius:12px;"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="#hero">Application</a></li>
                    <li><a href="#features">Fonctionnalités</a></li>
                    <li><a href="#testimonials">Témoignages</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#download">Télécharger</a></li>
                    <li><a href="#support">Soutenir</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ✅ MENU UNIQUE -->
    <header class="diabe-header">
        <div class="container">
            <div class="diabe-nav">

                <!-- Gauche -->
                <div class="diabe-left">
                    <a class="diabe-brand" href="#hero" aria-label="Diabe-APP">
                        <img src="assets/icon.png" alt="Diabe-APP">
                        <span>Diabe-APP</span>
                    </a>
                    <!-- <a class="diabe-email" href="mailto:contact@diabeapp.com">
            <i class="fa-solid fa-envelope"></i>
            <span>contact@diabeapp.com</span>
          </a> -->
                </div>

                <!-- Milieu -->
                <nav class="diabe-center" aria-label="Navigation principale">
                    <ul class="diabe-menu">
                        <li><a href="#hero">Application</a></li>
                        <li><a href="#features">Fonctionnalités</a></li>
                        <li><a href="#testimonials">Témoignages</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                </nav>

                <!-- Droite -->
                <div class="diabe-right">
                    <a href="#download" class="th-btn">
                        Télécharger <i class="fa-solid fa-download ms-2"></i>
                    </a>
                    <a href="#support" class="th-btn th-border2">
                        Soutenir <i class="fa-solid fa-heart ms-2"></i>
                    </a>

                    <button class="diabe-burger" data-open-mobile-menu aria-label="Ouvrir le menu">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <!-- Hero -->
    <div class="th-hero-wrapper hero-7 diabeapp-hero" id="hero">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-8">

                    <div class="swiper th-slider hero-slider7"
                        data-slider-options='{"effect":"fade","autoHeight":"true"}'>
                        <div class="swiper-wrapper">

                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="hero-inner">
                                    <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_7_1.jpg"></div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="hero-style7">
                                                <span class="sub-title" data-ani="slideinup"
                                                    data-ani-delay="0.2s">Bienvenue sur Diabe-App</span>
                                                <h3 data-ani="slideinup" data-ani-delay="0.4s">Mieux vivre avec le
                                                    diabète, au quotidien</h3>
                                                <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">
                                                    Suivi glycémique, rappels de traitement, ressources fiables et
                                                    outils pratiques – une expérience simple, claire et rassurante.
                                                </p>
                                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.8s">
                                                    <a href="#download" class="th-btn">Télécharger l'app <i
                                                            class="fa-solid fa-download ms-2"></i></a>
                                                    <a href="#features" class="th-btn th-border2">Découvrir les
                                                        fonctionnalités <i
                                                            class="fa-light fa-arrow-right-long ms-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hero-image" data-ani="slideinup" data-ani-delay="0.4s">
                                        <img src="assets/img/app/screens/rappel1.png" alt="Aperçu de l'application" />
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="hero-inner">
                                    <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_7_1.jpg"></div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="hero-style7">
                                                <span class="sub-title" data-ani="slideinup"
                                                    data-ani-delay="0.2s">Suivi & compréhension</span>
                                                <h3 data-ani="slideinup" data-ani-delay="0.4s">Une bibliothèque
                                                    d'articles clairs et fiables pour vous guider.</h3>
                                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.8s">
                                                    <a href="#blog-sec" class="th-btn">Voir les ressources <i
                                                            class="fa-solid fa-book-open ms-2"></i></a>
                                                    <a href="#faq" class="th-btn th-border2">Questions fréquentes
                                                        <i class="fa-light fa-arrow-right-long ms-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hero-image" data-ani="slideinup" data-ani-delay="0.4s">
                                        <img src="assets/img/app/screens/imc1.png" alt="Articles & guides" />
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="hero-inner">
                                    <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_7_1.jpg"></div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="hero-style7">
                                                <span class="sub-title" data-ani="slideinup"
                                                    data-ani-delay="0.2s">Simple & rassurant</span>
                                                <h3 data-ani="slideinup" data-ani-delay="0.4s">Des rappels, des outils
                                                    et des conseils concrets pour rester régulier et confiant.</h3>
                                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.8s">
                                                    <a href="#features" class="th-btn">Fonctionnalités <i
                                                            class="fa-solid fa-grid-2 ms-2"></i></a>
                                                    <a href="#support" class="th-btn th-border2">Soutenir le projet <i
                                                            class="fa-solid fa-heart ms-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hero-image" data-ani="slideinup" data-ani-delay="0.4s">
                                        <img src="assets/img/app/screens/tension1.png" alt="Rappels & outils" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="slider-controller">
                            <div class="slider-pagination"></div>
                        </div>
                    </div>

                </div>

                <!-- Right cards -->
                <div class="col-xl-4">
                    <div class="row gy-4">
                        <div class="col-xl-12 col-md-6">
                            <div class="hero-feature-card7 bg-smoke2">

                                <a href="contact" class="icon-btn" aria-label="Découvrir">
                                    <i class="fa-light fa-arrow-right-long"></i>
                                </a>
                                <p class="faq-text">
                                <h6> Vous avez des questions ? C'est par ici</h6>
                                Grâce à une information claire, accessible et indépendante, Diabe-App vous accompagne
                                dans une démarche de prévention et de bien-être durable.
                                </p>
                            </div>
                        </div>

                        <div class="col-xl-12 col-md-6">
                            <div class="hero-feature-card7 bg-smoke5">
                                <a href="contact" class="icon-btn" aria-label="Découvrir">
                                    <i class="fa-solid fa-heart ms-2"></i>
                                </a>

                                <h6>Soutenir l'application Diabe-App</h6>
                                <p class="faq-text">
                                    Votre générosité nous aide à améliorer Diabe-App, à promouvoir la prévention du
                                    diabète et à rendre l’information santé accessible à tous.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <br><br>

            <!-- Social -->
            <div class="social-links">
                <a href="https://www.instagram.com/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com/" aria-label="X"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>

        </div>
    </div>

    <!-- FEATURES -->
    <section class="diet-plan-area position-relative bg-fixed space overflow-hidden" id="features"
        data-bg-src="assets/img/bg/work_bg_1.jpg" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <span class="sub-title text-white">Fonctionnalités clés</span>
                        <h2 class="sec-title text-white">L'essentiel pour un suivi complet</h2>
                        <p class="text-white-50">Mesurez, analysez et adoptez de meilleurs réflexes avec une app claire
                            et simple.</p>
                    </div>
                </div>
            </div>

            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-md-6">
                    <div class="work-card">
                        <div class="box-icon"><i class="fa-solid fa-droplet"></i></div>
                        <div class="box-content">
                            <h3 class="box-title">Suivi Glycémique</h3>
                            <p class="box-text">Enregistrez vos valeurs, suivez vos moyennes et visualisez vos
                                tendances.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="work-card">
                        <div class="box-icon"><i class="fa-solid fa-chart-line"></i></div>
                        <div class="box-content">
                            <h3 class="box-title">Graphiques</h3>
                            <p class="box-text">Une vue claire (ex. 7 jours) pour mieux comprendre votre équilibre.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="work-card">
                        <div class="box-icon"><i class="fa-solid fa-bell"></i></div>
                        <div class="box-content">
                            <h3 class="box-title">Rappels</h3>
                            <p class="box-text">Programmez vos prises (matin/midi/soir/nuit) et personnalisés.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="work-card">
                        <div class="box-icon"><i class="fa-solid fa-apple-whole"></i></div>
                        <div class="box-content">
                            <h3 class="box-title">Alimentation (IG)</h3>
                            <p class="box-text">Recherchez un aliment et consultez IG, glucides et catégories.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="work-card">
                        <div class="box-icon"><i class="fa-solid fa-person-running"></i></div>
                        <div class="box-content">
                            <h3 class="box-title">Activité Physique</h3>
                            <p class="box-text">Avant / pendant / après l'exercice + gestion des situations d'urgence.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="work-card">
                        <div class="box-icon"><i class="fa-solid fa-calculator"></i></div>
                        <div class="box-content">
                            <h3 class="box-title">Calcul IMC</h3>
                            <p class="box-text">Calculez votre IMC et consultez un tableau d'interprétation simple.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Testimonials -->
    <section class="space bg-smoke2 overflow-hidden bg-auto" id="testimonials"
        data-bg-src="assets/img/bg/pattern_bg_9.png">
        <div class="shape-mockup d-xxl-block d-none testi-bg-shape7-1" data-top="0" data-right="0">
            <img src="assets/img/testimonial/testi_shape7_1.png" alt="img" />
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-7">
                    <div class="title-area text-center">
                        <span class="sub-title text-anime-style-2">Témoignages</span>
                        <h2 class="sec-title text-anime-style-3">
                            Ce que nos utilisateurs <span class="fw-normal">pensent de Diabe-APP</span>
                        </h2>
                        <p class="sec-text fs-18">Une expérience simple, intuitif et rassurante pour suivre sa santé au
                            quotidien.</p>
                    </div>
                </div>
            </div>

            <div class="swiper th-slider testi-slider7" id="testiSlide7"
                data-slider-options='{"autoHeight":"true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide" data-theme-color="#E7F6F4">
                        <div class="testi-card6">
                            <div class="box-quote"><i class="fa-solid fa-quote-left diabeapp-quote"></i></div>
                            <p class="box-text">« L'app m'aide à garder une routine simple : rappels, conseils et
                                articles courts. Je me sens plus sereine au quotidien. »</p>
                            <div class="box-img"><img src="assets/img/testimonial/testi_7_1.png" alt="Avatar" />
                            </div>
                            <h3 class="box-title">Sarah M.</h3>
                            <p class="box-desig">Utilisateur</p>
                            <div class="box-review-wrap">
                                4.9
                                <div class="box-review">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="box-profile"></div>
                        </div>
                    </div>

                    <div class="swiper-slide" data-theme-color="#EAF6E3">
                        <div class="testi-card6">
                            <div class="box-quote"><i class="fa-solid fa-quote-left diabeapp-quote"></i></div>
                            <p class="box-text">« Les articles sont super clairs. J'ai enfin compris des notions comme
                                l'IG, les hypos et comment gérer les repas au restaurant. »</p>
                            <div class="box-img"><img src="assets/img/testimonial/testi_7_2.png" alt="Avatar" />
                            </div>
                            <h3 class="box-title">Lucas P.</h3>
                            <p class="box-desig">Utilisateur</p>
                            <div class="box-review-wrap">
                                4.8
                                <div class="box-review">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="box-profile"></div>
                        </div>
                    </div>

                    <div class="swiper-slide" data-theme-color="#FFF2F2">
                        <div class="testi-card6">
                            <div class="box-quote"><i class="fa-solid fa-quote-left diabeapp-quote"></i></div>
                            <p class="box-text">« J'aime le côté "pratique". C'est rassurant d'avoir des repères et des
                                conseils simples quand on est en déplacement. »</p>
                            <div class="box-img"><img src="assets/img/testimonial/testi_7_3.png" alt="Avatar" />
                            </div>
                            <h3 class="box-title">Monika D.</h3>
                            <p class="box-desig">Utilisateur</p>
                            <div class="box-review-wrap">
                                4.9
                                <div class="box-review">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="box-profile"></div>
                        </div>
                    </div>

                </div>
                <div class="slider-pagination mb-0"></div>
            </div>

        </div>
    </section>

    <!-- ✅ FAQ : ID = faq (important pour le menu) -->
    <div class="faq-area overflow-hidden" id="faq">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-xl-6">
                    <div class="faq-img7">
                        <img src="assets/img/diet/faq_7.jpg" alt="FAQ Diabe-App" />
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="faq-area2 me-xxl-5 pe-xxl-5">
                        <div class="title-area mb-40">
                            <span class="sub-title text-anime-style-2">FAQ</span>
                            <h2 class="sec-title text-anime-style-3">Questions <span
                                    class="fw-normal">fréquentes</span></h2>
                        </div>

                        <div class="accordion-area accordion" id="faqAccordion">

                            <div class="accordion-card wow fadeInUp" data-wow-delay=".1s">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false"
                                        aria-controls="collapse-1">
                                        1. Diabe-App remplace-t-elle mon médecin ?
                                    </button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            Non. Diabe-App est un outil d'accompagnement (suivi, rappels, contenus
                                            éducatifs).
                                            Pour toute décision médicale, ajustement de traitement ou symptôme
                                            inhabituel, consultez un professionnel de santé.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-card active wow fadeInUp" data-wow-delay=".3s">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                        2. À qui s'adresse l'application ?
                                    </button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            L'application est destinée aussi bien aux personnes diabétiques (type 1,
                                            type 2, prédiabète, diabète gestationnel),
                                            qu'aux personnes non diabétiques souhaitant s'informer et adopter de bonnes
                                            habitudes pour prévenir le diabète.
                                            Elle est également utile aux proches désirant mieux comprendre et
                                            accompagner.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-card wow fadeInUp" data-wow-delay=".5s">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">
                                        3. Les contenus sont-ils adaptés et faciles à lire ?
                                    </button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            Oui : des articles courts (3–5 min) organisés par thèmes (prévention,
                                            nutrition, traitements, complications, etc.)
                                            avec des conseils pratiques accessibles à tous.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-card wow fadeInUp" data-wow-delay=".7s">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                        aria-controls="collapse-4">
                                        4. Puis-je utiliser l'app en voyage ?
                                    </button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            Oui. Diabe-App met l'accent sur des check-lists et conseils pratiques
                                            (préparer son traitement, alimentation équilibrée, activité physique, etc.).
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-card wow fadeInUp" data-wow-delay=".8s">
                                <div class="accordion-header" id="collapse-item-5">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                        aria-controls="collapse-5">
                                        5. Puis-je utiliser Diabe-App même si je ne suis pas diabétique ?
                                    </button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            Absolument. Diabe-App propose des contenus de prévention pour aider à
                                            adopter un mode de vie sain,
                                            réduire les risques de diabète et mieux comprendre cette maladie.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-card wow fadeInUp" data-wow-delay=".9s">
                                <div class="accordion-header" id="collapse-item-6">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false"
                                        aria-controls="collapse-6">
                                        6. Mes données sont-elles sécurisées ?
                                    </button>
                                </div>
                                <div id="collapse-6" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            Oui. La confidentialité est une priorité : vos informations personnelles
                                            sont protégées
                                            et ne sont jamais partagées sans votre consentement.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-card wow fadeInUp" data-wow-delay="1s">
                                <div class="accordion-header" id="collapse-item-7">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false"
                                        aria-controls="collapse-7">
                                        7. Comment soutenir le projet ?
                                    </button>
                                </div>
                                <div id="collapse-7" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            Vous pouvez partager Diabe-App autour de vous, envoyer vos retours ou faire
                                            un don de soutien.
                                            Chaque contribution aide à améliorer les contenus et fonctionnalités.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Blog -->
    <section class="positive-relative overflow-hidden space overflow-hidden" id="blog-sec">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-7">
                    <div class="title-area text-center">
                        <span class="sub-title sub-title2 text-anime-style-2">Ressources</span>
                        <h2 class="sec-title text-anime-style-3">Conseils & <span class="fw-normal">guides</span> pour
                            le quotidien</h2>
                        <p class="sec-text fs-18 wow fadeInUp">
                            Des contenus courts, concrets et actionnables : nutrition, traitements, prévention des
                            complications, bien-être et vie sociale.
                        </p>
                    </div>
                </div>
            </div>

            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider"
                    data-slider-options='{"autoHeight":true,"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="blog-card style3 wow fadeInUp">
                                <div class="box-img global-img">
                                    <img src="assets/img/app/articles/Index glycémique.jpg" alt="Article Diabe-App" />
                                </div>
                                <div class="box-content">
                                    <div class="blog-meta">
                                        <a href="#"><i class="fa-solid fa-user"></i>Équipe Diabe-App</a>
                                        <a href="#"><i class="fa-solid fa-book-open"></i>Lecture 4 min</a>
                                    </div>
                                    <h3 class="box-title"><a href="#features">Index glycémique : comprendre sans se
                                            compliquer</a></h3>
                                    <p class="box-text">IG, charge glycémique, astuces pour limiter les pics : le guide
                                        simple pour faire de meilleurs choix.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style3 wow fadeInUp">
                                <div class="box-img global-img">
                                    <img src="assets/img/app/articles/hypoglycemie.jpg" alt="Article Diabe-App" />
                                </div>
                                <div class="box-content">
                                    <div class="blog-meta">
                                        <a href="#"><i class="fa-solid fa-user"></i>Équipe Diabe-App</a>
                                        <a href="#"><i class="fa-solid fa-book-open"></i>Lecture 5 min</a>
                                    </div>
                                    <h3 class="box-title"><a href="#faq">Hypoglycémie : la règle du 15/15 et les
                                            bons réflexes</a></h3>
                                    <p class="box-text">Reconnaître, agir vite, prévenir : un rappel clair des étapes
                                        essentielles et du kit à garder sur soi.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style3 wow fadeInUp">
                                <div class="box-img global-img">
                                    <img src="assets/img/app/articles/voyager_traitement.jpg"
                                        alt="Article Diabe-App" />
                                </div>
                                <div class="box-content">
                                    <div class="blog-meta">
                                        <a href="#"><i class="fa-solid fa-user"></i>Équipe Diabe-App</a>
                                        <a href="#"><i class="fa-solid fa-book-open"></i>Lecture 4 min</a>
                                    </div>
                                    <h3 class="box-title"><a href="#features">Voyager avec son traitement : checklist
                                            indispensable</a></h3>
                                    <p class="box-text">Ordonnances, cabine, conservation, décalage horaire : préparer
                                        son départ pour voyager serein.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <button data-slider-prev="#blogSlider" class="slider-arrow slider-prev" aria-label="Précédent">
                    <i class="far fa-arrow-left"></i>
                </button>
                <button data-slider-next="#blogSlider" class="slider-arrow slider-next" aria-label="Suivant">
                    <i class="far fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- ✅ BANNIÈRE INDICATEURS -->
    <section class="stats-banner"
        style="
        background:linear-gradient(135deg,#184aae,#0b1936);
        padding:50px 0;
        ">

        <div class="stats-container"
            style="
        max-width:1200px;
        margin:auto;
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
        gap:20px;
        padding:0 20px;
        ">

            <!-- CARD -->
            <div class="stat-card"
                style="
        background:rgba(255,255,255,.06);
        border-radius:18px;
        padding:30px 20px;
        text-align:center;
        backdrop-filter:blur(10px);
        box-shadow:0 10px 30px rgba(0,0,0,.35);
        ">

                <h3 class="stat-number" data-count="10" data-format="kplus"
                    style="
              font-size:42px;
              margin:0;
              font-weight:900;
              background:linear-gradient(135deg,#22B573,#34D399,#16A34A);
              -webkit-background-clip:text;
              -webkit-text-fill-color:transparent;
            ">
                    0</h3>

                <p class="stat-label"
                    style="
        margin-top:10px;
        color:#cbd5e1;
        font-weight:600;
        ">
                    Utilisateurs
                </p>

            </div>

            <!-- CARD -->
            <div class="stat-card"
                style="background:rgba(255,255,255,.06);border-radius:18px;padding:30px 20px;text-align:center;backdrop-filter:blur(10px);box-shadow:0 10px 30px rgba(0,0,0,.35);">

                <h3 class="stat-number" data-count="4.8" data-format="score"
                    style="font-size:42px;margin:0;font-weight:900;background:linear-gradient(135deg,#22B573,#34D399,#16A34A);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">
                    0</h3>

                <p class="stat-label" style="margin-top:10px;color:#cbd5e1;font-weight:600;">
                    Note moyenne
                </p>

            </div>

            <!-- CARD -->
            <div class="stat-card"
                style="background:rgba(255,255,255,.06);border-radius:18px;padding:30px 20px;text-align:center;backdrop-filter:blur(10px);box-shadow:0 10px 30px rgba(0,0,0,.35);">

                <h3 class="stat-number" data-count="100" data-format="percent"
                    style="font-size:42px;margin:0;font-weight:900;background:linear-gradient(135deg,#22B573,#34D399,#16A34A);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">
                    0</h3>

                <p class="stat-label" style="margin-top:10px;color:#cbd5e1;font-weight:600;">
                    Simple à utiliser
                </p>

            </div>

            <!-- CARD -->
            <div class="stat-card"
                style="background:rgba(255,255,255,.06);border-radius:18px;padding:30px 20px;text-align:center;backdrop-filter:blur(10px);box-shadow:0 10px 30px rgba(0,0,0,.35);">

                <h3 class="stat-number" data-count="100" data-format="percent"
                    style="font-size:42px;margin:0;font-weight:900;background:linear-gradient(135deg,#22B573,#34D399,#16A34A);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">
                    0</h3>

                <p class="stat-label" style="margin-top:10px;color:#cbd5e1;font-weight:600;">
                    Suivi quotidien
                </p>

            </div>

        </div>
    </section>

    <!-- Footer / Download -->
    <footer class="footer-wrapper footer-layout2" id="download">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <div class="title-area mb-0 text-center text-lg-start">
                            <h4 class="sec-title text-white m-0">Téléchargez Diabe-App dès maintenant</h4>
                            <p class="text-white-50 mt-2 mb-0">Disponible sur Android & iOS</p>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="footer-top-btn">
                            <div class="btn-group justify-content-center justify-content-lg-end">
                                <a href="#" class="th-btn style3">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                        alt="Google Play"
                                        style="height: 40px; width: 140px; object-fit: contain; vertical-align: middle" />
                                    Télécharger
                                </a>
                                <a href="#" class="th-btn style3">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                                        alt="App Store"
                                        style="height: 40px; width: 140px; object-fit: contain; vertical-align: middle" />
                                    Télécharger
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container" id="support">
            <div class="row gy-2 justify-content-center justify-content-md-between align-items-center">
                <div class="col-md-7 col-lg-6 text-center text-md-start">
                    <div class="social-links">
                        <i class="fa-solid fa-envelope"
                            style="
                 background: linear-gradient(135deg,#22B573,#34D399,#16A34A);
                 -webkit-background-clip:text;
                 background-clip:text;
                 -webkit-text-fill-color:transparent;
                 display:inline-block;
               "></i>
                        <span class="title"> contact@diabeapp.com</span>

                        <a href="contact" target="_blank"> <i class="fas fa-phone"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <!-- <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a> -->
                    </div>
                </div>
                <div class="col-md-4 justify-content-center justify-content-lg-end text-center text-md-end">
                    <a href="#" class="th-btn style1">
                        Faire un don de soutien <i class="fa-light fa-heart mx-3"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text">
                            Copyright <i class="fal fa-copyright"></i> 2026
                            <a href="#hero">Diabe-App</a> - Designed by <i class="fa-solid fa-user-circle"></i>
                            Savio MILANDOU
                        </p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <div class="footer-links">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal"
                                        data-bs-target="#mentionsLegalesModal">Conditions d'utilisation</a></li>
                                <li><a href="#" data-bs-toggle="modal"
                                        data-bs-target="#confidentialiteModal">Politique de confidentialité</a></li>
                                <li><a href="#" data-bs-toggle="modal"
                                        data-bs-target="#cookiesModal">Cookies</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal Mentions Légales / Conditions d'utilisation -->
    <div class="modal fade" id="mentionsLegalesModal" tabindex="-1" aria-labelledby="mentionsLegalesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mentionsLegalesModalLabel">Mentions légales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <h6>Éditeur du site</h6>
                    <p>
                        <strong>Diabe-App</strong><br>
                        SASU<br>
                        SIRET : En cours d'immatriculation<br>
                        Siège social : Choisy-le-Roi, France<br>
                        Email : contact@diabeapp.com
                    </p>

                    <h6>Direction de la publication</h6>
                    <p>SavioTech</p>

                    <h6>Hébergement</h6>
                    <p>
                        <strong>Infomaniak Network SA</strong><br>
                        Rue Eugène-Marziano 25<br>
                        1227 Genève, Suisse<br>
                        <a href="https://www.infomaniak.com" target="_blank" rel="noopener">www.infomaniak.com</a>
                    </p>

                    <h6>Propriété intellectuelle</h6>
                    <p>L'ensemble du contenu de ce site (textes, images, logo) est la propriété exclusive de Diabe-App,
                        sauf mention contraire. Toute reproduction est interdite sans autorisation préalable.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Confidentialité -->
    <div class="modal fade" id="confidentialiteModal" tabindex="-1" aria-labelledby="confidentialiteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confidentialiteModalLabel">Politique de confidentialité</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <h6>Données collectées</h6>
                    <p>Lorsque vous utilisez notre formulaire de contact, nous collectons les informations suivantes :
                        nom et prénom, email, téléphone, profil (optionnel) et votre message. Ces données sont utilisées
                        uniquement pour répondre à votre demande.</p>

                    <h6>Utilisation des données</h6>
                    <p>Vos données personnelles ne sont jamais vendues, louées ou partagées avec des tiers. Elles sont
                        conservées uniquement le temps nécessaire au traitement de votre demande.</p>

                    <h6>Vos droits</h6>
                    <p>Conformément au RGPD, vous disposez d'un droit d'accès, de rectification et de suppression de vos
                        données. Pour exercer ces droits, contactez-nous à : <a
                            href="mailto:contact@diabeapp.com">contact@diabeapp.com</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cookies -->
    <div class="modal fade" id="cookiesModal" tabindex="-1" aria-labelledby="cookiesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cookiesModalLabel">Politique de cookies</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <h6>Utilisation des cookies</h6>
                    <p>Ce site n'utilise pas de cookies de tracking ni de cookies publicitaires. Seuls des cookies
                        techniques essentiels au fonctionnement du site peuvent être utilisés.</p>

                    <h6>Cookies techniques</h6>
                    <p>Les cookies techniques sont nécessaires au bon fonctionnement du site. Ils permettent notamment
                        de maintenir votre session active et de mémoriser vos préférences de navigation.</p>

                    <h6>Gestion des cookies</h6>
                    <p>Vous pouvez à tout moment configurer votre navigateur pour refuser les cookies. Cependant, cela
                        peut affecter certaines fonctionnalités du site.</p>

                    <h6>Durée de conservation</h6>
                    <p>Les cookies techniques sont conservés pour une durée maximale de 13 mois, conformément aux
                        recommandations de la CNIL.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919">
            </path>
        </svg>
    </div>

    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        // Animation des cartes statistiques + compteur (au chargement)
        window.addEventListener('load', function() {
            setTimeout(function() {
                const statCards = document.querySelectorAll('.stat-card');
                statCards.forEach(card => card.classList.add('loaded'));

                // ✅ Compteur jQuery robuste (évite conflits $)
                if (typeof jQuery !== "undefined") {
                    (function($) {
                        function formatValue(val, format) {
                            if (format === "kplus") return Math.round(val) + "K+";
                            if (format === "score") return val.toFixed(1) + "/5";
                            if (format === "percent") return Math.round(val) + "%";
                            return Math.round(val);
                        }

                        $(".stat-number").each(function(i) {
                            var $el = $(this);
                            var target = parseFloat($el.attr("data-count") || "0");
                            var format = $el.attr("data-format") || "";
                            var duration = 1400 + (i * 250);

                            // reset à chaque refresh
                            $el.text(formatValue(0, format));

                            $({
                                n: 0
                            }).animate({
                                n: target
                            }, {
                                duration: duration,
                                easing: "swing",
                                step: function() {
                                    $el.text(formatValue(this.n, format));
                                },
                                complete: function() {
                                    $el.text(formatValue(target, format));
                                }
                            });
                        });
                    })(jQuery);
                }

            }, 300);
        });

        // Menu mobile
        (function() {
            document.addEventListener('click', function(e) {
                const openBtn = e.target.closest('[data-open-mobile-menu]');
                if (!openBtn) return;

                const templateToggle = document.querySelector('.th-menu-wrapper .th-menu-toggle');
                if (templateToggle) templateToggle.click();
            });
        })();

        // Scroll animé
        (function() {
            const header = document.querySelector('.diabe-header');

            function getHeaderOffset() {
                if (!header) return 0;
                return header.getBoundingClientRect().height + 10;
            }

            function smoothScrollToEl(el) {
                const offset = getHeaderOffset();
                const top = window.pageYOffset + el.getBoundingClientRect().top - offset;
                window.scrollTo({
                    top,
                    behavior: 'smooth'
                });
            }

            document.addEventListener('click', function(e) {
                const link = e.target.closest('a[href^="#"]');
                if (!link) return;

                const hash = link.getAttribute('href');
                if (!hash || hash === '#') return;

                const id = hash.slice(1);
                const target = document.getElementById(id);
                if (!target) return;

                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();

                history.pushState(null, '', hash);
                smoothScrollToEl(target);

                const closeBtn = document.querySelector('.th-menu-area .th-menu-toggle');
                if (closeBtn && document.body.classList.contains('th-menu-open')) {
                    closeBtn.click();
                } else {
                    const wrapper = document.querySelector('.th-menu-wrapper');
                    if (wrapper && wrapper.classList.contains('open')) closeBtn?.click();
                }
            }, true);

            window.addEventListener('load', function() {
                if (location.hash && location.hash.length > 1) {
                    const id = location.hash.slice(1);
                    const target = document.getElementById(id);
                    if (target) setTimeout(() => smoothScrollToEl(target), 60);
                }
            });
        })();
    </script>

    <!-- <p class="faq-text">
                  <h5> Un projet 100% indépendant</h5>
                    Diabe-App ne reçoit aucun financement de marque, laboratoire ou fabricant.
                    Notre seul objectif est d’aider les utilisateurs à mieux comprendre le diabète et à adopter de bonnes habitudes pour la prévention et le bien-être.
                  </p> -->

</body>

</html>
