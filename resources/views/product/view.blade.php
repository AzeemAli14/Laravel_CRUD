<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        <title>Laravel CRUD</title>
    </head>
    <body class="bg-gray-50">
        <main>
            <style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
            <div class="min-w-screen min-h-screen bg-red-500 flex items-center p-5 lg:p-10 overflow-hidden relative">
                <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
                    <div class="md:flex items-center -mx-10">
                        <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                            <div class="relative">
                                <div class="text-center m-20 border-4 rounded-md border-red-400 shadow-xl">
                                    <div class="h-min overflow-hidden rounded-md hover:scale-150 transition-all duration-500">
                                        <img class="hover:scale-125 transition-all duration-500" src="{{asset('/product/'.$product->image)}}" alt="" />
                                    </div>
                                </div>
                                <!-- <div class="bottom-8 border-yellow-400 border-solid"></div> -->
                                <!-- <img class="hover:scale-125 transition-all duration-500" src="{{asset('/product/'.$product->image)}}" class="w-full relative z-10" alt=""> -->
                                <!-- <div class="border-4 border-yellow-200 fixed top-10 bottom-10 left-10 right-10 z-0"></div> -->
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-10">
                            <div class="mb-10">
                                <h1 class="font-bold uppercase text-2xl mb-5">{{$product->name}}</h1>
                                <p class="text-sm">{{$product->description}}<a href="#" class="opacity-50 text-gray-900 hover:opacity-100 inline-block text-xs leading-none border-b border-gray-900">MORE <i class="mdi mdi-arrow-right"></i></a></p>
                            </div>
                            <div>
                                <div class="inline-block align-bottom mr-5">
                                    <span class="text-2xl leading-none align-baseline">$</span>
                                    <span class="font-bold text-5xl leading-none align-baseline">59</span>
                                    <span class="text-2xl leading-none align-baseline">.99</span>
                                </div>
                                <div class="inline-block align-bottom">
                                    <button class="bg-red-400 opacity-75 hover:opacity-100 text-red-900 hover:text-gray-900 rounded-full px-10 py-2 font-semibold"><i class="mdi mdi-cart -ml-2 mr-2"></i> BUY NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
