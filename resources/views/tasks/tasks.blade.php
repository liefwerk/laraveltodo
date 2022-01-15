@foreach ($todos as $todo)
    <div
        @class([
            'py-4 flex items-center border-b border-gray-300 px-3',
            $todo->isDone ? 'bg-green-200' : ''
        ])
    >
        <div class="flex-1 pr-8">
            <p class="text-xs font-gray-800">{{ $todo->created_at->format('d/m/Y') }}</p>
            <h3 class="text-lg font-semibold">{{ $todo->title }}</h3>
            <p class="text-gray-500">{{ $todo->description }}</p>
        </div>

        <div class="flex space-x-3">
            @if ($todo->isDone == False)
                <form method="POST" action="/{{ $todo->id }}">
                    @csrf
                    @method('PATCH')
                    <button class="py-2 px-3 flex space-x-2 bg-green-500 text-white rounded-xl">
                        <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>DONE</span>
                    </button>
                </form>
            @endif
            <form method="POST" action="/{{ $todo->id }}">
                @csrf
                @method('DELETE')
                <button class="py-2 px-2 bg-red-500 text-white rounded-xl">
                    <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11V20.4C19 20.7314 18.7314 21 18.4 21H5.6C5.26863 21 5 20.7314 5 20.4V11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 17V11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14 17V11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 7L16 7M3 7L8 7M8 7V3.6C8 3.26863 8.26863 3 8.6 3L15.4 3C15.7314 3 16 3.26863 16 3.6V7M8 7L16 7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
@endforeach
