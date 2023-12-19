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
<div>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="username" class="block text-gray-800 font-bold">Username:</label>
            <input type="text" name="username" id="username" placeholder="username" />
        </div>
        <div class="mb-6">
            <label for="name" class="block text-gray-800 font-bold">Email:</label>
            <input type="text" name="email" id="email" placeholder="@email" />
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="password" />
        </div>

        <button>Register</button>
    </form>
</div>
