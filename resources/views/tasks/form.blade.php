<div class="mb-6">
    <form class="flex flex-col space-y-4" method="POST" action="/">
        @csrf

        <input type="text" name="title" placeholder="The Todo Title" class="py-3 px-4 bg-gray-100 rounded-xl" />

        <textarea name="description" placeholder="The Todo Description" class="py-3 px-4 bg-gray-100 rounded-xl"></textarea>

        <button class="w-28 py-2 px-8 bg-green-500 text-white rounded-xl">Add</button>
    </form>
</div>
