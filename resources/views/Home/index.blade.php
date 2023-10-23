@extends('layout')

@section('content')
    <div class="absolute bottom-20 -left-16 -z-10">
        <img src="{{ asset('shapes1.svg') }}" alt="">
    </div>
    <div class="flex flex-row px-32 h-full">
        <div class="flex flex-col justify-center">
            <div class="py-4">
                <img src="{{ asset('header.svg') }}" alt="">
            </div>
            <div class="text-white font-extrabold text-5xl py-4">
                LET'S JOIN OUR COMMUNITY, THE BIGGEST TECH COMMUNITY <span class="text-gradPurp">IN THE WORLD!</span>
            </div>
            <div class="py-4">
                <button class="bg-violet p-2 px-7 rounded-md text-white"><a href="">Join Now!</a></button>
            </div>
        </div>
        <div class="flex flex-col h-2/3 w-2/3">
            <img src="{{ asset('firstImage.svg') }}" alt="">
        </div>
    </div>
    <div class="flex flex-col h-full px-32 pt-32">
        <div class="text-white text-5xl pb-10">
            SCHEDULE OF THIS MONTH
        </div>
        <div class="flex flex-row w-full">
            <div class="flex flex-row">
                <img src="{{ asset('secondImage.svg') }}" alt="">
            </div>
            <div class="flex flex-col justify-evenly items-end w-2/3 gap-7">
                <div class="flex flex-row justify-around items-center h-full w-4/5 bg-black bg-opacity-0 border-l-4 border-violet hover:bg-opacity-25 transition ease-in-out duration-300 hover:border-l-4 hover:border-yellow">
                    <div class="flex flex-col justify-center items-center text-white w-1/4 h-full text-3xl">
                        <div>
                            15
                        </div>
                        <div>
                            DEC
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-start w-3/4 h-full">
                        <div class="text-white text-opacity-100 text-2xl">
                            Yapping Programming Language
                        </div>
                        <div class="text-white text-opacity-80 text-xl">
                            Semanggi, Senayan City
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-around items-center h-full w-4/5 bg-black bg-opacity-0 border-l-4 border-violet hover:bg-opacity-25 transition ease-in-out duration-300 hover:border-l-4 hover:border-yellow">
                    <div class="flex flex-col justify-center items-center text-white w-1/4 h-full text-3xl">
                        <div>
                            20
                        </div>
                        <div>
                            JAN
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-start w-3/4 h-full">
                        <div class="text-white text-opacity-100 text-2xl">
                            PHP Newbies Talk
                        </div>
                        <div class="text-white text-opacity-80 text-xl">
                            Palmerah, Kemanggisan
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-around items-center h-full w-4/5 bg-black bg-opacity-0 border-l-4 border-violet hover:bg-opacity-25 transition ease-in-out duration-300 hover:border-l-4 hover:border-yellow">
                    <div class="flex flex-col justify-center items-center text-white w-1/4 h-full text-3xl">
                        <div>
                            16
                        </div>
                        <div>
                            FEB
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-start w-3/4 h-full">
                        <div class="text-white text-opacity-100 text-2xl">
                            It’s Golang, not Go
                        </div>
                        <div class="text-white text-opacity-80 text-xl">
                            Sudirman, FX Mall
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="number" class="pt-32 h-full w-full">
        <div class="flex flex-col justify-between items-center text-center">
            <h2 class="text-5xl font-extrabold text-white pb-10">WE DELIVERED MORE THAN</h2>
            <div class="flex flex-row justify-center items-center pb-10">
                <div id="achievement-counter" class="text-8xl font-extrabold text-yellow w-2/3">0</div>
                <div id="achievement-plus" class="flex flex-row justify-end items-center text-8xl text-yellow ml-2 opacity-0 transition-opacity duration-500 w-1/3 item">
                    <div>
                        +
                    </div>
                    <div>
                        +
                    </div>
                </div>
            </div>
            <p class="text-4xl text-white text-opacity-80 font-extrabold">Events in our site from 2018 - 2023</p>
        </div>
    </div>
    <div class="pt-32 w-full h-full">
        <div class="flex flex-row w-full h-full justify-evenly items-center text-white gap-6">
            <div class="flex flex-col justify-between items-start bg-plum px-12 pb-10 pt-20 rounded-md">
                <div class="flex flex-row text-4xl font-extrabold pb-8">
                    Virtual Conference
                </div>
                <div class="flex flex-row items-end gap-4">
                    <div class="text-7xl font-extrabold">
                        650
                    </div>
                    <div class="text-3xl">
                        Events
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center items-start bg-violet px-12 pb-10 pt-20 rounded-md">
                <div class="flex flex-row text-4xl font-extrabold pb-8">
                    Virtual Conference
                </div>
                <div class="flex flex-row items-end gap-4">
                    <div class="text-7xl font-">
                        650
                    </div>
                    <div class="text-3xl">
                        Events
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center items-start bg-lavender px-12 pb-10 pt-20 rounded-md">
                <div class="flex flex-row text-4xl font-extrabold pb-8">
                    Virtual Conference
                </div>
                <div class="flex flex-row items-end gap-4">
                    <div class="text-7xl font-extrabold">
                        650
                    </div>
                    <div class="text-3xl">
                        Events
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/achievements.js') }}"></script>

@endsection
