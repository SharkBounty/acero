document.addEventListener("DOMContentLoaded", function () {
    // TEMPO EM SEGUNDOS PARA APARECER O BOTÃO
    // 30 minutos = 30 * 60 = 1800 segundos
    const SECONDS_TO_DISPLAY = 1800;

    const CLASS_TO_DISPLAY = ".delayed-content";
    const STORAGE_KEY = "already_watched_30min";

    const hiddenElements = document.querySelectorAll(CLASS_TO_DISPLAY);

    // Função para mostrar os elementos
    function showElements() {
        hiddenElements.forEach(function (el) {
            el.classList.add("visible");
            // Caso o CSS não tenha a classe visible definida, forçamos o estilo inline
            el.style.display = "block";
            setTimeout(() => {
                el.style.opacity = "1";
            }, 50);
        });
        localStorage.setItem(STORAGE_KEY, "true");
    }

    // Verifica se já assistiu antes
    if (localStorage.getItem(STORAGE_KEY)) {
        showElements();
        return;
    }

    // Loop para verificar o tempo do vídeo no Vturb
    const interval = setInterval(function () {
        try {
            // Tenta localizar a instância do SmartPlayer do Vturb
            if (window.smartplayer && window.smartplayer.instances && window.smartplayer.instances.length > 0) {
                const player = window.smartplayer.instances[0];

                if (player && player.video && player.video.currentTime) {
                    const currentTime = player.video.currentTime;

                    // Se o tempo atual for maior que o tempo definido
                    if (currentTime >= SECONDS_TO_DISPLAY) {
                        showElements();
                        clearInterval(interval);
                    }
                }
            }
        } catch (e) {
            console.error("Erro no script de delay:", e);
        }
    }, 1000); // Verifica a cada 1 segundo
});
