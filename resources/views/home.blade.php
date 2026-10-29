@extends('layouts.app')

@section('title', 'Subventions rénovation énergétique Québec 2026 | ÉcoAides Canada')

@section('meta_description', 'Quelles aides sont ouvertes en 2026 pour isoler, chauffer ou changer vos fenêtres au
    Québec ? Statuts, montants et sources officielles vérifiés le 29 octobre 2026.')

@section('content')

    {{-- =========================================================
     PAGE D'ACCUEIL — ÉCOAIDES CANADA
     Contenu basé sur le document fourni, version du 29 octobre 2026.
     ========================================================= --}}

    <style>
        .home-page {
            overflow: hidden;
            color: #18251F;
        }

        .home-page .home-container {
            width: min(1160px, calc(100% - 40px));
            margin-inline: auto;
        }

        .home-page .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border: 1px solid #DCE8C1;
            border-radius: 999px;
            background: #F7FAED;
            color: #287A58;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .03em;
        }

        .home-page .hero {
            position: relative;
            padding: 76px 0 68px;
            background:
                radial-gradient(circle at 88% 18%, rgba(217, 242, 126, .18), transparent 28%),
                radial-gradient(circle at 8% 95%, rgba(40, 122, 88, .13), transparent 30%),
                linear-gradient(135deg, #F7F9F4 0%, #FFFFFF 58%, #F1F6E8 100%);
        }

        .home-page .hero-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.12fr) minmax(320px, .88fr);
            align-items: center;
            gap: 56px;
        }

        .home-page .hero h1 {
            max-width: 760px;
            margin: 22px 0 20px;
            color: #123C32;
            font-size: clamp(36px, 4.5vw, 59px);
            font-weight: 800;
            letter-spacing: -.045em;
            line-height: 1.1;
        }

        .home-page .hero h1 span {
            color: #287A58;
        }

        .home-page .hero-copy {
            max-width: 650px;
            color: #68756D;
            font-size: 16px;
            line-height: 1.9;
        }

        .home-page .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .home-page .button-primary,
        .home-page .button-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 48px;
            padding: 13px 18px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 800;
            transition: transform .2s ease, background .2s ease, border-color .2s ease;
        }

        .home-page .button-primary {
            border: 1px solid #123C32;
            background: #123C32;
            color: #fff;
            box-shadow: 0 10px 24px rgba(18, 60, 50, .13);
        }

        .home-page .button-primary:hover {
            transform: translateY(-2px);
            background: #287A58;
            color: #fff;
        }

        .home-page .button-secondary {
            border: 1px solid #DCE5DB;
            background: #fff;
            color: #123C32;
        }

        .home-page .button-secondary:hover {
            transform: translateY(-2px);
            border-color: #287A58;
            color: #287A58;
        }

        .home-page .hero-panel {
            position: relative;
            padding: 26px;
            border: 1px solid rgba(228, 234, 227, .95);
            border-radius: 26px;
            background: rgba(255, 255, 255, .9);
            box-shadow: 0 22px 65px rgba(18, 60, 50, .10);
        }

        .home-page .panel-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 14px;
            padding-bottom: 20px;
            border-bottom: 1px solid #E8EDE6;
        }

        .home-page .panel-label {
            color: #68756D;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .09em;
            text-transform: uppercase;
        }

        .home-page .panel-title {
            margin-top: 6px;
            color: #123C32;
            font-family: 'Manrope', sans-serif;
            font-size: 21px;
            font-weight: 800;
        }

        .home-page .date-chip {
            flex-shrink: 0;
            padding: 7px 9px;
            border-radius: 9px;
            background: #F7F9F4;
            color: #68756D;
            font-size: 10px;
            font-weight: 700;
        }

        .home-page .mini-program {
            display: flex;
            align-items: flex-start;
            gap: 13px;
            padding: 17px 0;
            border-bottom: 1px solid #EDF0EB;
        }

        .home-page .mini-program:last-child {
            padding-bottom: 0;
            border-bottom: 0;
        }

        .home-page .mini-icon {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 13px;
            background: #F0F6E5;
            color: #287A58;
        }

        .home-page .mini-program h3 {
            margin: 0 0 5px;
            color: #18251F;
            font-size: 14px;
            font-weight: 800;
        }

        .home-page .mini-program p {
            margin: 0;
            color: #68756D;
            font-size: 12px;
            line-height: 1.65;
        }

        .home-page .status {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 8px;
            padding: 5px 8px;
            border-radius: 999px;
            font-size: 10px;
            font-weight: 800;
        }

        .home-page .status-open {
            background: #EAF6ED;
            color: #216A3D;
        }

        .home-page .status-announced {
            background: #FFF4D9;
            color: #875B0A;
        }

        .home-page .status-closed {
            background: #FBEAEA;
            color: #9C3434;
        }

        .home-page .trust-strip {
            border-top: 1px solid #E8EDE6;
            border-bottom: 1px solid #E8EDE6;
            background: #fff;
        }

        .home-page .trust-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .home-page .trust-item {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 23px 24px;
            border-right: 1px solid #E8EDE6;
        }

        .home-page .trust-item:first-child {
            padding-left: 0;
        }

        .home-page .trust-item:last-child {
            border-right: 0;
        }

        .home-page .trust-icon {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 13px;
            background: #F7F9F4;
            color: #287A58;
        }

        .home-page .trust-item strong {
            display: block;
            color: #123C32;
            font-size: 13px;
            font-weight: 800;
        }

        .home-page .trust-item span {
            display: block;
            margin-top: 4px;
            color: #68756D;
            font-size: 11px;
            line-height: 1.6;
        }

        .home-page .section {
            padding: 76px 0;
        }

        .home-page .section-soft {
            background: #F7F9F4;
        }

        .home-page .section-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 30px;
        }

        .home-page .section-heading h2 {
            margin: 12px 0 0;
            color: #123C32;
            font-size: clamp(27px, 3vw, 38px);
            font-weight: 800;
            letter-spacing: -.035em;
            line-height: 1.2;
        }

        .home-page .section-heading p {
            max-width: 560px;
            margin: 12px 0 0;
            color: #68756D;
            font-size: 14px;
            line-height: 1.8;
        }

        .home-page .text-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            flex-shrink: 0;
            color: #287A58;
            font-size: 12px;
            font-weight: 800;
        }

        .home-page .text-link:hover {
            color: #123C32;
        }

        .home-page .program-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .home-page .program-card {
            display: flex;
            flex-direction: column;
            min-height: 100%;
            padding: 25px;
            border: 1px solid #E4EAE3;
            border-radius: 19px;
            background: #fff;
            box-shadow: 0 8px 28px rgba(18, 60, 50, .035);
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
        }

        .home-page .program-card:hover {
            transform: translateY(-4px);
            border-color: #C9D9C5;
            box-shadow: 0 18px 40px rgba(18, 60, 50, .08);
        }

        .home-page .program-card-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 12px;
        }

        .home-page .program-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            border-radius: 15px;
            background: #F0F6E5;
            color: #287A58;
        }

        .home-page .program-card h3 {
            margin: 20px 0 10px;
            color: #123C32;
            font-size: 18px;
            font-weight: 800;
        }

        .home-page .program-card p {
            margin: 0;
            color: #68756D;
            font-size: 13px;
            line-height: 1.8;
        }

        .home-page .program-amount {
            margin: 20px 0;
            padding: 15px;
            border-radius: 12px;
            background: #F7F9F4;
        }

        .home-page .program-amount small {
            display: block;
            margin-bottom: 5px;
            color: #68756D;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .04em;
        }

        .home-page .program-amount strong {
            color: #123C32;
            font-family: 'Manrope', sans-serif;
            font-size: 19px;
            font-weight: 800;
        }

        .home-page .program-card .text-link {
            margin-top: auto;
            padding-top: 18px;
        }

        .home-page .warning-box {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-top: 24px;
            padding: 19px 21px;
            border: 1px solid #F0DCA9;
            border-radius: 15px;
            background: #FFFAEC;
            color: #6D531C;
        }

        .home-page .warning-box strong {
            display: block;
            margin-bottom: 5px;
            color: #634A13;
            font-size: 13px;
            font-weight: 800;
        }

        .home-page .warning-box p {
            margin: 0;
            font-size: 12px;
            line-height: 1.8;
        }

        .home-page .topics-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;
        }

        .home-page .topic-card {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            min-height: 178px;
            padding: 21px;
            border: 1px solid #E4EAE3;
            border-radius: 17px;
            background: #fff;
            transition: transform .2s ease, border-color .2s ease;
        }

        .home-page .topic-card:hover {
            transform: translateY(-3px);
            border-color: #B9D0B4;
        }

        .home-page .topic-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 43px;
            height: 43px;
            border-radius: 13px;
            background: #F0F6E5;
            color: #287A58;
        }

        .home-page .topic-card h3 {
            margin: 17px 0 7px;
            color: #123C32;
            font-size: 14px;
            font-weight: 800;
        }

        .home-page .topic-card p {
            margin: 0;
            color: #68756D;
            font-size: 11px;
            line-height: 1.7;
        }

        .home-page .topic-arrow {
            margin-top: auto;
            padding-top: 14px;
            color: #287A58;
            font-size: 12px;
            font-weight: 800;
        }

        .home-page .how-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
            counter-reset: home-steps;
        }

        .home-page .how-step {
            position: relative;
            padding: 25px;
            border: 1px solid #E4EAE3;
            border-radius: 17px;
            background: #fff;
        }

        .home-page .step-number {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 39px;
            height: 39px;
            border-radius: 12px;
            background: #123C32;
            color: #D9F27E;
            font-family: 'Manrope', sans-serif;
            font-size: 14px;
            font-weight: 800;
        }

        .home-page .how-step h3 {
            margin: 17px 0 8px;
            color: #123C32;
            font-size: 16px;
            font-weight: 800;
        }

        .home-page .how-step p {
            margin: 0;
            color: #68756D;
            font-size: 12px;
            line-height: 1.8;
        }

        .home-page .method-panel {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 28px;
            padding: 32px;
            border: 1px solid #DDE8D7;
            border-radius: 21px;
            background: linear-gradient(135deg, #F7FAF0, #FFFFFF);
        }

        .home-page .method-panel h2 {
            margin: 0 0 10px;
            color: #123C32;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -.025em;
        }

        .home-page .method-panel p {
            max-width: 760px;
            margin: 0;
            color: #68756D;
            font-size: 13px;
            line-height: 1.9;
        }

        .home-page .faq-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .home-page .faq-item {
            padding: 22px;
            border: 1px solid #E4EAE3;
            border-radius: 15px;
            background: #fff;
        }

        .home-page .faq-item h3 {
            margin: 0 0 9px;
            color: #123C32;
            font-size: 14px;
            font-weight: 800;
        }

        .home-page .faq-item p {
            margin: 0;
            color: #68756D;
            font-size: 12px;
            line-height: 1.85;
        }

        .home-page .last-updated {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 24px;
            color: #68756D;
            font-size: 11px;
            line-height: 1.7;
        }

        @media (max-width: 950px) {
            .home-page .hero-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .home-page .hero-panel {
                max-width: 680px;
            }

            .home-page .program-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .home-page .topics-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .home-page .trust-item {
                padding-inline: 15px;
            }
        }

        @media (max-width: 650px) {
            .home-page .home-container {
                width: calc(100% - 30px);
            }

            .home-page .hero {
                padding: 48px 0 45px;
            }

            .home-page .hero h1 {
                font-size: 37px;
            }

            .home-page .hero-copy {
                font-size: 14px;
            }

            .home-page .hero-panel {
                padding: 19px;
                border-radius: 19px;
            }

            .home-page .panel-top {
                flex-direction: column;
            }

            .home-page .trust-grid {
                grid-template-columns: 1fr;
            }

            .home-page .trust-item,
            .home-page .trust-item:first-child {
                padding: 16px 0;
                border-right: 0;
                border-bottom: 1px solid #E8EDE6;
            }

            .home-page .trust-item:last-child {
                border-bottom: 0;
            }

            .home-page .section {
                padding: 52px 0;
            }

            .home-page .section-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .home-page .program-grid,
            .home-page .topics-grid,
            .home-page .how-grid,
            .home-page .faq-list {
                grid-template-columns: 1fr;
            }

            .home-page .program-card {
                padding: 21px;
            }

            .home-page .method-panel {
                grid-template-columns: 1fr;
                padding: 24px;
            }

            .home-page .hero-actions a {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .home-page *,
            .home-page *::before,
            .home-page *::after {
                transition-duration: .01ms !important;
                animation-duration: .01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>

    <div class="home-page">

        {{-- HERO --}}
        <section class="hero">
            <div class="home-container hero-grid">
                <div>
                    <span class="eyebrow">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" aria-hidden="true">
                            <path
                                d="M12 3v3m0 12v3M3 12h3m12 0h3M5.64 5.64l2.12 2.12m8.48 8.48 2.12 2.12m0-12.72-2.12 2.12m-8.48 8.48-2.12 2.12" />
                            <circle cx="12" cy="12" r="4" />
                        </svg>
                        Guide indépendant · Québec et Canada
                    </span>

                    <h1>Aides à la rénovation énergétique au Québec : <span>ce qui est ouvert en 2026</span></h1>

                    <p class="hero-copy">
                        Vous souhaitez mieux isoler votre logement, remplacer vos fenêtres ou installer une thermopompe ?
                        Retrouvez les programmes identifiés, leur statut, les conditions disponibles et les liens vers les
                        organismes officiels.
                    </p>

                    <div class="hero-actions">
                        <a href="{{ url('/quebec') }}" class="button-primary">
                            Voir les aides au Québec
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                        <a href="#aides-principales" class="button-secondary">
                            Comparer les aides
                        </a>
                    </div>

                    <div class="last-updated">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M12 7v5l3 2" />
                        </svg>
                        Contenu du dossier vérifié le 29 octobre 2026. Les statuts et montants doivent être revalidés auprès
                        des organismes avant toute décision.
                    </div>
                </div>

                <aside class="hero-panel" aria-label="Aperçu des principales aides">
                    <div class="panel-top">
                        <div>
                            <div class="panel-label">Aperçu des programmes</div>
                            <div class="panel-title">Les aides à connaître</div>
                        </div>
                        <span class="date-chip">État du dossier : 29 oct. 2026</span>
                    </div>

                    <div class="mini-program">
                        <div class="mini-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 10 9-7 9 7" />
                                <path d="M5 9v11h14V9" />
                                <path d="M9 20v-6h6v6" />
                            </svg>
                        </div>
                        <div>
                            <h3>Rénoclimat</h3>
                            <p>Isolation, étanchéité, fenêtres, portes et certains systèmes mécaniques.</p>
                            <span class="status status-open">● Ouvert — nouvelles règles</span>
                        </div>
                    </div>

                    <div class="mini-program">
                        <div class="mini-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3v18M5 7h14M5 17h14" />
                                <path d="m7 3-2 4 2 4m10-8 2 4-2 4M7 13l-2 4 2 4m10-8 2 4-2 4" />
                            </svg>
                        </div>
                        <div>
                            <h3>LogisVert — Hydro-Québec</h3>
                            <p>Thermopompes, géothermie et certaines mesures d'efficacité énergétique.</p>
                            <span class="status status-open">● Ouvert selon le dossier</span>
                        </div>
                    </div>

                    <div class="mini-program">
                        <div class="mini-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3v18M3 12h18" />
                                <circle cx="12" cy="12" r="9" />
                            </svg>
                        </div>
                        <div>
                            <h3>Remise nationale pour thermopompes</h3>
                            <p>Programme annoncé pour les thermopompes électriques.</p>
                            <span class="status status-announced">● Annoncé — demandes non ouvertes</span>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        {{-- TRUST / PROMESSES --}}
        <section class="trust-strip" aria-label="Engagements du portail">
            <div class="home-container trust-grid">
                <div class="trust-item">
                    <div class="trust-icon" aria-hidden="true">
                        <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 12l2 2 4-4" />
                            <circle cx="12" cy="12" r="9" />
                        </svg>
                    </div>
                    <div>
                        <strong>Statut clairement indiqué</strong>
                        <span>Ouvert, fermé, annoncé ou à confirmer.</span>
                    </div>
                </div>

                <div class="trust-item">
                    <div class="trust-icon" aria-hidden="true">
                        <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <path d="M14 2v6h6M8 13h8M8 17h8" />
                        </svg>
                    </div>
                    <div>
                        <strong>Sources officielles</strong>
                        <span>Des liens pour vérifier les conditions auprès des organismes.</span>
                    </div>
                </div>

                <div class="trust-item">
                    <div class="trust-icon" aria-hidden="true">
                        <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z" />
                            <path d="m9 12 2 2 4-4" />
                        </svg>
                    </div>
                    <div>
                        <strong>Information indépendante</strong>
                        <span>Le portail ne traite pas les demandes de subvention.</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- PRINCIPALES AIDES --}}
        <section class="section" id="aides-principales">
            <div class="home-container">
                <div class="section-heading">
                    <div>
                        <span class="eyebrow">Programmes à connaître</span>
                        <h2>En résumé : les principales aides</h2>
                        <p>Un aperçu des programmes cités dans le dossier. Les montants sont indicatifs et doivent être
                            confirmés dans les guides officiels selon votre logement et vos travaux.</p>
                    </div>
                    <a href="{{ url('/quebec') }}" class="text-link">
                        Tous les détails au Québec
                        <span aria-hidden="true">→</span>
                    </a>
                </div>

                <div class="program-grid">
                    <article class="program-card">
                        <div class="program-card-top">
                            <div class="program-icon" aria-hidden="true">
                                <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m3 10 9-7 9 7" />
                                    <path d="M5 9v11h14V9" />
                                    <path d="M9 20v-6h6v6" />
                                </svg>
                            </div>
                            <span class="status status-open">Ouvert</span>
                        </div>
                        <h3>Rénoclimat</h3>
                        <p>Pour certains travaux d'isolation, d'étanchéité, de remplacement de fenêtres et de portes, selon
                            les règles d'admissibilité.</p>
                        <div class="program-amount">
                            <small>Exemples de maximums indiqués dans le dossier</small>
                            <strong>Jusqu'à 7 000 $ pour les murs</strong>
                        </div>
                        <a href="{{ url('/isolation') }}" class="text-link">
                            Comprendre les travaux admissibles <span aria-hidden="true">→</span>
                        </a>
                    </article>

                    <article class="program-card">
                        <div class="program-card-top">
                            <div class="program-icon" aria-hidden="true">
                                <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 3v18M5 7h14M5 17h14" />
                                    <path d="m7 3-2 4 2 4m10-8 2 4-2 4M7 13l-2 4 2 4m10-8 2 4-2 4" />
                                </svg>
                            </div>
                            <span class="status status-open">Ouvert</span>
                        </div>
                        <h3>LogisVert</h3>
                        <p>Programme d'Hydro-Québec portant notamment sur certaines thermopompes, la géothermie et d'autres
                            mesures admissibles.</p>
                        <div class="program-amount">
                            <small>Exemple mentionné dans le dossier</small>
                            <strong>Thermopompe : jusqu'à 6 700 $</strong>
                        </div>
                        <a href="{{ url('/thermopompes') }}" class="text-link">
                            Voir les aides pour thermopompes <span aria-hidden="true">→</span>
                        </a>
                    </article>

                    <article class="program-card">
                        <div class="program-card-top">
                            <div class="program-icon" aria-hidden="true">
                                <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M12 7v5l3 2" />
                                </svg>
                            </div>
                            <span class="status status-announced">Annoncé</span>
                        </div>
                        <h3>Remise nationale pour thermopompes</h3>
                        <p>Une aide fédérale annoncée, dont les demandes ne sont pas encore ouvertes selon le contenu
                            fourni.</p>
                        <div class="program-amount">
                            <small>Montants annoncés dans le dossier</small>
                            <strong>Jusqu'à 10 000 $ / 2 000 $</strong>
                        </div>
                        <a href="{{ url('/thermopompes') }}" class="text-link">
                            Lire les informations disponibles <span aria-hidden="true">→</span>
                        </a>
                    </article>
                </div>

                <div class="warning-box" role="note">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
                        style="flex-shrink:0">
                        <path d="M10.3 3.9 2.6 17.2A2 2 0 0 0 4.3 20h15.4a2 2 0 0 0 1.7-2.8L13.7 3.9a2 2 0 0 0-3.4 0Z" />
                        <path d="M12 9v4m0 3h.01" />
                    </svg>
                    <div>
                        <strong>Attention aux programmes fermés</strong>
                        <p>Selon le dossier fourni, la Subvention canadienne pour des maisons plus vertes est fermée et le
                            programme Chauffez vert est indiqué comme fermé depuis le 31 mars 2026. Vérifiez toujours le
                            statut actuel sur le site officiel avant d'engager des dépenses.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- TROUVER PAR TRAVAUX --}}
        <section class="section section-soft">
            <div class="home-container">
                <div class="section-heading">
                    <div>
                        <span class="eyebrow">Par type de projet</span>
                        <h2>Quelle aide pour vos travaux ?</h2>
                        <p>Choisissez le type de rénovation envisagé pour accéder aux informations et aux conditions
                            présentées dans nos guides.</p>
                    </div>
                </div>

                <div class="topics-grid">
                    <a href="{{ url('/thermopompes') }}" class="topic-card">
                        <div class="topic-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3v18M5 7h14M5 17h14" />
                                <path d="m7 3-2 4 2 4m10-8 2 4-2 4" />
                            </svg>
                        </div>
                        <h3>Thermopompes</h3>
                        <p>Programmes, équipements concernés et statut des aides.</p>
                        <span class="topic-arrow">Consulter le guide →</span>
                    </a>

                    <a href="{{ url('/isolation') }}" class="topic-card">
                        <div class="topic-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 10 9-7 9 7" />
                                <path d="M5 9v11h14V9" />
                                <path d="M8 12h8M8 15h8" />
                            </svg>
                        </div>
                        <h3>Isolation et étanchéité</h3>
                        <p>Toit, murs, fondations et réduction des pertes de chaleur.</p>
                        <span class="topic-arrow">Consulter le guide →</span>
                    </a>

                    <a href="{{ url('/fenetres-portes') }}" class="topic-card">
                        <div class="topic-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="3" width="16" height="18" rx="1" />
                                <path d="M12 3v18M4 12h16" />
                            </svg>
                        </div>
                        <h3>Fenêtres et portes</h3>
                        <p>Montants mentionnés, critères et limites des programmes.</p>
                        <span class="topic-arrow">Consulter le guide →</span>
                    </a>

                    <a href="{{ url('/faibles-revenus') }}" class="topic-card">
                        <div class="topic-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                <circle cx="10" cy="7" r="4" />
                                <path d="M20 8v6m-3-3h6" />
                            </svg>
                        </div>
                        <h3>Ménages à revenu modeste</h3>
                        <p>Programmes ciblés et conditions encore à confirmer.</p>
                        <span class="topic-arrow">Consulter le guide →</span>
                    </a>
                </div>
            </div>
        </section>

        {{-- COMMENT UTILISER LE SITE --}}
        <section class="section">
            <div class="home-container">
                <div class="section-heading">
                    <div>
                        <span class="eyebrow">Simple et transparent</span>
                        <h2>Comment utiliser ce portail ?</h2>
                        <p>Quelques étapes pour vous orienter sans confondre information générale et admissibilité
                            officielle.</p>
                    </div>
                </div>

                <div class="how-grid">
                    <article class="how-step">
                        <div class="step-number">01</div>
                        <h3>Identifiez votre projet</h3>
                        <p>Choisissez votre type de travaux : thermopompe, isolation, fenêtres et portes ou rénovation
                            destinée aux ménages à revenu modeste.</p>
                    </article>

                    <article class="how-step">
                        <div class="step-number">02</div>
                        <h3>Vérifiez le statut et les critères</h3>
                        <p>Lisez les conditions indiquées et vérifiez si le programme est ouvert, annoncé, fermé ou si
                            certaines informations restent à confirmer.</p>
                    </article>

                    <article class="how-step">
                        <div class="step-number">03</div>
                        <h3>Consultez la source officielle</h3>
                        <p>Avant de commencer les travaux ou de faire un achat, confirmez les montants, les dates et votre
                            admissibilité auprès de l'organisme responsable.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- MÉTHODOLOGIE --}}
        <section class="section section-soft">
            <div class="home-container">
                <div class="method-panel">
                    <div>
                        <h2>Des informations vérifiables, pas des promesses</h2>
                        <p>Chaque fiche doit préciser le nom du programme, le territoire concerné, les travaux admissibles,
                            les conditions, le statut, la source officielle et la date de dernière vérification. Les
                            informations non confirmées sont signalées comme telles.</p>
                    </div>
                    <a href="{{ url('/methodologie') }}" class="button-primary">
                        Notre méthodologie
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section class="section">
            <div class="home-container">
                <div class="section-heading">
                    <div>
                        <span class="eyebrow">Questions fréquentes</span>
                        <h2>Avant de commencer vos travaux</h2>
                        <p>Les réponses ci-dessous reprennent les points de vigilance présents dans le contenu fourni.</p>
                    </div>
                </div>

                <div class="faq-list">
                    <article class="faq-item">
                        <h3>La Subvention canadienne pour des maisons plus vertes est-elle encore ouverte ?</h3>
                        <p>Non. Le document fourni indique que le programme est fermé. Consultez la page des sources
                            officielles pour retrouver les références et vérifier toute mise à jour.</p>
                    </article>

                    <article class="faq-item">
                        <h3>Rénoclimat finance-t-il les thermopompes ?</h3>
                        <p>Selon le contenu fourni, les thermopompes ne sont pas admissibles à Rénoclimat. Au Québec,
                            consultez plutôt les informations relatives à LogisVert et vérifiez les conditions actuelles
                            auprès d'Hydro-Québec.</p>
                    </article>

                    <article class="faq-item">
                        <h3>Puis-je commencer les travaux avant de confirmer mon admissibilité ?</h3>
                        <p>Ne vous basez pas uniquement sur ce portail pour prendre cette décision. Vérifiez les règles
                            applicables à votre dossier et les démarches à réaliser avant les travaux auprès de l'organisme
                            responsable.</p>
                    </article>

                    <article class="faq-item">
                        <h3>Ce portail peut-il déposer une demande à ma place ?</h3>
                        <p>Non. ÉcoAides Canada est un portail d'information indépendant. Les demandes se font auprès des
                            programmes officiels et le portail ne garantit aucune aide.</p>
                    </article>
                </div>

                <div class="last-updated">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="9" />
                        <path d="M12 7v5l3 2" />
                    </svg>
                    Date du contenu source : 29 octobre 2026. Les statuts et montants peuvent évoluer ; consultez les
                    sources officielles avant toute décision.
                </div>
            </div>
        </section>

        {{-- SOURCES OFFICIELLES / CTA FINAL --}}
        <section class="section" style="padding-top:0">
            <div class="home-container">
                <div
                    style="padding:34px;border-radius:22px;background:#123C32;color:#fff;display:flex;align-items:center;justify-content:space-between;gap:24px;flex-wrap:wrap">
                    <div style="max-width:700px">
                        <p
                            style="margin:0 0 9px;color:#D9F27E;font-size:11px;font-weight:800;letter-spacing:.1em;text-transform:uppercase">
                            Prochaine étape</p>
                        <h2
                            style="margin:0 0 10px;color:#fff;font-family:'Manrope',sans-serif;font-size:clamp(24px,3vw,32px);font-weight:800;line-height:1.25">
                            Confirmez les informations auprès des organismes responsables.</h2>
                        <p style="margin:0;color:rgba(255,255,255,.75);font-size:13px;line-height:1.8">Consultez les
                            références officielles recensées dans le dossier et vérifiez les conditions avant d'engager des
                            dépenses.</p>
                    </div>
                    <a href="{{ url('/sources-officielles') }}" class="button-secondary"
                        style="border-color:#D9F27E;background:#D9F27E;color:#123C32">
                        Voir les sources officielles
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M7 17 17 7M7 7h10v10" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

    </div>

@endsection
