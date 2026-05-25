<!doctype html>
<html lang="es">
<head>
    <title>Semáforo Nutricional | Azúcar</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        :root {
            --rojo: #e74c3c;
            --amarillo: #f39c12;
            --verde: #2ecc71;
            --gris: #2c2c2c;
        }

        body {
            background: #0f0f0f;
            color: #e0e0e0;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
        }

        /* ── NAVBAR ── */
        .navbar-top {
            background: #000;
            padding: 20px 0;
            border-bottom: 1px solid #222;
        }
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .logo h1 { font-size: 1.3rem; margin: 0; color: #fff; letter-spacing: 1px; }
        .nav-links { display: flex; list-style: none; gap: 25px; margin: 0; padding: 0; }
        .nav-links a { color: #aaa; text-decoration: none; font-size: 0.95rem; transition: color .2s; }
        .nav-links a:hover { color: #fff; }

        /* ── HERO ── */
        .hero {
            text-align: center;
            padding: 60px 20px 30px;
        }
        .hero h2 {
            font-size: 2.4rem;
            font-weight: 700;
            background: linear-gradient(135deg, #f39c12, #e74c3c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero p { color: #888; font-size: 1.05rem; margin-top: 8px; }

        /* ── CARDS ── */
        .card-dark {
            background: #1a1a1a;
            border: 1px solid #2a2a2a;
            border-radius: 16px;
            padding: 32px;
        }
        .section-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .section-title span { font-size: 1.3rem; }

        /* ── FORM ── */
        label { color: #bbb; font-size: 0.9rem; margin-bottom: 4px; display: block; }
        input[type="text"], input[type="number"] {
            background: #111;
            border: 1px solid #333;
            border-radius: 10px;
            color: #fff;
            padding: 10px 14px;
            width: 100%;
            font-size: 0.95rem;
            transition: border-color .2s;
            outline: none;
        }
        input[type="text"]:focus, input[type="number"]:focus { border-color: #f39c12; }
        input[type="text"]::placeholder, input[type="number"]::placeholder { color: #555; }

        .btn-calcular {
            background: linear-gradient(135deg, #f39c12, #e67e22);
            color: #000;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            padding: 12px 28px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            transition: opacity .2s, transform .1s;
        }
        .btn-calcular:hover { opacity: 0.88; transform: translateY(-1px); }
        .btn-calcular:active { transform: translateY(0); }

        /* ── SEMÁFORO ── */
        .semaforo-wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }
        .semaforo {
            background: #111;
            border: 3px solid #333;
            border-radius: 50px;
            padding: 18px 22px;
            display: flex;
            flex-direction: column;
            gap: 14px;
            box-shadow: 0 0 40px rgba(0,0,0,0.6);
        }
        .luz {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: #1c1c1c;
            border: 2px solid #2a2a2a;
            transition: all 0.5s ease;
        }
        .luz.activa-rojo {
            background: var(--rojo);
            box-shadow: 0 0 28px var(--rojo), 0 0 60px rgba(231,76,60,0.4);
        }
        .luz.activa-amarillo {
            background: var(--amarillo);
            box-shadow: 0 0 28px var(--amarillo), 0 0 60px rgba(243,156,18,0.4);
        }
        .luz.activa-verde {
            background: var(--verde);
            box-shadow: 0 0 28px var(--verde), 0 0 60px rgba(46,204,113,0.4);
        }

        .resultado-texto {
            text-align: center;
            display: none;
        }
        .resultado-texto h3 { font-size: 1.8rem; font-weight: 700; margin-bottom: 6px; }
        .resultado-texto .bebida-nombre { color: #888; font-size: 0.9rem; margin-bottom: 14px; }
        .resultado-texto .dato { font-size: 1rem; color: #ccc; margin: 4px 0; }
        .resultado-texto .dato strong { color: #fff; }
        .alerta-msg {
            margin-top: 14px;
            padding: 12px 20px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            text-align: center;
        }
        .alerta-verde  { background: rgba(46,204,113,0.15); border: 1px solid var(--verde); color: var(--verde); }
        .alerta-amarillo { background: rgba(243,156,18,0.15); border: 1px solid var(--amarillo); color: var(--amarillo); }
        .alerta-rojo   { background: rgba(231,76,60,0.15); border: 1px solid var(--rojo); color: var(--rojo); }

        /* ── BARRA PROGRESO ── */
        .barra-wrap { margin-top: 10px; }
        .barra-fondo {
            background: #222;
            border-radius: 20px;
            height: 14px;
            overflow: hidden;
        }
        .barra-fill {
            height: 100%;
            border-radius: 20px;
            transition: width 0.8s ease, background 0.5s ease;
            width: 0%;
        }
        .barra-label { font-size: 0.8rem; color: #888; margin-top: 4px; display: flex; justify-content: space-between; }

        /* ── CUCHARADAS ── */
        .cucharadas-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: 10px;
            justify-content: center;
        }
        .cuchara-icon { font-size: 1.4rem; }

        /* ── LISTA BEBIDAS ── */
        .bebidas-lista { margin-top: 16px; max-height: 220px; overflow-y: auto; }
        .bebida-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 14px;
            background: #111;
            border-radius: 10px;
            margin-bottom: 8px;
            border-left: 4px solid transparent;
            font-size: 0.9rem;
        }
        .bebida-item.verde  { border-left-color: var(--verde); }
        .bebida-item.amarillo { border-left-color: var(--amarillo); }
        .bebida-item.rojo   { border-left-color: var(--rojo); }
        .bebida-item .badge-color {
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
        }
        .badge-verde { background: rgba(46,204,113,0.2); color: var(--verde); }
        .badge-amarillo { background: rgba(243,156,18,0.2); color: var(--amarillo); }
        .badge-rojo { background: rgba(231,76,60,0.2); color: var(--rojo); }

        /* ── GAS SIMULATOR ── */
        .gas-section { margin-top: 20px; }

        input[type="range"] {
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            height: 6px;
            background: #333;
            border-radius: 3px;
            outline: none;
        }
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #f39c12;
            cursor: pointer;
        }
        input[type="range"]::-moz-range-thumb {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #f39c12;
            cursor: pointer;
            border: none;
        }

        .slider-val { font-size: 1rem; font-weight: 700; color: #f39c12; }

        .gas-display {
            display: flex;
            align-items: flex-end;
            gap: 20px;
            margin-top: 16px;
        }
        .botella-wrap { display: flex; flex-direction: column; align-items: center; gap: 8px; }
        .botella-svg { filter: drop-shadow(0 0 10px rgba(100,180,255,0.3)); }

        .gas-info { flex: 1; }
        .gas-pct { font-size: 3rem; font-weight: 800; color: #4fc3f7; line-height: 1; }
        .gas-label { color: #888; font-size: 0.9rem; margin-top: 4px; }
        .gas-status { margin-top: 12px; padding: 10px 16px; border-radius: 10px; font-size: 0.9rem; }
        .gas-ok      { background: rgba(79,195,247,0.1); border: 1px solid #4fc3f7; color: #4fc3f7; }
        .gas-warning { background: rgba(243,156,18,0.1); border: 1px solid var(--amarillo); color: var(--amarillo); }
        .gas-flat    { background: rgba(231,76,60,0.1); border: 1px solid var(--rojo); color: var(--rojo); }
        .gas-formula { font-size: 0.75rem; color: #555; margin-top: 10px; font-style: italic; }

        /* ── SCROLLBAR ── */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #111; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }

        /* ── RESPONSIVE ── */
        @media (max-width: 768px) {
            .hero h2 { font-size: 1.8rem; }
            .gas-display { flex-direction: column; align-items: center; }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<?php include 'navbar.php'; ?>

<!-- HERO -->
<div class="hero">
    <h2>🚦 Semáforo Nutricional</h2>
    <p>Visualiza el azúcar de tu bebida y compárala con el límite diario de la OMS</p>
</div>

<!-- MAIN CONTENT -->
<div class="container pb-5" style="max-width:1100px;">
    <div class="row g-4">

        <!-- COL 1: FORMULARIO -->
        <div class="col-lg-4">
            <div class="card-dark h-100">
                <div class="section-title"><span>🥤</span> Introduce tu bebida</div>

                <div class="mb-3">
                    <label>Nombre de la bebida</label>
                    <input type="text" id="inp-nombre" placeholder="ej. Coca-Cola 500ml" />
                </div>
                <div class="mb-3">
                    <label>Cantidad (ml)</label>
                    <input type="number" id="inp-ml" placeholder="ej. 500" min="1" max="3000" />
                </div>
                <div class="mb-3">
                    <label>Azúcar (gramos)</label>
                    <input type="number" id="inp-azucar" placeholder="ej. 55" min="0" max="300" step="0.1" />
                </div>

                <button class="btn-calcular" onclick="calcular()">Analizar bebida</button>

                <!-- OMS info -->
                <div style="margin-top:20px; padding:12px; background:#111; border-radius:10px; font-size:0.8rem; color:#666; line-height:1.6;">
                    <strong style="color:#888;">Límite OMS:</strong> 25 g de azúcar libre al día<br>
                    <strong style="color:#888;">1 cucharada</strong> ≈ 4 g de azúcar
                </div>
            </div>
        </div>

        <!-- COL 2: SEMÁFORO + RESULTADO -->
        <div class="col-lg-4">
            <div class="card-dark h-100">
                <div class="section-title"><span>🚦</span> Resultado</div>

                <div class="semaforo-wrap">
                    <div class="semaforo">
                        <div class="luz" id="luz-rojo"></div>
                        <div class="luz" id="luz-amarillo"></div>
                        <div class="luz" id="luz-verde"></div>
                    </div>

                    <div class="resultado-texto" id="resultado-box">
                        <div class="bebida-nombre" id="res-nombre">—</div>
                        <h3 id="res-pct">—%</h3>
                        <div style="color:#888; font-size:0.8rem; margin-bottom:10px;">del límite diario OMS</div>

                        <div class="barra-wrap">
                            <div class="barra-fondo">
                                <div class="barra-fill" id="barra-fill"></div>
                            </div>
                            <div class="barra-label">
                                <span>0 g</span>
                                <span>25 g (OMS)</span>
                            </div>
                        </div>

                        <div class="dato" style="margin-top:14px;">
                            <strong id="res-gramos">—</strong> g de azúcar en <strong id="res-ml">—</strong> ml
                        </div>
                        <div class="dato">≈ <strong id="res-cucharadas">—</strong> cucharadas de azúcar</div>

                        <!-- Cucharadas visuales -->
                        <div class="cucharadas-grid" id="cucharadas-grid"></div>

                        <!-- Alerta -->
                        <div class="alerta-msg" id="alerta-msg"></div>
                    </div>

                    <div id="placeholder-text" style="color:#555; font-size:0.9rem; text-align:center; margin-top:10px;">
                        Introduce una bebida para ver el análisis
                    </div>
                </div>
            </div>
        </div>

        <!-- COL 3: HISTORIAL -->
        <div class="col-lg-4">
            <div class="card-dark h-100">
                <div class="section-title"><span>📋</span> Historial del día</div>
                <div id="total-dia" style="display:none; padding:12px; background:#111; border-radius:10px; margin-bottom:14px; text-align:center;">
                    <div style="font-size:0.8rem; color:#777;">Total acumulado</div>
                    <div style="font-size:1.8rem; font-weight:700;" id="total-g">0 g</div>
                    <div style="font-size:0.8rem;" id="total-pct-label"></div>
                    <div class="barra-wrap" style="margin-top:8px;">
                        <div class="barra-fondo">
                            <div class="barra-fill" id="barra-total"></div>
                        </div>
                    </div>
                </div>
                <div class="bebidas-lista" id="bebidas-lista">
                    <div style="color:#555; font-size:0.9rem; text-align:center; padding-top:40px;">
                        Aún no has añadido bebidas
                    </div>
                </div>
                <button onclick="limpiarHistorial()" style="margin-top:14px; background:transparent; border:1px solid #333; border-radius:8px; color:#666; padding:8px 16px; cursor:pointer; font-size:0.85rem; width:100%; transition:all .2s;" onmouseover="this.style.borderColor='#555';this.style.color='#aaa'" onmouseout="this.style.borderColor='#333';this.style.color='#666'">
                    Limpiar historial
                </button>
            </div>
        </div>

    </div><!-- /row -->

    <!-- ── GAS SIMULATOR ── -->
    <div class="row g-4 mt-2">
        <div class="col-12">
            <div class="card-dark">
                <div class="section-title"><span>🧪</span> Simulador de Gas Carbónico (Extra — Física)</div>
                <p style="color:#666; font-size:0.85rem; margin-bottom:20px;">
                    Basado en la <strong style="color:#888;">Ley de Henry</strong> y la <strong style="color:#888;">ecuación de Arrhenius</strong>:
                    el CO₂ disuelto en una bebida carbonatada escapa más rápido cuanto mayor es la temperatura.
                    Simula cuánta carbonatación queda tras abrir la bebida.
                </p>

                <div class="row g-4">
                    <div class="col-md-5">
                        <div class="mb-4">
                            <label>🌡️ Temperatura: <span class="slider-val" id="val-temp">20°C</span></label>
                            <input type="range" id="sl-temp" min="0" max="50" value="20" oninput="actualizarGas()" />
                            <div style="display:flex; justify-content:space-between; font-size:0.75rem; color:#555; margin-top:4px;">
                                <span>0°C (nevera)</span><span>25°C (ambiente)</span><span>50°C (caliente)</span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>⏱️ Tiempo abierta: <span class="slider-val" id="val-tiempo">0 min</span></label>
                            <input type="range" id="sl-tiempo" min="0" max="120" value="0" oninput="actualizarGas()" />
                            <div style="display:flex; justify-content:space-between; font-size:0.75rem; color:#555; margin-top:4px;">
                                <span>Recién abierta</span><span>1 hora</span><span>2 horas</span>
                            </div>
                        </div>
                        <div class="gas-formula" id="gas-formula"></div>
                    </div>

                    <div class="col-md-7">
                        <div class="gas-display">
                            <div class="botella-wrap">
                                <svg class="botella-svg" width="70" height="160" viewBox="0 0 70 160">
                                    <!-- Botella -->
                                    <rect x="22" y="15" width="26" height="10" rx="4" fill="#2a2a2a" stroke="#444" stroke-width="1.5"/>
                                    <path d="M 15 30 Q 10 38 10 50 L 10 140 Q 10 150 20 150 L 50 150 Q 60 150 60 140 L 60 50 Q 60 38 55 30 Z" fill="#1a2a3a" stroke="#2a4a6a" stroke-width="1.5"/>
                                    <!-- Líquido -->
                                    <clipPath id="botellaClip">
                                        <path d="M 15 30 Q 10 38 10 50 L 10 140 Q 10 150 20 150 L 50 150 Q 60 150 60 140 L 60 50 Q 60 38 55 30 Z"/>
                                    </clipPath>
                                    <rect id="gas-nivel" x="10" y="50" width="50" height="100" fill="#1565c0" opacity="0.5" clip-path="url(#botellaClip)"/>
                                    <!-- Burbujas -->
                                    <g id="burbujas" opacity="1">
                                        <circle cx="25" cy="110" r="2.5" fill="#4fc3f7" opacity="0.6"/>
                                        <circle cx="35" cy="90"  r="2"   fill="#4fc3f7" opacity="0.5"/>
                                        <circle cx="45" cy="120" r="3"   fill="#4fc3f7" opacity="0.5"/>
                                        <circle cx="30" cy="75"  r="1.5" fill="#4fc3f7" opacity="0.4"/>
                                        <circle cx="42" cy="100" r="2"   fill="#4fc3f7" opacity="0.6"/>
                                    </g>
                                    <!-- Tapa -->
                                    <rect x="20" y="10" width="30" height="8" rx="3" fill="#f39c12"/>
                                </svg>
                                <div style="font-size:0.75rem; color:#555;">Carbonatación</div>
                            </div>

                            <div class="gas-info">
                                <div class="gas-pct" id="gas-pct">100%</div>
                                <div class="gas-label">de carbonatación restante</div>
                                <div class="gas-status gas-ok" id="gas-status">
                                    🫧 Bebida perfectamente carbonatada
                                </div>
                                <div style="margin-top:14px;">
                                    <div style="font-size:0.85rem; color:#888; margin-bottom:8px;">Desglose:</div>
                                    <div style="font-size:0.85rem; color:#ccc;" id="gas-desglose">—</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- /container -->

<script>
    // ─── SUGAR CALCULATOR ───────────────────────────────────────────────────

    const OMS_LIMITE = 25;        // gramos / día
    const G_POR_CUCHARA = 4;      // gramos por cucharada

    let historial = [];

    function calcular() {
        const nombre = document.getElementById('inp-nombre').value.trim() || 'Bebida sin nombre';
        const ml     = parseFloat(document.getElementById('inp-ml').value);
        const g      = parseFloat(document.getElementById('inp-azucar').value);

        if (isNaN(ml) || isNaN(g) || ml <= 0 || g < 0) {
            alert('Por favor introduce valores válidos de ml y gramos de azúcar.');
            return;
        }

        const cucharadas = Math.round(g / G_POR_CUCHARA * 10) / 10;
        const pct = Math.round(g / OMS_LIMITE * 100);
        const nivel = pct <= 50 ? 'verde' : pct <= 100 ? 'amarillo' : 'rojo';

        // Semáforo
        ['rojo','amarillo','verde'].forEach(c => {
            document.getElementById('luz-' + c).className = 'luz';
        });
        document.getElementById('luz-' + nivel).classList.add('activa-' + nivel);

        // Resultados
        document.getElementById('placeholder-text').style.display = 'none';
        const box = document.getElementById('resultado-box');
        box.style.display = 'block';

        document.getElementById('res-nombre').textContent = nombre + ' · ' + ml + ' ml';
        document.getElementById('res-pct').textContent = pct + '%';
        document.getElementById('res-gramos').textContent = g;
        document.getElementById('res-ml').textContent = ml;
        document.getElementById('res-cucharadas').textContent = cucharadas;

        // Barra progreso
        const fill = document.getElementById('barra-fill');
        const anchoBarra = Math.min(pct, 200);
        fill.style.width = Math.min(anchoBarra, 100) + '%';
        fill.style.background = nivel === 'verde' ? '#2ecc71' : nivel === 'amarillo' ? '#f39c12' : '#e74c3c';

        // Cucharadas visuales (max 20 iconos)
        const grid = document.getElementById('cucharadas-grid');
        grid.innerHTML = '';
        const total = Math.min(Math.ceil(cucharadas), 20);
        for (let i = 0; i < total; i++) {
            const el = document.createElement('span');
            el.className = 'cuchara-icon';
            el.title = 'aprox. 4 g';
            el.textContent = '🥄';
            grid.appendChild(el);
        }
        if (Math.ceil(cucharadas) > 20) {
            const el = document.createElement('span');
            el.style.color = '#666';
            el.style.fontSize = '0.8rem';
            el.textContent = '+' + (Math.ceil(cucharadas) - 20) + ' más';
            grid.appendChild(el);
        }

        // Alerta
        const alerta = document.getElementById('alerta-msg');
        if (nivel === 'verde') {
            alerta.className = 'alerta-msg alerta-verde';
            alerta.textContent = '✅ Dentro del límite diario — ' + g + ' g = ' + cucharadas + ' cucharadas';
        } else if (nivel === 'amarillo') {
            alerta.className = 'alerta-msg alerta-amarillo';
            alerta.textContent = '⚠️ Atención — ' + g + ' g = ' + cucharadas + ' cucharadas. Cerca del límite.';
        } else {
            alerta.className = 'alerta-msg alerta-rojo';
            alerta.textContent = '🚨 ¡Cuidado! ' + g + ' g = ' + cucharadas + ' cucharadas. Supera el límite OMS.';
        }

        // Guardar en historial
        historial.push({ nombre, ml, g, cucharadas, pct, nivel });
        renderHistorial();
    }

    function renderHistorial() {
        const lista = document.getElementById('bebidas-lista');
        if (historial.length === 0) {
            lista.innerHTML = '<div style="color:#555;font-size:0.9rem;text-align:center;padding-top:40px;">Aún no has añadido bebidas</div>';
            document.getElementById('total-dia').style.display = 'none';
            return;
        }

        lista.innerHTML = historial.map((b, i) => `
            <div class="bebida-item ${b.nivel}">
                <div>
                    <div style="color:#ddd;font-weight:600;">${b.nombre}</div>
                    <div style="color:#666;font-size:0.8rem;">${b.ml} ml · ${b.g} g · ${b.cucharadas} cucharadas</div>
                </div>
                <span class="badge-color badge-${b.nivel}">${b.pct}%</span>
            </div>
        `).join('');

        const totalG = historial.reduce((s, b) => s + b.g, 0);
        const totalPct = Math.round(totalG / OMS_LIMITE * 100);
        document.getElementById('total-dia').style.display = 'block';
        document.getElementById('total-g').textContent = Math.round(totalG * 10) / 10 + ' g';
        const totalNivel = totalPct <= 50 ? 'verde' : totalPct <= 100 ? 'amarillo' : 'rojo';
        const colores = { verde: '#2ecc71', amarillo: '#f39c12', rojo: '#e74c3c' };
        document.getElementById('total-pct-label').textContent = totalPct + '% del límite diario OMS';
        document.getElementById('total-pct-label').style.color = colores[totalNivel];
        const bt = document.getElementById('barra-total');
        bt.style.width = Math.min(totalPct, 100) + '%';
        bt.style.background = colores[totalNivel];
    }

    function limpiarHistorial() {
        historial = [];
        renderHistorial();
    }

    // Enter para calcular
    ['inp-nombre','inp-ml','inp-azucar'].forEach(id => {
        document.getElementById(id).addEventListener('keydown', e => {
            if (e.key === 'Enter') calcular();
        });
    });

    // ─── GAS SIMULATOR ──────────────────────────────────────────────────────
    // Modelo físico simplificado:
    //   Ley de Henry: C = kH(T) · P  →  solubilidad del CO₂ cae con T
    //   Tasa de pérdida k(T) = k0 · exp(α · (T - T_ref))  (tipo Arrhenius)
    //   Gas restante (%) = 100 · exp(-k(T) · t)
    //   k0 = 0.018 min⁻¹  (a 20°C, pierde ~50% en ~38 min)
    //   α  = 0.055 °C⁻¹

    const K0   = 0.018;
    const ALFA = 0.055;
    const T_REF = 20;

    function calcularGas(tempC, minutos) {
        const k = K0 * Math.exp(ALFA * (tempC - T_REF));
        const gas = 100 * Math.exp(-k * minutos);
        return Math.max(0, gas);
    }

    function actualizarGas() {
        const t   = parseInt(document.getElementById('sl-temp').value);
        const min = parseInt(document.getElementById('sl-tiempo').value);

        document.getElementById('val-temp').textContent   = t + '°C';
        document.getElementById('val-tiempo').textContent = min === 0 ? 'Recién abierta' : min + ' min';

        const gas = calcularGas(t, min);
        const gasR = Math.round(gas);

        document.getElementById('gas-pct').textContent = gasR + '%';

        // Nivel en botella SVG (y va de 50 a 150; 100% = y:50, 0% = y:150)
        const yPos = 50 + (100 - gas) * 1.0;
        document.getElementById('gas-nivel').setAttribute('y', yPos);

        // Burbujas: reducir opacidad según gas restante
        document.getElementById('burbujas').setAttribute('opacity', gas / 100);

        // Estado
        const statusEl = document.getElementById('gas-status');
        if (gasR >= 70) {
            statusEl.className = 'gas-status gas-ok';
            statusEl.textContent = '🫧 Bebida muy carbonatada — perfecta para beber';
        } else if (gasR >= 40) {
            statusEl.className = 'gas-status gas-warning';
            statusEl.textContent = '⚠️ Carbonatación moderada — empieza a perder frescura';
        } else if (gasR > 5) {
            statusEl.className = 'gas-status gas-warning';
            statusEl.textContent = '😕 Poca carbonatación — casi sin gas';
        } else {
            statusEl.className = 'gas-status gas-flat';
            statusEl.textContent = '💨 Sin gas — la bebida está completamente plana';
        }

        // Desglose
        const k = K0 * Math.exp(ALFA * (t - T_REF));
        document.getElementById('gas-desglose').innerHTML = `
            Tasa de escape: <strong style="color:#f39c12">${(k * 60).toFixed(3)} %/hora</strong><br>
            Tiempo hasta 50% gas: <strong style="color:#f39c12">${(Math.log(2)/k).toFixed(1)} min</strong><br>
            Temperatura: <strong style="color:#f39c12">${t}°C</strong> · Tiempo: <strong style="color:#f39c12">${min} min</strong>
        `;

        // Fórmula
        document.getElementById('gas-formula').textContent =
            `Gas(t,T) = 100 · e^(-${k.toFixed(4)} · ${min}) = ${gas.toFixed(1)}%`;
    }

    actualizarGas();
</script>

</body>
</html>
