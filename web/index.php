<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docekr Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .marquee {
            display: inline-block;
            white-space: nowrap;
            position: absolute;
            will-change: transform;
        }

        .marquee-wrapper {
            position: relative;
            width: 100%;
            overflow: hidden;
            height: 150px;
            /* Disesuaikan untuk ruang yang cukup */
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="bg-gray-300">
    <div class="marquee-wrapper">
        <h1 id="marquee" class="marquee text-center font-bold text-6xl p-4 bg-blue-500 text-white rounded hover:bg-blue-700 hover:text-yellow-300 ease-in-out">
            <?php echo "WELCOME TO THIS DEMO DOCKER"; ?>
        </h1>
    </div>
    <div class="text-center m-8 font-semibold text-3xl text-blue-500 min-h-screen">
        <p class="text-black p-4">By:</p>
        <h2 class="p-4">I Putu Romyadhy Mahaputra</h2>
        <h2 class="pb-4">2215101052</h2>
        <a href="index.html" class="font-bold text-blue-500 hover:text-blue-700 hover:underline transition duration-300 ease-in-out rounded bg-blue-100 hover:bg-blue-200 focus:ring focus:ring-blue-300">See About</a>
        <a href="phpinfo.php" class="font-bold text-blue-500 hover:text-blue-700 hover:underline transition duration-300 ease-in-out rounded bg-blue-100 hover:bg-blue-200 focus:ring focus:ring-blue-300">See InfoPhp</a>
        
    </div>


    <script>
        function startMarquee() {
            const marquee = document.getElementById('marquee');
            const wrapper = document.querySelector('.marquee-wrapper');
            let wrapperWidth = wrapper.offsetWidth;
            let marqueeWidth = marquee.offsetWidth;

            let currentX = wrapperWidth;
            marquee.style.transform = `translateX(${currentX}px)`;

            function animate() {
                currentX -= 2;
                if (currentX < -marqueeWidth) {
                    currentX = wrapperWidth;
                }
                marquee.style.transform = `translateX(${currentX}px)`;
                requestAnimationFrame(animate);
            }

            animate();
        }

        window.onload = startMarquee;
    </script>
</body>

</html>