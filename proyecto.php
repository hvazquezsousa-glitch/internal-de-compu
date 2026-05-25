<!doctype html>
<html lang="es">
<head>
    <title>Bebidas Hipertónicas: Ciencia, Salud y Medio Ambiente</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        :root {
            --bio:   #2ecc71;
            --quim:  #9b59b6;
            --fis:   #e67e22;
            --sas:   #1abc9c;
            --cs:    #f39c12;
            --bg:    #0d0d0d;
            --card:  #161616;
            --border:#222;
        }

        * { box-sizing: border-box; }

        body {
            background: var(--bg);
            color: #e0e0e0;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
        }

        /* ── HERO ── */
        .hero {
            background: linear-gradient(160deg, #0d0d0d 0%, #1a1a1a 100%);
            border-bottom: 1px solid var(--border);
            padding: 56px 20px 44px;
            text-align: center;
        }
        .hero-badge {
            display: inline-block;
            background: rgba(243,156,18,0.12);
            border: 1px solid rgba(243,156,18,0.3);
            color: var(--cs);
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 18px;
        }
        .hero h1 {
            font-size: clamp(1.8rem, 4vw, 3rem);
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 14px;
            color: #fff;
        }
        .hero h1 span {
            background: linear-gradient(135deg, #f39c12, #e74c3c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero p { color: #777; font-size: 1.05rem; max-width: 620px; margin: 0 auto 32px; }
        .subject-pills { display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; }
        .pill {
            padding: 7px 18px;
            border-radius: 20px;
            font-size: 0.82rem;
            font-weight: 600;
            cursor: pointer;
            transition: all .25s;
            border: 1px solid;
        }
        .pill-bio  { border-color: var(--bio);  color: var(--bio);  background: rgba(46,204,113,0.08); }
        .pill-quim { border-color: var(--quim); color: var(--quim); background: rgba(155,89,182,0.08); }
        .pill-fis  { border-color: var(--fis);  color: var(--fis);  background: rgba(230,126,34,0.08); }
        .pill-sas  { border-color: var(--sas);  color: var(--sas);  background: rgba(26,188,156,0.08); }
        .pill-cs   { border-color: var(--cs);   color: var(--cs);   background: rgba(243,156,18,0.08); }
        .pill:hover, .pill.active { color: #000 !important; }
        .pill-bio.active  { background: var(--bio);  border-color: var(--bio); }
        .pill-quim.active { background: var(--quim); border-color: var(--quim); }
        .pill-fis.active  { background: var(--fis);  border-color: var(--fis); }
        .pill-sas.active  { background: var(--sas);  border-color: var(--sas); }
        .pill-cs.active   { background: var(--cs);   border-color: var(--cs); }

        /* ── OVERVIEW TABLE ── */
        .overview-table { width: 100%; border-collapse: separate; border-spacing: 0; }
        .overview-table th {
            background: #1a1a1a;
            color: #888;
            font-size: 0.78rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 12px 18px;
            border-bottom: 1px solid var(--border);
        }
        .overview-table td {
            padding: 14px 18px;
            border-bottom: 1px solid #1a1a1a;
            font-size: 0.88rem;
            color: #ccc;
            vertical-align: top;
        }
        .overview-table tr:last-child td { border-bottom: none; }
        .overview-table tr:hover td { background: #1a1a1a; }
        .subject-chip {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 700;
            white-space: nowrap;
        }
        .chip-bio  { background: rgba(46,204,113,0.15); color: var(--bio); }
        .chip-quim { background: rgba(155,89,182,0.15); color: var(--quim); }
        .chip-fis  { background: rgba(230,126,34,0.15); color: var(--fis); }
        .chip-sas  { background: rgba(26,188,156,0.15); color: var(--sas); }
        .chip-cs   { background: rgba(243,156,18,0.15); color: var(--cs); }

        /* ── TABS ── */
        .tab-content-area { display: none; }
        .tab-content-area.active { display: block; }

        /* ── SECTION CARDS ── */
        .card-dark {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 28px;
        }
        .section-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 24px;
            padding-bottom: 18px;
            border-bottom: 1px solid var(--border);
        }
        .section-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }
        .section-header h2 { font-size: 1.5rem; font-weight: 700; color: #fff; margin: 0 0 4px; }
        .section-header .subtitle { color: #666; font-size: 0.88rem; margin: 0; }

        .block-title {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 12px;
            margin-top: 22px;
        }
        .block-title:first-of-type { margin-top: 0; }

        /* Steps */
        .steps { list-style: none; padding: 0; margin: 0; }
        .steps li {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            padding: 10px 0;
            border-bottom: 1px solid #1c1c1c;
            font-size: 0.9rem;
            color: #ccc;
        }
        .steps li:last-child { border-bottom: none; }
        .step-num {
            width: 26px;
            height: 26px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 700;
            flex-shrink: 0;
            color: #000;
        }

        /* Conclusion cards */
        .conclusion-block {
            border-radius: 12px;
            padding: 16px 18px;
            margin-bottom: 10px;
            font-size: 0.88rem;
            line-height: 1.6;
            border: 1px solid;
        }
        .concl-bio   { background: rgba(46,204,113,0.07);  border-color: rgba(46,204,113,0.2);  }
        .concl-quim  { background: rgba(155,89,182,0.07);  border-color: rgba(155,89,182,0.2);  }
        .concl-fis   { background: rgba(230,126,34,0.07);  border-color: rgba(230,126,34,0.2);  }
        .concl-sas   { background: rgba(26,188,156,0.07);  border-color: rgba(26,188,156,0.2);  }
        .concl-cs    { background: rgba(243,156,18,0.07);  border-color: rgba(243,156,18,0.2);  }
        .conclusion-block strong { color: #fff; }

        /* Materials */
        .materials-grid { display: flex; flex-wrap: wrap; gap: 8px; }
        .mat-tag {
            background: #1a1a1a;
            border: 1px solid #2a2a2a;
            border-radius: 8px;
            padding: 6px 14px;
            font-size: 0.82rem;
            color: #ccc;
        }

        /* Comparison table SAS */
        .compare-table { width: 100%; border-collapse: separate; border-spacing: 0; font-size: 0.85rem; }
        .compare-table th {
            background: #1a1a1a;
            color: #888;
            padding: 10px 14px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 1px solid var(--border);
        }
        .compare-table td { padding: 12px 14px; border-bottom: 1px solid #1a1a1a; color: #ccc; }
        .compare-table tr:hover td { background: #1a1a1a; }
        .rating { display: flex; gap: 3px; }
        .dot { width: 8px; height: 8px; border-radius: 50%; background: #2a2a2a; }
        .dot.on { background: var(--sas); }

        /* ── SEMÁFORO (CS section) ── */
        .sema-card { background: #111; border: 1px solid #222; border-radius: 14px; padding: 24px; }

        label { color: #bbb; font-size: 0.88rem; margin-bottom: 4px; display: block; }
        input[type="text"], input[type="number"] {
            background: #0d0d0d;
            border: 1px solid #2a2a2a;
            border-radius: 10px;
            color: #fff;
            padding: 10px 14px;
            width: 100%;
            font-size: 0.9rem;
            transition: border-color .2s;
            outline: none;
        }
        input[type="text"]:focus, input[type="number"]:focus { border-color: var(--cs); }
        input[type="text"]::placeholder, input[type="number"]::placeholder { color: #444; }

        .btn-calc {
            background: linear-gradient(135deg, #f39c12, #e67e22);
            color: #000;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            padding: 11px 24px;
            font-size: 0.95rem;
            cursor: pointer;
            width: 100%;
            transition: opacity .2s;
        }
        .btn-calc:hover { opacity: 0.85; }

        .semaforo {
            background: #0d0d0d;
            border: 2px solid #2a2a2a;
            border-radius: 50px;
            padding: 16px 20px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .luz {
            width: 56px; height: 56px; border-radius: 50%;
            background: #1c1c1c; border: 2px solid #2a2a2a;
            transition: all 0.5s ease;
        }
        .luz.on-rojo    { background: #e74c3c; box-shadow: 0 0 24px #e74c3c, 0 0 50px rgba(231,76,60,.4); }
        .luz.on-amarillo{ background: #f39c12; box-shadow: 0 0 24px #f39c12, 0 0 50px rgba(243,156,18,.4); }
        .luz.on-verde   { background: #2ecc71; box-shadow: 0 0 24px #2ecc71, 0 0 50px rgba(46,204,113,.4); }

        .barra-fondo { background: #222; border-radius: 20px; height: 12px; overflow: hidden; }
        .barra-fill  { height: 100%; border-radius: 20px; transition: width .8s ease, background .5s; width: 0%; }
        .alerta-msg  { margin-top: 12px; padding: 11px 18px; border-radius: 10px; font-weight: 600; font-size: 0.9rem; text-align: center; }
        .al-verde    { background: rgba(46,204,113,.13); border: 1px solid #2ecc71; color: #2ecc71; }
        .al-amarillo { background: rgba(243,156,18,.13); border: 1px solid #f39c12; color: #f39c12; }
        .al-rojo     { background: rgba(231,76,60,.13);  border: 1px solid #e74c3c; color: #e74c3c; }

        .cuchara-grid { display: flex; flex-wrap: wrap; gap: 4px; margin-top: 8px; }

        /* Historial */
        .bebida-item {
            display: flex; justify-content: space-between; align-items: center;
            padding: 9px 14px; background: #0d0d0d; border-radius: 10px;
            margin-bottom: 7px; border-left: 3px solid transparent; font-size: 0.85rem;
        }
        .bi-verde   { border-left-color: #2ecc71; }
        .bi-amarillo{ border-left-color: #f39c12; }
        .bi-rojo    { border-left-color: #e74c3c; }
        .badge-v { background: rgba(46,204,113,.18); color:#2ecc71; padding:2px 9px; border-radius:12px; font-size:.75rem; font-weight:700; }
        .badge-a { background: rgba(243,156,18,.18); color:#f39c12; padding:2px 9px; border-radius:12px; font-size:.75rem; font-weight:700; }
        .badge-r { background: rgba(231,76,60,.18);  color:#e74c3c; padding:2px 9px; border-radius:12px; font-size:.75rem; font-weight:700; }

        /* Gas sim */
        input[type="range"] { -webkit-appearance:none; appearance:none; width:100%; height:5px; background:#2a2a2a; border-radius:3px; outline:none; }
        input[type="range"]::-webkit-slider-thumb { -webkit-appearance:none; width:17px; height:17px; border-radius:50%; background:#f39c12; cursor:pointer; }
        input[type="range"]::-moz-range-thumb { width:17px; height:17px; border-radius:50%; background:#f39c12; cursor:pointer; border:none; }
        .slider-val { font-size:.95rem; font-weight:700; color:#f39c12; }

        .gas-pct { font-size:2.8rem; font-weight:800; color:#4fc3f7; line-height:1; }
        .gas-ok      { background:rgba(79,195,247,.09); border:1px solid #4fc3f7; color:#4fc3f7; padding:10px 16px; border-radius:10px; font-size:.88rem; }
        .gas-warning { background:rgba(243,156,18,.09); border:1px solid #f39c12; color:#f39c12; padding:10px 16px; border-radius:10px; font-size:.88rem; }
        .gas-flat    { background:rgba(231,76,60,.09);  border:1px solid #e74c3c; color:#e74c3c; padding:10px 16px; border-radius:10px; font-size:.88rem; }

        /* scrollbar */
        ::-webkit-scrollbar { width:5px; }
        ::-webkit-scrollbar-track { background:#111; }
        ::-webkit-scrollbar-thumb { background:#2a2a2a; border-radius:3px; }

        @media(max-width:768px){
            .hero h1 { font-size:1.7rem; }
            .overview-table th, .overview-table td { display:none; }
            .overview-table td:first-child, .overview-table td:nth-child(2), .overview-table th:first-child, .overview-table th:nth-child(2) { display:table-cell; }
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- ── HERO ── -->
<div class="hero">
    <div class="hero-badge">Proyecto Interdisciplinar</div>
    <h1>Bebidas Hipertónicas:<br><span>Azúcar, Gas y Salud</span></h1>
    <p>Un proyecto que conecta Biología, Química, Física, SAS y Computer Science a través del estudio científico de las bebidas.</p>
    <div class="subject-pills">
        <span class="pill pill-bio  active" onclick="showTab('bio',  this)">🧬 Biología</span>
        <span class="pill pill-quim"        onclick="showTab('quim', this)">⚗️ Química</span>
        <span class="pill pill-fis"         onclick="showTab('fis',  this)">⚡ Física</span>
        <span class="pill pill-sas"         onclick="showTab('sas',  this)">🌍 SAS</span>
        <span class="pill pill-cs"          onclick="showTab('cs',   this)">💻 Computer Science</span>
        <span class="pill" style="border-color:#555;color:#888;" onclick="showTab('overview', this)">📋 Resumen</span>
    </div>
</div>

<div class="container pb-5 mt-4" style="max-width:1100px;">

    <!-- ══════════════════════ OVERVIEW ══════════════════════ -->
    <div class="tab-content-area" id="tab-overview">
        <div class="card-dark">
            <div class="block-title" style="color:#888;">Tabla resumen del proyecto</div>
            <div style="overflow-x:auto;">
            <table class="overview-table">
                <thead>
                    <tr>
                        <th>Asignatura</th>
                        <th>¿Qué estudian?</th>
                        <th>Experimento / herramienta</th>
                        <th>Materiales clave</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="subject-chip chip-bio">🧬 Biología</span></td>
                        <td>Efecto de la ósmosis en células (tejido vegetal)</td>
                        <td>Cilindros de patata en distintas bebidas → cambio de peso</td>
                        <td>Patatas, vasos, balanza</td>
                    </tr>
                    <tr>
                        <td><span class="subject-chip chip-quim">⚗️ Química</span></td>
                        <td>Acidez y contenido de azúcar → riesgo dental</td>
                        <td>Medición de pH + cáscaras de huevo sumergidas en bebidas</td>
                        <td>Tiras de pH, cáscaras de huevo, balanza</td>
                    </tr>
                    <tr>
                        <td><span class="subject-chip chip-fis">⚡ Física</span></td>
                        <td>Solubilidad del CO₂ y temperatura (Ley de Henry)</td>
                        <td>Globo en boca de botella a 5°C, 20°C y 40°C</td>
                        <td>Botellas, globos, termómetros</td>
                    </tr>
                    <tr>
                        <td><span class="subject-chip chip-sas">🌍 SAS</span></td>
                        <td>Huella hídrica y de carbono por tipo de envase</td>
                        <td>Investigación comparativa: PET vs vidrio vs aluminio</td>
                        <td>Ordenador, bases de datos ambientales</td>
                    </tr>
                    <tr>
                        <td><span class="subject-chip chip-cs">💻 Computer Science</span></td>
                        <td>Visualización del consumo de azúcar con alertas OMS</td>
                        <td>App: gramos → cucharadas → % límite diario + semáforo</td>
                        <td>Ordenador, Python / Excel</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

        <!-- Materiales por área -->
        <div class="row g-3 mt-2">
            <div class="col-12"><div class="block-title" style="color:#888;">Materiales por área</div></div>
            <?php
            $mats = [
                ['color'=>'bio','icon'=>'🧬','name'=>'Biología',       'items'=>['Patatas o cebollas','Vasos','Agua destilada','Refresco','Bebida energética','Zumo natural','Balanza']],
                ['color'=>'quim','icon'=>'⚗️','name'=>'Química',      'items'=>['Tiras de pH','Cáscaras de huevo','Vasos','Balanza','Distintas bebidas']],
                ['color'=>'fis','icon'=>'⚡','name'=>'Física',          'items'=>['Botellas de refresco','Globos','Termómetros','Nevera / fuente de calor']],
                ['color'=>'sas','icon'=>'🌍','name'=>'SAS',             'items'=>['Ordenador','Bases de datos ambientales','Balanza (para pesar residuos)']],
                ['color'=>'cs','icon'=>'💻','name'=>'Computer Science','items'=>['Ordenador','Python / Tkinter','Hoja de cálculo']],
            ];
            foreach ($mats as $m): ?>
            <div class="col-md-4 col-lg">
                <div class="card-dark" style="height:100%;">
                    <div style="font-size:1.1rem; font-weight:700; color:#fff; margin-bottom:12px;">
                        <?= $m['icon'] ?> <?= $m['name'] ?>
                    </div>
                    <div class="materials-grid">
                        <?php foreach ($m['items'] as $it): ?>
                        <span class="mat-tag"><?= $it ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ══════════════════════ BIOLOGÍA ══════════════════════ -->
    <div class="tab-content-area active" id="tab-bio">
        <div class="card-dark">
            <div class="section-header">
                <div class="section-icon" style="background:rgba(46,204,113,0.12);">🧬</div>
                <div>
                    <h2 style="color:var(--bio);">Biología — Ósmosis y Células</h2>
                    <p class="subtitle">¿Las bebidas hipertónicas hidratan o deshidratan las células?</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="block-title" style="color:var(--bio);">🎯 Objetivo</div>
                    <p style="color:#ccc; font-size:.9rem; line-height:1.7;">
                        Comprobar experimentalmente si las bebidas con alto contenido en azúcar hidratan o deshidratan las células, usando tejido vegetal (patata o cebolla) como modelo.
                    </p>

                    <div class="block-title" style="color:var(--bio);">🔬 Procedimiento</div>
                    <ul class="steps">
                        <li><span class="step-num" style="background:var(--bio);">1</span>Cortar trozos iguales de patata o cebolla (misma forma y tamaño).</li>
                        <li><span class="step-num" style="background:var(--bio);">2</span>Pesar cada muestra antes del experimento y anotar el valor.</li>
                        <li><span class="step-num" style="background:var(--bio);">3</span>Colocar cada cilindro en un vaso con una bebida diferente:<br>
                            <span style="color:#888;font-size:.82rem;margin-left:4px;">Agua destilada · Zumo natural · Refresco · Bebida energética</span>
                        </li>
                        <li><span class="step-num" style="background:var(--bio);">4</span>Esperar varias horas (mínimo 4–6 h, mejor toda la noche).</li>
                        <li><span class="step-num" style="background:var(--bio);">5</span>Sacar las muestras, secarlas suavemente con papel absorbente.</li>
                        <li><span class="step-num" style="background:var(--bio);">6</span>Volver a pesar y comparar el cambio de masa (%).</li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <div class="block-title" style="color:var(--bio);">📊 ¿Qué debes concluir?</div>

                    <div class="conclusion-block concl-bio">
                        <strong>📉 Si la patata pierde peso</strong><br>
                        La bebida tiene <em>más</em> concentración de azúcar que la célula. El agua sale de las células hacia la bebida por ósmosis → las células se <strong>deshidratan</strong>.
                        <br><em style="color:#888;font-size:.8rem;">Esto explica por qué las bebidas muy azucaradas no calman la sed.</em>
                    </div>

                    <div class="conclusion-block concl-bio" style="margin-top:10px;">
                        <strong>📈 Si la patata gana peso</strong><br>
                        La bebida tiene <em>menos</em> concentración que la célula. El agua entra en las células → se <strong>hidratan</strong>. Ocurre con el agua destilada y bebidas poco azucaradas.
                    </div>

                    <div class="block-title" style="color:var(--bio); margin-top:18px;">🧪 Materiales</div>
                    <div class="materials-grid">
                        <span class="mat-tag">🥔 Patatas / cebollas</span>
                        <span class="mat-tag">🥛 Vasos</span>
                        <span class="mat-tag">💧 Agua destilada</span>
                        <span class="mat-tag">🥤 Refresco</span>
                        <span class="mat-tag">⚡ Bebida energética</span>
                        <span class="mat-tag">🍊 Zumo natural</span>
                        <span class="mat-tag">⚖️ Balanza</span>
                    </div>
                </div>
            </div>

            <!-- Concepto clave -->
            <div style="margin-top:24px; padding:18px 22px; background:#0f1f15; border:1px solid rgba(46,204,113,0.25); border-radius:12px;">
                <div style="font-weight:700; color:var(--bio); margin-bottom:8px;">🔑 Concepto clave: Ósmosis</div>
                <p style="color:#aaa; font-size:.88rem; margin:0; line-height:1.7;">
                    La ósmosis es el movimiento del agua a través de una membrana semipermeable desde una zona de <strong style="color:#fff;">baja concentración</strong> de solutos a una de <strong style="color:#fff;">alta concentración</strong>.
                    En bebidas hipertónicas (con mucho azúcar), el gradiente de concentración va de la célula hacia la bebida, causando deshidratación celular.
                </p>
            </div>
        </div>
    </div>

    <!-- ══════════════════════ QUÍMICA ══════════════════════ -->
    <div class="tab-content-area" id="tab-quim">
        <div class="card-dark">
            <div class="section-header">
                <div class="section-icon" style="background:rgba(155,89,182,0.12);">⚗️</div>
                <div>
                    <h2 style="color:var(--quim);">Química — Acidez y Azúcar</h2>
                    <p class="subtitle">¿Cómo atacan las bebidas al esmalte dental?</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="block-title" style="color:var(--quim);">🎯 Objetivo</div>
                    <p style="color:#ccc; font-size:.9rem; line-height:1.7;">
                        Analizar el pH de distintas bebidas y medir cuánto daño causan al esmalte dental usando cáscaras de huevo como modelo de tejido calcificado.
                    </p>

                    <div class="block-title" style="color:var(--quim);">🔬 Procedimiento</div>
                    <ul class="steps">
                        <li><span class="step-num" style="background:var(--quim);">1</span>Medir el pH de cada bebida con tiras de pH. Anotar resultados.</li>
                        <li><span class="step-num" style="background:var(--quim);">2</span>Pesar varias cáscaras de huevo limpias (modelo del esmalte dental).</li>
                        <li><span class="step-num" style="background:var(--quim);">3</span>Sumergir cada cáscara en una bebida diferente durante 3–7 días.</li>
                        <li><span class="step-num" style="background:var(--quim);">4</span>Observar cambios de color, textura y reblandecimiento.</li>
                        <li><span class="step-num" style="background:var(--quim);">5</span>Sacar las cáscaras, secarlas y volver a pesar.</li>
                        <li><span class="step-num" style="background:var(--quim);">6</span>Calcular la pérdida de masa (%) por corrosión ácida.</li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <div class="block-title" style="color:var(--quim);">📊 ¿Qué debes concluir?</div>

                    <div class="conclusion-block concl-quim">
                        <strong>⚠️ pH menor de 5.5 = peligro dental</strong><br>
                        Por debajo de pH 5.5 el ácido disuelve la hidroxiapatita del esmalte. Muchos refrescos tienen pH entre 2.5 y 3.5.
                    </div>
                    <div class="conclusion-block concl-quim" style="margin-top:10px;">
                        <strong>📉 Mayor pérdida de masa → más ácida</strong><br>
                        Las cáscaras de huevo con mayor pérdida de peso estaban en las bebidas más ácidas. La cáscara simula el comportamiento del calcio del esmalte frente a los ácidos.
                    </div>

                    <!-- pH scale -->
                    <div class="block-title" style="color:var(--quim); margin-top:18px;">🎨 Escala de pH aproximado</div>
                    <div style="background:#0d0d0d; border-radius:10px; padding:14px; font-size:.82rem;">
                        <?php
                        $bebidas_ph = [
                            ['Coca-Cola', '~2.5', '#e74c3c'],
                            ['Bebida energética', '~3.1', '#e74c3c'],
                            ['Zumo de naranja', '~3.5', '#e67e22'],
                            ['Agua con gas', '~5.0', '#f39c12'],
                            ['Agua mineral', '~7.2', '#2ecc71'],
                        ];
                        foreach ($bebidas_ph as $b): ?>
                        <div style="display:flex; justify-content:space-between; align-items:center; padding:6px 0; border-bottom:1px solid #1a1a1a;">
                            <span style="color:#ccc;"><?= $b[0] ?></span>
                            <span style="font-weight:700; color:<?= $b[2] ?>;"><?= $b[1] ?></span>
                        </div>
                        <?php endforeach; ?>
                        <div style="margin-top:8px; color:#555; font-size:.78rem;">* Valores aproximados. Mide tú mismo para comparar.</div>
                    </div>
                </div>
            </div>

            <div style="margin-top:24px; padding:18px 22px; background:#1a0f2e; border:1px solid rgba(155,89,182,0.25); border-radius:12px;">
                <div style="font-weight:700; color:var(--quim); margin-bottom:8px;">🔑 Concepto clave: Erosión ácida</div>
                <p style="color:#aaa; font-size:.88rem; margin:0; line-height:1.7;">
                    El esmalte dental está compuesto principalmente de <strong style="color:#fff;">hidroxiapatita (Ca₁₀(PO₄)₆(OH)₂)</strong>. Los ácidos de las bebidas reaccionan con el calcio y lo disuelven.
                    La cáscara de huevo contiene <strong style="color:#fff;">carbonato de calcio (CaCO₃)</strong>, que se comporta de forma similar frente a los ácidos, lo que la convierte en un buen modelo experimental.
                </p>
            </div>
        </div>
    </div>

    <!-- ══════════════════════ FÍSICA ══════════════════════ -->
    <div class="tab-content-area" id="tab-fis">
        <div class="card-dark">
            <div class="section-header">
                <div class="section-icon" style="background:rgba(230,126,34,0.12);">⚡</div>
                <div>
                    <h2 style="color:var(--fis);">Física — CO₂ y Temperatura</h2>
                    <p class="subtitle">¿Por qué un refresco caliente "explota" más que uno frío?</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="block-title" style="color:var(--fis);">🎯 Objetivo</div>
                    <p style="color:#ccc; font-size:.9rem; line-height:1.7;">
                        Estudiar la <strong style="color:#fff;">Ley de Henry</strong>: al aumentar la temperatura, la solubilidad del CO₂ disminuye. Medir cuánto gas se libera a distintas temperaturas.
                    </p>

                    <div class="block-title" style="color:var(--fis);">🔬 Procedimiento</div>
                    <ul class="steps">
                        <li><span class="step-num" style="background:var(--fis);">1</span>Preparar 3 botellas idénticas de refresco a: <strong>5°C, 20°C y 40°C</strong>.</li>
                        <li><span class="step-num" style="background:var(--fis);">2</span>Colocar un globo desinflado en la boca de cada botella (sin abrir aún).</li>
                        <li><span class="step-num" style="background:var(--fis);">3</span>Abrir el tapón suavemente bajo el globo al mismo tiempo.</li>
                        <li><span class="step-num" style="background:var(--fis);">4</span>Esperar 5 minutos y medir el diámetro del globo inflado.</li>
                        <li><span class="step-num" style="background:var(--fis);">5</span>Calcular el volumen aproximado del gas capturado (V = 4/3 · π · r³).</li>
                        <li><span class="step-num" style="background:var(--fis);">6</span>Registrar temperatura y volumen de gas. Repetir 3 veces para cada temperatura.</li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <div class="block-title" style="color:var(--fis);">📊 ¿Qué debes concluir?</div>
                    <div class="conclusion-block concl-fis">
                        <strong>🌡️ A mayor temperatura → más gas liberado</strong><br>
                        El globo a 40°C estará mucho más inflado que el de 5°C. Esto demuestra que el CO₂ es menos soluble a altas temperaturas.
                    </div>
                    <div class="conclusion-block concl-fis" style="margin-top:10px;">
                        <strong>📐 Lo que se mide</strong><br>
                        No se estudia la salud, sino el <em>comportamiento del CO₂ como sistema físico</em>: cómo cambia su solubilidad con la temperatura y por qué unas bebidas pierden gas más rápido que otras.
                    </div>

                    <!-- Ley de Henry -->
                    <div style="margin-top:16px; background:#1a1200; border:1px solid rgba(230,126,34,.25); border-radius:10px; padding:14px 16px; font-size:.85rem;">
                        <div style="font-weight:700; color:var(--fis); margin-bottom:8px;">Ley de Henry</div>
                        <div style="color:#ddd; font-family:monospace; font-size:1rem; text-align:center; padding:8px 0;">
                            C = k<sub>H</sub>(T) · P
                        </div>
                        <div style="color:#888; font-size:.8rem; margin-top:8px; line-height:1.6;">
                            C = concentración del gas disuelto<br>
                            k<sub>H</sub>(T) = constante de Henry (depende de T)<br>
                            P = presión parcial del gas<br>
                            <em>Al ↑T → k<sub>H</sub> disminuye → menos CO₂ disuelto</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ══════════════════════ SAS ══════════════════════ -->
    <div class="tab-content-area" id="tab-sas">
        <div class="card-dark">
            <div class="section-header">
                <div class="section-icon" style="background:rgba(26,188,156,0.12);">🌍</div>
                <div>
                    <h2 style="color:var(--sas);">SAS — Impacto Ambiental</h2>
                    <p class="subtitle">¿Qué envase contamina menos? Análisis del ciclo de vida.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="block-title" style="color:var(--sas);">🎯 Objetivo</div>
                    <p style="color:#ccc; font-size:.9rem; line-height:1.7;">
                        Comparar la <strong style="color:#fff;">huella hídrica</strong> y la <strong style="color:#fff;">huella de carbono</strong> de tres tipos de envases: plástico PET, vidrio y aluminio. Investigar qué material es más sostenible en vuestro entorno local.
                    </p>

                    <div class="block-title" style="color:var(--sas);">🔬 Pasos de la investigación</div>
                    <ul class="steps">
                        <li><span class="step-num" style="background:var(--sas);">1</span><strong style="color:#fff;">Comparar envases:</strong> Buscar y analizar información sobre los tres materiales.</li>
                        <li><span class="step-num" style="background:var(--sas);">2</span><strong style="color:#fff;">Huella hídrica:</strong> ¿Cuánta agua se necesita para fabricar 1 litro de refresco y su envase? (Suele ser mucho más de 1 litro).</li>
                        <li><span class="step-num" style="background:var(--sas);">3</span><strong style="color:#fff;">Huella de carbono:</strong> ¿Cuánto CO₂ se emite en fabricación y transporte?</li>
                        <li><span class="step-num" style="background:var(--sas);">4</span><strong style="color:#fff;">Reciclaje local:</strong> Investigar qué materiales se reciclan más en vuestra ciudad y cuáles son más fáciles de reutilizar.</li>
                        <li><span class="step-num" style="background:var(--sas);">5</span><strong style="color:#fff;">Políticas empresariales:</strong> Analizar si las empresas fabricantes tienen compromisos reales de compensación de carbono.</li>
                    </ul>
                </div>

                <div class="col-lg-5">
                    <!-- Comparison table -->
                    <div class="block-title" style="color:var(--sas);">📊 Comparativa de envases</div>
                    <div style="overflow-x:auto;">
                    <table class="compare-table">
                        <thead>
                            <tr>
                                <th>Envase</th>
                                <th>CO₂</th>
                                <th>Reciclaje</th>
                                <th>Degradación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>🧴 PET</td>
                                <td style="color:#e74c3c;">Alto</td>
                                <td>
                                    <div class="rating">
                                        <div class="dot on"></div><div class="dot on"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div>
                                    </div>
                                </td>
                                <td style="color:#e74c3c;">+400 años</td>
                            </tr>
                            <tr>
                                <td>🍾 Vidrio</td>
                                <td style="color:#f39c12;">Medio</td>
                                <td>
                                    <div class="rating">
                                        <div class="dot on"></div><div class="dot on"></div><div class="dot on"></div><div class="dot on"></div><div class="dot"></div>
                                    </div>
                                </td>
                                <td style="color:#f39c12;">Reutilizable</td>
                            </tr>
                            <tr>
                                <td>🥫 Aluminio</td>
                                <td style="color:#2ecc71;">Bajo*</td>
                                <td>
                                    <div class="rating">
                                        <div class="dot on"></div><div class="dot on"></div><div class="dot on"></div><div class="dot on"></div><div class="dot on"></div>
                                    </div>
                                </td>
                                <td style="color:#2ecc71;">~80 años</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <div style="font-size:.75rem; color:#555; margin-top:8px;">* Si se recicla correctamente. La producción de aluminio nuevo es muy contaminante.</div>

                    <div style="margin-top:16px; background:#0f1a18; border:1px solid rgba(26,188,156,.25); border-radius:10px; padding:14px 16px;">
                        <div style="font-weight:700; color:var(--sas); margin-bottom:8px; font-size:.88rem;">💡 Resultado esperado</div>
                        <ul style="color:#aaa; font-size:.83rem; line-height:1.7; margin:0; padding-left:16px;">
                            <li>El <strong style="color:#fff;">PET</strong> contamina más y tarda siglos en degradarse.</li>
                            <li>El <strong style="color:#fff;">vidrio</strong> puede reutilizarse pero pesa más → más emisiones en transporte.</li>
                            <li>El <strong style="color:#fff;">aluminio</strong> es el más reciclable: puede reciclarse indefinidamente conservando sus propiedades.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ══════════════════════ COMPUTER SCIENCE ══════════════════════ -->
    <div class="tab-content-area" id="tab-cs">
        <div class="card-dark" style="margin-bottom:24px;">
            <div class="section-header">
                <div class="section-icon" style="background:rgba(243,156,18,0.12);">💻</div>
                <div>
                    <h2 style="color:var(--cs);">Computer Science — Semáforo Nutricional</h2>
                    <p class="subtitle">Calculadora interactiva: azúcar, cucharadas y límite OMS</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- FORM -->
                <div class="col-lg-4">
                    <div class="sema-card">
                        <div class="block-title" style="color:var(--cs);">🥤 Introduce tu bebida</div>
                        <div class="mb-3">
                            <label>Nombre de la bebida</label>
                            <input type="text" id="inp-nombre" placeholder="ej. Coca-Cola" />
                        </div>
                        <div class="mb-3">
                            <label>Cantidad (ml)</label>
                            <input type="number" id="inp-ml" placeholder="ej. 500" min="1" />
                        </div>
                        <div class="mb-3">
                            <label>Azúcar (gramos)</label>
                            <input type="number" id="inp-azucar" placeholder="ej. 55" min="0" step="0.1" />
                        </div>
                        <button class="btn-calc" onclick="calcular()">Analizar bebida</button>
                        <div style="margin-top:14px; padding:10px 14px; background:#0d0d0d; border-radius:8px; font-size:.78rem; color:#555; line-height:1.6;">
                            <strong style="color:#777;">Límite OMS:</strong> 25 g de azúcar libre / día<br>
                            <strong style="color:#777;">1 cucharada</strong> ≈ 4 g de azúcar
                        </div>
                    </div>
                </div>

                <!-- SEMÁFORO -->
                <div class="col-lg-4">
                    <div class="sema-card" style="display:flex; flex-direction:column; align-items:center; gap:16px; min-height:100%;">
                        <div class="block-title" style="color:var(--cs); align-self:flex-start;">🚦 Resultado</div>
                        <div class="semaforo">
                            <div class="luz" id="luz-rojo"></div>
                            <div class="luz" id="luz-amarillo"></div>
                            <div class="luz" id="luz-verde"></div>
                        </div>
                        <div id="res-box" style="display:none; width:100%; text-align:center;">
                            <div style="color:#666; font-size:.82rem;" id="res-nombre">—</div>
                            <div style="font-size:2.2rem; font-weight:800; color:#fff; margin:6px 0;" id="res-pct">—%</div>
                            <div style="color:#555; font-size:.78rem; margin-bottom:10px;">del límite diario OMS</div>
                            <div class="barra-fondo"><div class="barra-fill" id="barra-fill"></div></div>
                            <div style="display:flex; justify-content:space-between; font-size:.72rem; color:#555; margin-top:3px;"><span>0 g</span><span>25 g (OMS)</span></div>
                            <div style="font-size:.88rem; color:#ccc; margin-top:12px;">
                                <strong id="res-g">—</strong> g = <strong id="res-c">—</strong> cucharadas 🥄
                            </div>
                            <div class="cuchara-grid" id="cuchara-grid" style="justify-content:center;"></div>
                            <div class="alerta-msg" id="alerta-msg"></div>
                        </div>
                        <div id="res-placeholder" style="color:#444; font-size:.85rem; text-align:center;">
                            Introduce una bebida para ver el análisis
                        </div>
                    </div>
                </div>

                <!-- HISTORIAL -->
                <div class="col-lg-4">
                    <div class="sema-card" style="min-height:100%;">
                        <div class="block-title" style="color:var(--cs);">📋 Historial del día</div>
                        <div id="total-dia" style="display:none; padding:10px 14px; background:#0d0d0d; border-radius:10px; margin-bottom:12px; text-align:center;">
                            <div style="font-size:.75rem; color:#666;">Total acumulado</div>
                            <div style="font-size:1.7rem; font-weight:700;" id="total-g">0 g</div>
                            <div style="font-size:.8rem;" id="total-lbl"></div>
                            <div class="barra-fondo" style="margin-top:6px;"><div class="barra-fill" id="barra-total"></div></div>
                        </div>
                        <div id="bebidas-lista"><div style="color:#444; font-size:.85rem; text-align:center; padding:30px 0;">Aún no hay bebidas</div></div>
                        <button onclick="limpiarHistorial()" style="margin-top:12px; background:transparent; border:1px solid #2a2a2a; border-radius:8px; color:#555; padding:7px 14px; cursor:pointer; font-size:.82rem; width:100%; transition:all .2s;"
                            onmouseover="this.style.borderColor='#444';this.style.color='#aaa'" onmouseout="this.style.borderColor='#2a2a2a';this.style.color='#555'">
                            Limpiar historial
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- GAS SIMULATOR -->
        <div class="card-dark">
            <div class="section-header">
                <div class="section-icon" style="background:rgba(79,195,247,0.1);">🧪</div>
                <div>
                    <h2 style="color:#4fc3f7;">Simulador de Gas (Extra — conectado con Física)</h2>
                    <p class="subtitle">Predice cuánta carbonatación queda según temperatura y tiempo</p>
                </div>
            </div>
            <p style="color:#555; font-size:.83rem; margin-bottom:20px;">
                Basado en la <strong style="color:#777;">Ley de Henry</strong> y la <strong style="color:#777;">ecuación de Arrhenius</strong>:
                el CO₂ escapa más rápido a mayor temperatura. Este simulador conecta los datos del experimento de Física con una visualización interactiva.
            </p>

            <div class="row g-4">
                <div class="col-md-5">
                    <div class="mb-4">
                        <label>🌡️ Temperatura: <span class="slider-val" id="val-temp">20°C</span></label>
                        <input type="range" id="sl-temp" min="0" max="50" value="20" oninput="actualizarGas()" />
                        <div style="display:flex;justify-content:space-between;font-size:.72rem;color:#555;margin-top:4px;">
                            <span>0°C (nevera)</span><span>25°C (ambiente)</span><span>50°C (caliente)</span>
                        </div>
                    </div>
                    <div>
                        <label>⏱️ Tiempo abierta: <span class="slider-val" id="val-tiempo">Recién abierta</span></label>
                        <input type="range" id="sl-tiempo" min="0" max="120" value="0" oninput="actualizarGas()" />
                        <div style="display:flex;justify-content:space-between;font-size:.72rem;color:#555;margin-top:4px;">
                            <span>Recién abierta</span><span>1 hora</span><span>2 horas</span>
                        </div>
                    </div>
                    <div style="margin-top:16px; padding:12px 14px; background:#0d0d0d; border-radius:10px;">
                        <div style="font-size:.75rem; font-weight:700; color:#555; text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Fórmula aplicada</div>
                        <div style="font-family:monospace; font-size:.82rem; color:#888;" id="gas-formula">—</div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div style="display:flex; align-items:flex-start; gap:24px; flex-wrap:wrap;">
                        <!-- Botella SVG -->
                        <div style="display:flex;flex-direction:column;align-items:center;gap:8px;">
                            <svg width="65" height="155" viewBox="0 0 65 155" style="filter:drop-shadow(0 0 10px rgba(79,195,247,0.2));">
                                <rect x="20" y="12" width="25" height="10" rx="4" fill="#2a2a2a" stroke="#3a3a3a" stroke-width="1.5"/>
                                <path d="M 13 28 Q 8 36 8 48 L 8 135 Q 8 145 18 145 L 47 145 Q 57 145 57 135 L 57 48 Q 57 36 52 28 Z" fill="#0d2035" stroke="#1a3a5a" stroke-width="1.5"/>
                                <clipPath id="bClip"><path d="M 13 28 Q 8 36 8 48 L 8 135 Q 8 145 18 145 L 47 145 Q 57 145 57 135 L 57 48 Q 57 36 52 28 Z"/></clipPath>
                                <rect id="g-nivel" x="8" y="48" width="50" height="97" fill="#1565c0" opacity="0.55" clip-path="url(#bClip)"/>
                                <g id="g-burbujas" opacity="1">
                                    <circle cx="23" cy="105" r="2.5" fill="#4fc3f7" opacity=".6"/>
                                    <circle cx="33" cy="85"  r="2"   fill="#4fc3f7" opacity=".5"/>
                                    <circle cx="43" cy="115" r="3"   fill="#4fc3f7" opacity=".5"/>
                                    <circle cx="28" cy="72"  r="1.5" fill="#4fc3f7" opacity=".4"/>
                                    <circle cx="40" cy="97"  r="2"   fill="#4fc3f7" opacity=".6"/>
                                </g>
                                <rect x="19" y="8" width="27" height="8" rx="3" fill="#f39c12"/>
                            </svg>
                            <div style="font-size:.72rem; color:#444;">Carbonatación</div>
                        </div>

                        <div style="flex:1; min-width:180px;">
                            <div class="gas-pct" id="gas-pct">100%</div>
                            <div style="color:#666; font-size:.85rem; margin-top:4px;">de carbonatación restante</div>
                            <div style="margin-top:14px;" id="gas-status-div">
                                <div class="gas-ok" id="gas-status">🫧 Bebida perfectamente carbonatada</div>
                            </div>
                            <div style="margin-top:14px; font-size:.83rem; color:#888;" id="gas-desglose">—</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /tab-cs -->

</div><!-- /container -->

<script>
// ── TABS ────────────────────────────────────────────────────────────────────
function showTab(id, el) {
    document.querySelectorAll('.tab-content-area').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.pill').forEach(p => p.classList.remove('active'));
    document.getElementById('tab-' + id).classList.add('active');
    if (el) el.classList.add('active');
    if (id === 'cs') actualizarGas();
}

// ── SUGAR CALCULATOR ────────────────────────────────────────────────────────
const OMS = 25, G_CUCHARA = 4;
let historial = [];

function calcular() {
    const nombre = document.getElementById('inp-nombre').value.trim() || 'Bebida sin nombre';
    const ml     = parseFloat(document.getElementById('inp-ml').value);
    const g      = parseFloat(document.getElementById('inp-azucar').value);
    if (isNaN(ml) || isNaN(g) || ml <= 0 || g < 0) {
        alert('Introduce valores válidos de ml y gramos de azúcar.');
        return;
    }
    const cucharadas = Math.round(g / G_CUCHARA * 10) / 10;
    const pct  = Math.round(g / OMS * 100);
    const nivel = pct <= 50 ? 'verde' : pct <= 100 ? 'amarillo' : 'rojo';

    ['rojo','amarillo','verde'].forEach(c => document.getElementById('luz-' + c).className = 'luz');
    document.getElementById('luz-' + nivel).classList.add('on-' + nivel);

    document.getElementById('res-placeholder').style.display = 'none';
    document.getElementById('res-box').style.display = 'block';
    document.getElementById('res-nombre').textContent = nombre + ' · ' + ml + ' ml';
    document.getElementById('res-pct').textContent = pct + '%';
    document.getElementById('res-g').textContent = g;
    document.getElementById('res-c').textContent = cucharadas;

    const fill = document.getElementById('barra-fill');
    fill.style.width = Math.min(pct, 100) + '%';
    fill.style.background = nivel === 'verde' ? '#2ecc71' : nivel === 'amarillo' ? '#f39c12' : '#e74c3c';

    const grid = document.getElementById('cuchara-grid');
    grid.innerHTML = '';
    const n = Math.min(Math.ceil(cucharadas), 20);
    for (let i = 0; i < n; i++) {
        const s = document.createElement('span');
        s.textContent = '🥄'; s.style.fontSize = '1.2rem';
        grid.appendChild(s);
    }
    if (Math.ceil(cucharadas) > 20) {
        const s = document.createElement('span');
        s.style.color = '#555'; s.style.fontSize = '.78rem';
        s.textContent = '+' + (Math.ceil(cucharadas) - 20) + ' más';
        grid.appendChild(s);
    }

    const alerta = document.getElementById('alerta-msg');
    if (nivel === 'verde') {
        alerta.className = 'alerta-msg al-verde';
        alerta.textContent = '✅ Dentro del límite — ' + g + ' g = ' + cucharadas + ' cucharadas';
    } else if (nivel === 'amarillo') {
        alerta.className = 'alerta-msg al-amarillo';
        alerta.textContent = '⚠️ Atención — ' + g + ' g = ' + cucharadas + ' cucharadas. Cerca del límite.';
    } else {
        alerta.className = 'alerta-msg al-rojo';
        alerta.textContent = '🚨 ¡Cuidado! ' + g + ' g = ' + cucharadas + ' cucharadas. Supera el límite OMS.';
    }

    historial.push({ nombre, ml, g, cucharadas, pct, nivel });
    renderHistorial();
}

function renderHistorial() {
    const lista = document.getElementById('bebidas-lista');
    if (!historial.length) {
        lista.innerHTML = '<div style="color:#444;font-size:.85rem;text-align:center;padding:30px 0;">Aún no hay bebidas</div>';
        document.getElementById('total-dia').style.display = 'none';
        return;
    }
    lista.innerHTML = historial.map(b => `
        <div class="bebida-item bi-${b.nivel}">
            <div>
                <div style="color:#ddd;font-weight:600;">${b.nombre}</div>
                <div style="color:#555;font-size:.78rem;">${b.ml} ml · ${b.g} g · ${b.cucharadas} cucharadas</div>
            </div>
            <span class="badge-${b.nivel[0]}">${b.pct}%</span>
        </div>`).join('');

    const totalG  = historial.reduce((s, b) => s + b.g, 0);
    const totalPct = Math.round(totalG / OMS * 100);
    const clrs = { verde:'#2ecc71', amarillo:'#f39c12', rojo:'#e74c3c' };
    const tnivel = totalPct <= 50 ? 'verde' : totalPct <= 100 ? 'amarillo' : 'rojo';
    document.getElementById('total-dia').style.display = 'block';
    document.getElementById('total-g').textContent = Math.round(totalG * 10) / 10 + ' g';
    const lbl = document.getElementById('total-lbl');
    lbl.textContent = totalPct + '% del límite OMS'; lbl.style.color = clrs[tnivel];
    const bt = document.getElementById('barra-total');
    bt.style.width = Math.min(totalPct, 100) + '%'; bt.style.background = clrs[tnivel];
}

function limpiarHistorial() { historial = []; renderHistorial(); }

['inp-nombre','inp-ml','inp-azucar'].forEach(id => {
    document.getElementById(id).addEventListener('keydown', e => { if (e.key === 'Enter') calcular(); });
});

// ── GAS SIMULATOR ────────────────────────────────────────────────────────────
const K0 = 0.018, ALFA = 0.055, T_REF = 20;

function gasRestante(T, t) {
    return Math.max(0, 100 * Math.exp(-K0 * Math.exp(ALFA * (T - T_REF)) * t));
}

function actualizarGas() {
    const T   = parseInt(document.getElementById('sl-temp').value);
    const min = parseInt(document.getElementById('sl-tiempo').value);
    document.getElementById('val-temp').textContent   = T + '°C';
    document.getElementById('val-tiempo').textContent = min === 0 ? 'Recién abierta' : min + ' min';

    const gas  = gasRestante(T, min);
    const gasR = Math.round(gas);
    const k    = K0 * Math.exp(ALFA * (T - T_REF));

    document.getElementById('gas-pct').textContent = gasR + '%';
    document.getElementById('g-nivel').setAttribute('y', 48 + (100 - gas) * 0.97);
    document.getElementById('g-burbujas').setAttribute('opacity', (gas / 100).toFixed(2));

    const st = document.getElementById('gas-status');
    if (gasR >= 70)       { st.className = 'gas-ok';      st.textContent = '🫧 Bebida muy carbonatada — perfecta para beber'; }
    else if (gasR >= 40)  { st.className = 'gas-warning'; st.textContent = '⚠️ Carbonatación moderada — empieza a perder frescura'; }
    else if (gasR > 5)    { st.className = 'gas-warning'; st.textContent = '😕 Poca carbonatación — casi sin gas'; }
    else                  { st.className = 'gas-flat';    st.textContent = '💨 Sin gas — la bebida está completamente plana'; }

    document.getElementById('gas-desglose').innerHTML =
        `Tasa de escape: <strong style="color:#f39c12">${(k * 60).toFixed(3)} %/h</strong><br>
         Semivida (50% gas): <strong style="color:#f39c12">${(Math.log(2)/k).toFixed(1)} min</strong>`;
    document.getElementById('gas-formula').textContent =
        `Gas = 100 · e^(−${k.toFixed(4)} · ${min}) = ${gas.toFixed(1)}%`;
}

actualizarGas();
</script>

</body>
</html>
