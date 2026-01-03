<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cuestionario de Rutina Masculina</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f6f7f9;
            color: #222;
            line-height: 1.6
        }

        .wrap {
            max-width: 720px;
            margin: 24px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .08);
            overflow: hidden
        }

        header {
            padding: 20px 20px 14px;
            border-bottom: 1px solid #eee
        }

        header h1 {
            font-size: 22px;
            margin-bottom: 6px
        }

        header p {
            font-size: 14px;
            color: #555
        }

        .step {
            display: none;
            padding: 22px
        }

        .step.active {
            display: block
        }

        .q {
            font-size: 18px;
            margin-bottom: 14px
        }

        .opts {
            display: grid;
            gap: 10px
        }

        .opt {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 12px 14px;
            cursor: pointer
        }

        .opt:hover {
            background: #f2f4f7
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px;
            border-top: 1px solid #eee
        }

        .progress {
            font-size: 13px;
            color: #666
        }

        button {
            border: none;
            border-radius: 6px;
            padding: 10px 14px;
            cursor: pointer
        }

        .next {
            background: #0a66ff;
            color: #fff
        }

        .prev {
            background: #e9ecf1
        }

        .cta {
            background: #0a66ff;
            color: #fff;
            width: 100%;
            font-size: 16px;
            padding: 14px
        }

        footer {
            padding: 14px 20px;
            font-size: 12px;
            color: #666;
            background: #fafafa;
            border-top: 1px solid #eee
        }

        .disclaimer {
            margin-top: 10px
        }
    </style>
</head>

<body>
    <div class="wrap">
        <header>
            <h1>Rutina Masculina – Cuestionario</h1>
            <p>Etapas rápidas para entender hábitos del día a día.</p>
        </header>

        <!-- ETAPAS 1 a 10 -->
        <div class="step active">
            <div class="q">1) ¿Cuál es tu rango de edad?</div>
            <div class="opts">
                <div class="opt">18–29</div>
                <div class="opt">30–39</div>
                <div class="opt">40–49</div>
                <div class="opt">50+</div>
            </div>
        </div>
        <div class="step">
            <div class="q">2) ¿Cómo evalúas tu nivel de energía diaria?</div>
            <div class="opts">
                <div class="opt">Alto</div>
                <div class="opt">Medio</div>
                <div class="opt">Bajo</div>
            </div>
        </div>
        <div class="step">
            <div class="q">3) Tu rutina de sueño suele ser:</div>
            <div class="opts">
                <div class="opt">Regular</div>
                <div class="opt">Irregular</div>
                <div class="opt">Insuficiente</div>
            </div>
        </div>
        <div class="step">
            <div class="q">4) ¿Realizas actividad física semanalmente?</div>
            <div class="opts">
                <div class="opt">Sí</div>
                <div class="opt">A veces</div>
                <div class="opt">No</div>
            </div>
        </div>
        <div class="step">
            <div class="q">5) ¿Cómo evalúas tu nivel de estrés?</div>
            <div class="opts">
                <div class="opt">Bajo</div>
                <div class="opt">Moderado</div>
                <div class="opt">Alto</div>
            </div>
        </div>
        <div class="step">
            <div class="q">6) Consumo de alcohol:</div>
            <div class="opts">
                <div class="opt">Raro</div>
                <div class="opt">Moderado</div>
                <div class="opt">Frecuente</div>
            </div>
        </div>
        <div class="step">
            <div class="q">7) Alimentación en el día a día:</div>
            <div class="opts">
                <div class="opt">Equilibrada</div>
                <div class="opt">Mixta</div>
                <div class="opt">Desordenada</div>
            </div>
        </div>
        <div class="step">
            <div class="q">8) ¿Ya buscaste alternativas naturales para el bienestar?</div>
            <div class="opts">
                <div class="opt">Sí</div>
                <div class="opt">No</div>
            </div>
        </div>
        <div class="step">
            <div class="q">9) ¿Prefieres orientaciones simples o planes complejos?</div>
            <div class="opts">
                <div class="opt">Simples</div>
                <div class="opt">Complejos</div>
            </div>
        </div>
        <div class="step">
            <div class="q">10) ¿Estás abierto a ajustes de rutina con ingredientes comunes?</div>
            <div class="opts">
                <div class="opt">Sí</div>
                <div class="opt">Tal vez</div>
                <div class="opt">No</div>
            </div>
        </div>

        <!-- RESULTADO -->
        <div class="step" id="result">
            <div class="q">Resultado</div>
            <p>Según tus respuestas, muchos hombres comienzan con ajustes simples de hábitos y rutina.
                Un material informativo reúne un <strong>truco tradicional con bicarbonato</strong>, presentado de forma
                cultural y educativa, enfocado en el bienestar general.</p>
            <p style="margin:14px 0">¿Deseas conocer la guía informativa?</p>
            <button class="cta"
                onclick="window.location.href='https://pay.mundpay.com/0199fdf7-9701-719e-9e32-3e4c59bbe74d?ref=&utm_source=www.facebook.com&src=1761852452975&utm_term=v3_ee93e21a-20b9-4e9b-bd5c-c78e4006fd72_68e8604a95b1f74dc6466042_3240_t-11_s-2'">VER
                LA GUÍA</button>
        </div>

        <div class="nav">
            <div class="progress" id="progress">Etapa 1 de 10</div>
            <div>
                <button class="prev" onclick="prev()">Volver</button>
                <button class="next" onclick="next()">Continuar</button>
            </div>
        </div>

        <footer>
            <div>Contenido informativo y educativo.</div>
            <div class="disclaimer">No sustituye la orientación profesional. No realiza promesas de cura ni tratamiento.
            </div>
        </footer>
    </div>

    <script>
        const steps = document.querySelectorAll('.step');
        const progress = document.getElementById('progress');
        let i = 0;
        function show() {
            steps.forEach((s, idx) => s.classList.toggle('active', idx === i));
            progress.textContent = i < 10 ? `Etapa ${i + 1} de 10` : 'Resultado';
        }
        function next() { if (i < steps.length - 1) { i++; show(); } }
        function prev() { if (i > 0) { i--; show(); } }
        document.querySelectorAll('.opt').forEach(o => o.addEventListener('click', next));
        show();
    </script>
</body>

</html>