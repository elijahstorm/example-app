<div class="flex flex-col pt-4 w-64 justify-between focus:w-64 transition bg-indigo-700">
    <div class="flex-1 space-y-2 justify-start px-2">
        <a class="contents" href="/">
            <div class="flex justify-center items-center font-bold text-xl text-white h-12">
                Sidebar Header
            </div>
        </a>

        <button class="bg-indigo-500 text-indigo-100 w-full py-2 px-4 text-lg rounded-lg transition-colors hover:bg-indigo-200 focus:bg-indigo-200 hover:text-indigo-500 focus:text-indigo-500">
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

        <button class="bg-indigo-500 text-indigo-100 w-full py-2 px-4 text-lg rounded-lg transition-colors hover:bg-indigo-200 focus:bg-indigo-200 hover:text-indigo-500 focus:text-indigo-500">
            Section 2
        </button>

        <button class="bg-indigo-500 text-indigo-100 w-full py-2 px-4 text-lg rounded-lg transition-colors hover:bg-indigo-200 focus:bg-indigo-200 hover:text-indigo-500 focus:text-indigo-500">
            Section 3
        </button>
    </div>

    <div class="border-t border-indigo-200 px-4 py-4">
        <div class="flex justify-between items-center gap-2">
            <button class="rounded-full bg-white w-10 h-10">
                &nbsp;
            </button>

            <p class="flex-1 text-white overflow-clip text-ellipsis">
                {{ $name ?? 'Welcome' }}
            </p>
            <!-- <p class="flex-1 text-white overflow-clip text-ellipsis">Name that is really really really really really long</p> -->

            <button class="rounded-full bg-white w-10 h-10 ml-2">
                &nbsp;
            </button>
        </div>
    </div>
</div>