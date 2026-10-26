@extends('layouts.app')

@section('title', 'Programmes d’aides | ÉcoAides Canada')

@section('meta_description', 'Recherchez les programmes d’aides à la rénovation énergétique au Canada et au Québec.')

@section('content')

    <main class="min-h-screen bg-cream text-ink">

        {{-- Hero --}}
        <section class="bg-forest text-white">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-10 lg:py-24">

                <span class="inline-flex rounded-full border border-white/20 px-4 py-2 text-sm">
                    Répertoire des aides
                </span>

                <h1 class="mt-6 max-w-3xl text-4xl font-bold leading-tight md:text-6xl">
                    Trouvez les aides pour votre rénovation énergétique
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-white/75">
                    Explorez les programmes de soutien, comparez les conditions
                    et consultez les sources officielles avant d’entreprendre
                    vos travaux.
                </p>

                <a href="#recherche"
                    class="mt-8 inline-flex rounded-xl bg-lime px-6 py-3 font-semibold text-forest transition hover:opacity-90">
                    Rechercher un programme
                </a>

            </div>
        </section>

        {{-- Recherche et filtres --}}
        <section id="recherche" class="mx-auto max-w-7xl px-6 py-12 lg:px-10">

            <div class="rounded-2xl border border-black/5 bg-white p-6 shadow-sm md:p-8">

                <h2 class="text-2xl font-bold">
                    Trouvez un programme adapté à votre projet
                </h2>

                <p class="mt-2 text-muted">
                    Filtrez les programmes selon votre province et le type de travaux.
                </p>

                <form action="{{ route('programmes') }}" method="GET" class="mt-6 grid gap-5 md:grid-cols-3">

                    <div>
                        <label for="province" class="mb-2 block text-sm font-semibold">
                            Province ou territoire
                        </label>

                        <select id="province" name="province"
                            class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 outline-none focus:border-green">
                            <option value="">Toutes les provinces</option>

                            @foreach (['Québec', 'Ontario', 'Alberta', 'Colombie-Britannique', 'Manitoba', 'Saskatchewan', 'Nouveau-Brunswick', 'Nouvelle-Écosse', 'Terre-Neuve-et-Labrador', 'Île-du-Prince-Édouard', 'Yukon', 'Territoires du Nord-Ouest', 'Nunavut'] as $province)
                                <option value="{{ $province }}" @selected(request('province') === $province)>
                                    {{ $province }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="renovation_type" class="mb-2 block text-sm font-semibold">
                            Type de rénovation
                        </label>

                        <select id="renovation_type" name="renovation_type"
                            class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 outline-none focus:border-green">
                            <option value="">Tous les travaux</option>

                            <option value="thermopompe" @selected(request('renovation_type') === 'thermopompe')>
                                Thermopompe
                            </option>

                            <option value="isolation" @selected(request('renovation_type') === 'isolation')>
                                Isolation
                            </option>

                            <option value="portes_fenetres" @selected(request('renovation_type') === 'portes_fenetres')>
                                Portes et fenêtres
                            </option>

                            <option value="renovation_energetique" @selected(request('renovation_type') === 'renovation_energetique')>
                                Rénovation énergétique
                            </option>
                        </select>
                    </div>

                    <div class="flex items-end gap-3">
                        <button type="submit"
                            class="flex-1 rounded-xl bg-forest px-5 py-3 font-semibold text-white transition hover:opacity-90">
                            Rechercher
                        </button>

                        <a href="{{ route('programmes') }}"
                            class="rounded-xl border border-gray-200 px-4 py-3 text-sm font-semibold transition hover:bg-gray-50">
                            Réinitialiser
                        </a>
                    </div>

                </form>
            </div>

            {{-- Résultats --}}
            <div class="mt-10">

                <div class="flex flex-wrap items-center justify-between gap-3">
                    <h2 class="text-2xl font-bold">
                        Programmes disponibles dans le répertoire
                    </h2>

                    <span class="text-sm text-muted">
                        {{ $programs->total() }}
                        {{ $programs->total() > 1 ? 'programmes' : 'programme' }}
                    </span>
                </div>

                @if ($programs->count() > 0)

                    <div class="mt-6 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                        @foreach ($programs as $program)
                            <article
                                class="flex h-full flex-col rounded-2xl border border-black/5 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                                <div class="flex flex-wrap items-center justify-between gap-2">

                                    <span class="rounded-full bg-green/10 px-3 py-1 text-xs font-semibold text-green">
                                        {{ $program->province ?: 'Canada' }}
                                    </span>

                                    @if ($program->status === 'open')
                                        <span
                                            class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-800">
                                            Ouvert
                                        </span>
                                    @elseif ($program->status === 'closed')
                                        <span
                                            class="rounded-full bg-gray-100 px-3 py-1 text-xs font-semibold text-gray-600">
                                            Fermé
                                        </span>
                                    @else
                                        <span
                                            class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-800">
                                            À vérifier
                                        </span>
                                    @endif

                                </div>

                                <h3 class="mt-5 text-xl font-bold leading-snug">
                                    {{ $program->name }}
                                </h3>

                                <p class="mt-3 flex-1 whitespace-pre-line text-sm leading-7 text-muted">
                                    {{ $program->description }}
                                </p>

                                @if ($program->renovation_type)
                                    <div class="mt-4">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-muted">
                                            Type de travaux
                                        </span>

                                        <p class="mt-1 text-sm font-medium">
                                            {{ [
                                                'thermopompe' => 'Thermopompe',
                                                'isolation' => 'Isolation',
                                                'portes_fenetres' => 'Portes et fenêtres',
                                                'renovation_energetique' => 'Rénovation énergétique',
                                            ][$program->renovation_type] ?? str_replace('_', ' ', $program->renovation_type) }}
                                        </p>
                                    </div>
                                @endif

                                @if ($program->amount_info)
                                    <div class="mt-4 rounded-xl bg-cream p-4">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-muted">
                                            Montant ou type de soutien
                                        </span>

                                        <p class="mt-1 text-sm leading-6">
                                            {{ $program->amount_info }}
                                        </p>
                                    </div>
                                @endif

                                @if ($program->eligibility)
                                    <div class="mt-4">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-muted">
                                            Conditions d’admissibilité
                                        </span>

                                        <p class="mt-1 whitespace-pre-line text-sm leading-6">
                                            {{ $program->eligibility }}
                                        </p>
                                    </div>
                                @endif

                                @if ($program->last_verified_at)
                                    <p class="mt-4 text-xs text-muted">
                                        Dernière vérification :
                                        {{ $program->last_verified_at->format('d/m/Y') }}
                                    </p>
                                @else
                                    <p class="mt-4 text-xs text-muted">
                                        Informations à vérifier auprès de la source officielle.
                                    </p>
                                @endif

                                @if ($program->official_url)
                                    <a href="{{ $program->official_url }}" target="_blank" rel="noopener noreferrer"
                                        class="mt-5 inline-flex items-center gap-2 rounded-xl bg-forest px-4 py-3 text-sm font-semibold text-white transition hover:opacity-90">
                                        Consulter la source officielle
                                        <span aria-hidden="true">↗</span>
                                    </a>
                                @else
                                    <span class="mt-5 inline-flex rounded-xl bg-gray-100 px-4 py-3 text-sm text-gray-600">
                                        Source officielle à ajouter
                                    </span>
                                @endif

                            </article>
                        @endforeach

                    </div>

                    <div class="mt-8">
                        {{ $programs->links() }}
                    </div>
                @else
                    <div class="mt-6 rounded-2xl border border-dashed border-gray-300 bg-white px-6 py-14 text-center">

                        <div class="text-4xl" aria-hidden="true">🔎</div>

                        <h3 class="mt-4 text-xl font-bold">
                            Aucun programme trouvé
                        </h3>

                        <p class="mx-auto mt-2 max-w-lg leading-7 text-muted">
                            Aucun programme ne correspond à ces filtres pour le moment.
                            Essayez une autre province ou un autre type de travaux.
                        </p>

                        <a href="{{ route('programmes') }}"
                            class="mt-6 inline-flex rounded-xl bg-forest px-5 py-3 font-semibold text-white">
                            Voir tous les programmes
                        </a>

                    </div>

                @endif

            </div>

        </section>

        {{-- Information importante --}}
        <section class="border-t border-black/5 bg-white">
            <div class="mx-auto max-w-7xl px-6 py-12 lg:px-10">

                <div class="rounded-2xl border border-green/15 bg-green/5 p-6 md:p-8">

                    <h2 class="text-xl font-bold">
                        Important avant de déposer une demande
                    </h2>

                    <p class="mt-3 max-w-3xl leading-7 text-muted">
                        Les critères, les montants et la disponibilité des programmes
                        peuvent changer. Vérifiez toujours les informations sur le
                        site officiel de l’organisme responsable avant de commencer
                        les travaux ou de déposer une demande.
                    </p>

                </div>

            </div>
        </section>

    </main>

@endsection
