<div class="h-full">
    <div class="flex flex-col py-4 px-2 w-30 justify-start focus:w-30 transition bg-indigo-400">
        <a class="contents" href="/">
            <div class="text-center font-bold text-xl text-white">
                Sidebar Header
            </div>
        </a>

        <button class="bg-indigo-500 py-2 px-4 text-lg rounded-sm">
            Section 1
        </button>

        <button class="bg-indigo-500 py-2 px-4 text-lg rounded-sm">
            Section 2
        </button>

        <button class="bg-indigo-500 py-2 px-4 text-lg rounded-sm">
            Section 3
        </button>
    </div>

    <div class=" max-w-lg mx-auto mb-8 mt-4">
        @yield('content')
    </div>
</div>