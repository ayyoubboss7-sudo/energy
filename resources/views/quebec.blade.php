@extends('layouts.app')

@section('title', 'Aides rénovation énergétique Québec 2026 | ÉcoAides Canada')

@section('meta_description', 'Découvrez les aides à la rénovation énergétique au Québec : Rénoclimat, LogisVert,
    conditions, montants et programmes fermés.')

@section('content')

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-forest text-white">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -right-20 -top-20 h-80 w-80 rounded-full border-[40px] border-white"></div>
            <div class="absolute -bottom-24 -left-20 h-72 w-72 rounded-full border-[30px] border-white"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
            <nav class="mb-8 text-sm text-white/70" aria-label="Fil d'Ariane">
                <a href="{{ route('home') }}" class="transition hover:text-lime">
                    Accueil
                </a>
                <span class="mx-2">/</span>
                <span class="text-white">Québec</span>
            </nav>

            <div class="max-w-4xl">
                <span
                    class="mb-5 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-medium">
                    <span class="h-2 w-2 rounded-full bg-lime"></span>
                    Guide des aides au Québec
                </span>

                <h1 class="text-4xl font-bold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                    Aides à la rénovation énergétique au Québec :
                    <span class="text-lime">ce qui est ouvert en 2026</span>
                </h1>

                <p class="mt-6 max-w-3xl text-lg leading-8 text-white/80">
                    Découvrez les programmes disponibles pour améliorer l'efficacité
                    énergétique de votre logement, leurs conditions et les aides
                    annoncées ou fermées.
                </p>

                <div class="mt-8 flex flex-wrap gap-3 text-sm text-white/80">
                    <span class="rounded-full bg-white/10 px-4 py-2">
                        Mise à jour : 29 octobre 2026
                    </span>
                    <span class="rounded-full bg-white/10 px-4 py-2">
                        Québec, Canada
                    </span>
                </div>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#renoclimat"
                        class="inline-flex items-center justify-center rounded-xl bg-lime px-6 py-3 font-semibold text-forest transition hover:opacity-90">
                        Découvrir Rénoclimat
                        <span class="ml-2" aria-hidden="true">→</span>
                    </a>

                    <a href="#logisvert"
                        class="inline-flex items-center justify-center rounded-xl border border-white/30 px-6 py-3 font-semibold text-white transition hover:bg-white/10">
                        Voir LogisVert
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- DISCLAIMER --}}
    <section class="bg-cream px-6 py-6">
        <div class="mx-auto flex max-w-7xl items-start gap-4 rounded-2xl border border-amber-200 bg-white p-5 shadow-sm">
            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-100 text-xl">
                ℹ️
            </div>

            <div>
                <h2 class="font-bold text-forest">
                    Information indépendante
                </h2>

                <p class="mt-2 text-sm leading-7 text-muted">
                    Ce portail est un site d'information indépendant.
                    Il n'est ni un site du gouvernement du Québec ni mandaté par celui-ci.
                    Il ne dépose aucune demande à votre place et ne garantit aucune aide.
                    Vérifiez toujours les conditions auprès de l'organisme officiel
                    avant d'entreprendre vos travaux.
                </p>
            </div>
        </div>
    </section>


    {{-- INTRODUCTION --}}
    <section class="bg-cream px-6 py-14">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-3xl">
                <span class="text-sm font-bold uppercase tracking-widest text-forest">
                    Comprendre les programmes
                </span>

                <h2 class="mt-3 text-3xl font-bold text-forest sm:text-4xl">
                    Quelles aides consulter au Québec ?
                </h2>

                <p class="mt-5 leading-8 text-muted">
                    Plusieurs programmes peuvent contribuer à réduire le coût
                    de certains travaux de rénovation énergétique. Rénoclimat
                    concerne notamment l'isolation et le remplacement de fenêtres,
                    tandis que LogisVert d'Hydro-Québec propose des aides pour
                    certaines thermopompes et d'autres mesures admissibles.
                </p>

                <p class="mt-4 leading-8 text-muted">
                    Une aide annoncée n'est pas nécessairement disponible :
                    vérifiez son statut et les conditions en vigueur avant de
                    prendre une décision.
                </p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-3">
                <article class="rounded-2xl border border-black/5 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-2xl">
                        🏠
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-forest">
                        Rénoclimat
                    </h3>

                    <p class="mt-3 leading-7 text-muted">
                        Pour certains travaux d'isolation, le remplacement
                        de fenêtres et d'autres mesures admissibles.
                    </p>

                    <span class="mt-5 inline-flex rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-800">
                        Ouvert selon le dossier
                    </span>

                    <a href="#renoclimat" class="mt-5 inline-flex font-semibold text-forest hover:underline">
                        Consulter les détails →
                    </a>
                </article>

                <article class="rounded-2xl border border-black/5 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-lime/30 text-2xl">
                        ♻️
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-forest">
                        LogisVert
                    </h3>

                    <p class="mt-3 leading-7 text-muted">
                        Un programme résidentiel d'Hydro-Québec qui soutient
                        certaines installations efficaces.
                    </p>

                    <span class="mt-5 inline-flex rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-800">
                        Ouvert selon le dossier
                    </span>

                    <a href="#logisvert" class="mt-5 inline-flex font-semibold text-forest hover:underline">
                        Consulter les détails →
                    </a>
                </article>

                <article class="rounded-2xl border border-black/5 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-2xl">
                        🇨🇦
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-forest">
                        Remise nationale
                    </h3>

                    <p class="mt-3 leading-7 text-muted">
                        Une aide fédérale annoncée pour les thermopompes,
                        dont l'ouverture doit être confirmée.
                    </p>

                    <span class="mt-5 inline-flex rounded-full bg-amber-100 px-3 py-1 text-sm font-semibold text-amber-800">
                        Annoncée, pas ouverte
                    </span>

                    <a href="#remise-nationale" class="mt-5 inline-flex font-semibold text-forest hover:underline">
                        Consulter les détails →
                    </a>
                </article>
            </div>
        </div>
    </section>


    {{-- RENOC LIMAT --}}
    <section id="renoclimat" class="scroll-mt-20 bg-white px-6 py-20">
        <div class="mx-auto max-w-7xl">
            <div class="grid items-start gap-10 lg:grid-cols-[0.8fr_1.2fr]">
                <div>
                    <span class="text-sm font-bold uppercase tracking-widest text-forest">
                        Programme provincial
                    </span>

                    <h2 class="mt-3 text-3xl font-bold text-forest sm:text-4xl">
                        1. Rénoclimat : pour isoler et rénover
                    </h2>

                    <span
                        class="mt-5 inline-flex items-center gap-2 rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-green-800">
                        <span class="h-2 w-2 rounded-full bg-green-600"></span>
                        Statut indiqué : ouvert
                    </span>

                    <p class="mt-6 leading-8 text-muted">
                        Rénoclimat est un programme du gouvernement du Québec
                        visant à améliorer la performance énergétique des habitations.
                        Selon le document de référence, de nouvelles règles sont
                        entrées en vigueur le 1er octobre 2026.
                    </p>

                    <div class="mt-6 rounded-2xl bg-cream p-5">
                        <h3 class="font-bold text-forest">
                            Évaluation énergétique
                        </h3>

                        <p class="mt-2 leading-7 text-muted">
                            L'évaluation avant travaux n'est plus obligatoire
                            selon le document de référence, mais elle reste recommandée.
                            Une aide pouvant atteindre 500 $ y est indiquée.
                        </p>
                    </div>

                    <a href="{{ route('programmes') }}"
                        class="mt-7 inline-flex items-center rounded-xl bg-forest px-5 py-3 font-semibold text-white transition hover:opacity-90">
                        Voir les programmes
                        <span class="ml-2" aria-hidden="true">→</span>
                    </a>
                </div>

                <div class="overflow-hidden rounded-2xl border border-black/5 shadow-sm">
                    <div class="bg-forest px-6 py-5 text-white">
                        <h3 class="text-xl font-bold">
                            Montants indiqués dans le dossier
                        </h3>
                        <p class="mt-2 text-sm text-white/70">
                            Montants maximaux selon le type de bâtiment.
                        </p>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[600px] text-left text-sm">
                            <thead class="bg-cream text-forest">
                                <tr>
                                    <th class="px-5 py-4 font-bold">Mesure</th>
                                    <th class="px-5 py-4 font-bold">Maison</th>
                                    <th class="px-5 py-4 font-bold">Duplex / triplex / IRLM</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-100">
                                <tr>
                                    <td class="px-5 py-4">Isolation du toit</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 2 000 $</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 5 000 $</td>
                                </tr>

                                <tr>
                                    <td class="px-5 py-4">Isolation des murs extérieurs</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 7 000 $</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 11 000 $</td>
                                </tr>

                                <tr>
                                    <td class="px-5 py-4">Isolation des fondations</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 2 500 $</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 3 500 $</td>
                                </tr>

                                <tr>
                                    <td class="px-5 py-4">Remplacement de fenêtres</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 4 500 $</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 6 000 $</td>
                                </tr>

                                <tr>
                                    <td class="px-5 py-4">Source de secours</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 1 000 $</td>
                                    <td class="px-5 py-4">—</td>
                                </tr>

                                <tr>
                                    <td class="px-5 py-4">Batterie fixe</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 4 000 $</td>
                                    <td class="px-5 py-4">—</td>
                                </tr>

                                <tr>
                                    <td class="px-5 py-4">Évaluation énergétique</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 500 $</td>
                                    <td class="px-5 py-4 font-semibold text-forest">Jusqu'à 500 $</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="border-t border-gray-100 px-6 py-4 text-xs leading-6 text-muted">
                        Source mentionnée dans le dossier : Québec.ca,
                        page « Nouveautés Rénoclimat », mise à jour le 2 octobre 2026.
                        Les montants et conditions doivent être revérifiés avant publication.
                    </p>
                </div>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2">
                <div class="rounded-2xl border border-black/5 bg-cream p-6">
                    <h3 class="text-lg font-bold text-forest">
                        Adaptation aux inondations
                    </h3>

                    <p class="mt-2 leading-7 text-muted">
                        Le dossier indique également des aides pour certaines mesures
                        de protection contre les inondations.
                    </p>

                    <ul class="mt-5 space-y-3 text-sm leading-6 text-muted">
                        <li class="flex gap-3">
                            <span class="font-bold text-forest">•</span>
                            Pompe submersible avec batterie : jusqu'à 1 000 $
                        </li>
                        <li class="flex gap-3">
                            <span class="font-bold text-forest">•</span>
                            Clapet anti-retour : jusqu'à 700 $
                        </li>
                        <li class="flex gap-3">
                            <span class="font-bold text-forest">•</span>
                            Barrière anti-inondation : jusqu'à 800 $
                        </li>
                        <li class="flex gap-3">
                            <span class="font-bold text-forest">•</span>
                            Diagnostic de résilience climatique : jusqu'à 1 000 $
                        </li>
                        <li class="flex gap-3">
                            <span class="font-bold text-forest">•</span>
                            Mesures de protection des fondations et d'adaptation :
                            jusqu'à 35 000 $, selon les conditions indiquées dans le dossier
                        </li>
                    </ul>
                </div>

                <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6">
                    <h3 class="text-lg font-bold text-forest">
                        Conditions importantes
                    </h3>

                    <ul class="mt-5 space-y-3 text-sm leading-7 text-muted">
                        <li>
                            <span class="font-bold text-forest">•</span>
                            Les travaux doivent être réalisés par un entrepreneur
                            licencié par la RBQ, selon les exigences applicables.
                        </li>
                        <li>
                            <span class="font-bold text-forest">•</span>
                            Le dossier indique que les travaux concernés doivent
                            avoir été effectués après le 1er octobre 2026.
                        </li>
                        <li>
                            <span class="font-bold text-forest">•</span>
                            Les thermopompes, climatiseurs et systèmes géothermiques
                            ne sont pas admissibles à Rénoclimat selon le dossier.
                        </li>
                    </ul>

                    <div class="mt-5 border-t border-amber-200 pt-4">
                        <p class="text-sm leading-7 text-muted">
                            <strong class="text-forest">Anciens dossiers :</strong>
                            si une évaluation avant travaux a déjà été réalisée,
                            le document indique une date limite au 31 mars 2027
                            pour l'évaluation après travaux dans le cadre des anciennes modalités.
                            Vérifiez votre situation auprès du programme.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- LOGISVERT --}}
    <section id="logisvert" class="scroll-mt-20 bg-cream px-6 py-20">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-3xl">
                <span class="text-sm font-bold uppercase tracking-widest text-forest">
                    Programme Hydro-Québec
                </span>

                <h2 class="mt-3 text-3xl font-bold text-forest sm:text-4xl">
                    2. LogisVert : une aide pour les thermopompes
                </h2>

                <p class="mt-5 leading-8 text-muted">
                    LogisVert est un programme résidentiel d'Hydro-Québec.
                    Le dossier de référence le présente comme une aide active
                    au Québec pour certaines thermopompes et d'autres mesures
                    admissibles.
                </p>

                <span
                    class="mt-5 inline-flex items-center gap-2 rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-green-800">
                    <span class="h-2 w-2 rounded-full bg-green-600"></span>
                    Statut indiqué : ouvert
                </span>
            </div>

            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <article class="rounded-2xl border border-black/5 bg-white p-6 shadow-sm">
                    <p class="text-sm text-muted">Thermopompe ENERGY STAR</p>
                    <p class="mt-3 text-3xl font-bold text-forest">50 $</p>
                    <p class="mt-2 text-sm leading-6 text-muted">
                        Par 1 000 BTU/h à -8 °C, selon les exigences applicables.
                    </p>
                </article>

                <article class="rounded-2xl border border-black/5 bg-white p-6 shadow-sm">
                    <p class="text-sm text-muted">Thermopompe climat froid</p>
                    <p class="mt-3 text-3xl font-bold text-forest">120 $</p>
                    <p class="mt-2 text-sm leading-6 text-muted">
                        Par 1 000 BTU/h à -8 °C, selon le dossier.
                    </p>
                </article>

                <article class="rounded-2xl border border-black/5 bg-white p-6 shadow-sm">
                    <p class="text-sm text-muted">Très haute efficacité</p>
                    <p class="mt-3 text-3xl font-bold text-forest">140 $</p>
                    <p class="mt-2 text-sm leading-6 text-muted">
                        Par 1 000 BTU/h pour un chauffage principal électrique,
                        selon les conditions du programme.
                    </p>
                </article>

                <article class="rounded-2xl border border-black/5 bg-white p-6 shadow-sm">
                    <p class="text-sm text-muted">Géothermie neuve</p>
                    <p class="mt-3 text-3xl font-bold text-forest">750 $</p>
                    <p class="mt-2 text-sm leading-6 text-muted">
                        Par 1 000 BTU/h, selon le dossier de référence.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid gap-6 lg:grid-cols-2">
                <div class="rounded-2xl bg-white p-7 shadow-sm">
                    <h3 class="text-xl font-bold text-forest">
                        Autres mesures mentionnées
                    </h3>

                    <ul class="mt-5 space-y-4 text-sm leading-7 text-muted">
                        <li class="flex items-start justify-between gap-4 border-b border-gray-100 pb-3">
                            <span>Multilogements en zone de défavorisation</span>
                            <strong class="shrink-0 text-forest">220 $ / 1 000 BTU/h</strong>
                        </li>

                        <li class="flex items-start justify-between gap-4 border-b border-gray-100 pb-3">
                            <span>Remplacement d'un système géothermique</span>
                            <strong class="shrink-0 text-forest">250 $ / 1 000 BTU/h</strong>
                        </li>

                        <li class="flex items-start justify-between gap-4 border-b border-gray-100 pb-3">
                            <span>Isolation du toit avec calfeutrage</span>
                            <strong class="shrink-0 text-forest">1 500 $</strong>
                        </li>

                        <li class="flex items-start justify-between gap-4">
                            <span>Cuisinière à induction</span>
                            <strong class="shrink-0 text-forest">250 $</strong>
                        </li>
                    </ul>

                    <p class="mt-5 text-xs leading-6 text-muted">
                        Pour le remplacement géothermique, le dossier mentionne
                        un plafond de 18 000 $. Les montants dépendent des règles
                        applicables au moment de l'installation.
                    </p>
                </div>

                <div class="rounded-2xl bg-forest p-7 text-white">
                    <h3 class="text-xl font-bold">
                        Comment préparer votre demande ?
                    </h3>

                    <ol class="mt-6 space-y-5">
                        <li class="flex gap-4">
                            <span
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-lime font-bold text-forest">1</span>
                            <p class="text-sm leading-7 text-white/80">
                                Vérifiez que l'appareil figure sur la liste
                                des équipements admissibles.
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-lime font-bold text-forest">2</span>
                            <p class="text-sm leading-7 text-white/80">
                                Vérifiez les exigences relatives à l'achat,
                                à l'installation et à l'entrepreneur.
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-lime font-bold text-forest">3</span>
                            <p class="text-sm leading-7 text-white/80">
                                Conservez les factures et les documents
                                demandés par le programme.
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-lime font-bold text-forest">4</span>
                            <p class="text-sm leading-7 text-white/80">
                                Consultez les modalités officielles et
                                transmettez votre demande dans le délai applicable.
                            </p>
                        </li>
                    </ol>

                    <p class="mt-6 border-t border-white/20 pt-5 text-sm leading-7 text-white/70">
                        Le dossier mentionne un délai maximal de neuf mois
                        après l'installation. Confirmez ce délai et les conditions
                        en vigueur sur le site officiel avant de déposer votre demande.
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- REMISE NATIONALE --}}
    <section id="remise-nationale" class="scroll-mt-20 bg-white px-6 py-20">
        <div class="mx-auto max-w-7xl">
            <div class="overflow-hidden rounded-3xl border border-blue-100">
                <div class="grid lg:grid-cols-[1fr_0.85fr]">
                    <div class="p-8 sm:p-10 lg:p-12">
                        <span class="inline-flex rounded-full bg-blue-100 px-4 py-2 text-sm font-semibold text-blue-800">
                            Annoncée — demandes non ouvertes
                        </span>

                        <h2 class="mt-6 text-3xl font-bold text-forest sm:text-4xl">
                            3. Remise nationale pour thermopompes
                        </h2>

                        <p class="mt-5 leading-8 text-muted">
                            Selon le document de référence, le gouvernement fédéral
                            a annoncé cette aide le 8 octobre 2026. Le lancement
                            était évoqué pour le début de 2027, mais la date
                            d'ouverture des demandes n'était pas publiée dans le dossier.
                        </p>

                        <h3 class="mt-8 text-lg font-bold text-forest">
                            Montants annoncés
                        </h3>

                        <div class="mt-4 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-2xl bg-cream p-5">
                                <p class="text-sm text-muted">
                                    Ménages sous le revenu médian
                                </p>
                                <p class="mt-2 text-3xl font-bold text-forest">
                                    Jusqu'à 10 000 $
                                </p>
                            </div>

                            <div class="rounded-2xl bg-cream p-5">
                                <p class="text-sm text-muted">
                                    Autres propriétaires admissibles
                                </p>
                                <p class="mt-2 text-3xl font-bold text-forest">
                                    2 000 $
                                </p>
                            </div>
                        </div>

                        <h3 class="mt-8 text-lg font-bold text-forest">
                            Éléments mentionnés dans l'annonce
                        </h3>

                        <ul class="mt-4 space-y-3 text-sm leading-7 text-muted">
                            <li>• La thermopompe doit figurer sur la liste des produits admissibles.</li>
                            <li>• Le dossier annonce une procédure en ligne et une approbation en 24 heures.</li>
                            <li>• Un cumul avec des programmes provinciaux est annoncé comme possible.</li>
                        </ul>
                    </div>

                    <div class="flex flex-col justify-center bg-blue-50 p-8 sm:p-10 lg:p-12">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-white text-3xl shadow-sm">
                            ⚠️
                        </div>

                        <h3 class="mt-6 text-2xl font-bold text-forest">
                            Ne la considérez pas encore comme disponible
                        </h3>

                        <p class="mt-4 leading-8 text-muted">
                            Une annonce ne signifie pas que les demandes sont ouvertes.
                            Le seuil de revenu, le portail et la date officielle
                            de lancement doivent être confirmés.
                        </p>

                        <p class="mt-5 text-sm leading-7 text-muted">
                            Consultez les communications officielles du gouvernement
                            du Canada avant de prendre une décision financière.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- PROGRAMMES FERMES --}}
    <section class="bg-cream px-6 py-20">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-3xl">
                <span class="text-sm font-bold uppercase tracking-widest text-forest">
                    À connaître
                </span>

                <h2 class="mt-3 text-3xl font-bold text-forest sm:text-4xl">
                    4. Programmes fermés ou à vérifier
                </h2>

                <p class="mt-5 leading-8 text-muted">
                    Certains programmes connus ne doivent pas être présentés
                    comme accessibles aux nouvelles demandes sans confirmation officielle.
                </p>
            </div>

            <div class="mt-8 overflow-hidden rounded-2xl border border-black/5 bg-white shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[550px] text-left">
                        <thead class="bg-forest text-white">
                            <tr>
                                <th class="px-6 py-4 text-sm font-semibold">Programme</th>
                                <th class="px-6 py-4 text-sm font-semibold">Statut indiqué</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <td class="px-6 py-5 font-medium text-forest">
                                    Subvention canadienne pour des maisons plus vertes
                                </td>
                                <td class="px-6 py-5">
                                    <span class="rounded-full bg-red-100 px-3 py-1 text-sm font-semibold text-red-800">
                                        Fermée
                                    </span>
                                    <p class="mt-2 text-sm text-muted">
                                        Fin indiquée : 31 décembre 2025.
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-5 font-medium text-forest">
                                    Prêt canadien pour des maisons plus vertes
                                </td>
                                <td class="px-6 py-5">
                                    <span class="rounded-full bg-red-100 px-3 py-1 text-sm font-semibold text-red-800">
                                        Nouvelles approbations fermées
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-5 font-medium text-forest">
                                    Chauffez vert (Québec)
                                </td>
                                <td class="px-6 py-5">
                                    <span class="rounded-full bg-red-100 px-3 py-1 text-sm font-semibold text-red-800">
                                        Fermé
                                    </span>
                                    <p class="mt-2 text-sm text-muted">
                                        Date indiquée dans le dossier : 31 mars 2026.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="border-t border-gray-100 px-6 py-4 text-xs leading-6 text-muted">
                    Ces statuts proviennent du document de travail daté du 29 octobre 2026.
                    Vérifiez toujours les pages officielles pour connaître les éventuelles mises à jour.
                </p>
            </div>
        </div>
    </section>


    {{-- CONSEILS --}}
    <section class="bg-white px-6 py-20">
        <div class="mx-auto max-w-7xl">
            <div class="grid gap-10 lg:grid-cols-2">
                <div>
                    <span class="text-sm font-bold uppercase tracking-widest text-forest">
                        Avant de commencer
                    </span>

                    <h2 class="mt-3 text-3xl font-bold text-forest sm:text-4xl">
                        3 réflexes pour éviter les mauvaises surprises
                    </h2>

                    <p class="mt-5 leading-8 text-muted">
                        Avant de signer un contrat ou d'engager des travaux,
                        prenez le temps de vérifier votre situation et les
                        exigences du programme concerné.
                    </p>
                </div>

                <div class="space-y-5">
                    <article class="flex gap-4 rounded-2xl bg-cream p-5">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-lime/40 text-xl">
                            ✓
                        </div>
                        <div>
                            <h3 class="font-bold text-forest">
                                Vérifiez les conditions officielles
                            </h3>
                            <p class="mt-2 text-sm leading-7 text-muted">
                                Confirmez les travaux admissibles, les montants,
                                les dates et les documents nécessaires.
                            </p>
                        </div>
                    </article>

                    <article class="flex gap-4 rounded-2xl bg-cream p-5">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-lime/40 text-xl">
                            🧾
                        </div>
                        <div>
                            <h3 class="font-bold text-forest">
                                Gardez vos justificatifs
                            </h3>
                            <p class="mt-2 text-sm leading-7 text-muted">
                                Conservez les factures, les preuves d'achat
                                et les documents demandés.
                            </p>
                        </div>
                    </article>

                    <article class="flex gap-4 rounded-2xl bg-cream p-5">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-lime/40 text-xl">
                            🛡️
                        </div>
                        <div>
                            <h3 class="font-bold text-forest">
                                Méfiez-vous des promesses de subvention
                            </h3>
                            <p class="mt-2 text-sm leading-7 text-muted">
                                Ne payez pas un intermédiaire qui promet de
                                garantir une aide. Adressez-vous à l'organisme officiel.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


    {{-- CTA --}}
    <section class="bg-forest px-6 py-16 text-white sm:py-20">
        <div class="mx-auto max-w-5xl text-center">
            <span class="inline-flex rounded-full bg-white/10 px-4 py-2 text-sm text-white/80">
                Continuez votre recherche
            </span>

            <h2 class="mt-5 text-3xl font-bold sm:text-4xl">
                Trouvez les programmes adaptés à vos travaux
            </h2>

            <p class="mx-auto mt-5 max-w-2xl leading-8 text-white/75">
                Consultez les programmes répertoriés et comparez les informations
                disponibles avant de contacter l'organisme responsable.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="{{ route('programmes') }}"
                    class="inline-flex items-center rounded-xl bg-lime px-6 py-3 font-semibold text-forest transition hover:opacity-90">
                    Explorer les programmes
                    <span class="ml-2" aria-hidden="true">→</span>
                </a>

                <a href="{{ route('home') }}"
                    class="inline-flex items-center rounded-xl border border-white/30 px-6 py-3 font-semibold text-white transition hover:bg-white/10">
                    Retour à l'accueil
                </a>
            </div>
        </div>
    </section>

@endsection
