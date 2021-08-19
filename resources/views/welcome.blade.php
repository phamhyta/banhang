<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>
<body class="bg-white">
    <div class="w-full h-28 border-2">
        menu
    </div>
    <div class="flex justify-between w-full border-2 h-96">
        <div class= "w-1/6 border-2 h-96">
            <ul>
                <li class="w-full h-32 border-2"><img src="//image/anh_giay_nam/1 (1).jpg" alt=""></li>
                <li class="w-full h-32 border-2"><img src="../../image/anh_giay_nam/1 (2).jpg" alt=""></li>
                <li class="w-full h-32 border-2"><img src="../../image/anh_giay_nam/1 (3).jpg" alt=""></li>
            </ul>
        </div>
        <div class="w-2/6 border-2 h-96">2</div>
        <div class="w-2/6 border-2 h-96">
            <form class="flex-auto p-6">
                <div class="flex flex-wrap">
                  <h1 class="flex-auto text-xl font-semibold">
                    NIKE FAKE
                  </h1>
                  <div class="text-xl font-semibold text-gray-500">
                    $110.00
                  </div>
                  <div class="w-full flex-none text-sm font-medium text-gray-500 mt-2">
                    San pham khong chinh hang
                  </div>
                </div>
                <div class="">

                </div>
                <div class="flex items-baseline mt-4 mb-6">
                  <div class="space-x-2 flex">
                    <label>
                      <input class="w-6 h-6 flex items-center justify-center bg-gray-100 rounded-lg" name="size" type="radio" value="36" checked>
                      36
                    </label>
                    <label>
                      <input class="w-6 h-6 flex items-center justify-center" name="size" type="radio" value="37">
                      37
                    </label>
                    <label>
                      <input class="w-6 h-6 flex items-center justify-center" name="size" type="radio" value="39">
                      39
                    </label>
                    <label>
                      <input class="w-6 h-6 flex items-center justify-center" name="size" type="radio" value="40">
                      40
                    </label>
                    <label>
                      <input class="w-6 h-6 flex items-center justify-center" name="size" type="radio" value="41">
                      41
                    </label>
                  </div>
                </div>
                <div class="flex space-x-3 mb-4 text-sm font-medium">
                  <div class="flex-auto flex space-x-3">
                    <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Buy now</button>
                    <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Add to bag</button>
                  </div>
                  <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-gray-400 border border-gray-300" type="button" aria-label="like">
                    <svg width="20" height="20" fill="currentColor">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                    </svg>
                  </button>
                </div>
              </form>
        </div>
    </div>
    <div class="relative w-full border-2 h-96">
        <div class="absolute left-0 top-0 w-2/5 border-2 h-48">
            hinh anh
        </div>
        <div class="absolute bottom-0 right-0 w-2/5 border-2 h-48">
            danh gia
        </div>
    </div>
    <div class="relative w-full h-64 border-2">
        
    </div>
    @yield('content') 
</body>
</html>