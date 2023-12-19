<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codelystics Login</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700&display=swap');
        .image-slider img {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .image-slider img.active {
            opacity: 1;
        }
        .centered-content {
            position: absolute;
            top: 50%;
            left: 23%;
            transform: translate(-50%, -50%);
            z-index: 1;
            width: 28%
        }
        .border-indigo-custom {
            border-color: #9747FF; /* Replace with your desired indigo color code */
            border-width: 2px; /* Increased border width */
        }
        .focus\:border-indigo-custom:focus {
            border-color: #9747FF; /* Same indigo color for focus */
            outline: none; /* Remove default focus outline */
            box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.5); /* Simulated focus effect */
        }
        .checkbox-indigo-custom:checked {
            border-color: #9747FF; /* Apply indigo border color when checked */
        }
        .text-violet-600 {
            color: #9747FF;
        }
    </style>

</head>
<body class="flex items-stretch h-screen">

<div class="w-full md:w-2/4 relative image-slider">
    <img src="assets/login/banner1.svg" alt="Image 1" class="absolute top-0 left-0 w-full h-full object-cover opacity-100 transition-opacity duration-500 ease-in-out active">
    <img src="assets/login/banner2.svg" alt="Image 2" class="absolute top-0 left-0 w-full h-full object-cover opacity-0 transition-opacity duration-500 ease-in-out">
    <img src="assets/login/banner3.svg" alt="Image 3" class="absolute top-0 left-0 w-full h-full object-cover opacity-0 transition-opacity duration-500 ease-in-out">
</div>

<div class="centered-content">
    <img src="assets/login/contentbanner.svg" alt="Centered Image">
</div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<div class="w-full md:w-3/5 flex flex-col items-center justify-center bg-gray-800">
    <div class="w-full md:w-3/5 flex flex-col items-center justify-center bg-gray-800 p-4">
        <div class="flex items-center mb-4">
            <h1 class="text-4xl font-semibold" style="color: #9747FF;">Login</h1>
            <img src="assets/login/Codelytics-Logo.svg" alt="Image" class="h-full w-full"> <!-- Replace with your image URL -->
        </div>
    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
        @csrf
        <div class="text-white mb-4 text-sm">
            <label for="email" class="mb-2">E-mail</label>
            <input id="email" type="email" name="email" required autofocus class="border border-indigo-custom focus:border-indigo-custom w-full h-8 px-3 rounded-md text-white" style="background-color: transparent;">
        </div>
        <div class="text-white mb-4 text-sm">
            <label for="password" class="mb-2">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" class="border border-indigo-custom focus:border-indigo-custom w-full h-8 px-3 rounded-md text-white" style="background-color: transparent;">
        </div>
        <div class="text-white mb-4 text-xs">
            <input type="checkbox" id="remember" name="remember" class="mr-2 checkbox-indigo-custom">
            <label for="remember">Remember Me</label>
        </div>
        <div class="mb-4">
            @if (Route::has('password.request'))
                <a href="" class="text-white">Forgot Your Password?</a>
            @endif
        </div>
        <div>
            <button class="bg-violet text-white py-2 px-4 hover:bg-blue-600 w-96 h-11 rounded-2xl" type="submit">Login</button>
        </div>
    </form>

    <div class="flex flex-row justify-between items-center w-3/5">
        <div class="mt-4 flex text-white text-sm justify-center">
            <p>Don’t have an account? <a href="{{route('register')}}" class="text-violet-600">Register</a></p>
        </div>
        <div class="mt-4">
            <a href="{{ url('/') }}" class="text-white">Back</a>
        </div>
    </div>
</div>

<script>
    const images = document.querySelectorAll('.image-slider img');
    let currentImage = 0;
    const totalImages = images.length;
    setInterval(() => {
        images[currentImage].classList.remove('active');
        images[currentImage].style.opacity = 0;
        currentImage = (currentImage + 1) % totalImages;
        images[currentImage].classList.add('active');
        images[currentImage].style.opacity = 1;
    }, 3000);
</script>


</body>
</html>
