<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <div class="flex flex-row justify-end items-center w-full">
                        <div class="rounded-full w-4 h-4 bg-violet mr-3 blinking-circle"></div>
                        <div>Verified</div>
                    </div>
                </li>
                <li>
                    <button class="bg-violet p-2 px-5 rounded-md"><a href="{{ asset('/login') }}">Sign Up</a></button>
                </li>
            </div>
        </ul>
    </nav>
    <div class="h-full">
        @yield('content')
    </div>
</body>
</html>
