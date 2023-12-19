@extends('layout')

@section('content')
<div class="bg-bootcampImage bg-cover bg-center h-full text-white py-32">
    <div class="flex flex-row text-3xl w-full justify-center items-center px-48 pb-4 gap-3">
        <div>
            Codelytics
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

<!-- Bento box section -->
<div class="flex justify-center items-center mt-8">
    <div class="w-2/4 h-96 relative border border-gray-400 rounded">
        <img src="assets/competition/Compe-Content2.svg" alt="Image 1" class="absolute inset-0 w-full h-full object-cover rounded">
    </div>

    <div class="w-2/12 flex flex-col justify-between ml-4">
        <div class="w-full h-48 relative border border-gray-400 rounded mb-1">
            <img src="assets/bootcamp/middle1.svg" alt="Image 2" class="absolute inset-0 w-full h-full object-cover rounded">
        </div>
        <div class="w-full h-48 relative border border-gray-400 rounded">
            <img src="assets/bootcamp/middle2.svg" alt="Image 3" class="absolute inset-0 w-full h-full object-cover rounded">
        </div>
    </div>

    <div class="w-60 ml-4 h-96 relative border border-gray-400 rounded">
        <img src="assets/bootcamp/right.svg" alt="Image 4" class="absolute inset-0 w-full h-full object-cover rounded">
    </div>
</div>

<!-- Container with overflow -->
<div class="flex overflow-x-auto hide-scrollbar space-x-4 p-4 mt-8 mb-8">
    <!-- Column 1 -->
    <div class="flex-none w-80 ml-32">
        <img src="assets/bootcamp/container.svg" alt="Course Image" class="w-full h-48 object-cover">
        <div class="pt-4">
            <h3 class="text-white font-semibold mb-2 text-base">Golang Bootcamp 2023
                w/ Juan Christian Dotulung</h3>
            <p class="text-white text-opacity-75 mb-2">Juan Christian</p>
            <div class="flex items-center mb-2">
            </div>
            <button class="bg-violet text-white py-2 px-4 hover:bg-blue-600">Best Course</button>
        </div>
    </div>

    <div class="flex-none w-80">
        <img src="assets/bootcamp/container.svg" alt="Course Image" class="w-full h-48 object-cover">
        <div class="pt-4">
            <h3 class="text-white font-semibold mb-2 text-base">Golang Bootcamp 2023
                w/ Juan Christian Dotulung</h3>
            <p class="text-white text-opacity-75 mb-2">Juan Christian</p>
            <div class="flex items-center mb-2">
            </div>
            <button class="bg-violet text-white py-2 px-4 hover:bg-blue-600">Best Course</button>
        </div>
    </div>

    <div class="flex-none w-80">
        <img src="assets/bootcamp/container.svg" alt="Course Image" class="w-full h-48 object-cover">
        <div class="pt-4">
            <h3 class="text-white font-semibold mb-2 text-base">Golang Bootcamp 2023
                w/ Juan Christian Dotulung</h3>
            <p class="text-white text-opacity-75 mb-2">Juan Christian</p>
            <div class="flex items-center mb-2">
            </div>
            <button class="bg-violet text-white py-2 px-4 hover:bg-blue-600">Best Course</button>
        </div>
    </div>

    <div class="flex-none w-80">
        <img src="assets/bootcamp/container.svg" alt="Course Image" class="w-full h-48 object-cover">
        <div class="pt-4">
            <h3 class="text-white font-semibold mb-2 text-base">Golang Bootcamp 2023
                w/ Juan Christian Dotulung</h3>
            <p class="text-white text-opacity-75 mb-2">Juan Christian</p>
            <div class="flex items-center mb-2">
            </div>
            <button class="bg-violet text-white py-2 px-4 hover:bg-blue-600">Best Course</button>
        </div>
    </div>

    <div class="flex-none w-80">
        <img src="assets/bootcamp/container.svg" alt="Course Image" class="w-full h-48 object-cover">
        <div class="pt-4">
            <h3 class="text-white font-semibold mb-2 text-base">Golang Bootcamp 2023
                w/ Juan Christian Dotulung</h3>
            <p class="text-white text-opacity-75 mb-2">Juan Christian</p>
            <div class="flex items-center mb-2">
            </div>
            <button class="bg-violet text-white py-2 px-4 hover:bg-blue-600">Best Course</button>
        </div>
    </div>

    <div class="flex-none w-80">
        <img src="assets/bootcamp/container.svg" alt="Course Image" class="w-full h-48 object-cover">
        <div class="pt-4">
            <h3 class="text-white font-semibold mb-2 text-base">Golang Bootcamp 2023
                w/ Juan Christian Dotulung</h3>
            <p class="text-white text-opacity-75 mb-2">Juan Christian</p>
            <div class="flex items-center mb-2">
            </div>
            <button class="bg-violet text-white py-2 px-4 hover:bg-blue-600">Best Course</button>
        </div>
    </div>
