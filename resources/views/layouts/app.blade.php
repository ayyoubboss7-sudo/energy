<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    
    <meta charset="UTF-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>@yield('title', 'ÉcoAides Canada | Aides à la rénovation énergétique')</title>



    
    <meta name="description" content="@yield('meta_description', 'Découvrez les aides à la rénovation énergétique au Québec et au Canada : programmes, conditions, montants et sources officielles.')">



    
    <meta name="theme-color" content="#123C32">



    {{-- Tailwind CSS --}}

    
    <script src="https://cdn.tailwindcss.com"></script>



    
    <script>
        tailwind.config = {

            theme: {

                extend: {

                    colors: {

                        forest: '#123C32',

                        green: '#287A58',

                        lime: '#D9F27E',

                        cream: '#F7F9F4',

                        ink: '#18251F',

                        muted: '#68756D'

                    },

                    fontFamily: {

                        sans: ['DM Sans', 'sans-serif'],

                        heading: ['Manrope', 'sans-serif']

                    },

                    boxShadow: {

                        soft: '0 12px 40px rgba(18, 60, 50, 0.08)'

                    }

                }

            }

        }
    </script>



    {{-- Typographie --}}

    
    <link rel="preconnect" href="https://fonts.googleapis.com">

    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght\@400;500;600;700&family=Manrope:wght\@400;500;600;700;800&display=swap"
        rel="stylesheet">



    <style>
        :root {

            --forest: #123C32;

            --green: #287A58;

            --lime: #D9F27E;

            --cream: #F7F9F4;

            --ink: #18251F;

            --muted: #68756D;

            --border: #E4EAE3;

        }



        html {

            scroll-behavior: smooth;

            scroll-padding-top: 100px;

        }



        body {

            margin: 0;

            font-family: 'DM Sans', sans-serif;

            color: var(--ink);

            background: #fff;

        }



        h1,
        h2,
        h3,
        h4 {

            font-family: 'Manrope', sans-serif;

        }



        a {

            text-decoration: none;

        }



        .site-container {

            width: min(1200px, calc(100% - 40px));

            margin-inline: auto;

        }



        /* Bandeau supérieur */



        .top-bar {

            background: var(--forest);

            color: white;

            font-size: 12px;

            line-height: 1.7;

        }



        .top-bar-inner {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 15px;

            padding-top: 9px;

            padding-bottom: 9px;

        }



        .top-bar strong {

            color: var(--lime);

        }



        .top-bar a {

            color: white;

            white-space: nowrap;

        }



        /* Navigation */



        .site-header {

            position: sticky;

            top: 0;

            z-index: 1000;

            background: rgba(255, 255, 255, .97);

            backdrop-filter: blur(14px);

            border-bottom: 1px solid var(--border);

        }



        .navbar {

            min-height: 82px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 24px;

        }



        .brand {

            display: inline-flex;

            align-items: center;

            gap: 11px;

            flex-shrink: 0;

            color: var(--forest);

        }



        .brand-icon {

            width: 45px;

            height: 45px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 14px;

            background: var(--forest);

            color: var(--lime);

        }



        .brand-title {

            display: block;

            font-family: 'Manrope', sans-serif;

            font-size: 17px;

            line-height: 1.3;

            font-weight: 800;

            letter-spacing: -.4px;

        }



        .brand-subtitle {

            display: block;

            margin-top: 3px;

            color: var(--muted);

            font-size: 9px;

            font-weight: 700;

            letter-spacing: .8px;

            text-transform: uppercase;

        }



        .desktop-nav {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 19px;

        }



        .nav-link {

            position: relative;

            padding: 12px 0;

            color: #46564C;

            font-size: 12px;

            font-weight: 700;

            white-space: nowrap;

            transition: color .2s ease;

        }



        .nav-link:hover,

        .nav-link.active {

            color: var(--green);

        }



        .nav-link.active::after {

            content: '';

            position: absolute;

            right: 0;

            bottom: 4px;

            left: 0;

            height: 2px;

            border-radius: 4px;

            background: var(--green);

        }



        .nav-cta {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 12px 15px;

            border-radius: 11px;

            background: var(--forest);

            color: white;

            font-size: 12px;

            font-weight: 700;

            white-space: nowrap;

            transition: background .2s ease;

        }



        .nav-cta:hover {

            background: var(--green);

            color: white;

        }



        .menu-toggle {

            display: none;

            width: 43px;

            height: 43px;

            align-items: center;

            justify-content: center;

            border: 1px solid var(--border);

            border-radius: 11px;

            background: white;

            color: var(--forest);

            cursor: pointer;

        }



        .mobile-menu {

            display: none;

            border-top: 1px solid var(--border);

            background: white;

            padding: 12px 0 20px;

        }



        .mobile-menu.open {

            display: block;

        }



        .mobile-menu-inner {

            display: flex;

            flex-direction: column;

            gap: 3px;

        }



        .mobile-link {

            display: block;

            padding: 12px 13px;

            border-radius: 9px;

            color: #46564C;

            font-size: 14px;

            font-weight: 600;

        }



        .mobile-link:hover,

        .mobile-link.active {

            background: var(--cream);

            color: var(--green);

        }



        .mobile-cta {

            margin-top: 8px;

            text-align: center;

        }



        /* Bandeau d'indépendance */



        .independence-wrap {

            padding-top: 22px;

        }



        .independence-notice {

            display: flex;

            align-items: flex-start;

            gap: 12px;

            padding: 15px 17px;

            border: 1px solid #DCE8C1;

            border-radius: 13px;

            background: #F7FAED;

            color: #43523C;

            font-size: 12px;

            line-height: 1.8;

        }



        .notice-icon {

            display: flex;

            flex-shrink: 0;

            align-items: center;

            justify-content: center;

            width: 31px;

            height: 31px;

            border-radius: 9px;

            background: #E8F2C7;

            color: var(--forest);

        }



        .independence-notice strong {

            color: var(--forest);

        }



        /* Zone principale */



        main {

            min-height: 55vh;

        }



        /* Pied de page */



        .site-footer {

            margin-top: 75px;

            background: var(--forest);

            color: white;

        }



        .footer-main {

            display: grid;

            grid-template-columns: 1.4fr 1fr 1fr 1fr;

            gap: 38px;

            padding-top: 55px;

            padding-bottom: 45px;

        }



        .footer-description {

            max-width: 300px;

            margin-top: 17px;

            color: rgba(255, 255, 255, .72);

            font-size: 12px;

            line-height: 1.9;

        }



        .footer-heading {

            margin: 0 0 18px;

            color: var(--lime);

            font-family: 'Manrope', sans-serif;

            font-size: 13px;

            font-weight: 800;

        }



        .footer-links {

            display: flex;

            flex-direction: column;

            gap: 12px;

        }



        .footer-links a {

            color: rgba(255, 255, 255, .76);

            font-size: 12px;

            line-height: 1.7;

            transition: color .2s ease;

        }



        .footer-links a:hover {

            color: var(--lime);

        }



        .footer-bottom {

            border-top: 1px solid rgba(255, 255, 255, .14);

        }



        .footer-bottom-inner {

            display: flex;

            justify-content: space-between;

            gap: 25px;

            padding-top: 21px;

            padding-bottom: 21px;

            color: rgba(255, 255, 255, .62);

            font-size: 11px;

            line-height: 1.8;

        }



        .footer-bottom-inner p {

            margin: 0;

        }



        .footer-disclaimer {

            max-width: 560px;

            text-align: right;

        }



        .back-to-top {

            position: fixed;

            right: 20px;

            bottom: 20px;

            z-index: 900;

            display: flex;

            align-items: center;

            justify-content: center;

            width: 43px;

            height: 43px;

            border: 1px solid var(--border);

            border-radius: 13px;

            background: white;

            color: var(--forest);

            box-shadow: 0 8px 25px rgba(18, 60, 50, .12);

        }



        .back-to-top:hover {

            background: var(--cream);

        }



        @media (max-width: 1150px) {

            .desktop-nav {

                gap: 12px;

            }



            .nav-link {

                font-size: 11px;

            }



            .brand-title {

                font-size: 15px;

            }



            .nav-cta {

                padding: 11px;

                font-size: 11px;

            }

        }



        @media (max-width: 980px) {

            .desktop-nav,

            .desktop-cta {

                display: none;

            }



            .menu-toggle {

                display: flex;

            }



            .footer-main {

                grid-template-columns: repeat(2, minmax(0, 1fr));

                gap: 35px;

            }

        }



        @media (max-width: 600px) {

            .site-container {

                width: calc(100% - 30px);

            }



            .top-bar-inner {

                align-items: flex-start;

                flex-direction: column;

                gap: 3px;

            }



            .navbar {

                min-height: 72px;

            }



            .brand-icon {

                width: 41px;

                height: 41px;

            }



            .brand-title {

                font-size: 15px;

            }



            .brand-subtitle {

                font-size: 8px;

            }



            .independence-notice {

                padding: 12px;

                font-size: 11px;

            }



            .footer-main {

                grid-template-columns: 1fr;

                gap: 29px;

                padding-top: 40px;

                padding-bottom: 35px;

            }



            .footer-bottom-inner {

                flex-direction: column;

                gap: 10px;

            }



            .footer-disclaimer {

                text-align: left;

            }



            .site-footer {

                margin-top: 50px;

            }

        }



        @media (prefers-reduced-motion: reduce) {

            html {

                scroll-behavior: auto;

            }



            *,

            *::before,

            *::after {

                scroll-behavior: auto !important;

                transition-duration: .01ms !important;

            }

        }
    </style>



    @stack('styles')

