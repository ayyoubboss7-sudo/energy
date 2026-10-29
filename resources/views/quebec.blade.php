@extends('layouts.app')

@section('title', 'Aides à la rénovation énergétique au Québec en 2026 | ÉcoAides Canada')

@section('content')
<style>
    .qc-page {
        --qc-forest: #123C32;
        --qc-green: #287A58;
        --qc-lime: #D9F27E;
        --qc-cream: #F7F9F4;
        --qc-ink: #18251F;
        --qc-muted: #68756D;
        color: var(--qc-ink);
        background: var(--qc-cream);
        overflow: hidden;
    }
    .qc-page * { box-sizing: border-box; }
    .qc-container { width: min(1180px, calc(100% - 40px)); margin: 0 auto; }
    .qc-eyebrow {
        display: inline-flex; align-items: center; gap: 9px;
        color: var(--qc-green); font-size: .78rem; font-weight: 800;
        letter-spacing: .12em; text-transform: uppercase;
    }
    .qc-eyebrow::before { content: ""; width: 25px; height: 2px; background: currentColor; }
    .qc-btn {
        display: inline-flex; align-items: center; justify-content: center; gap: 10px;
        min-height: 48px; padding: 13px 20px; border-radius: 999px;
        font-weight: 750; font-size: .92rem; text-decoration: none;
        transition: transform .2s ease, background .2s ease, box-shadow .2s ease;
    }
    .qc-btn:hover { transform: translateY(-2px); }
    .qc-btn-primary { background: var(--qc-lime); color: var(--qc-forest); box-shadow: 0 8px 24px #071d1420; }
    .qc-btn-primary:hover { background: #e5f9a9; }
    .qc-btn-light { background: #fff; color: var(--qc-forest); }
    .qc-btn-outline { border: 1px solid #ffffff70; color: #fff; }
    .qc-hero {
        position: relative; isolation: isolate; color: #fff;
        padding: clamp(58px, 8vw, 100px) 0 76px;
        background: var(--qc-forest);
    }
    .qc-hero::before {
        content: ""; position: absolute; inset: 0; z-index: -2;
        background:
          linear-gradient(90deg, rgba(10,39,31,.96) 0%, rgba(10,39,31,.88) 40%, rgba(10,39,31,.24) 100%),
          url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=2000&q=85') center 48%/cover;
    }
    .qc-hero::after {
        content: ""; position: absolute; z-index: -1; width: 360px; height: 360px;
        right: -140px; bottom: -170px; border: 1px solid #d9f27e40; border-radius: 50%;
        box-shadow: 0 0 0 45px #d9f27e0c, 0 0 0 90px #d9f27e08;
    }
    .qc-hero-grid { display: grid; grid-template-columns: minmax(0, 1.12fr) minmax(300px, .78fr); gap: 48px; align-items: center; }
    .qc-hero .qc-eyebrow { color: var(--qc-lime); }
    .qc-hero h1 { max-width: 720px; margin: 20px 0 20px; font-size: clamp(2.45rem, 5.2vw, 4.7rem); line-height: 1.04; letter-spacing: -.055em; font-weight: 850; }
    .qc-hero h1 span { color: var(--qc-lime); }
    .qc-hero-copy { max-width: 620px; color: #e1ebe5; font-size: clamp(1rem, 1.5vw, 1.13rem); line-height: 1.8; }
    .qc-hero-actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 28px; }
    .qc-hero-note { display: flex; align-items: center; gap: 10px; margin-top: 25px; color: #d5e3db; font-size: .84rem; }
    .qc-hero-note span { display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px; border-radius: 50%; background: #ffffff18; color: var(--qc-lime); }
    .qc-hero-visual { position: relative; min-height: 390px; }
    .qc-hero-photo {
        position: absolute; inset: 0 0 28px 25px; border-radius: 28px; overflow: hidden;
        border: 1px solid #ffffff38; box-shadow: 0 28px 70px #061c1640;
    }
    .qc-hero-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .qc-hero-photo::after { content: ""; position: absolute; inset: 0; background: linear-gradient(0deg,#09291f75,transparent 50%); }
    .qc-floating-card {
        position: absolute; left: 0; bottom: 0; max-width: 255px; padding: 19px 20px;
        border-radius: 18px; color: var(--qc-ink); background: #fff; box-shadow: 0 18px 45px #061c1633;
    }
    .qc-floating-card small { display: block; color: var(--qc-muted); font-weight: 700; margin-bottom: 6px; }
    .qc-floating-card strong { display: block; font-size: 1.8rem; letter-spacing: -.04em; color: var(--qc-forest); }
    .qc-floating-card span { font-size: .82rem; color: var(--qc-muted); line-height: 1.5; display: block; margin-top: 4px; }
    .qc-trust-strip { background: #fff; border-bottom: 1px solid #e4eae3; }
    .qc-trust-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; padding: 23px 0; }
    .qc-trust-item { display: flex; align-items: center; gap: 13px; color: var(--qc-muted); font-size: .88rem; line-height: 1.45; }
    .qc-trust-icon { width: 40px; height: 40px; flex: 0 0 40px; display: grid; place-items: center; border-radius: 13px; background: #eaf3e9; color: var(--qc-green); font-size: 1.15rem; }
    .qc-section { padding: clamp(58px, 7vw, 90px) 0; }
    .qc-section-white { background: #fff; }
    .qc-section-head { display: flex; justify-content: space-between; gap: 28px; align-items: end; margin-bottom: 32px; }
    .qc-section-head h2 { max-width: 700px; margin: 12px 0 0; color: var(--qc-forest); font-size: clamp(1.9rem, 3.8vw, 3.1rem); line-height: 1.12; letter-spacing: -.045em; }
    .qc-section-head p { max-width: 440px; color: var(--qc-muted); line-height: 1.75; margin: 0; }
    .qc-program-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
    .qc-program-card {
        position: relative; padding: 26px; background: #fff; border: 1px solid #e3e9e1;
        border-radius: 22px; box-shadow: 0 10px 30px #123c3208; display: flex; flex-direction: column;
    }
    .qc-program-card.featured { background: var(--qc-forest); color: #fff; border-color: var(--qc-forest); }
    .qc-program-top { display: flex; justify-content: space-between; align-items: center; gap: 10px; margin-bottom: 23px; }
    .qc-program-mark { display: grid; place-items: center; width: 47px; height: 47px; border-radius: 15px; background: #eaf3e9; color: var(--qc-green); font-size: 1.3rem; }
    .featured .qc-program-mark { background: #ffffff18; color: var(--qc-lime); }
    .qc-status { display: inline-flex; align-items: center; gap: 7px; border-radius: 999px; padding: 7px 10px; font-size: .73rem; font-weight: 800; }
    .qc-status::before { content: ""; width: 7px; height: 7px; border-radius: 50%; background: currentColor; }
    .qc-status-open { color: #216b46; background: #e2f5e7; }
    .qc-status-announced { color: #8c5a0b; background: #fff0cb; }
    .qc-status-closed { color: #8b3a3a; background: #f9e4e4; }
    .qc-program-card h3 { font-size: 1.35rem; margin: 0 0 10px; color: var(--qc-forest); letter-spacing: -.025em; }
    .qc-program-card.featured h3 { color: #fff; }
    .qc-program-card p { color: var(--qc-muted); font-size: .93rem; line-height: 1.7; margin: 0 0 20px; }
    .qc-program-card.featured p { color: #d8e6de; }
    .qc-program-amount { padding: 17px 0; margin-top: auto; border-top: 1px solid #e5ebe4; }
    .featured .qc-program-amount { border-color: #ffffff28; }
    .qc-program-amount small { display: block; color: var(--qc-muted); font-size: .79rem; margin-bottom: 5px; }
    .featured .qc-program-amount small { color: #d0dfd6; }
    .qc-program-amount strong { color: var(--qc-forest); font-size: 1.65rem; letter-spacing: -.04em; }
    .featured .qc-program-amount strong { color: var(--qc-lime); }
    .qc-card-link { display: inline-flex; align-items: center; gap: 8px; margin-top: 5px; color: var(--qc-green); font-weight: 800; text-decoration: none; font-size: .88rem; }
    .featured .qc-card-link { color: var(--qc-lime); }
    .qc-alert { display: flex; gap: 13px; align-items: flex-start; margin-top: 23px; padding: 18px 20px; border: 1px solid #f0dba7; border-radius: 16px; background: #fff8e8; color: #6f4b12; line-height: 1.65; font-size: .9rem; }
    .qc-alert strong { display: block; margin-bottom: 2px; }
    .qc-split { display: grid; grid-template-columns: .9fr 1.1fr; gap: clamp(32px, 6vw, 72px); align-items: center; }
    .qc-photo-stack { position: relative; min-height: 460px; }
    .qc-photo-main { position: absolute; inset: 0 50px 45px 0; border-radius: 25px; overflow: hidden; }
    .qc-photo-main img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .qc-photo-small { position: absolute; width: 48%; height: 190px; right: 0; bottom: 0; border: 7px solid var(--qc-cream); border-radius: 22px; overflow: hidden; }
    .qc-photo-small img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .qc-photo-tag { position: absolute; left: 18px; top: 18px; border-radius: 999px; background: #fff; color: var(--qc-forest); padding: 10px 14px; font-weight: 800; font-size: .78rem; box-shadow: 0 8px 20px #0002; }
    .qc-copy h2 { margin: 13px 0 18px; font-size: clamp(2rem, 3.6vw, 3rem); line-height: 1.12; letter-spacing: -.045em; color: var(--qc-forest); }
    .qc-copy > p { color: var(--qc-muted); line-height: 1.8; margin: 0 0 22px; }
    .qc-check-list { display: grid; gap: 15px; padding: 0; margin: 22px 0 28px; list-style: none; }
    .qc-check-list li { display: flex; gap: 12px; align-items: flex-start; line-height: 1.6; }
    .qc-check { display: grid; place-items: center; width: 24px; height: 24px; flex: 0 0 24px; margin-top: 1px; border-radius: 50%; background: #e1f0df; color: var(--qc-green); font-size: .8rem; font-weight: 900; }
    .qc-table-wrap { overflow-x: auto; border: 1px solid #e1e8e0; border-radius: 18px; background: #fff; }
    .qc-table { width: 100%; border-collapse: collapse; min-width: 650px; }
    .qc-table th, .qc-table td { padding: 17px 20px; text-align: left; border-bottom: 1px solid #e8ede7; }
    .qc-table th { background: #edf4eb; color: var(--qc-forest); font-size: .78rem; letter-spacing: .04em; text-transform: uppercase; }
    .qc-table td { color: #526157; font-size: .92rem; }
    .qc-table td strong { color: var(--qc-forest); }
    .qc-table tr:last-child td { border-bottom: 0; }
    .qc-table-note { margin: 13px 0 0; font-size: .82rem; color: var(--qc-muted); line-height: 1.65; }
    .qc-photo-banner { position: relative; color: #fff; border-radius: 28px; overflow: hidden; padding: clamp(32px, 5vw, 58px); background: var(--qc-forest); }
    .qc-photo-banner::before { content: ""; position: absolute; inset: 0; background: linear-gradient(90deg,#102f27f2,#102f27bd 60%,#102f2740), url('https://images.unsplash.com/photo-1621905251918-48416bd8575a?auto=format&fit=crop&w=1600&q=85') center/cover; z-index: 0; }
    .qc-photo-banner > * { position: relative; z-index: 1; }
    .qc-photo-banner h2 { max-width: 660px; font-size: clamp(1.9rem, 4vw, 3.1rem); line-height: 1.1; letter-spacing: -.04em; margin: 12px 0 15px; }
    .qc-photo-banner p { max-width: 650px; color: #dce8e1; line-height: 1.75; }
    .qc-steps { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 18px; counter-reset: qc-step; }
    .qc-step { padding: 24px; border-radius: 20px; border: 1px solid #e3e9e1; background: #fff; counter-increment: qc-step; }
    .qc-step-number { width: 43px; height: 43px; display: grid; place-items: center; border-radius: 14px; background: var(--qc-forest); color: var(--qc-lime); font-weight: 900; margin-bottom: 18px; }
    .qc-step h3 { color: var(--qc-forest); font-size: 1.08rem; margin: 0 0 8px; }
    .qc-step p { color: var(--qc-muted); line-height: 1.7; font-size: .9rem; margin: 0; }
    .qc-closed-grid { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 15px; }
    .qc-closed-card { padding: 20px; border: 1px solid #eadede; border-radius: 17px; background: #fff; }
    .qc-closed-card h3 { color: #603939; font-size: 1rem; margin: 0 0 9px; }
    .qc-closed-card p { color: var(--qc-muted); font-size: .88rem; line-height: 1.65; margin: 0 0 13px; }
    .qc-faq { display: grid; gap: 12px; }
    .qc-faq details { border: 1px solid #e2e9e1; border-radius: 16px; background: #fff; padding: 18px 20px; }
    .qc-faq summary { cursor: pointer; font-weight: 800; color: var(--qc-forest); list-style: none; display: flex; justify-content: space-between; gap: 18px; }
    .qc-faq summary::-webkit-details-marker { display: none; }
    .qc-faq summary::after { content: "+"; color: var(--qc-green); font-size: 1.25rem; line-height: 1; }
    .qc-faq details[open] summary::after { content: "−"; }
    .qc-faq details p { color: var(--qc-muted); line-height: 1.75; margin: 14px 0 0; }
    .qc-sources { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 20px; }
    .qc-source-link { display: inline-flex; align-items: center; gap: 8px; padding: 10px 13px; border-radius: 999px; background: #eaf2e8; color: var(--qc-forest); font-size: .82rem; font-weight: 800; text-decoration: none; }
    .qc-source-link:hover { background: #dcebd9; }
    .qc-last-update { display: flex; flex-wrap: wrap; justify-content: space-between; gap: 15px; padding: 17px 0; color: var(--qc-muted); font-size: .82rem; border-top: 1px solid #e1e8e0; }
    .qc-bottom-cta { background: var(--qc-lime); padding: 38px 0; }
    .qc-bottom-cta-inner { display: flex; align-items: center; justify-content: space-between; gap: 25px; }
    .qc-bottom-cta h2 { color: var(--qc-forest); font-size: clamp(1.5rem, 3vw, 2.15rem); line-height: 1.2; letter-spacing: -.04em; margin: 0 0 8px; }
    .qc-bottom-cta p { margin: 0; color: #365343; line-height: 1.65; }
    .qc-bottom-cta .qc-btn { background: var(--qc-forest); color: #fff; flex-shrink: 0; }
    .qc-page a:focus-visible, .qc-page summary:focus-visible { outline: 3px solid #87a942; outline-offset: 3px; }
    @media (max-width: 900px) {
        .qc-hero-grid, .qc-split { grid-template-columns: 1fr; }
        .qc-hero-visual { min-height: 360px; max-width: 560px; width: 100%; }
        .qc-program-grid { grid-template-columns: 1fr 1fr; }
        .qc-section-head { align-items: flex-start; flex-direction: column; }
        .qc-trust-grid { grid-template-columns: 1fr; gap: 13px; }
    }
    @media (max-width: 620px) {
        .qc-container { width: min(100% - 28px, 1180px); }
        .qc-hero { padding-top: 48px; }
        .qc-hero-grid { gap: 35px; }
        .qc-hero-visual { min-height: 300px; }
        .qc-hero-photo { left: 14px; }
        .qc-floating-card { max-width: 225px; padding: 15px; }
        .qc-program-grid, .qc-steps, .qc-closed-grid { grid-template-columns: 1fr; }
        .qc-program-card { padding: 22px; }
        .qc-photo-stack { min-height: 350px; }
        .qc-photo-main { right: 28px; bottom: 35px; }
        .qc-photo-small { height: 135px; width: 48%; border-width: 5px; }
        .qc-bottom-cta-inner { align-items: flex-start; flex-direction: column; }
        .qc-bottom-cta .qc-btn { width: 100%; }
    }
    @media (prefers-reduced-motion: reduce) {
        .qc-page *, .qc-page *::before, .qc-page *::after { transition: none !important; scroll-behavior: auto !important; }
    }
</style>

<main class="qc-page">
    {{-- HERO --}}
    <section class="qc-hero">
        <div class="qc-container qc-hero-grid">
            <div>
                <span class="qc-eyebrow">Québec · Aides à la rénovation</span>
                <h1>Rénover mieux.<br><span>Économiser durablement.</span></h1>
                <p class="qc-hero-copy">
                    Découvrez les programmes d’aide à la rénovation énergétique au Québec :
                    montants, travaux admissibles, conditions et statut de chaque programme,
                    avec des liens vers les sources officielles.
                </p>
                <div class="qc-hero-actions">
                    <a class="qc-btn qc-btn-primary" href="#programmes">Explorer les aides <span aria-hidden="true">↗</span></a>
                    <a class="qc-btn qc-btn-outline" href="#sources">Voir les sources officielles</a>
                </div>
                <div class="qc-hero-note">
                    <span aria-hidden="true">✓</span>
                    Informations éditoriales vérifiées le 29 octobre 2026 — vérifiez les conditions avant les travaux.
                </div>
            </div>
            <div class="qc-hero-visual" aria-label="Maison rénovée et écoénergétique">
                <div class="qc-hero-photo">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=85"
                         alt="Maison contemporaine entourée de verdure" fetchpriority="high">
                </div>
                <div class="qc-floating-card">
                    <small>Exemple de montant maximal</small>
                    <strong>7 000 $</strong>
                    <span>Pour l’isolation des murs extérieurs d’une maison avec Rénoclimat, sous conditions.</span>
                </div>
            </div>
        </div>
    </section>

    {{-- DISCLAIMER / TRUST --}}
    <section class="qc-trust-strip" aria-label="À savoir">
        <div class="qc-container qc-trust-grid">
            <div class="qc-trust-item"><span class="qc-trust-icon" aria-hidden="true">✓</span><span><strong>Statuts distingués</strong><br>Ouvert, annoncé ou fermé selon les informations officielles.</span></div>
            <div class="qc-trust-item"><span class="qc-trust-icon" aria-hidden="true">↗</span><span><strong>Sources officielles</strong><br>Liens directs vers Québec.ca, Hydro‑Québec et Canada.ca.</span></div>
            <div class="qc-trust-item"><span class="qc-trust-icon" aria-hidden="true">i</span><span><strong>Portail indépendant</strong><br>ÉcoAides Canada n’est pas un site gouvernemental et ne garantit aucune aide.</span></div>
        </div>
    </section>

    {{-- PROGRAMMES --}}
    <section class="qc-section" id="programmes">
        <div class="qc-container">
            <div class="qc-section-head">
                <div>
                    <span class="qc-eyebrow">Les programmes</span>
                    <h2>Quelles aides regarder en premier ?</h2>
                </div>
                <p>Le bon programme dépend du type de travaux, de votre habitation et des critères d’admissibilité. Les montants affichés sont des maximums, pas une garantie de paiement.</p>
            </div>

            <div class="qc-program-grid">
                <article class="qc-program-card featured">
                    <div class="qc-program-top">
                        <span class="qc-program-mark" aria-hidden="true">⌂</span>
                        <span class="qc-status qc-status-open">Ouvert*</span>
                    </div>
                    <h3>Rénoclimat</h3>
                    <p>Isolation, remplacement de fenêtres et certaines mesures d’adaptation aux inondations. Les modalités ont changé le 1er octobre 2026.</p>
                    <div class="qc-program-amount">
                        <small>Exemples de montants maximaux</small>
                        <strong>Jusqu’à 7 000 $</strong>
                    </div>
                    <a class="qc-card-link" href="#renoclimat">Voir les travaux et conditions <span aria-hidden="true">→</span></a>
                </article>

                <article class="qc-program-card">
                    <div class="qc-program-top">
                        <span class="qc-program-mark" aria-hidden="true">♨</span>
                        <span class="qc-status qc-status-open">En vigueur</span>
                    </div>
                    <h3>LogisVert</h3>
                    <p>Programme d’Hydro‑Québec pour différentes mesures d’efficacité énergétique, dont certaines thermopompes et mesures d’isolation.</p>
                    <div class="qc-program-amount">
                        <small>Thermopompes admissibles</small>
                        <strong>Selon le modèle</strong>
                    </div>
                    <a class="qc-card-link" href="#logisvert">Voir les montants <span aria-hidden="true">→</span></a>
                </article>

                <article class="qc-program-card">
                    <div class="qc-program-top">
                        <span class="qc-program-mark" aria-hidden="true">＋</span>
                        <span class="qc-status qc-status-announced">Annoncé</span>
                    </div>
                    <h3>Remise nationale pour thermopompes</h3>
                    <p>Un programme fédéral annoncé en octobre 2026. À la date de vérification indiquée, les demandes ne sont pas ouvertes.</p>
                    <div class="qc-program-amount">
                        <small>Montants annoncés</small>
                        <strong>Jusqu’à 10 000 $</strong>
                    </div>
                    <a class="qc-card-link" href="#federal">Comprendre le statut <span aria-hidden="true">→</span></a>
                </article>
            </div>

            <div class="qc-alert" role="note">
                <span aria-hidden="true">⚠</span>
                <div><strong>Important : un montant maximal n’est pas une promesse de subvention.</strong>
                    Vérifiez l’admissibilité de votre habitation, des travaux et des équipements auprès de l’organisme responsable avant de signer un contrat.
                </div>
            </div>
            <p class="qc-table-note">* Rénoclimat : les nouvelles modalités sont en vigueur, mais le portail sécurisé de dépôt des demandes est indiqué comme étant en développement par Québec.ca. Consultez la page officielle pour les démarches en cours.</p>
        </div>
    </section>

    {{-- RENOC LIMAT --}}
    <section class="qc-section qc-section-white" id="renoclimat">
        <div class="qc-container qc-split">
            <div class="qc-photo-stack">
                <div class="qc-photo-main">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1100&q=85"
                         alt="Intérieur lumineux d’une maison rénovée" loading="lazy">
                </div>
                <div class="qc-photo-small">
                    <img src="https://images.unsplash.com/photo-1635424710928-4b1a7f4a7f0a?auto=format&fit=crop&w=700&q=80"
                         alt="Détail de rénovation résidentielle" loading="lazy">
                </div>
                <span class="qc-photo-tag">Rénoclimat · Québec.ca</span>
            </div>
            <div class="qc-copy">
                <span class="qc-eyebrow">01 · Rénoclimat</span>
                <h2>Améliorez l’enveloppe de votre maison.</h2>
                <p>Depuis le 1er octobre 2026, Rénoclimat propose un parcours simplifié pour certains travaux d’efficacité énergétique et de nouvelles mesures pour l’adaptation aux inondations.</p>
                <ul class="qc-check-list">
                    <li><span class="qc-check">✓</span><span><strong>Isolation :</strong> toit, murs extérieurs et fondations selon les critères du programme.</span></li>
                    <li><span class="qc-check">✓</span><span><strong>Fenêtres :</strong> remplacement admissible, sous réserve des critères du Guide du participant.</span></li>
                    <li><span class="qc-check">✓</span><span><strong>Entrepreneur :</strong> les travaux doivent être réalisés par un entrepreneur détenant les licences appropriées.</span></li>
                    <li><span class="qc-check">✓</span><span><strong>Thermopompes :</strong> elles ne sont pas admissibles à Rénoclimat selon le cahier des charges; consultez plutôt LogisVert.</span></li>
                </ul>
                <a class="qc-btn qc-btn-primary" href="https://www.quebec.ca/habitation-territoire/chauffage-consommation-energie/aide-financiere-renovation-ecoenergetique/renoclimat/nouveautes-adaptation-inondations" target="_blank" rel="noopener noreferrer">Consulter Québec.ca ↗</a>
            </div>
        </div>
    </section>

    <section class="qc-section" aria-labelledby="renoclimat-table-title">
        <div class="qc-container">
            <div class="qc-section-head">
                <div>
                    <span class="qc-eyebrow">Montants indicatifs</span>
                    <h2 id="renoclimat-table-title">Rénoclimat : exemples d’aide maximale</h2>
                </div>
                <p>Les montants varient selon le type d’habitation, la mesure et les critères applicables. Le Guide du participant fait foi.</p>
            </div>
            <div class="qc-table-wrap">
                <table class="qc-table">
                    <thead><tr><th>Travaux</th><th>Maison</th><th>Duplex / triplex / IRLM</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Isolation du toit</strong></td><td>Jusqu’à 2 000 $</td><td>Jusqu’à 5 000 $</td></tr>
                        <tr><td><strong>Isolation des murs extérieurs</strong></td><td>Jusqu’à 7 000 $</td><td>Jusqu’à 11 000 $</td></tr>
                        <tr><td><strong>Isolation des fondations</strong></td><td>Jusqu’à 2 500 $</td><td>Jusqu’à 3 500 $</td></tr>
                        <tr><td><strong>Remplacement de fenêtres</strong></td><td>Jusqu’à 4 500 $ (300 $/fenêtre)</td><td>Jusqu’à 6 000 $</td></tr>
                        <tr><td><strong>Raccordement à une source de secours</strong></td><td>Jusqu’à 1 000 $</td><td>Selon les critères officiels</td></tr>
                        <tr><td><strong>Ajout d’une batterie fixe</strong></td><td>Jusqu’à 4 000 $</td><td>Selon les critères officiels</td></tr>
                        <tr><td><strong>Évaluation énergétique</strong></td><td>Jusqu’à 500 $</td><td>Selon les critères officiels</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="qc-table-note">IRLM : immeuble résidentiel à logements multiples. Les nouvelles mesures liées à l’alimentation de secours et à la batterie s’appliquent selon les conditions officielles, notamment à certaines résidences principales et IRLM. Les travaux et montants admissibles doivent être confirmés sur Québec.ca.</p>
        </div>
    </section>

    {{-- LOGISVERT --}}
    <section class="qc-section qc-section-white" id="logisvert">
        <div class="qc-container qc-split">
            <div class="qc-copy">
                <span class="qc-eyebrow">02 · Hydro‑Québec</span>
                <h2>LogisVert : des mesures pour réduire la consommation d’énergie.</h2>
                <p>LogisVert est en vigueur. Le montant dépend de la mesure installée, de l’équipement et des exigences applicables au moment des travaux.</p>
                <ul class="qc-check-list">
                    <li><span class="qc-check">✓</span><span>Vérifiez que le modèle de thermopompe figure sur la liste des produits admissibles.</span></li>
                    <li><span class="qc-check">✓</span><span>Conservez les factures détaillées et les documents d’installation.</span></li>
                    <li><span class="qc-check">✓</span><span>Pour les mesures concernées, transmettez la demande au plus tard neuf mois après l’installation.</span></li>
                    <li><span class="qc-check">✓</span><span>Les conditions peuvent varier selon la catégorie d’appareil et le type d’habitation.</span></li>
                </ul>
                <a class="qc-btn qc-btn-primary" href="https://www.hydroquebec.com/residentiel/mieux-consommer/aides-financieres/logisvert/" target="_blank" rel="noopener noreferrer">Consulter LogisVert ↗</a>
            </div>
            <div class="qc-photo-stack">
                <div class="qc-photo-main">
                    <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?auto=format&fit=crop&w=1100&q=85"
                         alt="Technicien travaillant sur un équipement électrique" loading="lazy">
                </div>
                <div class="qc-photo-small">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=700&q=80"
                         alt="Espace intérieur moderne et lumineux" loading="lazy">
                </div>
                <span class="qc-photo-tag">Efficacité énergétique</span>
            </div>
        </div>
    </section>

    <section class="qc-section" aria-labelledby="logisvert-amounts-title">
        <div class="qc-container">
            <div class="qc-section-head">
                <div>
                    <span class="qc-eyebrow">LogisVert</span>
                    <h2 id="logisvert-amounts-title">Exemples de montants par catégorie</h2>
                </div>
                <p>Les montants ci-dessous sont calculés par tranche de 1 000 BTU/h à −8 °C pour les catégories de thermopompes concernées, conformément au document de travail. Confirmez la catégorie officielle de votre appareil.</p>
            </div>
            <div class="qc-table-wrap">
                <table class="qc-table">
                    <thead><tr><th>Mesure</th><th>Montant indiqué</th><th>Précision</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Thermopompe ENERGY STAR</strong></td><td>50 $</td><td>Par 1 000 BTU/h à −8 °C</td></tr>
                        <tr><td><strong>Thermopompe pour climat froid</strong></td><td>120 $</td><td>Par 1 000 BTU/h à −8 °C</td></tr>
                        <tr><td><strong>Thermopompe à très haute efficacité</strong></td><td>140 $</td><td>Par 1 000 BTU/h à −8 °C</td></tr>
                        <tr><td><strong>Multilogement en zone défavorisée</strong></td><td>220 $</td><td>Par 1 000 BTU/h à −8 °C</td></tr>
                        <tr><td><strong>Nouvelle géothermie</strong></td><td>750 $</td><td>Par 1 000 BTU/h à −8 °C</td></tr>
                        <tr><td><strong>Remplacement d’un système géothermique</strong></td><td>250 $</td><td>Par 1 000 BTU/h à −8 °C; plafond indiqué de 18 000 $</td></tr>
                        <tr><td><strong>Isolation du toit avec calfeutrage</strong></td><td>1 500 $</td><td>Critères de résistance thermique et d’admissibilité à confirmer</td></tr>
                        <tr><td><strong>Cuisinière à induction</strong></td><td>250 $</td><td>Selon les conditions LogisVert en vigueur</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="qc-table-note">Cette liste est un résumé éditorial, pas une décision d’admissibilité. Les mesures et barèmes peuvent évoluer; vérifiez toujours la page officielle d’Hydro‑Québec avant l’achat.</p>
        </div>
    </section>

    {{-- FEDERAL --}}
    <section class="qc-section qc-section-white" id="federal">
        <div class="qc-container">
            <div class="qc-photo-banner">
                <span class="qc-eyebrow" style="color: var(--qc-lime);">03 · Programme fédéral</span>
                <h2>La Remise nationale pour thermopompes a été annoncée, mais n’est pas ouverte.</h2>
                <p>Le gouvernement fédéral a annoncé en octobre 2026 une remise pouvant atteindre 10 000 $ pour certains ménages sous le revenu médian et 2 000 $ pour d’autres propriétaires admissibles. À la date de vérification du 29 octobre 2026, les demandes ne sont pas ouvertes et les détails de lancement doivent être suivis sur Canada.ca.</p>
                <div class="qc-hero-actions">
                    <a class="qc-btn qc-btn-primary" href="https://www.canada.ca/fr/innovation-sciences-developpement-economique/nouvelles/2026/10/le-secretaire-detat-belanger-souligne-linstauration-de-mesures-visant-a-reduire-les-couts-energetiques-domiciliaires-et-a-ameliorer-lefficacite-ene.html" target="_blank" rel="noopener noreferrer">Lire l’annonce fédérale ↗</a>
                </div>
            </div>
            <div class="qc-alert" role="note">
                <span aria-hidden="true">!</span>
                <div><strong>Ne considérez pas cette remise comme disponible avant l’ouverture officielle.</strong>
                    Le statut présenté ici est « Annoncé », et non « Ouvert ». Les montants annoncés ne garantissent pas votre admissibilité.
                </div>
            </div>
        </div>
    </section>

    {{-- STEPS --}}
    <section class="qc-section">
        <div class="qc-container">
            <div class="qc-section-head">
                <div>
                    <span class="qc-eyebrow">Avant de commencer</span>
                    <h2>Trois étapes pour éviter les mauvaises surprises.</h2>
                </div>
                <p>Les programmes ont leurs propres critères. Faites vos vérifications avant d’acheter l’équipement ou de commencer les travaux.</p>
            </div>
            <div class="qc-steps">
                <article class="qc-step"><div class="qc-step-number">01</div><h3>Identifiez les travaux</h3><p>Isolation, fenêtres, thermopompe ou adaptation aux inondations : chaque mesure relève de critères spécifiques.</p></article>
                <article class="qc-step"><div class="qc-step-number">02</div><h3>Vérifiez le programme</h3><p>Consultez la page officielle, les conditions, les équipements admissibles et le statut de la demande.</p></article>
                <article class="qc-step"><div class="qc-step-number">03</div><h3>Gardez vos preuves</h3><p>Conservez contrats, factures détaillées, preuves d’achat et documents de l’entrepreneur.</p></article>
            </div>
        </div>
    </section>

    {{-- CLOSED PROGRAMS --}}
    <section class="qc-section qc-section-white" id="programmes-fermes">
        <div class="qc-container">
            <div class="qc-section-head">
                <div>
                    <span class="qc-eyebrow">À ne pas confondre</span>
                    <h2>Programmes fermés aux nouvelles demandes</h2>
                </div>
                <p>Ces programmes ne doivent pas être présentés comme des aides actuellement ouvertes aux nouvelles demandes.</p>
            </div>
            <div class="qc-closed-grid">
                <article class="qc-closed-card">
                    <span class="qc-status qc-status-closed">Fermé</span>
                    <h3>Subvention canadienne pour des maisons plus vertes</h3>
                    <p>Le programme est fermé. La date limite de téléversement des documents indiquée dans le dossier est le 31 décembre 2025.</p>
                    <a class="qc-card-link" href="https://www.quebec.ca/habitation-territoire/chauffage-consommation-energie/aide-financiere-renovation-ecoenergetique/renoclimat/a-propos" target="_blank" rel="noopener noreferrer">Détails officiels ↗</a>
                </article>
                <article class="qc-closed-card">
                    <span class="qc-status qc-status-closed">Fermé</span>
                    <h3>Prêt canadien pour des maisons plus vertes</h3>
                    <p>Le programme n’accepte plus de nouvelles demandes ou approbations selon les informations officielles indiquées dans le dossier.</p>
                    <a class="qc-card-link" href="https://www.canada.ca/fr/ressources-naturelles-canada/services/financement-subventions/maisons-plus-vertes/pret-canadien-maisons-plus-vertes.html" target="_blank" rel="noopener noreferrer">Détails officiels ↗</a>
                </article>
                <article class="qc-closed-card">
                    <span class="qc-status qc-status-closed">Fermé</span>
                    <h3>Chauffez vert</h3>
                    <p>Le programme québécois est indiqué comme fermé depuis le 31 mars 2026 dans le document de contenu du portail.</p>
                    <a class="qc-card-link" href="https://www.quebec.ca/habitation-territoire/chauffage-consommation-energie/aide-financiere-renovation-ecoenergetique" target="_blank" rel="noopener noreferrer">Vérifier sur Québec.ca ↗</a>
                </article>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="qc-section" id="faq">
        <div class="qc-container">
            <div class="qc-section-head">
                <div>
                    <span class="qc-eyebrow">Questions fréquentes</span>
                    <h2>Les réponses essentielles avant vos rénovations.</h2>
                </div>
            </div>
            <div class="qc-faq">
                <details>
                    <summary>Quelle aide regarder pour isoler une maison au Québec ?</summary>
                    <p>Rénoclimat est le programme principal présenté dans le dossier pour l’isolation du toit, des murs extérieurs et des fondations. Les montants et critères doivent être confirmés dans le Guide du participant officiel.</p>
                </details>
                <details>
                    <summary>Rénoclimat finance-t-il les thermopompes ?</summary>
                    <p>Selon le cahier des charges, les thermopompes, climatiseurs et systèmes géothermiques ne sont pas admissibles à Rénoclimat. Vérifiez les aides applicables auprès d’Hydro‑Québec, notamment LogisVert.</p>
                </details>
                <details>
                    <summary>La Remise nationale pour thermopompes est-elle ouverte ?</summary>
                    <p>Non selon les informations vérifiées le 29 octobre 2026 : le programme a été annoncé, mais les demandes ne sont pas encore ouvertes. Consultez Canada.ca pour toute mise à jour officielle.</p>
                </details>
                <details>
                    <summary>Puis-je cumuler plusieurs programmes ?</summary>
                    <p>Ne présumez pas que le cumul est autorisé. Vérifiez les règles de chaque programme et les conditions applicables aux mêmes travaux avant de vous engager.</p>
                </details>
                <details>
                    <summary>ÉcoAides Canada est-il un site gouvernemental ?</summary>
                    <p>Non. ÉcoAides Canada est un portail d’information indépendant. Il ne dépose aucune demande à votre place et ne garantit aucune aide financière.</p>
                </details>
            </div>
        </div>
    </section>

    {{-- OFFICIAL SOURCES --}}
    <section class="qc-section qc-section-white" id="sources">
        <div class="qc-container">
            <div class="qc-section-head">
                <div>
                    <span class="qc-eyebrow">Transparence</span>
                    <h2>Consultez toujours les sources officielles.</h2>
                </div>
                <p>Les statuts et montants peuvent changer. Les pages officielles priment sur ce résumé.</p>
            </div>
            <div class="qc-sources">
                <a class="qc-source-link" href="https://www.quebec.ca/habitation-territoire/chauffage-consommation-energie/aide-financiere-renovation-ecoenergetique/renoclimat/nouveautes-adaptation-inondations" target="_blank" rel="noopener noreferrer">Québec.ca · Rénoclimat ↗</a>
                <a class="qc-source-link" href="https://www.quebec.ca/habitation-territoire/chauffage-consommation-energie/aide-financiere-renovation-ecoenergetique/renoclimat/aide-financiere" target="_blank" rel="noopener noreferrer">Québec.ca · Montants ↗</a>
                <a class="qc-source-link" href="https://www.hydroquebec.com/residentiel/mieux-consommer/aides-financieres/logisvert/" target="_blank" rel="noopener noreferrer">Hydro‑Québec · LogisVert ↗</a>
                <a class="qc-source-link" href="https://www.canada.ca/fr/innovation-sciences-developpement-economique/nouvelles/2026/10/le-secretaire-detat-belanger-souligne-linstauration-de-mesures-visant-a-reduire-les-couts-energetiques-domiciliaires-et-a-ameliorer-lefficacite-ene.html" target="_blank" rel="noopener noreferrer">Canada.ca · Remise nationale ↗</a>
            </div>
            <div class="qc-last-update">
                <span>Dernière vérification éditoriale indiquée : 29 octobre 2026</span>
                <span>Portail indépendant · Montants et critères à confirmer auprès des organismes responsables</span>
            </div>
        </div>
    </section>

    {{-- FINAL CTA --}}
    <section class="qc-bottom-cta">
        <div class="qc-container qc-bottom-cta-inner">
            <div>
                <h2>Vous avez un projet de rénovation ?</h2>
                <p>Commencez par vérifier les critères officiels correspondant à vos travaux.</p>
            </div>
            <a class="qc-btn" href="{{ url('/sources-officielles') }}">Voir toutes les sources <span aria-hidden="true">↗</span></a>
        </div>
    </section>
</main>
@endsection
