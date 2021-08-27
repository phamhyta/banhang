@extends('layout.header')
@section('content')
<!-- Menu -->
<!-- Sản phẩm chi tiết -->
<div class="flex justify-between w-full h-96 mt-4">
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
                <div class="text-3xl font-semibold text-gray-700 mr-2"> <!-- Giá sau khi giảm giá -->
                    $90.00
                </div>
                <div class="text-xl font-semibold text-gray-500 pl-2 line-through mr-9"> <!-- Giá gốc -->
                    $110.00
                </div>
                <div class="w-full flex-none text-sm font-medium text-gray-700"> <!-- Mô tả ngắn -->
                    Sản phẩm không chính hãng
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
<div class="flex justify-between w-full h-96 mt-12 border-t-2 border-gray-300">
    <div class="w-1/3 h-full mt-6 ml-24 border-r-2 border-gray-300">
        <!-- Phần đánh giá -->
        <div class="flex mr-2">
            <div class="text-xl font-medium text-gray-700 w-2/3">
                Xếp hạng và đánh giá
            </div>
            <div class="flex w-1/3">
                <svg width="20" height="20" fill="currentColor" class="text-yellow-600">
                    <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                </svg>
                <div class="ml-1">
                    <span class="text-black">4.94</span>
                    <span class="sm:hidden md:inline">(128)</span>
                </div>
            </div>
        </div>
        <br>
        <!-- Phần đánh giá khách hàng -->
        <div class="flex text-sm font-medium text-gray-700 w-2/3">
            20/07/2020 <!-- Ngày đánh giá -->
            <div class="ml-32 flex">
                <svg width="20" height="20" fill="currentColor" class="text-yellow-600 mr-0">
                    <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                </svg>
                <div class="ml-1">
                    <span class="text-black">4.5</span> <!-- Vote ../5 -->
                </div>
            </div>
        </div>
        <div class="col-start-1 row-start-3 space-y-3 pr-4 pt-2"> <!-- Thông tin người mua -->
            <p class="flex items-center text-black text-sm font-medium">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="w-6 h-6 rounded-full mr-2 bg-gray-100">
                Trần Xuân Hương
            </p>
        </div>
        <p class="border-b-2 border-gray-500 w-2/3">Sản Phẩm dùng tốt</p> <!-- Comment -->
        <div class="flex text-sm font-medium text-gray-700 w-2/3">
            26/03/2021
            <div class="ml-32 flex">
                <svg width="20" height="20" fill="currentColor" class="text-yellow-600 mr-0">
                    <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                </svg>
                <div class="ml-1">
                    <span class="text-black">4.0</span>
                </div>
            </div>
        </div>
        <div class="col-start-1 row-start-3 space-y-3 pr-4 pt-2">
            <p class="flex items-center text-black text-sm font-medium">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="w-6 h-6 rounded-full mr-2 bg-gray-100">
                Lê Hưng
            </p>
        </div>
        <p class="border-b-2 border-gray-500 w-2/3">Sản Phẩm dùng tạm được</p>
        <div class="flex text-sm font-medium text-gray-700 w-2/3">
            12/06/2021
            <div class="ml-32 flex">
                <svg width="20" height="20" fill="currentColor" class="text-yellow-600 mr-0">
                    <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                </svg>
                <div class="ml-1">
                    <span class="text-black">5.0</span>
                </div>
            </div>
        </div>
        <div class="col-start-1 row-start-3 space-y-3 pr-4 pt-2">
            <p class="flex items-center text-black text-sm font-medium">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="w-6 h-6 rounded-full mr-2 bg-gray-100">
                Lê Minh Tiến
            </p>
        </div>
        <p class="border-b-2 border-gray-500 w-2/3">Amazingg goodd chóp</p>
        <div class="flex text-sm font-medium text-gray-700 w-2/3">
            13/05/2021
            <div class="ml-32 flex">
                <svg width="20" height="20" fill="currentColor" class="text-yellow-600 mr-0">
                    <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                </svg>
                <div class="ml-1">
                    <span class="text-black">4.5</span>
                </div>
            </div>
        </div>
        <div class="col-start-1 row-start-3 space-y-3 pr-4 pt-2">
            <p class="flex items-center text-black text-sm font-medium">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="w-6 h-6 rounded-full mr-2 bg-gray-100">
                Lê Ngọc Văn
            </p>
        </div>
        <p class="">Sản phẩm nên mua</p>
    </div>
    <div class="w-2/3 h-full mt-4">
        <div class="flex h-1/2 w-full">
            <div class="h-full w-1/3"> <!-- Để ảnh sp -->
                <img class="w-5/6 h-full float-right" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(23).png" alt="" width="512" height="384">
            </div>
            <!-- Phần giới thiệu -->
            <div class="ml-4 mr-6 h-full w-2/3">
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
        <div class="flex h-1/2 w-full">
            <!-- Phần thông số sản phẩm -->
            <div class="h-full w-2/3 ml-20">
                <div class="h-1/6 w-1/3 text-xl font-medium text-gray-700 ml-48 border-b-2 text-center border-gray-500">
                    Thông số
                </div>
                <div class="flex h-4/6 w-full mt-6">
                    <div class="h-full w-1/2 ml-4 list-inside">
                        <li>Dánh regular fit</li>
                        <li>Có dây buộc</li>
                        <li>Thân bằng chất liệu tổng hợp</li>
                    </div>
                    <div class="h-full w-1/2 ml-4 list-inside">
                        <li>Đế ngoài bằng cao su</li>
                        <li>Primegreen</li>
                        <li>Mã sản phẩm: FX0511</li>
                    </div>
                </div>
            </div>
            <div class="h-full w-1/3"> <!-- Để ảnh sp -->
                <img class="w-5/6 h-full float-right mr-12" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(24).png" alt="" width="512" height="384">
            </div>
        </div>
    </div>
