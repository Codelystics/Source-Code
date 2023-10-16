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
            <div class="flex justify-evenly items-center w-1/3">
                <li class="w-1/2 flex justify-center">
                    <div class="flex flex-row justify-center items-center w-full">
                        <div class="rounded-full w-4 h-4 bg-white mr-3"></div>
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
</body>
</html>
