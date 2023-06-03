<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        <title>Laravel CRUD</title>
    </head>
    <body class="bg-gray-50">
        <nav class="shadow-xl rounded-md">
            <div
                class="relative px-4 py-4 flex justify-between items-center bg-white"
            >
                <a class="text-3xl font-bold leading-none" href="#">
                    <svg class="h-10" alt="logo" viewBox="0 0 10240 10240">
                        <path
                            xmlns="http://www.w3.org/2000/svg"
                            d="M8284 9162 c-2 -207 -55 -427 -161 -667 -147 -333 -404 -644 -733 -886 -81 -59 -247 -169 -256 -169 -3 0 -18 -9 -34 -20 -26 -19 -344 -180 -354 -180 -3 0 -29 -11 -58 -24 -227 -101 -642 -225 -973 -290 -125 -25 -397 -70 -480 -80 -22 -3 -76 -9 -120 -15 -100 -13 -142 -17 -357 -36 -29 -2 -98 -7 -153 -10 -267 -15 -436 -28 -525 -40 -14 -2 -45 -7 -70 -10 -59 -8 -99 -14 -130 -20 -14 -3 -41 -7 -60 -11 -19 -3 -39 -7 -45 -8 -5 -2 -28 -6 -50 -10 -234 -45 -617 -165 -822 -257 -23 -10 -45 -19 -48 -19 -7 0 -284 -138 -340 -170 -631 -355 -1107 -842 -1402 -1432 -159 -320 -251 -633 -308 -1056 -26 -190 -27 -635 -1 -832 3 -19 7 -59 10 -89 4 -30 11 -84 17 -120 6 -36 12 -77 14 -91 7 -43 33 -174 39 -190 3 -8 7 -28 9 -45 6 -35 52 -221 72 -285 7 -25 23 -79 35 -120 29 -99 118 -283 189 -389 67 -103 203 -244 286 -298 75 -49 178 -103 196 -103 16 0 27 16 77 110 124 231 304 529 485 800 82 124 153 227 157 230 3 3 28 36 54 74 116 167 384 497 546 671 148 160 448 450 560 542 14 12 54 45 90 75 88 73 219 172 313 238 42 29 77 57 77 62 0 5 -13 34 -29 66 -69 137 -149 405 -181 602 -7 41 -14 82 -15 90 -1 8 -6 46 -10 83 -3 37 -8 77 -10 88 -2 11 -7 65 -11 122 -3 56 -8 104 -9 107 -2 3 0 12 5 19 6 10 10 8 15 -10 10 -34 167 -346 228 -454 118 -210 319 -515 340 -515 4 0 40 18 80 40 230 128 521 255 787 343 118 40 336 102 395 113 28 5 53 11 105 23 25 5 59 12 75 15 17 3 41 8 55 11 34 7 274 43 335 50 152 18 372 29 565 29 194 0 481 -11 489 -19 2 -3 -3 -6 -12 -6 -9 -1 -20 -2 -24 -3 -33 -8 -73 -16 -98 -21 -61 -10 -264 -56 -390 -90 -649 -170 -1243 -437 -1770 -794 -60 -41 -121 -82 -134 -93 l-24 -18 124 -59 c109 -52 282 -116 404 -149 92 -26 192 -51 220 -55 17 -3 64 -12 105 -21 71 -14 151 -28 230 -41 19 -3 46 -7 60 -10 14 -2 45 -7 70 -10 25 -4 56 -8 70 -10 14 -2 53 -7 88 -10 35 -4 71 -8 81 -10 10 -2 51 -6 92 -9 101 -9 141 -14 147 -21 3 -3 -15 -5 -39 -6 -24 0 -52 -2 -62 -4 -21 -4 -139 -12 -307 -22 -242 -14 -700 -7 -880 13 -41 4 -187 27 -250 39 -125 23 -274 68 -373 111 -43 19 -81 34 -86 34 -4 0 -16 -8 -27 -17 -10 -10 -37 -33 -59 -52 -166 -141 -422 -395 -592 -586 -228 -257 -536 -672 -688 -925 -21 -36 -43 -66 -47 -68 -4 -2 -8 -7 -8 -11 0 -5 -24 -48 -54 -97 -156 -261 -493 -915 -480 -935 2 -3 47 -21 101 -38 54 -18 107 -36 118 -41 58 -25 458 -138 640 -181 118 -27 126 -29 155 -35 14 -2 45 -9 70 -14 66 -15 137 -28 300 -55 37 -7 248 -33 305 -39 28 -3 84 -9 125 -13 163 -16 792 -8 913 12 12 2 58 9 102 15 248 35 423 76 665 157 58 19 134 46 170 60 86 33 344 156 348 166 2 4 8 7 13 7 14 0 205 116 303 184 180 126 287 216 466 396 282 281 511 593 775 1055 43 75 178 347 225 455 100 227 236 602 286 790 59 220 95 364 120 485 6 28 45 245 50 275 2 14 7 41 10 60 3 19 8 49 10 65 2 17 6 46 9 65 15 100 35 262 40 335 3 39 8 89 10 112 22 225 33 803 21 1043 -3 41 -7 129 -11 195 -3 66 -8 136 -10 155 -2 19 -6 76 -10 125 -3 50 -8 101 -10 115 -2 14 -6 57 -10 95 -7 72 -12 113 -20 175 -2 19 -7 55 -10 80 -6 46 -43 295 -51 340 -2 14 -9 54 -15 90 -5 36 -16 97 -24 135 -8 39 -17 84 -20 100 -12 68 -18 97 -50 248 -19 87 -47 204 -61 260 -14 56 -27 109 -29 117 -30 147 -232 810 -253 832 -4 4 -7 -23 -8 -60z"
                        ></path>
                    </svg>
                </a>
                <div class="lg:hidden">
                    <button
                        class="navbar-burger flex items-center text-blue-600 p-3"
                    >
                        <svg
                            class="block h-4 w-4 fill-current"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <title>Mobile menu</title>
                            <path
                                d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"
                            ></path>
                        </svg>
                    </button>
                </div>
                <ul
                    class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6"
                >
                    <li>
                        <a
                            class="text-sm text-gray-400 hover:text-gray-500"
                            href="/"
                            >Home</a
                        >
                    </li>
                    <li class="text-gray-300">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            stroke="currentColor"
                            class="w-4 h-4 current-fill"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                            />
                        </svg>
                    </li>
                    <li>
                        <a
                            class="text-sm text-blue-600 font-bold"
                            href="product/create"
                            >Create</a
                        >
                    </li>
                    <li class="text-gray-300">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            stroke="currentColor"
                            class="w-4 h-4 current-fill"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                            />
                        </svg>
                    </li>
                    <li>
                        <a
                            class="text-sm text-gray-400 hover:text-gray-500"
                            href="#"
                            >About Us</a
                        >
                    </li>
                    <li class="text-gray-300">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            stroke="currentColor"
                            class="w-4 h-4 current-fill"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                            />
                        </svg>
                    </li>
                    <li>
                        <a
                            class="text-sm text-gray-400 hover:text-gray-500"
                            href="#"
                            >Services</a
                        >
                    </li>
                    <li class="text-gray-300">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            stroke="currentColor"
                            class="w-4 h-4 current-fill"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                            />
                        </svg>
                    </li>
                    <li>
                        <a
                            class="text-sm text-gray-400 hover:text-gray-500"
                            href="#"
                            >Contact</a
                        >
                    </li>
                </ul>
                <a
                    class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold rounded-xl transition duration-200"
                    href="#"
                    >Sign In</a
                >
                <a
                    class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200"
                    href="#"
                    >Sign up</a
                >
            </div>
            <div class="navbar-menu relative z-50 hidden">
                <div
                    class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"
                ></div>
                <div
                    class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto"
                >
                    <div class="flex items-center mb-8">
                        <a
                            class="mr-auto text-3xl font-bold leading-none"
                            href="#"
                        >
                            <svg
                                class="h-12"
                                alt="logo"
                                viewBox="0 0 10240 10240"
                            >
                                <path
                                    xmlns="http://www.w3.org/2000/svg"
                                    d="M8284 9162 c-2 -207 -55 -427 -161 -667 -147 -333 -404 -644 -733 -886 -81 -59 -247 -169 -256 -169 -3 0 -18 -9 -34 -20 -26 -19 -344 -180 -354 -180 -3 0 -29 -11 -58 -24 -227 -101 -642 -225 -973 -290 -125 -25 -397 -70 -480 -80 -22 -3 -76 -9 -120 -15 -100 -13 -142 -17 -357 -36 -29 -2 -98 -7 -153 -10 -267 -15 -436 -28 -525 -40 -14 -2 -45 -7 -70 -10 -59 -8 -99 -14 -130 -20 -14 -3 -41 -7 -60 -11 -19 -3 -39 -7 -45 -8 -5 -2 -28 -6 -50 -10 -234 -45 -617 -165 -822 -257 -23 -10 -45 -19 -48 -19 -7 0 -284 -138 -340 -170 -631 -355 -1107 -842 -1402 -1432 -159 -320 -251 -633 -308 -1056 -26 -190 -27 -635 -1 -832 3 -19 7 -59 10 -89 4 -30 11 -84 17 -120 6 -36 12 -77 14 -91 7 -43 33 -174 39 -190 3 -8 7 -28 9 -45 6 -35 52 -221 72 -285 7 -25 23 -79 35 -120 29 -99 118 -283 189 -389 67 -103 203 -244 286 -298 75 -49 178 -103 196 -103 16 0 27 16 77 110 124 231 304 529 485 800 82 124 153 227 157 230 3 3 28 36 54 74 116 167 384 497 546 671 148 160 448 450 560 542 14 12 54 45 90 75 88 73 219 172 313 238 42 29 77 57 77 62 0 5 -13 34 -29 66 -69 137 -149 405 -181 602 -7 41 -14 82 -15 90 -1 8 -6 46 -10 83 -3 37 -8 77 -10 88 -2 11 -7 65 -11 122 -3 56 -8 104 -9 107 -2 3 0 12 5 19 6 10 10 8 15 -10 10 -34 167 -346 228 -454 118 -210 319 -515 340 -515 4 0 40 18 80 40 230 128 521 255 787 343 118 40 336 102 395 113 28 5 53 11 105 23 25 5 59 12 75 15 17 3 41 8 55 11 34 7 274 43 335 50 152 18 372 29 565 29 194 0 481 -11 489 -19 2 -3 -3 -6 -12 -6 -9 -1 -20 -2 -24 -3 -33 -8 -73 -16 -98 -21 -61 -10 -264 -56 -390 -90 -649 -170 -1243 -437 -1770 -794 -60 -41 -121 -82 -134 -93 l-24 -18 124 -59 c109 -52 282 -116 404 -149 92 -26 192 -51 220 -55 17 -3 64 -12 105 -21 71 -14 151 -28 230 -41 19 -3 46 -7 60 -10 14 -2 45 -7 70 -10 25 -4 56 -8 70 -10 14 -2 53 -7 88 -10 35 -4 71 -8 81 -10 10 -2 51 -6 92 -9 101 -9 141 -14 147 -21 3 -3 -15 -5 -39 -6 -24 0 -52 -2 -62 -4 -21 -4 -139 -12 -307 -22 -242 -14 -700 -7 -880 13 -41 4 -187 27 -250 39 -125 23 -274 68 -373 111 -43 19 -81 34 -86 34 -4 0 -16 -8 -27 -17 -10 -10 -37 -33 -59 -52 -166 -141 -422 -395 -592 -586 -228 -257 -536 -672 -688 -925 -21 -36 -43 -66 -47 -68 -4 -2 -8 -7 -8 -11 0 -5 -24 -48 -54 -97 -156 -261 -493 -915 -480 -935 2 -3 47 -21 101 -38 54 -18 107 -36 118 -41 58 -25 458 -138 640 -181 118 -27 126 -29 155 -35 14 -2 45 -9 70 -14 66 -15 137 -28 300 -55 37 -7 248 -33 305 -39 28 -3 84 -9 125 -13 163 -16 792 -8 913 12 12 2 58 9 102 15 248 35 423 76 665 157 58 19 134 46 170 60 86 33 344 156 348 166 2 4 8 7 13 7 14 0 205 116 303 184 180 126 287 216 466 396 282 281 511 593 775 1055 43 75 178 347 225 455 100 227 236 602 286 790 59 220 95 364 120 485 6 28 45 245 50 275 2 14 7 41 10 60 3 19 8 49 10 65 2 17 6 46 9 65 15 100 35 262 40 335 3 39 8 89 10 112 22 225 33 803 21 1043 -3 41 -7 129 -11 195 -3 66 -8 136 -10 155 -2 19 -6 76 -10 125 -3 50 -8 101 -10 115 -2 14 -6 57 -10 95 -7 72 -12 113 -20 175 -2 19 -7 55 -10 80 -6 46 -43 295 -51 340 -2 14 -9 54 -15 90 -5 36 -16 97 -24 135 -8 39 -17 84 -20 100 -12 68 -18 97 -50 248 -19 87 -47 204 -61 260 -14 56 -27 109 -29 117 -30 147 -232 810 -253 832 -4 4 -7 -23 -8 -60z"
                                ></path>
                            </svg>
                        </a>
                        <button class="navbar-close">
                            <svg
                                class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul>
                            <li class="mb-1">
                                <a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="/"
                                    >Home</a
                                >
                            </li>
                            <li class="mb-1">
                                <a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="product/create"
                                    >Create</a
                                >
                            </li>
                            <li class="mb-1">
                                <a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="#"
                                    >About Us</a
                                >
                            </li>
                            <li class="mb-1">
                                <a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="#"
                                    >Services</a
                                >
                            </li>
                            <li class="mb-1">
                                <a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="#"
                                    >Contact</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <div class="pt-6">
                            <a
                                class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl"
                                href="#"
                                >Sign in</a
                            >
                            <a
                                class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700 rounded-xl"
                                href="#"
                                >Sign Up</a
                            >
                        </div>
                        <p class="my-4 text-xs text-center text-gray-400">
                            <span>Copyright © 2023</span>
                        </p>
                    </div>
                </div>
            </div>
        </nav>
        
        @if($message = Session::get('success'))
        <div class="container my-4 px-auto py-auto w-full h-16" role="alert">
            <div class="mx-auto text-white rounded-lg shadow-xl bg-green-300 w-64 h-10 border-green-500">
                <div class="justify-center flex py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>
                    <p class="px-1">{{ $message }}</p>
                </div>
            </div>
        </div>
        @endif

        <script>
            // Burger menus
            document.addEventListener("DOMContentLoaded", function () {
                // open
                const burger = document.querySelectorAll(".navbar-burger");
                const menu = document.querySelectorAll(".navbar-menu");

                if (burger.length && menu.length) {
                    for (var i = 0; i < burger.length; i++) {
                        burger[i].addEventListener("click", function () {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle("hidden");
                            }
                        });
                    }
                }

                // close
                const close = document.querySelectorAll(".navbar-close");
                const backdrop = document.querySelectorAll(".navbar-backdrop");

                if (close.length) {
                    for (var i = 0; i < close.length; i++) {
                        close[i].addEventListener("click", function () {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle("hidden");
                            }
                        });
                    }
                }

                if (backdrop.length) {
                    for (var i = 0; i < backdrop.length; i++) {
                        backdrop[i].addEventListener("click", function () {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle("hidden");
                            }
                        });
                    }
                }
            });
        </script>
        
        <section>
        <div class="container w-full h-full my-20">
            <div class="mx-auto items-center flex-row w-full lg:w-1/2 xl:w-5/12">
                <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">
                    <form method="POST" action="/product/store" enctype="multipart/form-data">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="mb-5 form-control">
                            <label
                                for="email"
                                class="mb-5 block text-xl font-semibold text-[#07074D]"
                            >
                                Title
                            </label>
                            <input
                                required
                                value="{{ old('name') }}"
                                type="text"
                                name="name"
                                placeholder="Product Title"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                            @if($errors->has('name'))
                                <span class="text-red-500">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="mb-6">
                            <label
                                for="email"
                                class="mb-5 block text-xl font-semibold text-[#07074D]"
                            >
                                Description
                            </label>
                            <textarea
                                required
                                value="{{ old('description') }}"
                                name="description"
                                rows="6"
                                placeholder="Product Description"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            ></textarea>
                            @if($errors->has('description'))
                                <span class="text-red-500">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="mb-6">
                            <label
                                class="mb-5 block text-xl font-semibold text-[#07074D]"
                            >
                                Upload File
                            </label>

                            <div class="mb-8">
                                <input
                                    required
                                    value="{{ old('image') }}"
                                    type="file"
                                    name="image"
                                    id="file"
                                    class="sr-only"
                                />
                                <label
                                    for="file"
                                    class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center"
                                >
                                    <div>
                                        <span
                                            class="mb-2 block text-xl font-semibold text-[#07074D]"
                                        >
                                            Drop files here
                                        </span>
                                        <span
                                            class="mb-2 block text-base font-medium text-[#6B7280]"
                                        >
                                            Or
                                        </span>
                                        <span
                                            class="hover:bg-[#6A64F1] hover:text-white hover:shadow-xl inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]"
                                        >
                                            Browse
                                        </span>
                                    </div>
                                </label>
                                @if($errors->has('image'))
                                    <span class="text-red-500">{{ $errors->first('image') }}</span>
                                @endif
                            </div>

                            <!-- <div class="mb-5 rounded-md bg-[#F5F7FB] py-4 px-8">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="truncate pr-3 text-base font-medium text-[#07074D]"
                                    >
                                        banner-design.png
                                    </span>
                                    <button class="text-[#07074D]">
                                        <svg
                                            width="10"
                                            height="10"
                                            viewBox="0 0 10 10"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </button>
                                </div>
                            </div> -->

                            <div class="shadow-xl rounded-md bg-[#F5F7FB] py-4 px-8">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="truncate pr-3 text-base font-medium text-[#07074D]"
                                    >
                                        image.png
                                    </span>
                                    <button class="text-[#07074D]">
                                        <svg
                                            width="10"
                                            height="10"
                                            viewBox="0 0 10 10"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </button>
                                </div>
                                <div
                                    class="relative mt-5 h-[6px] w-full rounded-lg bg-[#E2E5EF]"
                                >
                                    <div
                                        class="absolute left-0 right-0 h-full w-[75%] rounded-lg bg-[#6A64F1]"
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button
                                type="submit"
                                class="w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none hover:shadow-xl hover:bg-[#9590f3]"
                            >
                                Send File
                            </button>
                        </div>
                    </form>
                    <div>
                        <span class="absolute -top-10 -right-9 z-[-1]">
                            <svg
                                width="100"
                                height="100"
                                viewBox="0 0 100 100"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                    fill="#3056D3"
                                />
                            </svg>
                        </span>
                        <span class="absolute -right-10 top-[90px] z-[-1]">
                            <svg width="34" height="134" viewBox="0 0 34 134" fill="none" xmlns="http://www.w3.org/2000/svg"
                            >
                                <circle
                                    cx="31.9993"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 1.66665)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 1.66665)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 1.66665)"
                                    fill="#13C296"
                                />
                            </svg>
                        </span>
                        <span class="absolute -left-7 -bottom-7 z-[-1]">
                            <svg
                                width="107"
                                height="134"
                                viewBox="0 0 107 134"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <circle
                                    cx="104.999"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 104.999 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="104.999"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 104.999 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="104.999"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 104.999 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="104.999"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 104.999 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="104.999"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 104.999 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="104.999"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 104.999 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="104.999"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 104.999 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="104.999"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 104.999 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="104.999"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 104.999 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="104.999"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 104.999 1.66665)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="90.3333"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="90.3333"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="90.3333"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="90.3333"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="90.3333"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="90.3333"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="90.3333"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="90.3333"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="90.3333"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="90.3333"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 90.3333 1.66665)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="75.6654"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="75.6654"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="75.6654"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="75.6654"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="75.6654"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="75.6654"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="75.6654"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="75.6654"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="75.6654"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="75.6654"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 75.6654 1.66665)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="31.9993"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 31.9993 1.66665)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="60.9993"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="60.9993"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="60.9993"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="60.9993"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="60.9993"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="60.9993"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="60.9993"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="60.9993"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="60.9993"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="60.9993"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 60.9993 1.66665)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="17.3333"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 17.3333 1.66665)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="46.3333"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="132"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 132)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="46.3333"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="117.333"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 117.333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="46.3333"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="102.667"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 102.667)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="46.3333"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="88"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 88)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="46.3333"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="73.3333"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 73.3333)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="46.3333"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="45"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 45)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="46.3333"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="16"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 16)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="46.3333"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="59"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 59)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="46.3333"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="2.66536"
                                    cy="30.6666"
                                    r="1.66667"
                                    transform="rotate(180 2.66536 30.6666)"
                                    fill="#13C296"
                                />
                                <circle
                                    cx="46.3333"
                                    cy="1.66665"
                                    r="1.66667"
                                    transform="rotate(180 46.3333 1.66665)"
                                    fill="#13C296"
                                /><circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#13C296"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <!-- <div class="flex items-center justify-center p-12">
                <div class="mx-auto w-full max-w-[550px] bg-white">
                    <form
                        class="py-6 px-9"
                        action="https://formbold.com/s/FORM_ID"
                        method="POST"
                    >
                        

                        

                       
                    </form>
                </div>
            </div> -->
        </div>
        </section>
    </body>
</html>
