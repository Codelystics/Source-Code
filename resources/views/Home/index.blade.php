@extends('layouts.main')

@section('content')
    @php
        use Illuminate\Support\Str;
    @endphp

    <style>
        select {
            appearance: none;
            border: none;
            outline: none;
            padding: 0.5rem;
            /* Adjust the padding as needed */
            background-color: #B000B2;
            /* Adjust the background color as needed */
            border-radius: 0.25rem;
            /* Adjust the border-radius as needed */
            cursor: pointer;
            color: white;
            /* Set the text color to white */
            position: relative;
            width: 100%;
            /* Adjust the width as needed */
        }

        /* Style the dropdown arrow */
        select::after {
            content: '\25BC';
            /* Unicode character for down arrow */
            position: absolute;
            top: 50%;
            right: 8px;
            /* Adjust the right position as needed */
            transform: translateY(-50%);
            color: white;
            /* Text color of the dropdown arrow */
            pointer-events: none;
            /* Make sure the arrow does not interfere with the select box */
        }
    </style>
    <div class="absolute bottom-20 -left-16 -z-10">
        <img src="{{ asset('shapes1.svg') }}" alt="">
    </div>
    <div class="flex flex-row px-32 h-full">
        <div class="flex flex-col justify-center">
            <div class="py-4">
                <img src="{{ asset('header.svg') }}" alt="">
            </div>
            @if(Auth::check())
            <div class="text-white font-extrabold text-5xl py-4">
                Welcome,  <span class="text-gradPurp">{{ Auth::user()->username  }}</span>
            </div>
            @else
            <div class="text-white font-extrabold text-5xl py-4">
                LET'S JOIN OUR COMMUNITY, THE BIGGEST TECH COMMUNITY <span class="text-gradPurp">IN THE WORLD!</span>
            </div>
            @endif
            <div class="py-4">
                <button class="bg-violet p-2 px-7 rounded-md text-white"><a href="{{route('Event.create')}}">Join Now!</a></button>
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
                @foreach ($datas->take(3) as $data)
                    <div
                        class="flex flex-row justify-around items-center h-full w-4/5 bg-black bg-opacity-0 border-l-4 border-violet hover:bg-opacity-25 transition ease-in-out duration-300 hover:border-l-4 hover:border-yellow">
                        <div class="flex flex-col justify-center items-center text-white w-1/4 h-full text-3xl">
                            <div>
                                {{ $data->start_day }}
                            </div>
                            <div>
                                {{ Str::limit($data->start_month, 3, '') }}
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-start w-3/4 h-full">
                            <div class="text-white text-opacity-100 text-2xl">
                                {{ $data->event_name }}
                            </div>
                            <div class="text-white text-opacity-80 text-xl">
                                {{$data->venue}}
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div
                    class="flex flex-row justify-around items-center h-full w-4/5 bg-black bg-opacity-0 border-l-4 border-violet hover:bg-opacity-25 transition ease-in-out duration-300 hover:border-l-4 hover:border-yellow">
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
                <div
                    class="flex flex-row justify-around items-center h-full w-4/5 bg-black bg-opacity-0 border-l-4 border-violet hover:bg-opacity-25 transition ease-in-out duration-300 hover:border-l-4 hover:border-yellow">
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
                </div> --}}
            </div>
        </div>
    </div>
    <div id="number" class="pt-32 h-full w-full">
        <div class="flex flex-col justify-between items-center text-center">
            <h2 class="text-5xl font-extrabold text-white pb-10">WE DELIVERED MORE THAN</h2>
            <div class="flex flex-row justify-center items-center pb-10">
                <div id="achievement-counter" class="text-8xl font-extrabold text-yellow w-2/3">0</div>
                <div id="achievement-plus"
                    class="flex flex-row justify-end items-center text-8xl text-yellow ml-2 opacity-0 transition-opacity duration-500 w-1/3 item">
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
            <div class="flex flex-col justify-between items-start bg-plum px-20 pb-10 pt-20 rounded-md">
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
            <div class="flex flex-col justify-center items-start bg-violet px-20 pb-10 pt-20 rounded-md">
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
            <div class="flex flex-col justify-center items-start bg-lavender px-20 pb-10 pt-20 rounded-md">
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
    <div class="pt-32 h-full flex flex-col w-full text-white gap-16 justify-center items-center">
        <div class="text-5xl flex flex-row justify-center">
            UPCOMING EVENT
        </div>
        <div class="w-full">
            <div class="sm:w-7/12 sm:mx-auto w-full">
                <div role="tablist" aria-label="tabs"
                    class="relative h-20 grid grid-cols-3 items-center rounded-xl bg-black bg-opacity-25 overflow-hidden shadow-2xl shadow-900/20 transition">
                    <div class="absolute indicator h-20 my-auto top-0 bottom-0 left-0 rounded-xl bg-violet shadow-md"></div>
                    <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0"
                        class="relative block h-20 px-6 tab rounded-xl">
                        <span class="text-white h-20 text-4xl">Conference</span>
                    </button>
                    <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1"
                        class="relative block h-20 px-6 tab rounded-xl">
                        <span class="text-white h-20 text-4xl">Seminar</span>
                    </button>
                    <button role="tab" aria-selected="false" aria-controls="panel-3" id="tab-3" tabindex="-1"
                        class="relative block h-20 px-6 tab rounded-xl">
                        <span class="text-white h-20 text-4xl">Talkshow</span>
                    </button>
                </div>
                <div class="mt-6 relative rounded-3xl bg-purple-50">
                    <div role="tabpanel" id="panel-1" class="tab-panel p-6 transition duration-300">
                        <h2 class="text-xl font-semibold text-gray-800">First tab panel</h2>
                        <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores
                            voluptate temporibus, atque ab eos, delectus at ad hic voluptatem veritatis iure, nulla
                            voluptates quod nobis doloremque eaque! Perferendis, soluta.</p>

                    </div>
                    <div role="tabpanel" id="panel-2"
                        class="absolute top-0 invisible opacity-0 tab-panel p-6 transition duration-300">
                        <h2 class="text-xl font-semibold text-gray-800">Second tab panel</h2>
                        <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores
                            voluptate temporibus, atque ab eos, delectus at ad hic voluptatem veritatis iure, nulla
                            voluptates quod nobis doloremque eaque! Perferendis, soluta.</p>
                    </div>
                    <div role="tabpanel" id="panel-3"
                        class="absolute top-0 invisible opacity-0 tab-panel p-6 transition duration-300">
                        <h2 class="text-xl font-semibold text-gray-800">Third tab panel</h2>
                        <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores
                            voluptate temporibus, atque ab eos, delectus at ad hic voluptatem veritatis iure, nulla
                            voluptates quod nobis doloremque eaque! Perferendis, soluta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-32 w-full h-full flex flex-col px-20 gap-4">
        <div class="p-2 bg-lavender rounded-md w-1/6 flex flex-row items-center justify-center text-3xl text-white">
            Sponsor Events
        </div>
        <div class="flex flex-row justify-between items-center w-full h-full">
            <div class="flex flex-col justify-start w-1/3">
                <h1 class="text-4xl text-opacity-100 text-white">More Upcoming Event</h1>
                <p class="texl-3xl text-opacity-80 text-white tracking-widest">Upcoming events schedule don't missed!</p>
            </div>
            <div>
                <div id="customDatePicker">
                    <select id="monthYear" onchange="getSelectedDate()" class="text-white">
                        <!-- JavaScript will populate options dynamically -->
                    </select>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-8 pt-14 justify-center">
            @forelse ($datas as $data)
                <div class="accordion-item cursor-pointer mx-40 border-plum rounded-xl border-4">
                    <div class="flex justify-around items-center h-36 text-xl w-full">
                        <div class="w-1/5">
                            <img src="{{ asset('assets/home/' . $data->banner) }}" alt="asdasd">
                        </div>
                        <div class="flex flex-col justify-center items-start w-1/5">
                            <div class="text-4xl text-purp">
                                {{-- Ini title --}}
                                {{ $data->event_name }}
                            </div>
                            <div class="text-2xl text-white text-opacity-60">
                                {{-- Ini desc --}}
                                Seminar held by {{ $data->organizer_name }}
                            </div>
                        </div>
                        <div class="text-6xl text-yellow font-bold w-1/5 flex flex-row justify-center">
                            {{-- Ini tanggal --}}
                            {{ $data->start_day }}
                        </div>
                        <div class="flex flex-col justify-center items-start w-1/5">
                            <div class="text-4xl text-white">
                                {{-- Ini bulan --}}
                                {{ $data->start_month }}
                            </div>
                            <div
                                class="text-xl text-white text-opacity-60 whitespace-nowrap overflow-hidden text-ellipsis">
                                {{-- Ini location --}}
                                {{ Str::limit($data->venue, 10, '...') }}
                            </div>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <!-- Original arrow -->
                            <path class="arrow" d="M6 9l6 6l6 -6" stroke="#fff" />
                            <!-- Upside-down arrow (hidden by default) -->
                            <path class="arrow hidden" d="M6 15l6 -6l6 6" stroke="#fff" />
                        </svg>
                    </div>
                    <div class="p-2 hidden toggle">
                        <div class="flex flex-col px-16 gap-8 pb-10">
                            <div class="text-justify text-white text-xl">
                                {{ $data->details }}
                            </div>
                            <div class="flex flex-row justify-between items-end">
                                <div class="text-xl text-white">
                                    Certificate for the Top 5 Candidates
                                </div>
                                <div>
                                    <button class="bg-violet p-4 px-7 rounded-md text-white text-2xl"><a
                                            href={{ route('bootcamp') }}>Schedule Now!</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
            <div class="mx-40 text-white text-2xl flex flex-row justify-end text-opacity-50">
                <a href="/login">See More</a>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center pt-32 gap-12">
        <div class="text-white text-4xl font-bold">
            MEDIA PARTNER
        </div>
        <div class="carousel-wrapper">
            <div class="carousel">
                <div class="slide-row">
                    <img src="assets/logos/envision.svg" alt="Image 1" class="slide">
                    <img src="assets/logos/Amazon.svg" alt="Image 2" class="slide">
                    <img src="assets/logos/Figma.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/OVO.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/Maybank.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/BCA.svg" alt="Image 3" class="slide">
                </div>
                <div class="slide-row">
                    <img src="assets/logos/envision.svg" alt="Image 1" class="slide">
                    <img src="assets/logos/Amazon.svg" alt="Image 2" class="slide">
                    <img src="assets/logos/Figma.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/OVO.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/Maybank.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/BCA.svg" alt="Image 3" class="slide">
                </div>
            </div>
        </div>

        <div class="carousel-wrapper">
            <div class="carousel slide-from-right">
                <div class="slide-row">
                    <img src="assets/logos/Tokopedia.svg" alt="Image 2" class="slide">
                    <img src="assets/logos/Grab.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/Twetter.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/BCA.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/Maybank.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/Mandiri.svg" alt="Image 1" class="slide">
                </div>
                <div class="slide-row">
                    <img src="assets/logos/Tokopedia.svg" alt="Image 2" class="slide">
                    <img src="assets/logos/Grab.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/Twetter.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/BCA.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/Maybank.svg" alt="Image 3" class="slide">
                    <img src="assets/logos/Mandiri.svg" alt="Image 1" class="slide">
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="{{ asset('js/monthYearPicker.js') }}"></script>
    <script src="{{ asset('js/tab.js') }}"></script>
    <script src="{{ asset('js/achievements.js') }}"></script>
@endsection
