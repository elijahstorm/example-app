<div class="h-screen flex">
    <div class="flex flex-col gap-2 py-4 px-2 w-64 justify-start focus:w-64 transition bg-indigo-700">
        <a class="contents" href="/">
            <div class="flex justify-center items-center font-bold text-xl text-white h-12">
                Sidebar Header
            </div>
        </a>

        <button class="bg-indigo-500 text-indigo-100 py-2 px-4 text-lg rounded-lg transition-colors hover:bg-indigo-200 focus:bg-indigo-200 hover:text-indigo-500 focus:text-indigo-500">
            Section 1
        </button>

        <div class="rounded-lg overflow-clip bg-indigo-400">
            <button class="w-full h-10 text-left first:border-none border-t border-indigo-900 px-4 transition-colors text-indigo-50 hover:bg-indigo-200 hover:text-indigo-500">
                Sub 1
            </button>

            <button class="w-full h-10 text-left first:border-none border-t border-indigo-900 px-4 transition-colors text-indigo-50 hover:bg-indigo-200 hover:text-indigo-500">
                Sub 2
            </button>

            <button class="w-full h-10 text-left first:border-none border-t border-indigo-900 px-4 transition-colors text-indigo-50 hover:bg-indigo-200 hover:text-indigo-500">
                Sub 3
            </button>
        </div>

        <button class="bg-indigo-500 text-indigo-100 py-2 px-4 text-lg rounded-lg transition-colors hover:bg-indigo-200 focus:bg-indigo-200 hover:text-indigo-500 focus:text-indigo-500">
            Section 2
        </button>

        <button class="bg-indigo-500 text-indigo-100 py-2 px-4 text-lg rounded-lg transition-colors hover:bg-indigo-200 focus:bg-indigo-200 hover:text-indigo-500 focus:text-indigo-500">
            Section 3
        </button>
    </div>

    <div class="flex-1 max-w-lg mx-auto mb-8 mt-4">
        @yield('content')
    </div>
</div>