<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codelystics</title>
    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700&display=swap');

        @keyframes blink {
            0%, 50%, 100% {
            opacity: 1;
            }
            25%, 75% {
                opacity: 0;
            }
        }
        .blinking-circle {
            animation: blink 4s infinite;
        }

        .gradient-text {
            background-clip: text;
            color: transparent;
        }
    </style>

</head>
<body>
    <nav class="flex flex-col h-24">
        <ul class="flex flex-row justify-around h-24 items-center text-white">
            <div class="flex justify-evenly w-1/4">
                <li>
                    <a href="">Event</a>
                </li>
                <li>
                    <a href="">Bootcamp</a>
                </li>
                <li>
                    <a href="">Competition</a>
                </li>
            </div>
            <div class="flex justify-center items-center w-2/3">
                <a href=""><img src="{{ asset('logo.svg') }}" alt=""></a>
            </div>
            <div class="flex justify-evenly items-center w-1/4">
                <li class="w-1/2 flex justify-center">
                    <div class="flex flex-row justify-end items-center w-full">
                        <div class="rounded-full w-4 h-4 bg-violet mr-3 blinking-circle"></div>
                        <div>Verified</div>
                    </div>
                </li>
                <li>
                    <button class="bg-violet p-2 px-5 rounded-md"><a href="">Sign Up</a></button>
                </li>
            </div>
        </ul>
    </nav>
    <div class="h=full pt-20">
        @yield('content')
    </div>
    <div class="p-20 w-full flex flex-row justify-center items-center">
        <hr class="w-full h-1 mx-4 my-4 bg-white bg-opacity-70 border-0 rounded">
    </div>
    <div class="w-full flex flex-row justify-between px-24">
        <div class="flex flex-col justify-between items-start gap-5 w-1/2">
            <img src="{{ asset('logo2.svg') }}" alt="">
            <p class="text-white font-extrabold text-opacity-80 text-3xl">Connecting Coders, Building Bridges</p>
        </div>
        <div class="flex flex-col justify-between items-end w-1/2">
            <p class="text-white font-extrabold text-5xl">Social Media</p>
            <div class="flex flex-row justify-between items-center w-2/4">
                <a href=""><img src="{{ asset('facebook.svg') }}" alt=""></a>
                <a href=""><img src="{{ asset('twitter.svg') }}" alt=""></a>
                <a href=""><img src="{{ asset('linkedin.svg') }}" alt=""></a>
                <a href=""><img src="{{ asset('instagram.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="pt-40 mx-40 h-1/4">
        <div class="bg-plum px-20 pt-10 pb-4 rounded-t-full text-3xl text-white">
            All Rights Reserved Codelystics 2023 © Codelystics
        </div>
    </div>
</body>
</html>
