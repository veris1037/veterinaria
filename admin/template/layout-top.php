<header class="w-full bg-white shadow fixed top-0 left-0">
        <div class="container mx-auto w-full px-4 py-1 flex justify-between">
            <button class="w-10 h-10 grid place-items-center hover:bg-slate-200">
                <i class='bx bx-menu text-2xl'></i>
            </button>

            <button class="px-2 h-10 rounded shadow flex items-center hover:bg-slate-200">
                Salir
                <i class='bx bx-log-in-circle text-xl'></i>
            </button>
        </div>
    </header>

    <main class="w-full h-screen bg-slate-100 flex pt-12">
        <aside class="h-full w-max-w shadow-md">
            <div class="h-full w-52 bg-slate-900 text-white">
                <div>
                    <div class="w-full h-52 p-10">
                        <img
                            src="https://picsum.photos/300"
                            alt=""
                            class="w-full h-full rounded-full object-cover"
                        >
                    </div>
                    <p class="text-center"><?php echo $_SESSION['user']['name']; ?></p>
                </div>
            </div>
        </aside>
        <div class="h-full w-full overflow-y-scroll scrollbar-hide p-4">