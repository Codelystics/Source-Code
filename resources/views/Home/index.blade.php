@extends('layout')

@section('content')
    <div class="flex flex-row px-40 h-full">
        <div class="flex flex-col justify-center">
            <div class="py-4">
                <img src="{{ asset('header.svg') }}" alt="">
            </div>
            <div class="text-white font-extrabold text-5xl py-4">
                LETS JOIN OUR COMMUNITY THE BIGGEST TECH COMMUNITY <span class="text-gradPurp">IN THE WORLD!</span>
            </div>
            <div class="py-4">
                <button class="bg-violet p-2 px-5 rounded-md"><a href="">Join Now!</a></button>
            </div>
        </div>
        <div class="flex flex-col h-full w-full p-10">
            <img src="{{ asset('firstImage.svg') }}" alt="">
        </div>
    </div>
    <div class="flex flex-col h-full px-40">
        <div class="text-white text-5xl pb-10">
            SCHEDULE OF THIS MONTH
        </div>
        <div class="flex flex-row">
            <div class="flex flex-row">
                <img src="{{ asset('secondImage.svg') }}" alt="">
            </div>
            <div class="flex flex-col">
                <div>
                    <div class="flex flex-col">

                    </div>
                    <div>
                        
                    </div>
                </div>
                <div>

                </div>
                <div>

                </div>
            </div>
        </div>
    </div>

@endsection
