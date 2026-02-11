<!DOCTYPE html>
<html>
<head>
    <title>Our Love Story ❤️</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI';
            background: linear-gradient(135deg, #ff758c, #ff7eb3);
            overflow-x: hidden;
            text-align: center;
            color: white;
        }

        h1 {
            margin-top: 80px;
            font-size: 50px;
        }

        .typewriter {
            font-size: 24px;
            margin-top: 20px;
            min-height: 50px;
        }

        .gallery {
            margin-top: 40px;
        }

        .gallery img {
            width: 250px;
            border-radius: 15px;
            margin: 10px;
            transition: 0.5s;
        }

        .gallery img:hover {
            transform: scale(1.1);
        }

        button {
            padding: 15px 30px;
            font-size: 20px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            margin: 15px;
        }

        .yes-btn {
            background: white;
            color: #ff4b7d;
        }

        .no-btn {
            background: black;
            color: white;
            position: relative;
        }

        #finalMessage {
            display: none;
            font-size: 30px;
            margin-top: 30px;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        .heart {
            position: fixed;
            bottom: -10px;
            font-size: 20px;
            animation: floatUp 5s linear infinite;
        }

        @keyframes floatUp {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(-100vh); opacity: 0; }
        }

    </style>
</head>
<body>

<h1>Happy Valentine’s Day My Love ❤️</h1>

<div class="typewriter" id="typewriter"></div>

<div class="gallery">
    <img src="{{ asset('images/photo1.jpg') }}">
    <img src="{{ asset('images/photo2.jpg') }}">
    <img src="{{ asset('images/photo3.jpg') }}">
</div>

<h2 id="countdown"></h2>

<div>
    <button class="yes-btn" onclick="showFinal()">Yes 💖</button>
    <button class="no-btn" onmouseover="moveButton(this)">No 😜</button>
</div>

<div id="finalMessage">
    💍 From debugging code to debugging life…  
    I choose you forever ❤️
</div>

<!-- Background Music -->
<audio id="bgMusic" loop>
    <source src="{{ asset('images/love.mp3') }}" type="audio/mpeg">
</audio>

<script>
document.addEventListener("DOMContentLoaded", function() {

    const music = document.getElementById("bgMusic");
    music.volume = 0;

    function fadeInMusic() {
        music.play();
        let volume = 0;
        let fade = setInterval(() => {
            if (volume < 0.5) {
                volume += 0.05;
                music.volume = volume;
            } else {
                clearInterval(fade);
            }
        }, 200);
    }

    document.addEventListener("click", function start() {
        fadeInMusic();
        document.removeEventListener("click", start);
    });

});
</script>

<script>
    // Typewriter Effect
    const text = "Every moment with you is my favorite memory...";
    let i = 0;
    function typeWriter() {
        if (i < text.length) {
            document.getElementById("typewriter").innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, 50);
        }
    }
    typeWriter();

    // Countdown
    var countDownDate = new Date("Feb 14, 2026 00:00:00").getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        document.getElementById("countdown").innerHTML =
            "Countdown to our forever: " + days + " days 💕";
    }, 1000);

    // Moving No Button
    function moveButton(btn) {
        btn.style.left = Math.random() * 200 + "px";
        btn.style.top = Math.random() * 200 + "px";
    }

    // Show Final Message
    function showFinal() {
        document.getElementById("finalMessage").style.display = "block";
    }

    // Floating Hearts
    setInterval(() => {
        const heart = document.createElement("div");
        heart.innerHTML = "❤️";
        heart.className = "heart";
        heart.style.left = Math.random() * 100 + "vw";
        document.body.appendChild(heart);

        setTimeout(() => {
            heart.remove();
        }, 5000);
    }, 500);

</script>

</body>
</html>
