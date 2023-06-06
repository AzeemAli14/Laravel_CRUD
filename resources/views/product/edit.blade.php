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
                <img
                    src="https://tailus.io/sources/blocks/stats-cards/preview/images/logo.svg"
                    class="w-32"
                    alt="tailus logo"
                />
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
                            class="text-sm text-gray-400 hover:text-gray-500"
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
                            href="product/listing"
                            >Listing</a
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
                            <img
                            src="https://tailus.io/sources/blocks/stats-cards/preview/images/logo.svg"
                            class="w-32"
                            alt="tailus logo"
                            />
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
                                    href="product/listing"
                                    >Listing</a
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
                    <form method="POST" action="/product/update/{{$product->id}}" enctype="multipart/form-data">
                        @csrf <!-- {{ csrf_field() }} -->
                        
                        @method("PUT")
                        <div class="mb-5 form-control">
                            <label
                                for="email"
                                class="mb-5 block text-xl font-semibold text-[#07074D]"
                            >
                                Title
                            </label>
                            <input
                                required
                                value="{{ old('name',$product->name) }}"
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
                                value="{{ old('description',$product->description) }}"
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
                                    value="{{ old('image'), $product->image }}"
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

                            <div class="py-4 px-8">
                                <div class="flex items-center justify-between">
                                    <div class="mx-auto w-32 h-32 shadow-xl rounded-md">
                                        <image
                                        src="{{asset('/product/'.$product->image)}}"
                                        />
                                    </div>
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
