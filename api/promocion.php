<?php
// Strict Token Logic
$token = isset($_GET['tk']) ? $_GET['tk'] : '';
$validToken = 'smaow929as9';

// Show Content only if Token matches
$showContent = ($token === $validToken);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- UTMify Scripts (Common) -->
    <script src="https://cdn.utmify.com.br/scripts/utms/latest.js" data-utmify-prevent-xcod-sck
        data-utmify-prevent-subids async defer></script>

    <!-- Pixel (Common) -->
    <script>
        window.pixelId = "69579a8be70c757a1b85066e";
        var a = document.createElement("script");
        a.setAttribute("async", "");
        a.setAttribute("defer", "");
        a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
        document.head.appendChild(a);
    </script>

    <?php if ($showContent): ?>
        <!-- ====================
             SUCCESS: OFFER PAGE
             ==================== -->
        <title>Oferta Exclusiva - Truco del Bicarbonato</title>
        <meta name="description"
            content="Aprovecha hoy mismo el descuento del 50% en el Truco del Bicarbonato. Oferta limitada para seleccionados.">
        <link rel="stylesheet" href="/promocion/css/style.css">
    <?php else: ?>
        <!-- ====================
             SAFE PAGE: QUIZ
             ==================== -->
        <title>Evaluación de Rutina</title>
        <link rel="stylesheet" href="/css/style.css">
        <style>
            /* Ensure Quiz is visible immediately */
            body #quiz-container {
                display: block;
            }
        </style>
    <?php endif; ?>
</head>

<body>

    <?php if ($showContent): ?>
        <!-- 
      OFFER PAGE CONTENT
      Copied from promocion/index.html
    -->
        <div class="announcement-bar">
            ⚠️ CUPÓN DE DESCUENTO ACTIVADO SOLO POR HOY
        </div>

        <main class="container">
            <header class="header">
                <h1 class="headline">¡ENHORABUENA! <br><span class="highlight">ERES EL ELEGIDO</span></h1>
                <p class="selection-text">Has sido seleccionado al azar entre 50 visitantes para recibir un <strong>50% de
                        descuento inmediato</strong>.</p>
            </header>

            <section class="offer-card">
                <div class="mentor-info">
                    <span class="mentor-name">De: Dr. Carlos Jaramillo</span>
                </div>

                <div class="copy-content">
                    <p>No voy a permitir que el dinero sea un obstáculo cuando se trata de recuperar tu <strong>dignidad y
                            hombría</strong>.</p>

                    <p>Entiendo lo vergonzoso que es sentirse humillado. Sé que destruye tu autoestima y tus ganas de vivir,
                        pero hoy eso se termina.</p>

                    <div class="emphasis-box">
                        <p>Creemos que cada hombre merece disfrutar los beneficios del <strong>Truco Del
                                Bicarbonato</strong> sin que el costo sea una barrera.</p>
                    </div>

                    <p>Esta es una oportunidad única. Un paso definitivo hacia tu transformación total. No permitas que esta
                        oferta desaparezca.</p>
                </div>

                <div class="pricing-section">
                    <div class="price-container">
                        <span class="old-price">Antes: 27$</span>
                        <span class="new-price">HOY POR SOLO: <span class="amount">14,90$</span></span>
                    </div>

                    <a href="https://pay.hotmart.com/V103374224C?off=dafn4nqn" id="cta-button" class="cta-button">
                        ¡SÍ! QUIERO MI ACCESO AHORA
                    </a>

                    <p class="guarantee-text">🔒 Pago seguro y acceso instantáneo</p>
                </div>
            </section>
        </main>

        <footer class="footer">
            <p>© 2024 Truco Del Bicarbonato. Protocolo Acero. Todos los derechos reservados.</p>
        </footer>

    <?php else: ?>
        <!-- 
      SAFE PAGE CONTENT (Quiz)
      Identical to api/index.php Safe Page
    -->
        <div id="quiz-container">
            <div class="top-bar">
                Evaluación de Rutina Gratuita
            </div>
            <div class="container" style="max-width: 600px; padding-top: 2rem; padding-bottom: 2rem;">

                <!-- Step 1 -->
                <div id="step-1" class="quiz-step active">
                    <div class="quiz-card">
                        <h2>Pregunta 1 de 3</h2>
                        <p>¿Cuál es su género?</p>
                        <div class="options">
                            <button class="quiz-btn" onclick="nextStep(2)">Masculino</button>
                            <button class="quiz-btn" onclick="nextStep(2)">Femenino</button>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div id="step-2" class="quiz-step" style="display:none;">
                    <div class="quiz-card">
                        <h2>Pregunta 2 de 3</h2>
                        <p>¿Cuál es su edad?</p>
                        <div class="options">
                            <button class="quiz-btn" onclick="nextStep(3)">18 - 29 años</button>
                            <button class="quiz-btn" onclick="nextStep(3)">30 - 45 años</button>
                            <button class="quiz-btn" onclick="nextStep(3)">46+ años</button>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div id="step-3" class="quiz-step" style="display:none;">
                    <div class="quiz-card">
                        <h2>Pregunta 3 de 3</h2>
                        <p>¿Su objetivo principal?</p>
                        <div class="options">
                            <button class="quiz-btn" onclick="finishQuiz()">Perder Peso</button>
                            <button class="quiz-btn" onclick="finishQuiz()">Ganar Músculo</button>
                            <button class="quiz-btn" onclick="finishQuiz()">Salud General</button>
                        </div>
                    </div>
                </div>

                <!-- Loading Result -->
                <div id="step-loading" class="quiz-step" style="display:none; text-align: center;">
                    <div class="loader"></div>
                    <h3>Analizando sus respuestas...</h3>
                </div>

                <!-- Final Result (Generic Safe Page End) -->
                <div id="step-result" class="quiz-step" style="display:none; text-align: center;">
                    <div class="quiz-card" style="border-top: 5px solid #2ecc71;">
                        <h2 style="color: #2ecc71;">¡Elegible!</h2>
                        <p>Gracias por completar la evaluación.</p>
                        <p>Hemos enviado sus resultados a su correo electrónico si lo proporcionó, o puede contactar a
                            soporte para más detalles.</p>
                        <div style="margin-top: 20px; font-size: 0.8rem; color: #777;">
                            ID de Referencia: #8293-A
                        </div>
                    </div>
                </div>

            </div>

            <script>
                function nextStep(step) {
                    document.querySelectorAll('.quiz-step').forEach(el => el.style.display = 'none');
                    document.getElementById('step-' + step).style.display = 'block';
                }

                function finishQuiz() {
                    document.querySelectorAll('.quiz-step').forEach(el => el.style.display = 'none');
                    document.getElementById('step-loading').style.display = 'block';

                    setTimeout(() => {
                        document.getElementById('step-loading').style.display = 'none';
                        document.getElementById('step-result').style.display = 'block';
                    }, 2000);
                }
            </script>
        </div>
    <?php endif; ?>

</body>

</html>