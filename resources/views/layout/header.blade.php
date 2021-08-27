<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Document</title>
</head>
<body class="bg-white font-sans">
    <nav>
        <div class="flex justify-between bg-gray-300">
            <div class="inline-block relative ml-5">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center  text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
                <select class="block appearance-none w-full px-5 py-2 pr-8 bg-gray-300 leading-tight focus:outline-none focus:shadow-outline">
                  <option>INTERNATIONAL</option>
                  <option>VIET NAM</option>
                  <option>US</option>
                  <option>UK</option>
                  <option>GERMANY</option>
                </select>
            </div>
            <ul class="flex flex-wrap pt-1.5 mr-5">
                <li><a class="px-4">Location</a></li>
                <li><a class="px-4">Help</a></li>
                <li><a class="px-4">Sign in</a></li>
            </ul>
        </div>
        <div class="w-full flex justify-around items-center mx-auto relative bg-white text-black">
            <a class="font-bold text-3xl">Logo</a>
            <ul class="flex font-semibold">
                <li class="group">
                    <a class="menu-item group-hover:border-yellow-500">Men</a>
                    <!-- MEGA MENU CONTENT -->
                    <div class="w-full z-10 megaMenuContent p-5 absolute top-full left-0 bg-gray-300 mt-14 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500">
                        <ul class="p-2 w-1/3">
                            <li>
                                <a class="mega-sub-item-title">
                                    FIND YOUR OWN SHOES
                                    <div class=" border-b-2 w-60 border-yellow-500"></div>
                                </a>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By color</a>
                                <div class="sub-dropdown-content left-20 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            4
                                            {{-- <img src="{{asset("img/nav_shoes_color(2).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            5
                                            {{-- <img src="{{asset("img/nav_shoes_color(3).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            6
                                            {{-- <img src="{{asset("img/nav_shoes_color(5).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By brand</a>
                                <div class="sub-dropdown-content left-20 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By function</a>
                                <div class="sub-dropdown-content left-24 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By size</a>
                                <div class="sub-dropdown-content left-16 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-4">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-4">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-4">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=" pt-5">
                                <a class="mega-sub-item-title">
                                    DISCOVER MORE
                                    <div class=" border-b-2 w-40 border-yellow-500"></div>
                                </a>
                            </li>
                            <li>
                                <a class="mega-sub-item">About new collection</a>
                            </li>
                            <li>
                                <a class="mega-sub-item">About new shoes</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MEGA MENU CONTENT -->
                </li>
                <li class="group">
                    <a class="menu-item group-hover:border-yellow-500">Women</a>
                    <!-- MEGA MENU CONTENT -->
                    <div class="w-full z-10 megaMenuContent p-5 absolute top-full left-0 bg-gray-300 mt-14 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500">
                        <ul class="p-2 w-1/3">
                            <li>
                                <a class="mega-sub-item-title">
                                    FIND YOUR OWN SHOES
                                    <div class=" border-b-2 w-60 border-yellow-500"></div>
                                </a>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By color</a>
                                <div class="sub-dropdown-content left-20 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            4
                                            {{-- <img src="{{asset("img/nav_shoes_color(2).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            5
                                            {{-- <img src="{{asset("img/nav_shoes_color(3).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            6
                                            {{-- <img src="{{asset("img/nav_shoes_color(5).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By brand</a>
                                <div class="sub-dropdown-content left-20 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By function</a>
                                <div class="sub-dropdown-content left-24 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By size</a>
                                <div class="sub-dropdown-content left-16 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-4">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-4">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-4">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=" pt-5">
                                <a class="mega-sub-item-title">
                                    DISCOVER MORE
                                    <div class=" border-b-2 w-40 border-yellow-500"></div>
                                </a>
                            </li>
                            <li>
                                <a class="mega-sub-item">About new collection</a>
                            </li>
                            <li>
                                <a class="mega-sub-item">About new shoes</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MEGA MENU CONTENT -->
                </li>
                <li class="group">
                    <a class="menu-item group-hover:border-yellow-500">Kid</a>
                    <!-- MEGA MENU CONTENT -->
                    <div class="w-full z-10 megaMenuContent p-5 absolute top-full left-0 bg-gray-300 mt-14 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500">
                        <ul class="p-2 w-1/3">
                            <li>
                                <a class="mega-sub-item-title">
                                    FIND YOUR OWN SHOES
                                    <div class=" border-b-2 w-60 border-yellow-500"></div>
                                </a>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By color</a>
                                <div class="sub-dropdown-content left-20 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            4
                                            {{-- <img src="{{asset("img/nav_shoes_color(2).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            5
                                            {{-- <img src="{{asset("img/nav_shoes_color(3).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            6
                                            {{-- <img src="{{asset("img/nav_shoes_color(5).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By brand</a>
                                <div class="sub-dropdown-content left-20 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By function</a>
                                <div class="sub-dropdown-content left-24 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By size</a>
                                <div class="sub-dropdown-content left-16 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-4">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-4">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-4">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=" pt-5">
                                <a class="mega-sub-item-title">
                                    DISCOVER MORE
                                    <div class=" border-b-2 w-40 border-yellow-500"></div>
                                </a>
                            </li>
                            <li>
                                <a class="mega-sub-item">About new collection</a>
                            </li>
                            <li>
                                <a class="mega-sub-item">About new shoes</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MEGA MENU CONTENT -->
                </li>
                <li class="group">
                    <a class="menu-item group-hover:border-yellow-500">Sales</a>
                    <!-- MEGA MENU CONTENT -->
                    <div class="w-full z-10 megaMenuContent p-5 absolute top-full left-0 bg-gray-300 mt-14 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500">
                        <ul class="p-2 w-1/3">
                            <li>
                                <a class="mega-sub-item-title">
                                    FIND YOUR OWN SHOES
                                    <div class=" border-b-2 w-60 border-yellow-500"></div>
                                </a>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By color</a>
                                <div class="sub-dropdown-content left-20 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            4
                                            {{-- <img src="{{asset("img/nav_shoes_color(2).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            5
                                            {{-- <img src="{{asset("img/nav_shoes_color(3).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded">
                                            6
                                            {{-- <img src="{{asset("img/nav_shoes_color(5).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By brand</a>
                                <div class="sub-dropdown-content left-20 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By function</a>
                                <div class="sub-dropdown-content left-24 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-2">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-2">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-dropdown relative">
                                <a class="menu-sub-item">By size</a>
                                <div class="sub-dropdown-content left-16 absolute top-1 opacity-0 invisible transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                </div>
                                <div class="sub-dropdown-content absolute left-full top-full bg-gray-300 opacity-0 invisible transition-all duration-500">
                                    <div class="w-max grid grid-cols-3 gap-2">
                                        <div class="bg-white p-14 rounded row-span-4">
                                            1
                                            {{-- <img src="{{asset("img/nav_shoes_color(1).png")}}"> --}}
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-4">
                                            2
                                        </div>
                                        <div class="bg-white p-14 rounded row-span-4">
                                            3
                                            {{-- <img src="{{asset("img/nav_shoes_color(4).png")}}"> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=" pt-5">
                                <a class="mega-sub-item-title">
                                    DISCOVER MORE
                                    <div class=" border-b-2 w-40 border-yellow-500"></div>
                                </a>
                            </li>
                            <li>
                                <a class="mega-sub-item">About new collection</a>
                            </li>
                            <li>
                                <a class="mega-sub-item">About new shoes</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MEGA MENU CONTENT -->
                </li>
            </ul>
            <div class=" relative bg-gray-300 p-2 rounded-3xl text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-0 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
                <input type="text" placeholder="Search..." class="ml-7 bg-transparent outline-none"> 
            </div>
        </div>
    </nav>
    <div class=" py-10">
        @yield('content')
    </div>    
    <footer class="bg-gray-800">
        <div class="container px-6 py-4 mx-auto">
            <div class="lg:flex">
                <div class="w-full -mx-6 lg:w-2/5">
                    <div class="px-6">
                        <div>
                            <a href="#" class="text-xl font-bold text-white hover:text-gray-300">Brand</a>
                        </div>
                        
                        <p class="max-w-md mt-2 text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, nisi! Id.</p>
                        
                        <div class="flex mt-4 -mx-2">
                            <a href="#" class="mx-2 text-gray-200 hover:text-gray-400" aria-label="Linkden">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"/>
                                </svg>
                            </a>

                            <a href="#" class="mx-2 text-gray-200 hover:text-gray-400" aria-label="Facebook">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"/>
                                </svg>
                            </a>

                            <a href="#" class="mx-2 text-gray-200 hover:text-gray-400" aria-label="Twitter">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-6 lg:mt-0 lg:flex-1">
                    <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-4">
                        <div>
                            <h3 class=" uppercase text-white">About</h3>
                            <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Company</a>
                            <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">community</a>
                            <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Careers</a>
                        </div>

                        <div>
                            <h3 class="uppercase text-white">Blog</h3>
                            <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Tec</a>
                            <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Music</a>
                            <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Videos</a>
                        </div>

                        <div>
                            <h3 class="uppercase text-white">Products</h3>
                            <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Mega cloud</a>
                            <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Aperion UI</a>
                            <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Meraki UI</a>
                        </div>

                        <div>
                            <h3 class="uppercase text-white">Contact</h3>
                            <span class="block mt-2 text-sm text-gray-400 hover:underline">+1 526 654 8965</span>
                            <span class="block mt-2 text-sm text-gray-400 hover:underline">example@email.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="h-px my-6  border-none bg-gray-700">

            <div>
                <p class="text-center text-white">© Brand 2020 - All rights reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>