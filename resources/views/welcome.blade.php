<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>SHOP_XH</title>
</head>

<body class="bg-gradient-to-t from-blue-300 via-blue-100 to-blue-200">
     <!-- Menu -->
    <div class="w-full h-36 border-2">
        menu
    </div>
    <!-- Sản phẩm chi tiết -->
    <div class="flex justify-between w-full h-96">
        <!--!!-->
        <div class="w-1/6 h-96">
            <!-- 3 ảnh (để chạy) mẫu khác của sản phẩm -->
            <div class="pl-2">
                <!-- Ảnh 1 -->
                <div class="border-b-2">
                    <img id="image1" class="w-2/3 h-28 mt-4 ml-6 mb-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(2).png" alt="" width="512" height="384">
                    <script type="text/javascript">
                        var image = document.getElementById("image1");
                        var currentPos = 0;
                        var images = ["http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(2).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(4).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(5).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(3).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(6).png",];
                        function volgendefoto()
                        {
                            if(++currentPos > 4)
                                currentPos = 0;
                            image.src = images[currentPos];
                        }
                        setInterval(volgendefoto, 3000);
                    </script>
                </div>
                <!-- Ảnh 2 -->
                <div class="border-b-2">
                    <img id="image2" class="w-2/3 h-28 mt-4 ml-6 mb-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(6).png" alt="" width="512" height="384">
                    <script type="text/javascript">
                        var imagee = document.getElementById("image2");
                        var currentPos = 0;
                        var images = ["http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(6).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(2).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(4).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(5).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(3).png",];
                        function volgendefoto()
                        {
                            if(++currentPos > 4)
                                currentPos = 0;
                            imagee.src = images[currentPos];
                        }
                        setInterval(volgendefoto, 3000);
                    </script>
                </div>
                <!-- Ảnh 3 -->
                 <div> 
                    <img id="image3" class="w-2/3 h-28 mt-4 ml-6" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(3).png" alt="" width="512" height="384">
                    <script type="text/javascript">
                        var imageee = document.getElementById("image3");
                        var currentPos = 0;
                        var images = ["http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(3).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(6).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(2).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(4).png",
                        "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(5).png",];
                        function volgendefoto()
                        {
                            if(++currentPos > 4)
                                currentPos = 0;
                            imageee.src = images[currentPos];
                        }
                        setInterval(volgendefoto, 3000);
                    </script>
                </div>
            </div>
        </div>
        <!-- Ảnh to để ở giữa trang -->
        <div class="w-2/6 h-96">
            <img class="w-full h-full p-2 mt-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(249).jpg" alt="" width="512" height="384">
        </div>
        <!-- Phần thông tin sản phẩm -->
        <div class="w-3/6 h-96 pl-8 border-l-2">
            <form class="flex-auto p-2 mr-6">
                <!-- Thông tin -->
                <div class="flex flex-wrap">
                    <h1 class="flex-auto text-3xl font-semibold"> <!-- Tên sp -->
                        NIKE FAKE
                    </h1>
                    <div class="text-3xl font-semibold text-gray-500 mr-2"> <!-- Giá sau khi giảm giá -->
                        $90.00
                    </div>
                    <div class="text-xl font-semibold text-gray-500 pl-2 line-through mr-9"> <!-- Giá gốc -->
                        $110.00
                    </div>
                    <div class="w-full flex-none text-sm font-medium text-gray-700"> <!-- Mô tả ngắn -->
                        San pham khong chinh hang
                    </div>
                </div>
                <!-- Thanh chọn màu -->
                <div class="flex items-baseline mt-4 mb-6">
                    <div class="flex-none text-sm font-medium text-gray-700 mt-2 mr-2 ">Color</div>
                    <div class="space-x-2 flex">
                        <label>
                      <img class="w-32 h-32 flex items-center justify-center rounded-lg" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(275).jpg" alt="">
                      <input class="w-5 h-5 flex items-center justify-center rounded-lg mt-2 ml-12" type="radio" name="color" value="">
                      <p class="flex justify-center mr-2">Cam</p>
                    </label>
                        <label>
                      <img class="w-32 h-32 flex items-center justify-center rounded-lg" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(251).jpg" alt="">
                      <input class="w-5 h-5 flex items-center justify-center rounded-lg mt-2 ml-12" type="radio" name="color" value="">
                      <p class="flex justify-center mr-2">Đen</p>
                    </label>
                        <label>
                      <img class="w-32 h-32 flex items-center justify-center rounded-lg" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(261).jpg" alt="">
                      <input class="w-5 h-5 flex items-center justify-center rounded-lg mt-2 ml-12" type="radio" name="color" value=""> 
                      <p class="flex justify-center mr-2">Trắng</p>
                    </label>
                    <label>
                        <img class="w-32 h-32 flex items-center justify-center rounded-lg" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(263).jpg" alt="">
                        <input class="w-5 h-5 flex items-center justify-center rounded-lg mt-2 ml-12" type="radio" name="color" value=""> 
                        <p class="flex justify-center mr-2">Vàng</p>
                      </label>
                    </div>
                </div>
                <!-- Thanh chọn size -->
                <div class="flex items-baseline mt-4 mb-6">
                    <div class="flex-none text-sm font-medium text-gray-700 mr-2">Size</div>
                    <div class="space-x-2 flex">
                        <label>
                      <input class="w-5 h-5 flex items-center justify-center bg-pink-100 rounded-lg" type="radio" name="size" value=" 36" checked> 36
                    </label>
                        <label>
                      <input class="w-5 h-5 flex items-center justify-center bg-pink-100 rounded-lg" type="radio" name="size" value=" 37"> 37
                    </label>
                        <label>
                      <input class="w-5 h-5 flex items-center justify-center bg-pink-100 rounded-lg" type="radio" name="size" value=" 39"> 39
                    </label>
                        <label>
                      <input class="w-5 h-5 flex items-center justify-center bg-pink-100 rounded-lg" type="radio" name="size" value=" 40"> 40
                    </label>
                        <label>
                      <input class="w-5 h-5 flex items-center justify-center bg-pink-100 rounded-lg" type="radio" name="size" value=" 41"> 41
                    </label>
                    </div>
                </div>
                <!-- Thanh thêm vào giỏ hàng, mua ngay -->
                <div class="flex space-x-3 mb-4 text-sm font-medium">
                    <div class="flex-auto flex space-x-10 ml-4 mr-4">
                        <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Buy now</button>
                        <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-900" type="button">Add to bag</button>
                    </div>
                    <!-- Nút thả tim -->
                    <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-red-500 border border-pink-900" type="button" aria-label="like">
                    <svg width="20" height="20" fill="currentColor">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                    </svg>
                  </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Phần đánh giá, mô tả -->
    <div class="flex justify-between w-full h-96 mt-6 border-t-2">
        <div class="w-1/3 h-full border-2">
            <!-- Phần đánh giá -->
            <div class="flex items-center text-sm font-medium my-5 sm:mt-2 sm:mb-4">
                <div class="flex-none text-sm font-medium text-gray-700 mr-2">Xếp hạng và đánh giá</div>
                <svg width="20" height="20" fill="currentColor" class="text-violet-600">
                <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                </svg>
                <div class="ml-1">
                    <span class="text-black">4.94</span>
                    <span class="sm:hidden md:inline">(128)</span>
                </div>
            </div>
        </div>
        <div class="w-2/3 h-full border-2">
            <div class="flex h-1/2 w-full border-2">
                <div class="h-full w-1/3"> <!-- Để ảnh sp -->
                    <img class="w-5/6 h-full float-right" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(23).png" alt="" width="512" height="384">
                </div>
                <!-- Phần giới thiệu -->
                <div class="ml-4 mr-6 h-full w-2/3 border-2">
                    <div>
                        <h1 class="text-3xl font-semibold float-left"> NIKE FAKE</h1>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold float-rights w-full mr-48 mt-12">
                            Tuy là hàng fake nhưng mà chất lượng không kém hàng real, màu sắc mẫu mã phải nói là chuẩn fake :)))
                            <br> Sản phẩm đảm bảo 1 lần nhìn qua k thể phát hiện là giả :)) 
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex h-1/2 w-full border-2">
                <!-- Phần thông số sản phẩm -->
                <div class="h-full w-2/3">
                    abc
                </div>
                <div class="h-full w-1/3"> <!-- Để ảnh sp -->
                    <img class="w-5/6 h-full float-right mr-4" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(24).png" alt="" width="512" height="384">
                </div>
            </div>
        </div>
    </div>
    <!-- Đề xuất mua sắm -->
    <div class="relative w-full h-96">
        <div class="flex justify-center text-xl font-semibold border-b-2">
            YOU MIGHT LIKE
        </div>
        <div class="flex p-6">
            <div class="w-1/4 h-68">
                <img class="w-5/6 h-56 flex items-center justify-center p-4 border-b-2 border-r-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(102).jpg" alt="">
                <p class="flex justify-center font-semibold border-b-2">
                    abc
                </p>
            </div>

            <div class="w-1/4 h-68">
                <img class="w-5/6 h-56 flex items-center justify-center p-4 border-b-2 border-r-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(143).jpg" alt="">
                <p class="flex justify-center font-semibold border-b-2">
                    abc
                </p>
            </div>

            <div class="w-1/4 h-68">
                <img class="w-5/6 h-56 flex items-center justify-center p-4 border-b-2 border-r-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(269).jpg" alt="">
                <p class="flex justify-center font-semibold border-b-2">
                    abc
                </p>
            </div>

            <div class="w-1/4 h-68">
                <img class="w-5/6 h-56 flex items-center justify-center p-4 border-b-2 border-r-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(283).jpg" alt="">
                <p class="flex justify-center font-semibold border-b-2">
                    abc
                </p>
            </div>
        </div>
    </div>
    @yield('content')
</body>

</html>