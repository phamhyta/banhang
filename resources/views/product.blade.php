<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Document</title>
</head>
<body class="font-sans">
    <!-- Chon mau giay -->
    <div class="border-2 border-red-900 mx-5">
        <div class="font-bold text-5xl font-medium pb-10">
            Shoes selector
        </div>
        <div class="flex flex-row flex-wrap">
            <img src="{{asset("img/nikadas_male_shoes_selector.png")}}" alt="" class="w-1/3">
            
            <div class="bg-gray-300 w-4/6">
                <ul class="flex flex-wrap font-normal justify-center w-full">
                    <li class=" w-1/3 p-20">
                        <div class="inline-block relative w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                              <option>Category</option>
                              <option>Football</option>
                              <option>Tennis</option>
                              <option>Basketball</option>
                              <option>Running</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </li>
                    <li class=" w-1/3 p-20">
                        <div class="inline-block relative w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                              <option>Size</option>
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                              <option>XL</option>
                              <option>XXL</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </li>
                    <li class=" w-1/3 p-20">
                        <div class="inline-block relative w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                              <option>Material</option>
                              <option>Cotton</option>
                              <option>Leather</option>
                              <option>Nilon</option>
                              <option>Plastic</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </li>
                </ul>
                <ul class="flex flex-wrap font-normal justify-center">
                    <li class=" w-1/3 p-20">
                        <div class="inline-block relative w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                              <option>Price</option>
                              <option>Low</option>
                              <option>Expensive</option>
                              <option>On sale</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </li>
                    <li class=" w-1/3 p-20">
                        <div class="inline-block relative w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                              <option>Brand</option>
                              <option>Nikadas Original</option>
                              <option>Nikadas F1</option>
                              <option>Bitis</option>
                              <option>Thuong Dinh</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </li>
                    <li class=" w-1/3 p-20">
                        <div class="inline-block relative w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                              <option>Surface</option>
                              <option>Smooth</option>
                              <option>Spike</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </li>
                </ul>
                <ul class="flex flex-wrap font-normal justify-center">
                    <li class=" w-1/3 p-20">
                        <div class="inline-block relative w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                              <option>Color</option>
                              <option>Yellow</option>
                              <option>Red</option>
                              <option>Blue</option>
                              <option>Black</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </li>
                    <li class=" w-1/3 p-20">
                        <div class="inline-block relative w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                              <option>Shoes height</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </li>
                    <li class=" w-1/3 p-20">
                        <div class="inline-block relative w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                              <option>Athletes</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Chon mau giay -->
    <div class=" border-indigo-900 border-2 mx-5 mt-32">
        <div class="font-bold text-5xl font-medium pb-10 ">
            Men shoes
        </div>
        <div>
            <ul class="flex flex-wrap font-normal w-full ">
                <?php
                    for($i = 1; $i <= 18; $i++){
                        echo '<li class="my-5 pr-5 ml-0 w-1/3">
                                <div>
                                    <div>
                                        <i class="far fa-heart"></i>
                                        <img src="'.asset("img/anh_giay_nam/male_shoes($i).png").'" alt="male shoes" class="w-full object-contain">
                                    </div>
                                    <div class="bg-gray-500 flex justify-between">
                                        <ul class="pt-5 pl-5 pb-1">
                                            <li class="text-white p-2 font-medium text-base">
                                                Shoes '.$i.'
                                            </li>
                                            <li class="text-white p-2 font-normal text-sm">Men shoes</li>
                                            <li class="text-white p-2 font-normal text-sm">+4 color</li>
                                        </ul>
                                        <div class="float-right text-white pr-5 pt-6 font-medium text-base">
                                            200$
                                        </div>
                                    </div>
                                </div>
                            </li>';
                        //echo '<img src="'.asset("img/anh_giay_nam/male_shoes($i).png").'">';
                    }    
                ?> 
            </ul>
        </div>
    </div>
</body>
</html>