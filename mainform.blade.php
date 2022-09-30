<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Jangan lupa buat nambahin ini   -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>@yield('title', 'eForm Thesis | Jo')</title>
</head>
<body>
    <!-- Header Section Start  -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4 ">
                    <a href="#home" class="font-extrabold text-lg text-ybc block py-3 px-3 mt-2 lg:text-2xl ">
                        TCH<span class="text-blue-600">E-Permit</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End  -->

    <!-- Hero Section Start  -->
    <section id="home" class="pt-20">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-3xl font-extrabold text-slate-800 mb-2 lg:text-6xl">
              Ajukan Overtime, Izin & Cuti <span class="text-blue-600">Secara Online</span>
            </h1>
            <p class="mb-5 mt-2 lg:text-2xl lg:font-semibold">Perhatikan maksimal pengajuan form sebelum mengajukan permintaan.</p>
            <!-- Button hanya muncul pada saat mode Large saja  -->
            <div class="flex flex-col invisible lg:visible lg:flex-row pt-6">
              <a href=" #" class="inline-flex items-center px-20 py-6 rounded-xl bg-[#2632A5] text-white lg:text-xl lg:font-extrabold lg:hover:bg-white lg:hover:outline-dashed lg:hover:out lg:hover:outline-[#2632A5] lg:hover:text-[#2632A5] transition">OVERTIME</a>
              <a href=" #" class="inline-flex items-center px-20 py-6 rounded-xl bg-[#F43F5E] text-white lg:ml-12 lg:text-xl lg:font-extrabold lg:hover:bg-white lg:hover:outline-dashed lg:hover:outline-red-600 lg:hover:text-red-600">IZIN</a>
            </div>
            <!-- <div class="grid grid-cols-2 gap-4 invisible items-center lg:visible lg:mt-12 lg:content-center">
              <a href="#" id="btn-overtime" class="px-20 py-6 rounded-xl bg-[#2632A5] text-white lg:text-xl lg:font-extrabold lg:hover:bg-white lg:hover:outline-dashed lg:hover:out lg:hover:outline-[#2632A5] lg:hover:text-[#2632A5]">OVERTIME</a>
              <a href="#" id="#" class="px-20 py-6 rounded-xl bg-[#F43F5E] text-white lg:ml-12 lg:text-xl lg:font-extrabold lg:hover:bg-white lg:hover:outline-dashed lg:hover:outline-red-600 lg:hover:text-red-600">ABSEN</a>
            </div>             -->
          </div>

          <!-- Icon Dashboard  -->
          <div class="w-full self-end px-4 lg:w-1/2 ">
            <div class="relative mt-10 mb-7 ml-4 ">
              <img src="/assets/image/Group Hero2x.png" alt="icon-dashboard" class="relative z-10 mx-auto max-w-full">
            </div>

            <!-- Button Form Hanya Muncul di mode mobile / tab -->
            <div class="grid grid-cols-2 gap-4 visible text-center mb-6 lg:invisible lg:w-1/2">
              <a href="#" class="rounded-xl bg-[#2632A5] text-white py-3 px-6 text-base font-bold md:px-10 md:py-3 hover:bg-white hover:text-[#2632A5] hover:outline-dashed hover:outline-2 hover:outline-[#2632A5] hover:font-extrabold">LEMBUR</a>
              <a href="#" id="#" class="rounded-xl bg-[#F43F5E] text-white py-3 px-6 text-base font-bold hover:bg-white hover:text-red-600 hover:outline-dashed hover:outline-2">ABSEN</a>           
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End  -->

    <!-- Footer Section Start  -->
    <footer class="p-4 bg-white shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">YohanaBChr</a>. All Rights Reserved | Requirement Final Project
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer>
    <!-- Footer Section End  -->
</body>

<!-- Insert Modal Here, Insert modal tanpa mention folder view  -->
<!-- @include('modal_user.selectattend') -->

</html>

