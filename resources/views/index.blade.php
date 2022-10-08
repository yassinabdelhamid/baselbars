<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <title>BaselBars</title>
</head>

<body>
    <div class="container">
        <div id="app">
            <section class="blue">
                <h1>WELCOME TO YOUR NEXT CULINARY ADVENTURE</h1>
                <p>Can't decide where to go for a drink or a good meal?<br>
                    We can take care of that, just press the buttons below!</p>
                <div class="wave">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                    </svg>
                </div>
                <div class="wave2">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                    </svg>
                </div>
            </section>

            <section>
                @foreach ($bar as $bars)
                <h1>Bars</h1>
                <p>Random Bars: {{$bars->name}}</p>
                <button class="button-24" role="button" id="barButton" onclick="getRandomBarId()">Press me for a drink</button>
                <div class="wave3">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                    </svg>
                </div>
                @endforeach
            </section>



            <section class="red">
                <h1>Restaurants</h1>
                <p>Random blablablablablabalabalabalabablabalabalbalablablablalabablalbalbalbalabl</p>
                <button class="button-25" role="button">Press me for food</button>

            </section>

            <div class="spacer layer2"></div>

            <section>
                <h1>About Us</h1>
                <p>If you like this page feel free to support your locals by some extra caffeine for us!</p>
                <br>
                <script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="habibiyassin" data-color="#ff0066" data-emoji="" data-font="Poppins" data-text="Buy me a coffee" data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#FFDD00"></script>
                <svg id="visual" viewBox="0 0 900 300" width="900" height="300" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                    <g transform="translate(480.95534248758355 164.05332788810935)">
                        <path id="blob1" d="M55.9 -67.9C68.4 -43.4 71.7 -21.7 71 -0.7C70.3 20.3 65.5 40.5 53 58.4C40.5 76.2 20.3 91.6 -5.5 97.1C-31.3 102.7 -62.7 98.4 -87.7 80.5C-112.7 62.7 -131.3 31.3 -132.9 -1.5C-134.4 -34.4 -118.8 -68.8 -93.8 -93.3C-68.8 -117.8 -34.4 -132.4 -6.4 -126C21.7 -119.7 43.4 -92.4 55.9 -67.9" fill="#ff0066"></path>
                    </g>
                    <g transform="translate(449.983874199404 167.2728495282357)" style="visibility: hidden">
                        <path id="blob2" d="M87.7 -87.2C112.7 -62.7 131.3 -31.3 124.7 -6.6C118.1 18.1 86.3 36.3 61.3 50C36.3 63.6 18.1 72.8 -7.9 80.7C-33.9 88.6 -67.9 95.2 -92.4 81.5C-116.9 67.9 -131.9 33.9 -123.8 8.1C-115.7 -17.7 -84.4 -35.4 -59.9 -59.9C-35.4 -84.4 -17.7 -115.7 6.8 -122.5C31.3 -129.3 62.7 -111.7 87.7 -87.2" fill="#ff0066"></path>
                    </g>
                </svg>



                <div class="wave4">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                    </svg>
                </div>
            </section>
        </div>
    </div>


    <script>
        const tween = KUTE.fromTo(
            '#blob1', {
                path: '#blob1'
            }, {
                path: '#blob2'
            }, {
                repeat: 999,
                duration: 3000,
                yoyo: true
            }
        )
        tween.start()
    </script>

    <script>
        function getRandomBarId() 
        {
            document.getElementById('barButton').innerHTML = Math.floor(Math.random() * 10);
        }
    </script>
</body>

</html>