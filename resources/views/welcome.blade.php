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
    <div class="w-full border-2 h-96">
        san pham
    </div>
    <div class="relative w-full border-2 h-96">
        <div class="absolute left-0 top-0 w-2/5 border-2 h-48">
            hinh anh
        </div>
        <div class="absolute bottom-0 right-0 w-2/5 border-2 h-48">
            danh gia
        </div>
    </div>
    <div class="w-full h-28 border-2">
        <div class="w-1/4 h-24 p-2px">1</div>
        <div class="w-1/4 h-24 p-2px">2</div>
        <div class="w-1/4 h-24 p-2px">3</div>
        <div class="w-1/4 h-24 p-2px">4</div>
    </div>
    @yield('content') 
</body>
</html>