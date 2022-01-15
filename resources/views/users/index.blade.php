<x-layout>
    <h1>Create a user</h1>
    <form class="flex flex-col space-y-4" method="POST" action="/register">
        @csrf

        <input type="email" name="email" placeholder="Email" class="py-3 px-4 bg-gray-100 rounded-xl" required />
        <input type="text" name="name" placeholder="Name" class="py-3 px-4 bg-gray-100 rounded-xl" required />
        <input type="password" name="password" placeholder="Password" class="py-3 px-4 bg-gray-100 rounded-xl" required />

        <button class="max-w-max py-2 px-8 bg-green-500 text-white rounded-xl">Create User</button>
    </form>
    @if ($errors->any())
        <div class="my-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="bg-red-700 text-white px-3 py-2 rounded-md mb-1">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Who are the users?</h2>
    @foreach ($users as $user)
        <div>
            <p>{{ $user->name }}</p>
            Password is:
            <p>{{ $user->password }}</p>
        </div>
    @endforeach
</x-layout>
