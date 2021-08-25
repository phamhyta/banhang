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
<body class="h-screen bg-white font-sans">
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
    <div class=" pt-10">
        @yield('content')
    </div>
    
</body>
</html>