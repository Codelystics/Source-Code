@extends('layout')

@section('content')
<div class="bg-bootcampImage bg-cover bg-center h-full text-white py-32">
    <div class="flex flex-row text-3xl w-full justify-center items-center px-48 pb-4 gap-3">
        <div>
            High Quality Bootcamp
        </div>
        <div>
            X
        </div>
        <div>
            <img src="{{ asset('binusMaya.svg') }}" alt="">
        </div>
    </div>
    <div class="text-xl flex flex-row justify-center items-center w-full pb-4">
        <span class="text-yellow text-3xl">|</span> Code Foundation | Data Science | Computer Science
    </div>
    <div class="text-lg flex flex-row justify-center items-center w-full pb-4">
        Get your Codelystics Class All Access Pass Today
    </div>
    <div class="flex flex-row justify-center items-center w-full">
        <button class="bg-violet py-2 px-3 rounded-md"><a href="">Get Access Now</a></button>
    </div>
</div>
<div class="flex flex-col justify-center items-start px-24 gap-3 pt-14 pb-8">
    <div class="text-4xl text-white">
        Courses Available
    </div>
    <div class="text-white text-xl text-opacity-80">
        Click on the course to learn more
    </div>
</div>

@endsection
