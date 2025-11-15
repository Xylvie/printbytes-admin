<div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-1">
        <div class="px-10 bg-blue-900 rounded md:h-screen">
            <div class="flex flex-col justify-center py-10">
                <div class="relative w-20 h-20 mx-auto overflow-hidden border-2 border-gray-200 rounded-full shadow-md bg-neutral-secondary-medium shadow-black">
                    <svg class="absolute w-24 h-24 text-body-subtle -left-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                </div>
                <div class="mx-auto mt-3">
                    @forEach ($user as $users)
                        @if (auth()->id() === $users->id)
                            <h1 class="text-xl text-gray-300">Hello, <span class="text-2xl font-bold">{{ $users->name }}!</span></h1>
                        @endif
                    @endforEach
                </div>
                    
            </div>
            <div class="flex justify-start px-5 ">
                <nav class="flex flex-col gap-5 ">
                    <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-gray-300 hover:font-normal hover:text-gray-100">Dashboard</a>
                    <a href="{{ route('update-sales') }}" class="text-2xl font-bold text-gray-300 hover:font-normal hover:text-gray-100">Daily Sales</a>
                    <a href="{{ route('update-expenses') }}" class="text-2xl font-bold text-gray-300 hover:font-normal hover:text-gray-100">Expenses</a>
                    <a href="{{ route('partitions') }}" class="text-2xl font-bold text-gray-300 hover:font-normal hover:text-gray-100">Partitions</a>
                </nav>
            </div>
        </div>
        <div class="h-screen bg-gray-800 rounded lg:col-span-3">
            {{ $slot }}
        </div>
    </div>