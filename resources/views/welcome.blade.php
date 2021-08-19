<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>SHOP_XH</title>
</head>
<body class="bg-white">
    <div class="w-full h-28 border-2">
        menu
    </div>
    <div class="flex justify-between w-full border-2 h-96">
        <div class= "w-1/6 border-2 h-96">
          <div class="px-2">
          <img class="w-full h-28 mt-2" src={require('image/anh_giay_nu/2(8).png')} alt="" width="512" height="384">
          <img class="w-full h-28 mt-2" src="image/anh_giay_nu/2(8).png" alt="" width="512" height="384">
          <img class="w-full h-28 mt-2" src="image/anh_giay_nu/2(7).png" alt="" width="512" height="384">
        </div>
        </div>
        <div class="w-2/6 border-2 h-96 p-6">
          <img class="w-full h-full" src="https://anhdep123.com/wp-content/uploads/2021/01/anh-giay-adidas.jpg" alt="" width="512" height="384">
        </div>
        <div class="w-3/6 h-96">
            <form class="flex-auto p-6">
                <div class="flex flex-wrap">
                  <h1 class="flex-auto text-xl font-semibold">
                    NIKE FAKE
                  </h1>
                  <div class="text-xl font-semibold text-gray-500">
                    $90.00
                  </div>
                  <div class="text-l font-semibold text-gray-500 pl-2 line-through">
                    $110.00
                  </div>
                  <div class="w-full flex-none text-sm font-medium text-gray-700 mt-2">
                    San pham khong chinh hang
                  </div>
                </div>
                <div class="flex items-baseline mt-4 mb-6">
                  <div class="flex-none text-sm font-medium text-gray-700 mt-2 mr-2 ">Color</div>
                  <div class="space-x-2 flex">
                    <label>
                      <input class="w-28 h-28 flex items-center justify-center border-2 rounded-lg" name="size" value=" 36" checked>
                    </label>
                    <label>
                      <input class="w-28 h-28 flex items-center justify-center border-2 rounded-lg" name="size" value=" 37">
                    </label>
                    <label>
                      <input class="w-28 h-28 flex items-center justify-center border-2 rounded-lg" name="size" value=" 39"> 
                    </label>
                  </div>
                </div>
                <div class="flex items-baseline mt-4 mb-6">
                  <div class="flex-none text-sm font-medium text-gray-700 mt-2 mr-2">Size</div>
                  <div class="space-x-2 flex">
                    <label>
                      <input class="w-6 h-6 flex items-center justify-center bg-pink-100 rounded-lg" name="size" value=" 36" checked>
                    </label>
                    <label>
                      <input class="w-6 h-6 flex items-center justify-center bg-pink-100 rounded-lg" name="size" value=" 37">
                    </label>
                    <label>
                      <input class="w-6 h-6 flex items-center justify-center bg-pink-100 rounded-lg" name="size" value=" 39"> 
                    </label>
                    <label>
                      <input class="w-6 h-6 flex items-center justify-center bg-pink-100 rounded-lg" name="size" value=" 40">
                    </label>
                    <label>
                      <input class="w-6 h-6 flex items-center justify-center bg-pink-100 rounded-lg" name="size" value=" 41">
                    </label>
                  </div>
                </div>
                <div class="flex space-x-3 mb-4 text-sm font-medium">
                  <div class="flex-auto flex space-x-3">
                    <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Buy now</button>
                    <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Add to bag</button>
                  </div>
                  <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-red-500 border border-pink-300" type="button" aria-label="like">
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
      flash sale
    </div>
    @yield('content') 
</body>
</html>