</div>
<!-- Đề xuất mua sắm -->
<div class="relative w-full h-96 mt-12">
    <div class="flex justify-center text-xl font-semibold border-b-2">
        YOU MIGHT LIKE
    </div>
    <div class="flex p-6">
        <div class="w-1/4 h-60">
            <img id="anh1" class="w-5/6 h-56 flex items-center justify-center p-4 border-b-2 border-r-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(102).jpg" alt="">
            <!-- <script type="text/javascript">
                var anh = document.getElementById("anh1");
                var currentPos = 0;
                var anhs = ["http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(102).jpg",
                "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(275).jpg",
                "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(143).jpg",
                "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(269).jpg",
                "http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(283).jpg",];
                function volgendefoto()
                {
                    if(++currentPos > 4)
                        currentPos = 0;
                    anh.src = anhs[currentPos];
                }
                setInterval(volgendefoto, 3000);
            </script> -->
            <div class="flex ml-2 mr-6 flex-wrap">
                <h1 class="flex-auto text-l font-semibold"> <!-- Tên sp -->
                    <p id="h11">NIKE FAKE</p>
                    <!-- <script type="text/javascript">
                        var name = document.getElementById("h11");
                        var currentPos = 0;
                        var names = [NIKE FAKE, ADIDAS, CONVER, BALEN, PUMA,];
                        function volgendefoto()
                        {
                            if(++currentPos > 4)
                                currentPos = 0;
                            name = names[currentPos];
                        }
                        setInterval(volgendefoto, 3000);
                    </script> -->
                </h1>
                <div id="gia1" class="text-l font-semibold text-gray-700"> <!-- Giá sau khi giảm giá -->
                    $90.00
                </div>
                <div id="giag1" class="text-sm font-semibold text-gray-500 pl-2 line-through mr-9"> <!-- Giá gốc -->
                    $110.00
                </div>
                <div class="flex">
                    <div id="mt1" class="w-2/3 text-sm font-medium text-gray-700"> <!-- Mô tả ngắn -->
                        Sản phẩm không chính hãng
                    </div>
                    <div class="flex w-1/3">
                        <svg width="20" height="20" fill="currentColor" class="text-yellow-600">
                            <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                        </svg>
                        <div class="ml-1">
                            <span class="text-black">4.94</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <script type="text/javascript">
                var name = document.getElementById("h11");
                var gia = document.getElementById("gia1");
                var giag = document.getElementById("giag1");
                var mt = document.getElementById("mt1");
                var currentPos = 0;
                var names = [NIKE FAKE, ADIDAS, CONVER, BALEN, PUMA,];
                var gias = [$90.00, $120.00, $120.00, $160.00, $260.00];
                var giags = [$110.00, $200.00, $160.00, $210.00, $560.00];
                var mts = [Sản phẩm không chính hãng, Sản phẩm chất lượng cao, Hàng thượng hải, số lượng có hạn, Sản xuất thủ công, Giảm giá duy nhất ngày hôm nay,];
                function volgendefoto()
                {
                    if(++currentPos > 4)
                        currentPos = 0;
                    name = names[currentPos];
                }
                setInterval(volgendefoto, 3000);
            </script> -->
        </div>

        <div class="w-1/4 h-60">
            <img class="w-5/6 h-56 flex items-center justify-center p-4 border-b-2 border-r-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(275).jpg" alt="">
            <div class="flex ml-2 mr-6 flex-wrap">
                <h1 class="flex-auto text-l font-semibold"> <!-- Tên sp -->
                    ADIDAS
                </h1>
                <div class="text-l font-semibold text-gray-700"> <!-- Giá sau khi giảm giá -->
                    $120.00
                </div>
                <div class="text-sm font-semibold text-gray-500 pl-2 line-through mr-9"> <!-- Giá gốc -->
                    $200.00
                </div>
                <div class="flex">
                    <div id="mt1" class="w-2/3 text-sm font-medium text-gray-700"> <!-- Mô tả ngắn -->
                        Sản phẩm chất lương cao
                    </div>
                    <div class="flex w-1/3">
                        <svg width="20" height="20" fill="currentColor" class="text-yellow-600">
                            <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                        </svg>
                        <div class="ml-1">
                            <span class="text-black">4.75</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/4 h-60">
            <img class="w-5/6 h-56 flex items-center justify-center p-4 border-b-2 border-r-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(143).jpg" alt="">
            <div class="flex ml-2 mr-6 flex-wrap">
                <h1 class="flex-auto text-l font-semibold"> <!-- Tên sp -->
                    CONVER
                </h1>
                <div class="text-l font-semibold text-gray-700"> <!-- Giá sau khi giảm giá -->
                    $120.00
                </div>
                <div class="text-sm font-semibold text-gray-500 pl-2 line-through mr-9"> <!-- Giá gốc -->
                    $160.00
                </div>
                <div class="flex">
                    <div id="mt1" class="w-2/3 text-sm font-medium text-gray-700"> <!-- Mô tả ngắn -->
                        Hàng thượng hải, số lượng có hạn
                    </div>
                    <div class="flex w-1/3">
                        <svg width="20" height="20" fill="currentColor" class="text-yellow-600">
                            <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                        </svg>
                        <div class="ml-1">
                            <span class="text-black">4.76</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/4 h-60">
            <img class="w-5/6 h-56 flex items-center justify-center p-4 border-b-2 border-r-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(269).jpg" alt="">
            <div class="flex ml-2 mr-6 flex-wrap">
                <h1 class="flex-auto text-l font-semibold"> <!-- Tên sp -->
                    BALEN
                </h1>
                <div class="text-l font-semibold text-gray-700"> <!-- Giá sau khi giảm giá -->
                    $160.00
                </div>
                <div class="text-sm font-semibold text-gray-500 pl-2 line-through mr-9"> <!-- Giá gốc -->
                    $210.00
                </div>
                <div class="flex">
                    <div id="mt1" class="w-2/3 text-sm font-medium text-gray-700"> <!-- Mô tả ngắn -->
                        Sản xuất thủ công
                    </div>
                    <div class="flex w-1/3">
                        <svg width="20" height="20" fill="currentColor" class="text-yellow-600">
                            <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                        </svg>
                        <div class="ml-1">
                            <span class="text-black">4.32</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/4 h-60">
            <img class="w-5/6 h-56 flex items-center justify-center p-4 border-b-2 border-r-2" src="http://localhost/Web%20b%c3%a1n%20h%c3%a0ng/laravel/resources/views/image/anh_giay_nam/1(283).jpg" alt="">
            <div class="flex ml-2 mr-6 flex-wrap">
                <h1 class="flex-auto text-l font-semibold"> <!-- Tên sp -->
                    PUMA
                </h1>
                <div class="text-l font-semibold text-gray-700"> <!-- Giá sau khi giảm giá -->
                    $260.00
                </div>
                <div class="text-sm font-semibold text-gray-500 pl-2 line-through mr-9"> <!-- Giá gốc -->
                    $540.00
                </div>
                <div class="flex">
                    <div id="mt1" class="w-2/3 text-sm font-medium text-gray-700"> <!-- Mô tả ngắn -->
                        Giảm giá duy nhất ngày hôm nay
                    </div>
                    <div class="flex w-1/3">
                        <svg width="20" height="20" fill="currentColor" class="text-yellow-600">
                            <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                        </svg>
                        <div class="ml-1">
                            <span class="text-black">4.47</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="h-64 w-full border-2"></div>
@endsection 

