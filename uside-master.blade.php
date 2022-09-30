<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Jangan lupa buat nambahin ini   -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>@yield('title')</title>
</head>
<body>
    <!-- Header Section Start  -->
    @section('header')
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4 ">
                    <a href="#home" class="font-extrabold text-lg text-ybc block py-3 px-3 mt-2 lg:text-2xl ">
                        Final Project  <span class="text-blue-600">YBC</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    @show
    <!-- Header Section End  -->

    <!-- Hero Section Start  -->
    <section class="pt-36">
        <div class="container">
            @yield('content')
        </div>
    </section>
    <!-- Hero Section End  -->

  

</body>
</html>