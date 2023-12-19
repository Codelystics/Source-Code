<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codelystics</title>
    <link rel="icon" href="{{ asset('Codelyticspp.png') }}">
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

        .hide-scrollbar::-webkit-scrollbar {
            display: none; 
        }
        .carousel-wrapper {
            width: 100%; 
            overflow: hidden;
        }

        .carousel {
            display: flex;
            animation: slide 9s infinite linear;
        }

        .slide-row {
            display: flex;
            overflow: hidden; /* Jika lebar total logo lebih besar, hilangkan overflow */
            flex-shrink: 0;
        }

        .slide {
            filter: grayscale(100%); /* Set default state to grayscale */
            transition: filter 0.3s ease;
            flex: 0 0 10%; /* Atur lebar setiap logo, contoh: 20% dari lebar viewport */
            max-width: 100%;
            height: auto;
        }

        .slide:hover {
            filter: none;
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%); /* Geser gambar sejauh 100% lebar viewport */
            }
        }

        .slide-from-right {
            animation: slide-from-right 10s infinite linear;
        }

        @keyframes slide-from-right {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }

    </style>

</head>
<body>
    <nav class="flex flex-col h-24">
        <ul class="flex flex-row justify-around h-24 items-center text-white">
            <div class="flex justify-evenly w-1/4">
                <li>
                    <a href="{{ url('/event') }}">Event</a>
                </li>
                <li>
                    <a href="{{ url('/bootcamp') }}">Bootcamp</a>
                </li>
                <li>
                    <a href="{{ url('/competition') }}">Competition</a>
                </li>
            </div>
            <div class="flex justify-center items-center w-2/3">
                <a href="{{ url('/') }}"><img src="{{ asset('logo.svg') }}" alt=""></a>
            </div>
            <div class="flex justify-evenly items-center w-1/4">
                <li class="w-1/2 flex justify-center">
                    @if(Auth::check())
                        <div class="flex flex-row justify-end items-center w-full">
                            <div class="rounded-full w-4 h-4 bg-violet mr-3 blinking-circle"></div>
                            <div>Verified</div>
                        </div>
                    @endif
                </li>
                <li>
                    @if(Auth::check())
                        <button class="bg-violet p-2 px-5 rounded-md"><a href="{{ route('logout') }}">Logout</a></button>
                    @else
                        <button class="bg-violet p-2 px-5 rounded-md"><a href="{{ route('login') }}">Sign Up</a></button>
                    @endif
                </li>
            </div>
        </ul>
    </nav>
    <div class="h-full pt-20">
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
