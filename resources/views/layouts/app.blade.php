<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ÉcoAides Canada | Aides à la rénovation énergétique')</title>

    <meta name="description"
          content="@yield('meta_description', 'Découvrez les aides à la rénovation énergétique au Québec et au Canada. Consultez les programmes, les conditions et les sources officielles.')">

    <meta name="theme-color" content="#123c32">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            color: #18251F;
        }

        h1, h2, h3 {
            font-family: 'Manrope', sans-serif;
        }

        .hero-bg {
            background:
                radial-gradient(ellipse at 85% 15%, rgba(217,242,126,.25), transparent 35%),
                linear-gradient(135deg, #F7F9F4 0%, #EDF4EB 100%);
        }

        .nav-link {
            transition: color .2s ease;
        }

        .nav-link:hover {
            color: #287A58;
        }

        .program-card {
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .program-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 45px rgba(18,60,50,.12);
        }

        .section-anchor {
            scroll-margin-top: 100px;
        }
    </style>
</head>

<body class="bg-white antialiased">

    {{-- NAVBAR --}}
    <header class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">

            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-forest text-lime">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 21c-4-2-7-5.5-7-10V5l7-3 7 3v6c0 4.5-3 8-7 10Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8 13c4 0 6-2 8-6-1 5-3 8-8 8"/>
                    </svg>
                </div>

                <div>
                    <span class="block font-heading text-lg font-extrabold tracking-tight text-forest">
                        ÉcoAides
                    </span>
                    <span class="-mt-1 block text-xs font-semibold tracking-widest text-muted">
                        CANADA
                    </span>
                </div>
            </a>

            <div class="hidden items-center gap-7 lg:flex">
                <a href="{{ url('/') }}" class="nav-link text-sm font-semibold text-forest">
                    Accueil
                </a>
                <a href="{{ url('/aides-par-province') }}" class="nav-link text-sm font-medium text-gray-600">
                    Aides par province
                </a>
                <a href="{{ url('/types-de-travaux') }}" class="nav-link text-sm font-medium text-gray-600">
                    Types de travaux
                </a>
                <a href="{{ url('/guides') }}" class="nav-link text-sm font-medium text-gray-600">
                    Guides
                </a>
            </div>

            <div class="hidden items-center gap-4 lg:flex">
                <div class="flex items-center gap-1 text-sm font-semibold">
                    <a href="{{ url('/') }}" class="rounded-lg bg-cream px-2.5 py-2 text-forest">FR</a>
                    <a href="{{ url('/en') }}" class="rounded-lg px-2.5 py-2 text-gray-500 hover:text-forest">EN</a>
                </div>

                <a href="#recherche"
                   class="rounded-xl bg-forest px-5 py-3 text-sm font-bold text-white transition hover:bg-green">
                    Explorer les aides
                </a>
            </div>

            <button id="menu-toggle"
                    type="button"
                    aria-label="Ouvrir le menu"
                    aria-expanded="false"
                    class="rounded-xl border border-gray-200 p-2.5 text-forest lg:hidden">
                <svg class="h-6 w-6" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
            </button>
        </nav>

        <div id="mobile-menu" class="hidden border-t border-gray-100 bg-white px-5 py-4 lg:hidden">
            <div class="flex flex-col gap-4">
                <a href="{{ url('/') }}" class="font-semibold text-forest">Accueil</a>
                <a href="{{ url('/aides-par-province') }}" class="text-gray-600">Aides par province</a>
                <a href="{{ url('/types-de-travaux') }}" class="text-gray-600">Types de travaux</a>
                <a href="{{ url('/guides') }}" class="text-gray-600">Guides pratiques</a>
                <div class="flex gap-4 border-t border-gray-100 pt-4">
                    <a href="{{ url('/') }}" class="font-bold text-forest">Français</a>
                    <a href="{{ url('/en') }}" class="text-gray-500">English</a>
                </div>
                <a href="#recherche" class="rounded-xl bg-forest px-5 py-3 text-center font-bold text-white">
                    Explorer les aides
                </a>
            </div>
        </div>
    </header>


    {{-- CONTENU DES PAGES --}}
    <main>
        @yield('content')
    </main>


    {{-- FOOTER --}}
    <footer class="bg-forest text-white">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 py-14 sm:grid-cols-2 lg:grid-cols-4 lg:px-8">

            <div class="sm:col-span-2 lg:col-span-1">
                <a href="{{ url('/') }}" class="mb-4 inline-flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-lime">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 21c-4-2-7-5.5-7-10V5l7-3 7 3v6c0 4.5-3 8-7 10Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8 13c4 0 6-2 8-6-1 5-3 8-8 8"/>
                        </svg>
                    </div>
                    <span class="font-heading text-xl font-extrabold">ÉcoAides Canada</span>
                </a>

                <p class="max-w-sm text-sm leading-7 text-white/70">
                    Un portail indépendant pour mieux comprendre les aides à la rénovation
                    énergétique au Québec et au Canada.
                </p>
            </div>

            <div>
                <h3 class="mb-5 font-bold text-lime">Explorer</h3>
                <ul class="space-y-3 text-sm text-white/75">
                    <li><a class="hover:text-white" href="{{ url('/aides-par-province') }}">Aides par province</a></li>
                    <li><a class="hover:text-white" href="{{ url('/aides-quebec') }}">Aides au Québec</a></li>
                    <li><a class="hover:text-white" href="{{ url('/thermopompes') }}">Thermopompes</a></li>
                    <li><a class="hover:text-white" href="{{ url('/types-de-travaux') }}">Types de travaux</a></li>
                </ul>
            </div>

            <div>
                <h3 class="mb-5 font-bold text-lime">Ressources</h3>
                <ul class="space-y-3 text-sm text-white/75">
                    <li><a class="hover:text-white" href="{{ url('/guides') }}">Guides pratiques</a></li>
                    <li><a class="hover:text-white" href="{{ url('/sources-officielles') }}">Sources officielles</a></li>
                    <li><a class="hover:text-white" href="{{ url('/methodologie') }}">Notre méthodologie</a></li>
                    <li><a class="hover:text-white" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="mb-5 font-bold text-lime">Informations légales</h3>
                <ul class="space-y-3 text-sm text-white/75">
                    <li><a class="hover:text-white" href="{{ url('/mentions-legales') }}">Mentions légales</a></li>
                    <li><a class="hover:text-white" href="{{ url('/confidentialite') }}">Confidentialité</a></li>
                    <li><a class="hover:text-white" href="{{ url('/divulgation-publicitaire') }}">Divulgation publicitaire</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-white/10">
            <div class="mx-auto flex max-w-7xl flex-col gap-4 px-5 py-6 text-xs leading-6 text-white/60 sm:flex-row sm:items-center sm:justify-between lg:px-8">
                <p>© {{ date('Y') }} ÉcoAides Canada. Tous droits réservés.</p>
                <p>
                    Site indépendant. Les informations doivent être vérifiées auprès des organismes officiels.
                </p>
            </div>
        </div>
    </footer>


    {{-- MENU MOBILE --}}
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.toggle('hidden');
                menuToggle.setAttribute('aria-expanded', String(!isHidden));
            });
        }
    </script>

</body>
</html>
```

---

## دابا خاصنا نزيدو Page d’accueil

الـ layout اللي فوق هو الهيكل المشترك بين الصفحات. باش يبان الموقع كامل، خاصنا نديرو صفحة Accueil فـ:

`resources/views/home.blade.php`

ونربطوها بـ `layouts.app` باستعمال `@extends('layouts.app')` و`@section('content')`.

**ملاحظة:** هاد الكود كيبني الواجهة الرئيسية المشتركة فقط؛ الروابط بحال `/guides` و`/aides-quebec` خاصها Routes وصفحات خاصة بها من بعد. استعملت Tailwind عبر CDN باش نبداو بسرعة، ومن بعد نقدروا ندمجوه بالطريقة الموصى بها فمشروع Laravel ديالنا.

