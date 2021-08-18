<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>
<body class="bg-gray-700">
    <nav class="bg-gray-900 flex justify-between text-white">
        <ul class="flex p-2">
            <li class="px-2"><a href="">Home</a></li>
            <li class="px-2"><a href="">Student</a></li>
            <li class="px-2"><a href="">Class</a></li>
        </ul>
        <ul class="flex p-2">
            <li class="px-2"><a href="">Sing in</a></li>
            <li class="px-2"><a href="">Logout</a></li>
        </ul>
    </nav>
    @yield('content') 
</body>
</html>