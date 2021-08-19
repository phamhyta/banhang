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
                <li class="w-full h-32 border-2"><img src="../../image/anh_giay_nam/1(1).jpg" alt="">x</li>
                <li class="w-full h-32 border-2"><img src="../../image/anh_giay_nam/1(2).jpg" alt="">y</li>
                <li class="w-full h-32 border-2"><img src="../../image/anh_giay_nam/1(3).jpg" alt="">z</li>
            </ul>
        </div>
        <div class="w-2/6 border-2 h-96">2</div>
        <div class="w-2/6 border-2 h-96">3</div>
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