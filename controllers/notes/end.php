
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Cursive:wght@400..700&display=swap" rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      color: linen; 
      background-color: #BB4A47;

    }
    
    h1 {
       color: linen; 
      font-size: 60px;
      font-family: "Edu NSW ACT Cursive", cursive;
      font-optical-sizing: auto;
      font-style: normal;
      
    }
    
    p {
      font-size: 18px;
      color: white;
      margin-bottom: 30px;
    }
    
    button {
      padding: 15px 30px;
      font-size: 16px;
      background-color: #b62c28ff;
      color: white;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
      transition: background-color 0.3s;
    }
    
    button:hover {
      background-color: #b10c06ff;
    }
    
   

    canvas {
      position: fixed;
      top: 0;
      left: 0;
      pointer-events: none;
      z-index: -1;
    }
  </style>
</head>
<body id="swup" class=transition-fade>
  <audio id="bgMusic" autoplay>
    <source src="/confetti.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>
 <center> <div class="intro" id="introScreen">
  <h1> &#x1F973;  You Got It! 	&#x1F973;</h1>

  </div>
  <main id="mainContent">
    <div class="content">
  
    </div>


  
  <button onclick="playAgain()">Levels</button>


 
  <canvas id="canvas-scattering"></canvas>
  <canvas id="canvas-wrapping"></canvas>
    </center>
   
  </main>
  
  <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
  <script>

const audio = document.getElementById("bgMusic");

window.addEventListener('load', () => {
  if (audio) {
    audio.play().then(() => {
      console.log("Autoplay success");
    }).catch(() => {
      console.log("Autoplay failed, adding click fallback");

      // Use named function so we can reuse it
      const startOrRestartAudio = () => {
        audio.currentTime = 0; // Restart from beginning
        audio.play().then(() => {
          console.log("Playback started");
        }).catch(e => console.log("Still failed:", e));
      };

      // Play on first click and again on future clicks if needed
      window.addEventListener('click', startOrRestartAudio);
    });
  }
});

   
    window.onload = function() {
       renderScatteringConfetti();
      renderWrappingConfetti();
    
      setTimeout(() => {
        document.getElementById("mainContent")?.classList.add("show");
        document.getElementById("introScreen")?.classList.add("fade");
      }, 100);
      
      // Start confetti animations
     
    }

    function playAgain() {
      window.location.href = "/notes";
    }
    

    // Helper function to setup canvas
    function setupCanvas(id) {
      const canvas = document.getElementById(id);
      if (!canvas) return null;
      const ctx = canvas.getContext('2d');
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
      return { canvas, ctx };
    }

    let colors = [
      "#10b981",
      "#7c3aed",
      "#fbbf24",
      "#ef4444",
      "#3b82f6",
      "#22c55e",
      "#f97316",
      "#ef4444",
    ]

    function renderScatteringConfetti() {
      const confetti = []
      const start = performance.now()
      const canvasData = setupCanvas('canvas-scattering');
      if (!canvasData) return;
      const { canvas, ctx } = canvasData;

      for (let i = 0; i < 40; i++) {
        const radius = Math.floor(Math.random() * 50) - 10
        const tilt = Math.floor(Math.random() * 10) - 10
        const x = Math.random() * canvas.width;
        const y = Math.random() * canvas.height;

        confetti.push({
          x,
          y,
          radius,
          tilt,
          color: colors[Math.floor(Math.random() * colors.length)],
          yVelocity: Math.random() * 3,
          xVelocity: Math.random() * 2 - 1
        })
      }

      function update() {
        if (performance.now() - start > 10000) return
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        confetti.forEach((piece) => {
          piece.y += piece.yVelocity;
          piece.x += piece.xVelocity;
          ctx.beginPath();
          ctx.lineWidth = piece.radius / 2;
          ctx.strokeStyle = piece.color;
          ctx.moveTo(piece.x + piece.tilt + piece.radius / 4, piece.y);
          ctx.lineTo(piece.x + piece.tilt, piece.y + piece.tilt + piece.radius / 4);
          ctx.stroke();
        })
        requestAnimationFrame(update);
      }
      update();
    }

    function renderWrappingConfetti() {
      const canvasData = setupCanvas('canvas-wrapping');
      if (!canvasData) return;
      const { canvas, ctx } = canvasData;
      
      const timeDelta = 0.05;
      const xAmplitude = 0.5;
      const yAmplitude = 1;
      const xVelocity = 2;
      const yVelocity = 3;

      let time = 0;
      const confetti = []

      for (let i = 0; i < 100; i++) {
        const radius = Math.floor(Math.random() * 50) - 10
        const tilt = Math.floor(Math.random() * 10) - 10
        const xSpeed = Math.random() * xVelocity - xVelocity / 2
        const ySpeed = Math.random() * yVelocity
        const x = Math.random() * canvas.width;
        const y = Math.random() * canvas.height - canvas.height;

        confetti.push({
          x,
          y,
          xSpeed,
          ySpeed,
          radius,
          tilt,
          color: colors[Math.floor(Math.random() * colors.length)],
          phaseOffset: i,
        })
      }

      function update() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        confetti.forEach((piece, i) => {
          piece.y += (Math.cos(piece.phaseOffset + time) + 1) * yAmplitude + piece.ySpeed;
          piece.x += Math.sin(piece.phaseOffset + time) * xAmplitude + piece.xSpeed;
          if (piece.x < 0) piece.x = canvas.width;
          if (piece.x > canvas.width) piece.x = 0;
          if (piece.y > canvas.height) piece.y = 0;
          ctx.beginPath();
          ctx.lineWidth = piece.radius / 2;
          ctx.strokeStyle = piece.color;
          ctx.moveTo(piece.x + piece.tilt + piece.radius / 4, piece.y);
          ctx.lineTo(piece.x + piece.tilt, piece.y + piece.tilt + piece.radius / 4);
          ctx.stroke();
        })
        time += timeDelta;
        requestAnimationFrame(update);
      }
      update();
    }

   
       

    
  </script>
</body>

</html>