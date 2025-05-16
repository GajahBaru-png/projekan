<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="mx-auto">
    <header class="block w-full bg-black fixed">
        <div class="p-4 flex items-center justify-between mx-auto">
            <h1 class="text-violet-500 font-semibold">PKL Stembayo</h1>
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="bg-violet-600 p-2 rounded-md text-sm h duration-500 border-violet-600/30 text-black font-semibold hover:bg-transparent hover:text-violet-300"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="text-violet-600 font-semibold text-sm border border-violet-600/30 rounded-md px-4 py-2 hover:bg-transparent duration-500 transition hover:text-violet-300"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="bg-violet-600 p-2 rounded-md text-sm h duration-500 border-violet-600/30 text-black font-semibold hover:bg-transparent hover:text-violet-300">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>
    <main class="bg-black  w-full h-screen flex p-5 items-center">
        <div class="w-1/2">
            <h1 class="text-2xl font-bold text-violet-500">
                Selamat Datang
            </h1>
            <h4 class="text-5xl font-bold text-[#EDEDEC] mt-2">
                Di PKL Stembayo
            </h4>
            <p class="text-white mt-2 font-semibold">
                Platform ini dibuat untuk mempermudah siswa dalam melakukan PKL di Stembayo, silahkan login untuk melanjutkan.
            </p>
        </div>
    </main>
</body>
</html>