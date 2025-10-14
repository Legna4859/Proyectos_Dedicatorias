<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Frases Bonitas 💖</title>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      padding: 0;
      font-family: Georgia, serif;
      color: #5a2a2a;
      overflow-x: hidden;
      position: relative;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #ffdae1;
    }
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background-image:url('Imagenes/beautiful-heart-tree-landscape-scenery-uhdpaper.com-4K-6.447.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      opacity: 0.25;
      z-index: -1;
      pointer-events: none;
    }
    .contenedor {
      text-align: center;
      width: 90vw;
      max-width: 400px;
      cursor: pointer;
      user-select: none;
      position: relative;
      z-index: 1;
    }
    .carta {
      background: linear-gradient(145deg, #f9c1c9, #e794a6);
      border-radius: 25px;
      padding: 80px 30px 30px;
      box-shadow: 0 4px 8px rgba(249,193,201,0.5), inset 0 0 15px #fff0f3;
      font-size: 1.8rem;
      letter-spacing: 0.04em;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      width: 100%;
      height: 180px;
      position: relative;
    }
    .carta:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(249,193,201,0.8), inset 0 0 25px #ffe6ea;
    }
    .carta::before {
      content: "";
      position: absolute;
      top: -40px;
      left: 50%;
      transform: translateX(-50%);
      border-left: 60px solid transparent;
      border-right: 60px solid transparent;
      border-bottom: 40px solid #f9c1c9;
      border-radius: 10px 10px 0 0;
      filter: drop-shadow(0 2px 2px rgba(0,0,0,0.1));
    }
    .notas {
      margin-top: 40px;
      display: none;
      flex-direction: column;
      gap: 20px;
      align-items: center;
      animation: fadeInNotes 0.6s ease forwards;
    }
    .nota {
      background: #fff0f4;
      color: #b8435e;
      font-family: 'Dancing Script', cursive;
      font-weight: 600;
      font-size: 1.4rem;
      padding: 20px 30px;
      width: 100%;
      max-width: 350px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(184, 67, 94, 0.3);
      position: relative;
      transform: rotate(-2deg);
      transition: transform 0.3s ease;
      user-select: text;
      line-height: 1.3;
      text-align: center;
      cursor: default;
    }
    .nota:nth-child(even) { transform: rotate(2deg); }
    @keyframes fadeInNotes {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .click-hint {
      font-size: 1rem;
      margin-top: 15px;
      color: #6b3a3fcc;
      font-style: italic;
      user-select: none;
      letter-spacing: 0.1em;
      animation: pulse 2s infinite ease-in-out;
    }
    @keyframes pulse {
      0%, 100% { opacity: 0.7; }
      50% { opacity: 1; }
    }
    .abrir {
      animation: abrirCarta 0.6s forwards;
    }
    .cerrar {
      animation: cerrarCarta 0.6s forwards;
    }
    @keyframes abrirCarta {
      0% { height: 180px; border-radius: 25px; }
      100% { height: auto; border-radius: 15px; }
    }
    @keyframes cerrarCarta {
      0% { height: auto; border-radius: 15px; }
      100% { height: 180px; border-radius: 25px; }
    }
    #btnMusica {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: #f9c1c9;
      border: none;
      padding: 10px 15px;
      border-radius: 10px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      z-index: 10;
      user-select: none;
      transition: background 0.3s ease;
    }
    #btnMusica:hover {
      background: #e794a6;
      color: white;
    }
  </style>
</head>
<body>
  <div class="contenedor" onclick="toggleNotas()">
    <div class="carta" id="carta"></div>
    <div class="click-hint" id="hint">Haz clic en la carta para ver las frases</div>
    <div class="notas" id="notas">
      <div class="nota">💖 Siempre quiero recordarte lo especial que eres para mí 💖
      ✨ Tu sonrisa ilumina todo a tu alrededor ✨
      🌷 Gracias por ser mi inspiración diaria 🌷
      🌟 Contigo, todo es más hermoso y brillante 🌟</div>
    </div>
  </div>

  <!-- 🎵 Música -->
  <audio id="musica" loop>
    <source src="https://drive.google.com/uc?export=download&id=1Z5Sn8fQtjv7E0znsOepoxm5fF3DJu6e6" type="audio/mpeg" />
  </audio>
  <button id="btnMusica" onclick="toggleMusica()">🎵 Reproducir música</button>

  <script>
    const carta = document.getElementById('carta');
    const notas = document.getElementById('notas');
    const hint = document.getElementById('hint');
    let abierto = false;

    function toggleNotas() {
      if (!abierto) {
        hint.style.display = 'none';
        notas.style.display = 'flex';
        carta.classList.remove('cerrar');
        carta.classList.add('abrir');
        abierto = true;
      } else {
        notas.style.display = 'none';
        hint.style.display = 'block';
        carta.classList.remove('abrir');
        carta.classList.add('cerrar');
        abierto = false;
      }
    }

    const musica = document.getElementById('musica');
    const btnMusica = document.getElementById('btnMusica');

    function toggleMusica() {
      if (musica.paused) {
        musica.play();
        btnMusica.textContent = "⏸ Pausar música";
      } else {
        musica.pause();
        btnMusica.textContent = "🎵 Reproducir música";
      }
    }
  </script>
</body>
</html>
