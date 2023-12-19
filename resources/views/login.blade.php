<div class="max-w-xl py-6 px-8 h-80 mt-20 bg-white rounded shadow-xl">
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
    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="name" class="block text-gray-800 font-bold">Email:</label>
            <input type="text" name="email" id="email" placeholder="@email"
                class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />
        </div>
        <div>
            <label for="password" class="block text-gray-800 font-bold">Password:</label>
            <input type="password" name="password" id="password" placeholder="password"
                class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />
        </div>
        <button>Login</button>
    </form>
</div>