</head>



<body class="bg-white antialiased">



    {{-- BANDEAU SUPÉRIEUR --}}

    <div class="top-bar">

        <div class="site-container top-bar-inner">

            <p>

                <strong>Portail indépendant :</strong>

                les aides sont accordées par les organismes responsables.

                </p>



            <a href="{{ url('/methodologie') }}">

                Comment vérifions-nous les informations ?

                </a>

            </div>

        </div>



    {{-- NAVIGATION PRINCIPALE --}}

    <header class="site-header">

        <div class="site-container">

            <nav class="navbar" aria-label="Navigation principale">



                {{-- IDENTITÉ DU PORTAIL --}}

                <a href="{{ url('/') }}" class="brand" aria-label="ÉcoAides Canada - Accueil">

                    <span class="brand-icon" aria-hidden="true">

                        <svg width="26" height="26" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor"
                            stroke-width="1.7" stroke-linecap="round"
                            stroke-linejoin="round">

                            
                            <path d="M12 21c-4-2-7-5.5-7-10V5l7-3 7 3v6c0 4.5-3 8-7 10Z" />

                            
                            <path d="M8 14c1-4 3-6 8-7-1 4-3 7-8 7Z" />

                            
                            <path d="M8 17c1-2 2.5-3.5 5-5" />

                            
                        </svg>

                        </span>



                    <span>

                        <span class="brand-title">ÉcoAides Canada</span>

                        <span class="brand-subtitle">Rénovation énergétique</span>

                        </span>

                    </a>



                {{-- LIENS DES 9 PAGES DU CONTENU --}}

                <div class="desktop-nav">

                    <a href="{{ url('/') }}"
                        class="nav-link {{ request()->is('/') ? 'active' : '' }}">

                        Accueil

                        </a>



                    <a href="{{ url('/quebec') }}"
                        class="nav-link {{ request()->is('quebec') ? 'active' : '' }}">

                        Québec

                        </a>



                    <a href="{{ url('/thermopompes') }}"
                        class="nav-link {{ request()->is('thermopompes') ? 'active' : '' }}">

                        Thermopompes

                        </a>



                    <a href="{{ url('/isolation') }}"
                        class="nav-link {{ request()->is('isolation') ? 'active' : '' }}">

                        Isolation

                        </a>



                    <a href="{{ url('/fenetres-portes') }}"
                        class="nav-link {{ request()->is('fenetres-portes') ? 'active' : '' }}">

                        Fenêtres et portes

                        </a>



                    <a href="{{ url('/faibles-revenus') }}"
                        class="nav-link {{ request()->is('faibles-revenus') ? 'active' : '' }}">

                        Aides aux ménages

                        </a>

                    
                    <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                        Contact
                    </a>
                </div>



                <a href="{{ url('/sources-officielles') }}"
                    class="nav-cta desktop-cta">

                    Sources officielles

                    <svg width="15" height="15" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor"                          stroke-width="2"
                        stroke-linecap="round"                          stroke-linejoin="round" aria-hidden="true">

                        
                        <path d="M7 17 17 7M7 7h10v10" />

                        
                    </svg>

                    </a>



                {{-- BOUTON DU MENU MOBILE --}}

                <button type="button"                         id="menu-toggle"
                    class="menu-toggle"                         aria-label="Ouvrir le menu"
                    aria-controls="mobile-menu"                         aria-expanded="false">



                    <svg id="menu-open-icon" width="23" height="23"
                        viewBox="0 0 24 24" fill="none"                          stroke="currentColor"
                        stroke-width="2"                          stroke-linecap="round" aria-hidden="true">

                        
                        <path d="M4 6h16M4 12h16M4 18h16" />

                        
                    </svg>



                    <svg id="menu-close-icon" width="23" height="23"
                        viewBox="0 0 24 24" fill="none"                          stroke="currentColor"
                        stroke-width="2"                          stroke-linecap="round" aria-hidden="true"
                        style="display:none">

                        
                        <path d="m18 6-12 12M6 6l12 12" />

                        
                    </svg>

                    </button>



                </nav>

            </div>



        {{-- NAVIGATION MOBILE --}}

        <div class="mobile-menu" id="mobile-menu">

            <div class="site-container mobile-menu-inner">



                <a href="{{ url('/') }}"
                    class="mobile-link {{ request()->is('/') ? 'active' : '' }}">

                    Accueil

                    </a>



                <a href="{{ url('/quebec') }}"
                    class="mobile-link {{ request()->is('quebec') ? 'active' : '' }}">

                    Aides au Québec

                    </a>



                <a href="{{ url('/thermopompes') }}"
                    class="mobile-link {{ request()->is('thermopompes') ? 'active' : '' }}">

                    Aides pour les thermopompes

                    </a>



                <a href="{{ url('/isolation') }}"
                    class="mobile-link {{ request()->is('isolation') ? 'active' : '' }}">

                    Isolation et étanchéité

                    </a>



                <a href="{{ url('/fenetres-portes') }}"
                    class="mobile-link {{ request()->is('fenetres-portes') ? 'active' : '' }}">

                    Fenêtres et portes

                    </a>



                <a href="{{ url('/faibles-revenus') }}"
                    class="mobile-link {{ request()->is('faibles-revenus') ? 'active' : '' }}">

                    Ménages à faible revenu

                    </a>



                <a href="{{ url('/methodologie') }}"
                    class="mobile-link {{ request()->is('methodologie') ? 'active' : '' }}">

                    Méthodologie

                    </a>



                <a href="{{ url('/sources-officielles') }}"
                    class="mobile-link {{ request()->is('sources-officielles') ? 'active' : '' }}">

                    Sources officielles

                    </a>



                <a href="{{ url('/contact') }}"
                    class="mobile-link {{ request()->is('contact') ? 'active' : '' }}">

                    Contact

                    </a>



                <a href="{{ url('/sources-officielles') }}"
                    class="nav-cta mobile-cta">

                    Consulter les sources officielles

                    </a>



                </div>

            </div>

        </header>



    {{-- AVERTISSEMENT D'INDÉPENDANCE --}}

    <div class="site-container independence-wrap">

        <aside class="independence-notice" aria-label="Avertissement d'indépendance">

            <span class="notice-icon" aria-hidden="true">

                <svg width="18" height="18" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor"                      stroke-width="2"
                    stroke-linecap="round"                      stroke-linejoin="round">

                    
                    <path d="M12 9v4" />

                    
                    <path d="M12 17h.01" />

                    
                    <path d="M10.3 3.9 2.6 17.2A2 2 0 0 0 4.3 20h15.4a2 2 0 0 0 1.7-2.8L13.7 3.9a2 2 0 0 0-3.4 0Z" />

                    
                </svg>

                </span>



            <div>

                <strong>Un portail d'information indépendant.</strong>

                ÉcoAides Canada n'est ni un site gouvernemental ni un organisme

                chargé de traiter les demandes de subvention. Nous ne garantissons

                aucune aide et ne demandons aucun paiement pour accéder aux

                informations. Vérifiez toujours les conditions auprès des sources

                officielles avant d'entreprendre des travaux.

                </div>

            </aside>

        </div>



    {{-- CONTENU DE LA PAGE --}}

    <main id="main-content">

        @yield('content')

        </main>



    {{-- PIED DE PAGE --}}

    <footer class="site-footer">

        <div class="site-container footer-main">



            {{-- PRÉSENTATION --}}

            <div>

                <a href="{{ url('/') }}" class="brand" style="color:white">

                    <span class="brand-icon" aria-hidden="true">

                        <svg width="25" height="25" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor"
                            stroke-width="1.7" stroke-linecap="round"
                            stroke-linejoin="round">

                            
                            <path d="M12 21c-4-2-7-5.5-7-10V5l7-3 7 3v6c0 4.5-3 8-7 10Z" />

                            
                            <path d="M8 14c1-4 3-6 8-7-1 4-3 7-8 7Z" />

                            
                        </svg>

                        </span>



                    <span>

                        <span class="brand-title" style="color:white">

                            ÉcoAides Canada

                            </span>

                        <span class="brand-subtitle" style="color:rgba(255,255,255,.6)">

                            Portail d'information

                            </span>

                        </span>

                    </a>



                <p class="footer-description">

                    Comprendre les aides à la rénovation énergétique au Québec

                    et au Canada, connaître les conditions des programmes et

                    retrouver les sources officielles.

                    </p>

                </div>



            {{-- PAGES THÉMATIQUES --}}

            <div>

                <h2 class="footer-heading">Les aides</h2>



                <div class="footer-links">

                    <a href="{{ url('/quebec') }}">Programmes au Québec</a>

                    <a href="{{ url('/thermopompes') }}">Thermopompes</a>

                    <a href="{{ url('/isolation') }}">Isolation et étanchéité</a>

                    <a href="{{ url('/fenetres-portes') }}">Fenêtres et portes</a>

                    <a href="{{ url('/faibles-revenus') }}">Ménages à faible revenu</a>

                    </div>

                </div>



            {{-- FIABILITÉ --}}

            <div>

                <h2 class="footer-heading">Fiabilité</h2>



                <div class="footer-links">

                    <a href="{{ url('/methodologie') }}">Notre méthodologie</a>

                    <a href="{{ url('/sources-officielles') }}">Sources officielles</a>

                    <a href="{{ url('/contact') }}">Nous contacter</a>

                    </div>

                </div>



            {{-- INFORMATIONS LÉGALES --}}

            <div>

                <h2 class="footer-heading">Informations légales</h2>



                <div class="footer-links">

                    <a href="{{ url('/mentions-legales') }}">Mentions légales</a>

                    <a href="{{ url('/confidentialite') }}">Confidentialité</a>

                    <a href="{{ url('/divulgation-publicitaire') }}">

                        Publicité et affiliation

                        </a>

                    </div>

                </div>



            </div>



        {{-- COPYRIGHT ET AVERTISSEMENT --}}

        <div class="footer-bottom">

            <div class="site-container footer-bottom-inner">

                <p>

                    © {{ date('Y') }} ÉcoAides Canada. Tous droits réservés.

                    </p>



                <p class="footer-disclaimer">

                    Les statuts, montants et conditions peuvent changer.

                    Consultez les organismes responsables avant de prendre

                    une décision ou d'engager des dépenses.

                    </p>

                </div>

            </div>

        </footer>



    {{-- RETOUR EN HAUT --}}

    <a href="#main-content"        class="back-to-top"        aria-label="Retour en haut de la page">



        <svg width="20" height="20" viewBox="0 0 24 24"              fill="none"
            stroke="currentColor"              stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" aria-hidden="true">

            
            <path d="m18 15-6-6-6 6" />

            
        </svg>

        </a>



    {{-- JAVASCRIPT DU MENU MOBILE --}}

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const toggle = document.getElementById('menu-toggle');

            const menu = document.getElementById('mobile-menu');

            const openIcon = document.getElementById('menu-open-icon');

            const closeIcon = document.getElementById('menu-close-icon');



            if (!toggle || !menu) {

                return;

            }



            toggle.addEventListener('click', function() {

                const isOpen = menu.classList.toggle('open');



                toggle.setAttribute('aria-expanded', String(isOpen));

                toggle.setAttribute(

                    'aria-label',

                    isOpen ? 'Fermer le menu' : 'Ouvrir le menu'

                );



                openIcon.style.display = isOpen ? 'none' : 'block';

                closeIcon.style.display = isOpen ? 'block' : 'none';

            });



            menu.querySelectorAll('a').forEach(function(link) {

                link.addEventListener('click', function() {

                    menu.classList.remove('open');

                    toggle.setAttribute('aria-expanded', 'false');



                    openIcon.style.display = 'block';

                    closeIcon.style.display = 'none';

                });

            });



            window.addEventListener('resize', function() {

                if (window.innerWidth > 980) {

                    menu.classList.remove('open');

                    toggle.setAttribute('aria-expanded', 'false');



                    openIcon.style.display = 'block';

                    closeIcon.style.display = 'none';

                }

            });

        });
    </script>



    @stack('scripts')



</body>

</html>
