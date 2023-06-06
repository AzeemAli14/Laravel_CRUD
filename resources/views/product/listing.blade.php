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
                <a class="text-3xl font-bold leading-none" href="/">
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
                    class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6"
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
                            class="text-sm text-blue-600 font-bold"
                            href="/product/listing"
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
                    href="auth/login"
                    >Sign In</a
                >
                <a
                    class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200"
                    href="auth/register"
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
                            href="/"
                        >
                        <img
                            src="https://tailus.io/sources/blocks/stats-cards/preview/images/logo.svg"
                            class="w-32"
                            alt="tailus logo"
                        />
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
                                    href="/product/create"
                                    >Create</a
                                >
                            </li>
                            <li class="mb-1">
                                <a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                    href="/product/listing"
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
                                class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold bg-gray-50 hover:bg-gray-100 rounded-xl"
                                href="auth/login"
                                >Sign in</a
                            >
                            <a
                                class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700 rounded-xl"
                                href="auth/register"
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

        <section>
            <div class="min-h-screen bg-gray-100 flex justify-center items-center">
                <div class="grid gap-4 grid-cols-4 grid-rows-3 my-6">
                @foreach ($product as $products)
                    <div class="w-auto text-center justify-center align-center auto p-6 bg-white rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500">
                        <a href="/product/view/{{$products->id}}">    
                            <div class="flex justify-center align-center">
                                <img class="w-40 h-32 object-cover rounded-t-md" src="{{$products->image}}" alt="" />
                            </div>
                            <h1 class="text-2xl font-bold text-gray-700">{{$products->name}}</h1>
                            <div class="mt-3 space-x-4 flex p-1">
                                
                                <!-- <div class="mt-4 mx-auto mb-2 flex justify-between pl-4 pr-2"> -->
                                    <div class="cursor-pointer mx-auto text-lg flex font-semibold py-2 px-6 hover:bg-sky-700 text-green-100 hover:text-white bg-sky-500 rounded-lg shadow-2xl hover:shadow-2xl transition duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                        </svg>
                                        <a href="/product/edit/{{$products->id}}" class="px-3 text-white">Edit</a>
                                    </div>
                                
                                    <!-- <div class="cursor-pointer mx-auto text-lg flex font-semibold py-2 px-6 hover:bg-red-700 text-green-100 hover:text-white bg-red-500 rounded-lg shadow-2xl hover:shadow-2xl transition duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>

                                        <a href="/product/delete/{{$products->id}}" class="px-3 text-white">Delete</a>
                                    </div> -->
                        
                                    <form method="POST" class="" action="/product/delete/{{$products->id}}">
                                        @csrf
                                        @method("DELETE")
                                            <div class="cursor-pointer mx-auto text-lg flex font-semibold py-2 px-6 hover:bg-red-700 text-green-100 hover:text-white bg-red-500 rounded-lg shadow-2xl hover:shadow-2xl transition duration-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>

                                            <a href="/product/delete/{{$products->id}}" class="px-3 text-white">Delete</a>
                                        </div>
                                    </form>
                                <!-- </div> -->
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
    </body>
</html>