</div>

<div class="flex flex-col items-center text-center bg-gray-100 py-8">
    <h2 class="text-4xl font-bold text-white mb-8">Frequent Asked Questions</h2>

    <div class="flex justify-end w-full max-w-screen-lg">

        <div class="flex items-center justify-center mr-16">
            <img src="assets/bootcamp/FAQ Logo.svg" alt="Image" class="h-32">
        </div>

        <div class="w-4/6 rounded-lg overflow-hidden">
            <!-- FAQ Section -->
            <div class="space-y-8">
                <!-- FAQ 1 -->
                <div class="p-4 border border-violet">
                    <details class = "w-full">
                        <summary class="cursor-pointer font-semibold text-white">How can I use Codelytics to find tech events and bootcamps?</summary>
                        <p class="mt-2 font-normal text-white text-sm text-opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate incidunt quod facilis dolor laborum excepturi vel, architecto doloremque. Necessitatibus provident ex quibusdam a vitae explicabo reprehenderit nihil maxime odio. Obcaecati!</p>
                    </details>
                </div>
                <div class="p-4 border border-violet">
                    <details class = "w-full">
                        <summary class="cursor-pointer font-semibold text-white">Are there any fees for using Codelytics?</summary>
                        <p class="mt-2 font-normal text-white text-sm text-opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate incidunt quod facilis dolor laborum excepturi vel, architecto doloremque. Necessitatibus provident ex quibusdam a vitae explicabo reprehenderit nihil maxime odio. Obcaecati!</p>
                    </details>
                </div>
                <div class="p-4 border border-violet">
                    <details class = "w-full">
                        <summary class="cursor-pointer font-semibold text-white">Can I submit my own tech event or bootcamp to be listed on Codelytics?</summary>
                        <p class="mt-2 font-normal text-white text-sm text-opacity-75">Yes, you can submit your event or bootcamp for consideration. We have a submission form where you can provide event details. Our team will review the information and add it to our database if it meets our criteria.</p>
                    </details>
                </div>
                <div class="p-4 border border-violet">
                    <details class = "w-full">
                        <summary class="cursor-pointer font-semibold text-white">How can I stay updated on upcoming tech events and bootcamps?</summary>
                        <p class="mt-2 font-normal text-white text-sm text-opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti eum doloribus similique, rem, provident eaque quis molestias delectus, at qui reiciendis quibusdam alias non ea cum recusandae neque commodi a?
                        </p>
                    </details>
                </div>
                <div class="p-4 border border-violet">
                    <details class = "w-full">
                        <summary class="cursor-pointer font-semibold text-white">Can I purchase tickets or register for bootcamps directly through Codelytics?</summary>
                        <p class="mt-2 font-normal text-white text-sm text-opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti eum doloribus similique, rem, provident eaque quis molestias delectus, at qui reiciendis quibusdam alias non ea cum recusandae neque commodi a?
                        </p>
                    </details>
                </div>
                </div>
            </div>
        </div>
    </div>
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


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const detailsElements = document.querySelectorAll("details");

        detailsElements.forEach((details) => {
            details.addEventListener("click", () => {
                detailsElements.forEach((element) => {
                    if (element !== details && element.open) {
                        element.open = false;
                    }
                });
            });
        });
    });

    window.addEventListener('DOMContentLoaded', () => {
    const slideRows = document.querySelectorAll('.slide-row');

    slideRows.forEach(slideRow => {
        slideRow.addEventListener('animationiteration', () => {
            slideRow.style.animationPlayState = 'paused'; // Pause the animation at the end of each iteration
            setTimeout(() => {
                slideRow.style.animationPlayState = 'running'; // Resume the animation after a short delay
            }, 0); // Adjust the delay if needed
        });
    });
});




</script>

@endsection