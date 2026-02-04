<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nous contacter - Diabe-APP</title>

    <!-- ✅ SEO -->
    <meta name="description" content="Contactez l'équipe Diabe-APP pour toute question ou suggestion.">
    <meta name="keywords" content="contact, diabe-app, diabète, questions, support">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="author" content="Diabe-APP">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="theme-color" content="#22B573">

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
    <link rel="stylesheet" href="assets/css/contact.css">
   
</head>

<body>

    <!-- ===== Mobile Menu - FIXED ===== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="home"><img src="assets/icon.png" alt="Diabe-APP" style="border-radius:12px;"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="home#hero">Application</a></li>
                    <li><a href="home#features">Fonctionnalités</a></li>
                    <li><a href="home#testimonials">Témoignages</a></li>
                    <li><a href="home#faq">FAQ</a></li>
                    <li><a href="home#download">Télécharger</a></li>
                    <li><a href="home#support">Soutenir</a></li>
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
                    <a class="diabe-brand" href="home" aria-label="Diabe-APP">
                        <img src="assets/icon.png" alt="Diabe-APP">
                        <span>Diabe-APP</span>
                    </a>
                </div>

                <!-- Milieu -->
                <nav class="diabe-center" aria-label="Navigation principale">
                    <ul class="diabe-menu">
                        <li><a href="home">Application</a></li>
                        <li><a href="home#features">Fonctionnalités</a></li>
                        <li><a href="home#testimonials">Témoignages</a></li>
                        <li><a href="home#faq">FAQ</a></li>
                    </ul>
                </nav>

                <!-- Droite -->
                <div class="diabe-right">
                    <a href="home#download" class="th-btn">
                        Télécharger <i class="fa-solid fa-download ms-2"></i>
                    </a>
                    <a href="#" class="th-btn th-border2" data-bs-toggle="modal" data-bs-target="#donationModal">
                        Soutenir <i class="fa-solid fa-heart ms-2"></i>
                    </a>

                    <button class="diabe-burger" data-open-mobile-menu aria-label="Ouvrir le menu">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Nous contacter</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home">Accueil</a></li>
                    <li>Nous contacter</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="space overflow-hidden" id="contact-sec">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4">
                    <div class="contact-media-wrap">
                        <div class="contact-media">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#donationModal">
                                <div class="icon-btn"><i class="fa-solid fa-heart"></i></div>
                            </a>
                            <div class="media-body">
                                <h5 class="box-title">Faire un don de soutien</h5>
                                <p class="box-text">Votre soutien nous aide à améliorer Diabe-App et à promouvoir la
                                    prévention du diabète.</p>
                            </div>
                        </div>
                        <div class="contact-media">
                            <div class="icon-btn"><i class="fa-solid fa-envelope"></i></div>
                            <div class="media-body">
                                <h5 class="box-title">Adresse Email </h5>
                                <p>Vous pouvez aussi nous écrire directement à </p>
                                <a href="mailto:contact@diabeapp.com">contact@diabeapp.com</a><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- ✅ Success Message -->
                    @if(session('success'))
                    <div class="alert-message alert-success">
                        ✅ <strong>{{ session('success') }}</strong>
                    </div>
                    @endif

                    <!-- ✅ Error Messages -->
                    @if($errors->any())
                    <div class="alert-message alert-error">
                        ❌ <strong>Erreur :</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                        @csrf
                        <h3 class="h4 mb-30 mt-n3">Vous avez des questions ? Contactez-nous</h3>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Nom complet *" value="{{ old('name') }}" required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="phone" id="phone"
                                    placeholder="Numéro de téléphone" value="{{ old('phone') }}" />
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Adresse e-mail *" value="{{ old('email') }}" required />
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-12">
                                <select name="profile" id="profile" class="form-select nice-select">
                                    <option value="" disabled {{ old('profile') ? '' : 'selected' }}>
                                        Sélectionnez votre profil</option>
                                    <option value="Utilisateur" {{ old('profile')=='Utilisateur' ? 'selected' : '' }}>
                                        Utilisateur</option>
                                    <option value="Organisme" {{ old('profile')=='Organisme' ? 'selected' : '' }}>
                                        Organisme</option>
                                    <option value="Donateur" {{ old('profile')=='Donateur' ? 'selected' : '' }}>
                                        Donateur</option>
                                    <option value="Autres" {{ old('profile')=='Autres' ? 'selected' : '' }}>Autres
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                    placeholder="Votre message *" required>{{ old('message') }}</textarea>
                                <i class="fal fa-comment"></i>
                            </div>
                            <div class="form-btn mt-20 col-12">
                                <button type="submit" class="th-btn">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                            display:inline-block;"></i>
                        <span class="title"> contact@diabeapp.com</span>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4 justify-content-center justify-content-lg-end text-center text-md-end">
                    <a href="#" class="th-btn style1" data-bs-toggle="modal" data-bs-target="#donationModal">
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
                            <a href="home">Diabe-App</a> - Designed by <i class="fa-solid fa-user-circle"></i>
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

    <!-- ✅ DONATION MODAL -->
    <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 2px solid var(--diabe-green);">
                    <h5 class="modal-title" id="donationModalLabel">
                        <i class="fa-solid fa-heart" style="color: var(--diabe-green); margin-right: 10px;"></i>
                        Soutenez Diabe-App
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <p style="text-align: center; margin-bottom: 25px; color: #555;">
                        Votre contribution nous aide à améliorer l'application et à promouvoir la prévention du diabète.
                    </p>

                    <!-- Montants prédéfinis -->
                    <div class="donation-options">
                        <div class="donation-option" data-amount="5">5€</div>
                        <div class="donation-option" data-amount="10">10€</div>
                        <div class="donation-option" data-amount="20">20€</div>
                        <div class="donation-option" data-amount="50">50€</div>
                    </div>

                    <!-- Montant personnalisé -->
                    <div class="custom-amount-input">
                        <label for="customAmount" style="font-weight: 600; margin-bottom: 8px; display: block;">
                            Ou choisissez un montant personnalisé :
                        </label>
                        <input type="number" id="customAmount" class="form-control" placeholder="Montant en €" min="1"
                            step="1">
                    </div>

                    <!-- Méthodes de paiement -->
                    <h6 style="margin-top: 25px; margin-bottom: 15px; font-weight: 700; text-align: center;">
                        Choisissez votre méthode de paiement :
                    </h6>
                    <div class="payment-methods">
                        <button class="payment-method-btn" id="paypalBtn">
                            <i class="fab fa-paypal" style="color: #0070ba;"></i>
                            PayPal
                        </button>
                        <button class="payment-method-btn" id="cardBtn">
                            <i class="fas fa-credit-card" style="color: var(--diabe-green);"></i>
                            Carte bancaire
                        </button>
                    </div>

                    <!-- Message de remerciement -->
                    <p style="text-align: center; font-size: 14px; color: #777; margin-top: 20px;">
                        🙏 Merci de votre générosité !
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Mentions Légales -->
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
                        données. Pour exercer ces droits, contactez-nous à : 
                            href="mailto:contact@diabeapp.com">contact@diabeapp.com</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cookies -->
    <div class="modal fade" id="cookiesModal" tabindex="-1" aria-labelledby="cookiesModalLabel" aria-hidden="true">
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
                style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919, 307.919;
                        stroke-dashoffset: 307.919;
                    ">
            </path>
        </svg>
    </div>

    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
     <script src="assets/js/contact.js"></script>
   <script src="https://js.stripe.com/v3/"></script>



</body>
</html>