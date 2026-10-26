 @extends('layouts.app')

 @section('title', 'Aides à la rénovation énergétique au Canada et au Québec')

 @section('content')

     {{-- =========================
     HERO SECTION
========================= --}}
     <section class="relative overflow-hidden bg-cream">
         <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full bg-lime/20 blur-3xl"></div>
         <div class="absolute -bottom-24 -left-24 h-80 w-80 rounded-full bg-green/10 blur-3xl"></div>

         <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 lg:grid-cols-2 lg:px-10 lg:py-28">

             <div>
                 <div
                     class="mb-6 inline-flex items-center gap-2 rounded-full border border-green/20 bg-white px-4 py-2 text-sm font-semibold text-forest shadow-sm">
                     <span class="h-2 w-2 rounded-full bg-green"></span>
                     Portail indépendant d'information
                 </div>

                 <h1
                     class="max-w-2xl font-heading text-4xl font-extrabold leading-tight tracking-tight text-forest sm:text-5xl lg:text-6xl">
                     Trouvez les aides pour
                     <span class="relative inline-block">
                         rénover votre logement
                         <span class="absolute -bottom-1 left-0 -z-0 h-3 w-full rounded bg-lime/70"></span>
                     </span>
                 </h1>

                 <p class="mt-6 max-w-xl text-lg leading-8 text-muted">
                     Découvrez les programmes d'aide à la rénovation énergétique au Canada et au Québec : isolation,
                     chauffage, thermopompes, fenêtres et plus encore.
                 </p>

                 <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                     <a href="#recherche"
                         class="inline-flex items-center justify-center rounded-xl bg-forest px-6 py-4 font-bold text-white shadow-lg shadow-forest/15 transition hover:-translate-y-0.5 hover:bg-green">
                         Trouver une aide
                         <span class="ml-2" aria-hidden="true">→</span>
                     </a>

                     <a href="#types-travaux"
                         class="inline-flex items-center justify-center rounded-xl border border-forest/15 bg-white px-6 py-4 font-bold text-forest transition hover:border-green hover:bg-green/5">
                         Explorer les travaux
                     </a>
                 </div>

                 <div class="mt-8 flex flex-wrap gap-x-6 gap-y-3 text-sm text-muted">
                     <span class="flex items-center gap-2">
                         <span class="font-bold text-green">✓</span>
                         Informations organisées
                     </span>
                     <span class="flex items-center gap-2">
                         <span class="font-bold text-green">✓</span>
                         Sources officielles
                     </span>
                     <span class="flex items-center gap-2">
                         <span class="font-bold text-green">✓</span>
                         Canada et Québec
                     </span>
                 </div>
             </div>

             {{-- Hero visual --}}
             <div class="relative">
                 <div class="absolute -inset-4 rounded-[2rem] bg-lime/30 blur-2xl"></div>

                 <div
                     class="relative overflow-hidden rounded-[2rem] border border-white bg-white p-3 shadow-2xl shadow-forest/10">
                     <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=85"
                         alt="Maison moderne rénovée avec une approche énergétique"
                         class="h-[320px] w-full rounded-[1.5rem] object-cover sm:h-[420px]">

                     <div
                         class="absolute bottom-7 left-7 right-7 rounded-2xl border border-white/70 bg-white/95 p-5 shadow-xl backdrop-blur sm:bottom-8 sm:left-8 sm:right-8">
                         <div class="flex items-center gap-4">
                             <div
                                 class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-lime/50 text-2xl">
                                 ♻
                             </div>
                             <div>
                                 <p class="font-bold text-forest">Votre projet de rénovation</p>
                                 <p class="mt-1 text-sm text-muted">Explorez les programmes selon vos travaux et votre
                                     région.</p>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div
                     class="absolute -right-3 top-8 hidden rounded-2xl border border-white bg-white px-4 py-3 shadow-lg sm:block">
                     <p class="text-xs font-medium text-muted">Votre recherche</p>
                     <p class="mt-1 font-bold text-forest">Des aides adaptées</p>
                 </div>
             </div>

         </div>
     </section>


     {{-- =========================
     SEARCH SECTION
========================= --}}
     <section id="recherche" class="relative z-10 mx-auto -mt-1 max-w-7xl px-6 lg:px-10">
         <div class="rounded-3xl bg-forest p-6 shadow-xl shadow-forest/10 sm:p-9">
             <div class="mb-6">
                 <p class="text-sm font-bold uppercase tracking-[0.18em] text-lime">
                     Recherche simplifiée
                 </p>
                 <h2 class="mt-2 font-heading text-2xl font-bold text-white sm:text-3xl">
                     Quel est votre projet ?
                 </h2>
                 <p class="mt-2 text-sm leading-6 text-white/70">
                     Choisissez votre région et votre type de travaux pour commencer.
                 </p>
             </div>

             <form action="{{ url('/programmes') }}" method="GET" class="grid gap-4 md:grid-cols-3">

                 <div>
                     <label for="province" class="mb-2 block text-sm font-semibold text-white">
                         Votre province ou territoire
                     </label>
                     <select id="province" name="province"
                         class="w-full rounded-xl border border-white/15 bg-white px-4 py-4 text-sm text-ink outline-none transition focus:ring-2 focus:ring-lime">
                         <option value="">Toutes les régions</option>
                         <option value="quebec">Québec</option>
                         <option value="ontario">Ontario</option>
                         <option value="colombie-britannique">Colombie-Britannique</option>
                         <option value="alberta">Alberta</option>
                         <option value="manitoba">Manitoba</option>
                         <option value="saskatchewan">Saskatchewan</option>
                         <option value="nouveau-brunswick">Nouveau-Brunswick</option>
                         <option value="nouvelle-ecosse">Nouvelle-Écosse</option>
                         <option value="terre-neuve-et-labrador">Terre-Neuve-et-Labrador</option>
                         <option value="ile-du-prince-edouard">Île-du-Prince-Édouard</option>
                         <option value="yukon">Yukon</option>
                         <option value="territoires-du-nord-ouest">Territoires du Nord-Ouest</option>
                         <option value="nunavut">Nunavut</option>
                     </select>
                 </div>

                 <div>
                     <label for="travaux" class="mb-2 block text-sm font-semibold text-white">
                         Type de travaux
                     </label>
                     <select id="travaux" name="travaux"
                         class="w-full rounded-xl border border-white/15 bg-white px-4 py-4 text-sm text-ink outline-none transition focus:ring-2 focus:ring-lime">
                         <option value="">Tous les travaux</option>
                         <option value="thermopompe">Thermopompe</option>
                         <option value="isolation">Isolation</option>
                         <option value="chauffage">Chauffage</option>
                         <option value="fenetres-portes">Fenêtres et portes</option>
                         <option value="renovation-energetique">Rénovation énergétique</option>
                     </select>
                 </div>

                 <div class="flex items-end">
                     <button type="submit"
                         class="w-full rounded-xl bg-lime px-6 py-4 font-bold text-forest transition hover:bg-white">
                         Rechercher →
                     </button>
                 </div>
             </form>
         </div>
     </section>


     {{-- =========================
     POPULAR PROGRAMS
========================= --}}
     <section class="mx-auto max-w-7xl px-6 py-20 lg:px-10 lg:py-24">
         <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
             <div>
                 <p class="text-sm font-bold uppercase tracking-[0.18em] text-green">
                     Programmes et subventions
                 </p>
                 <h2 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-forest sm:text-4xl">
                     Explorez les aides disponibles
                 </h2>
                 <p class="mt-4 max-w-2xl leading-7 text-muted">
                     Retrouvez les informations essentielles sur les programmes de rénovation énergétique et consultez les
                     sources officielles avant de déposer une demande.
                 </p>
             </div>

             <a href="{{ url('/programmes') }}"
                 class="inline-flex shrink-0 items-center gap-2 font-bold text-green transition hover:text-forest">
                 Tous les programmes <span aria-hidden="true">→</span>
             </a>
         </div>

         <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

             {{-- Program card 1 --}}
             <article
                 class="group rounded-2xl border border-forest/10 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:border-green/30 hover:shadow-xl hover:shadow-forest/5">
                 <div class="flex items-start justify-between">
                     <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-lime/40 text-2xl">
                         🏠
                     </div>
                     <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                         À vérifier
                     </span>
                 </div>
                 <h3 class="mt-5 text-xl font-bold text-forest">Aides à la rénovation</h3>
                 <p class="mt-3 text-sm leading-6 text-muted">
                     Découvrez les programmes pouvant concerner différents travaux d'amélioration énergétique du logement.
                 </p>
                 <a href="{{ url('/programmes') }}"
                     class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-green hover:text-forest">
                     Consulter les programmes <span aria-hidden="true">→</span>
                 </a>
             </article>

             {{-- Program card 2 --}}
             <article
                 class="group rounded-2xl border border-forest/10 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:border-green/30 hover:shadow-xl hover:shadow-forest/5">
                 <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green/10 text-2xl">
                     ♨️
                 </div>
                 <span class="mt-5 inline-block rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                     À vérifier
                 </span>
                 <h3 class="mt-4 text-xl font-bold text-forest">Thermopompes et chauffage</h3>
                 <p class="mt-3 text-sm leading-6 text-muted">
                     Informez-vous sur les programmes liés aux systèmes de chauffage et aux thermopompes efficaces.
                 </p>
                 <a href="{{ url('/thermopompes') }}"
                     class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-green hover:text-forest">
                     Voir les informations <span aria-hidden="true">→</span>
                 </a>
             </article>

             {{-- Program card 3 --}}
             <article
                 class="group rounded-2xl border border-forest/10 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:border-green/30 hover:shadow-xl hover:shadow-forest/5">
                 <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-2xl">
                     🌡️
                 </div>
                 <span class="mt-5 inline-block rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                     Selon le programme
                 </span>
                 <h3 class="mt-4 text-xl font-bold text-forest">Isolation et efficacité énergétique</h3>
                 <p class="mt-3 text-sm leading-6 text-muted">
                     Explorez les solutions d'isolation et les aides éventuelles associées à l'efficacité énergétique.
                 </p>
                 <a href="{{ url('/isolation') }}"
                     class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-green hover:text-forest">
                     Découvrir les aides <span aria-hidden="true">→</span>
                 </a>
             </article>

         </div>

         <p class="mt-6 text-xs leading-5 text-muted">
             Important : les exemples ci-dessus sont des catégories d'information, pas la confirmation qu'une aide est
             actuellement ouverte. Vérifiez toujours les conditions et le statut sur le site officiel du programme.
         </p>
     </section>


     {{-- =========================
     TYPES OF WORK
========================= --}}
     <section id="types-travaux" class="bg-cream py-20 lg:py-24">
         <div class="mx-auto max-w-7xl px-6 lg:px-10">
             <div class="mx-auto max-w-3xl text-center">
                 <p class="text-sm font-bold uppercase tracking-[0.18em] text-green">
                     Par type de travaux
                 </p>
                 <h2 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-forest sm:text-4xl">
                     Quel travail souhaitez-vous réaliser ?
                 </h2>
                 <p class="mt-4 leading-7 text-muted">
                     Commencez par votre projet pour découvrir les informations et les programmes qui pourraient vous
                     concerner.
                 </p>
             </div>

             <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                 <a href="{{ url('/thermopompes') }}"
                     class="group flex items-center gap-4 rounded-2xl border border-forest/10 bg-white p-5 transition hover:-translate-y-1 hover:border-green/30 hover:shadow-lg">
                     <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-green/10 text-2xl">❄️
                     </div>
                     <div class="flex-1">
                         <h3 class="font-bold text-forest">Thermopompes</h3>
                         <p class="mt-1 text-sm text-muted">Chauffage et climatisation</p>
                     </div>
                     <span class="text-xl text-green transition group-hover:translate-x-1">→</span>
                 </a>

                 <a href="{{ url('/isolation') }}"
                     class="group flex items-center gap-4 rounded-2xl border border-forest/10 bg-white p-5 transition hover:-translate-y-1 hover:border-green/30 hover:shadow-lg">
                     <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-lime/40 text-2xl">🧱
                     </div>
                     <div class="flex-1">
                         <h3 class="font-bold text-forest">Isolation</h3>
                         <p class="mt-1 text-sm text-muted">Murs, toiture et sous-sol</p>
                     </div>
                     <span class="text-xl text-green transition group-hover:translate-x-1">→</span>
                 </a>

                 <a href="{{ url('/chauffage') }}"
                     class="group flex items-center gap-4 rounded-2xl border border-forest/10 bg-white p-5 transition hover:-translate-y-1 hover:border-green/30 hover:shadow-lg">
                     <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-2xl">🔥
                     </div>
                     <div class="flex-1">
                         <h3 class="font-bold text-forest">Chauffage</h3>
                         <p class="mt-1 text-sm text-muted">Systèmes et équipements</p>
                     </div>
                     <span class="text-xl text-green transition group-hover:translate-x-1">→</span>
                 </a>

                 <a href="{{ url('/fenetres-portes') }}"
                     class="group flex items-center gap-4 rounded-2xl border border-forest/10 bg-white p-5 transition hover:-translate-y-1 hover:border-green/30 hover:shadow-lg">
                     <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-2xl">🪟
                     </div>
                     <div class="flex-1">
                         <h3 class="font-bold text-forest">Fenêtres et portes</h3>
                         <p class="mt-1 text-sm text-muted">Améliorer l'étanchéité</p>
                     </div>
                     <span class="text-xl text-green transition group-hover:translate-x-1">→</span>
                 </a>

                 <a href="{{ url('/renovation-energetique') }}"
                     class="group flex items-center gap-4 rounded-2xl border border-forest/10 bg-white p-5 transition hover:-translate-y-1 hover:border-green/30 hover:shadow-lg">
                     <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-lime/40 text-2xl">⚡
                     </div>
                     <div class="flex-1">
                         <h3 class="font-bold text-forest">Rénovation énergétique</h3>
                         <p class="mt-1 text-sm text-muted">Amélioration globale du logement</p>
                     </div>
                     <span class="text-xl text-green transition group-hover:translate-x-1">→</span>
                 </a>

                 <a href="{{ url('/menages-a-faible-revenu') }}"
                     class="group flex items-center gap-4 rounded-2xl border border-forest/10 bg-white p-5 transition hover:-translate-y-1 hover:border-green/30 hover:shadow-lg">
                     <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-green/10 text-2xl">🤝
                     </div>
                     <div class="flex-1">
                         <h3 class="font-bold text-forest">Ménages à faible revenu</h3>
                         <p class="mt-1 text-sm text-muted">Programmes et critères d'accès</p>
                     </div>
                     <span class="text-xl text-green transition group-hover:translate-x-1">→</span>
                 </a>

             </div>
         </div>
     </section>


     {{-- =========================
     PROVINCES
========================= --}}
     <section class="mx-auto max-w-7xl px-6 py-20 lg:px-10 lg:py-24">
         <div class="grid gap-10 lg:grid-cols-[0.85fr_1.15fr] lg:items-center">

             <div>
                 <p class="text-sm font-bold uppercase tracking-[0.18em] text-green">
                     Partout au Canada
                 </p>
                 <h2 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-forest sm:text-4xl">
                     Les aides selon votre région
                 </h2>
                 <p class="mt-5 leading-7 text-muted">
                     Les programmes et les conditions varient selon la province, le territoire, le type de logement et les
                     travaux envisagés.
                 </p>
                 <a href="{{ url('/provinces') }}"
                     class="mt-7 inline-flex items-center gap-2 rounded-xl bg-forest px-5 py-3 font-bold text-white transition hover:bg-green">
                     Explorer les régions <span aria-hidden="true">→</span>
                 </a>
             </div>

             <div class="grid gap-4 sm:grid-cols-2">

                 <a href="{{ url('/quebec') }}"
                     class="group rounded-2xl border border-green/20 bg-green/5 p-6 transition hover:-translate-y-1 hover:bg-green/10">
                     <div class="flex items-center justify-between">
                         <span class="text-3xl">🍁</span>
                         <span class="text-xl text-green transition group-hover:translate-x-1">→</span>
                     </div>
                     <h3 class="mt-5 text-xl font-bold text-forest">Québec</h3>
                     <p class="mt-2 text-sm leading-6 text-muted">
                         Consultez les informations sur les aides provinciales et les programmes applicables au Québec.
                     </p>
                 </a>

                 <a href="{{ url('/provinces') }}"
                     class="group rounded-2xl border border-forest/10 bg-white p-6 transition hover:-translate-y-1 hover:border-green/30 hover:shadow-lg">
                     <div class="flex items-center justify-between">
                         <span class="text-3xl">🏡</span>
                         <span class="text-xl text-green transition group-hover:translate-x-1">→</span>
                     </div>
                     <h3 class="mt-5 text-xl font-bold text-forest">Ontario</h3>
                     <p class="mt-2 text-sm leading-6 text-muted">
                         Retrouvez les ressources et les programmes à vérifier pour cette province.
                     </p>
                 </a>

                 <a href="{{ url('/provinces') }}"
                     class="group rounded-2xl border border-forest/10 bg-white p-6 transition hover:-translate-y-1 hover:border-green/30 hover:shadow-lg">
                     <div class="flex items-center justify-between">
                         <span class="text-3xl">🌲</span>
                         <span class="text-xl text-green transition group-hover:translate-x-1">→</span>
                     </div>
                     <h3 class="mt-5 text-xl font-bold text-forest">Colombie-Britannique</h3>
                     <p class="mt-2 text-sm leading-6 text-muted">
                         Explorez les informations régionales liées à la rénovation énergétique.
                     </p>
                 </a>

                 <a href="{{ url('/provinces') }}"
                     class="group rounded-2xl border border-forest/10 bg-white p-6 transition hover:-translate-y-1 hover:border-green/30 hover:shadow-lg">
                     <div class="flex items-center justify-between">
                         <span class="text-3xl">🇨🇦</span>
                         <span class="text-xl text-green transition group-hover:translate-x-1">→</span>
                     </div>
                     <h3 class="mt-5 text-xl font-bold text-forest">Autres provinces</h3>
                     <p class="mt-2 text-sm leading-6 text-muted">
                         Accédez à une vue d'ensemble des autres provinces et territoires.
                     </p>
                 </a>

             </div>
         </div>
     </section>


     {{-- =========================
     PRACTICAL GUIDES
========================= --}}
     <section class="bg-cream py-20 lg:py-24">
         <div class="mx-auto max-w-7xl px-6 lg:px-10">

             <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                 <div>
                     <p class="text-sm font-bold uppercase tracking-[0.18em] text-green">
                         Guides pratiques
                     </p>
                     <h2 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-forest sm:text-4xl">
                         Préparez votre projet
                     </h2>
                     <p class="mt-4 max-w-2xl leading-7 text-muted">
                         Comprenez les étapes, les critères et les documents à vérifier avant de demander une aide.
                     </p>
                 </div>

                 <a href="{{ url('/guides') }}"
                     class="inline-flex shrink-0 items-center gap-2 font-bold text-green transition hover:text-forest">
                     Tous les guides <span aria-hidden="true">→</span>
                 </a>
             </div>

             <div class="mt-10 grid gap-6 md:grid-cols-3">

                 <article
                     class="overflow-hidden rounded-2xl border border-forest/10 bg-white transition hover:-translate-y-1 hover:shadow-xl">
                     <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=800&q=80"
                         alt="Planification d'un projet de rénovation" class="h-48 w-full object-cover" loading="lazy">
                     <div class="p-6">
                         <span class="text-xs font-bold uppercase tracking-wider text-green">Bien commencer</span>
                         <h3 class="mt-3 text-xl font-bold text-forest">Comment préparer son projet de rénovation ?</h3>
                         <p class="mt-3 text-sm leading-6 text-muted">
                             Les premières vérifications à effectuer avant de choisir les travaux.
                         </p>
                         <a href="{{ url('/guides') }}"
                             class="mt-5 inline-flex items-center gap-2 font-bold text-green hover:text-forest">
                             Lire le guide <span aria-hidden="true">→</span>
                         </a>
                     </div>
                 </article>

                 <article
                     class="overflow-hidden rounded-2xl border border-forest/10 bg-white transition hover:-translate-y-1 hover:shadow-xl">
                     <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80"
                         alt="Équipements techniques pour un logement" class="h-48 w-full object-cover" loading="lazy">
                     <div class="p-6">
                         <span class="text-xs font-bold uppercase tracking-wider text-green">Comprendre les critères</span>
                         <h3 class="mt-3 text-xl font-bold text-forest">Qui peut être admissible à une aide ?</h3>
                         <p class="mt-3 text-sm leading-6 text-muted">
                             Découvrez les types de critères qui peuvent influencer l'admissibilité.
                         </p>
                         <a href="{{ url('/guides') }}"
                             class="mt-5 inline-flex items-center gap-2 font-bold text-green hover:text-forest">
                             Lire le guide <span aria-hidden="true">→</span>
                         </a>
                     </div>
                 </article>

                 <article
                     class="overflow-hidden rounded-2xl border border-forest/10 bg-white transition hover:-translate-y-1 hover:shadow-xl">
                     <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80"
                         alt="Documents pour préparer une demande" class="h-48 w-full object-cover" loading="lazy">
                     <div class="p-6">
                         <span class="text-xs font-bold uppercase tracking-wider text-green">Dossier de demande</span>
                         <h3 class="mt-3 text-xl font-bold text-forest">Quels documents faut-il préparer ?</h3>
                         <p class="mt-3 text-sm leading-6 text-muted">
                             Une checklist générale pour organiser vos documents et justificatifs.
                         </p>
                         <a href="{{ url('/guides') }}"
                             class="mt-5 inline-flex items-center gap-2 font-bold text-green hover:text-forest">
                             Lire le guide <span aria-hidden="true">→</span>
                         </a>
                     </div>
                 </article>

             </div>
         </div>
     </section>


     {{-- =========================
     TRUST / METHODOLOGY
========================= --}}
     <section class="mx-auto max-w-7xl px-6 py-20 lg:px-10">
         <div class="overflow-hidden rounded-3xl bg-forest p-8 sm:p-12 lg:p-14">
             <div class="grid gap-10 lg:grid-cols-2 lg:items-center">

                 <div>
                     <p class="text-sm font-bold uppercase tracking-[0.18em] text-lime">
                         Transparence et fiabilité
                     </p>
                     <h2 class="mt-3 font-heading text-3xl font-extrabold leading-tight text-white sm:text-4xl">
                         Des informations à vérifier auprès des sources officielles
                     </h2>
                     <p class="mt-5 leading-7 text-white/70">
                         Ce portail indépendant aide à comprendre les programmes. Les critères, montants, dates et statuts
                         peuvent évoluer : la source officielle reste la référence pour confirmer les informations avant
                         toute demande.
                     </p>
                     <a href="{{ url('/sources-officielles') }}"
                         class="mt-7 inline-flex items-center gap-2 rounded-xl bg-lime px-5 py-3 font-bold text-forest transition hover:bg-white">
                         Consulter les sources <span aria-hidden="true">→</span>
                     </a>
                 </div>

                 <div class="grid gap-4 sm:grid-cols-2">
                     <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                         <span class="text-2xl">🔎</span>
                         <h3 class="mt-4 font-bold text-white">Vérification</h3>
                         <p class="mt-2 text-sm leading-6 text-white/65">
                             Vérifiez les conditions directement auprès de l'organisme responsable.
                         </p>
                     </div>

                     <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                         <span class="text-2xl">📅</span>
                         <h3 class="mt-4 font-bold text-white">Dates de mise à jour</h3>
                         <p class="mt-2 text-sm leading-6 text-white/65">
                             Consultez la date de vérification indiquée sur chaque fiche de programme.
                         </p>
                     </div>

                     <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                         <span class="text-2xl">📋</span>
                         <h3 class="mt-4 font-bold text-white">Critères détaillés</h3>
                         <p class="mt-2 text-sm leading-6 text-white/65">
                             Examinez les critères d'admissibilité et les conditions applicables.
                         </p>
                     </div>

                     <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                         <span class="text-2xl">🌐</span>
                         <h3 class="mt-4 font-bold text-white">Portail indépendant</h3>
                         <p class="mt-2 text-sm leading-6 text-white/65">
                             Ce site n'est pas un site gouvernemental et ne remplace pas les organismes officiels.
                         </p>
                     </div>
                 </div>

             </div>
         </div>
     </section>


     {{-- =========================
     FINAL CTA
========================= --}}
     <section class="px-6 pb-20 lg:px-10 lg:pb-24">
         <div class="mx-auto max-w-5xl rounded-3xl border border-green/15 bg-green/5 px-6 py-12 text-center sm:px-12">
             <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-lime/60 text-3xl">
                 🏡
             </div>

             <h2 class="mt-6 font-heading text-3xl font-extrabold tracking-tight text-forest sm:text-4xl">
                 Prêt à explorer les aides pour votre logement ?
             </h2>

             <p class="mx-auto mt-4 max-w-2xl leading-7 text-muted">
                 Commencez par votre région et votre projet, puis consultez les conditions officielles de chaque programme.
             </p>

             <a href="#recherche"
                 class="mt-7 inline-flex items-center justify-center rounded-xl bg-forest px-6 py-4 font-bold text-white transition hover:bg-green">
                 Rechercher une aide <span class="ml-2" aria-hidden="true">→</span>
             </a>
         </div>
     </section>

 @endsection
