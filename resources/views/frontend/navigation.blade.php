<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="icon" href="{{ asset('assets/img/logo.png')}}" type="image/x-icon">

    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <title>Welcome : desa laut tador</title>
  </head>
  <body class="text-gray-800 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="w-4 h-10"
            href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
            >
            <img src="assets/img/logo.png" width="100px" alt="">
            </a
          ><button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
        <ul class="flex flex-col lg:flex-row list-none mr-auto">
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xl uppercase font-bold"
                href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/landing"
                >
                Desa <br> Laut Tador</a
              >
            </li>
          </ul>
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">facebook</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-youtube text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">youtube</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-instagram text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">instagram</span></a
              >
            </li>
            <li class="flex items-center">
             <a href="{{ url('login')}}">
                <button
                    class="bg-white text-gray-800 active:bg-gray-100 text-xs uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                    type="button"
                    style="transition: all 0.15s ease 0s;"
                >
                    <i class="fas fa-arrow-alt-circle-down"></i> Masuk
                </button>
             </a>
             <a href="{{ url('register')}}">
                <button
                    class="bg-orange-600 text-white active:bg-gray-100 text-xs  uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                    type="button"
                    style="transition: all 0.15s ease 0s;"
                >
                    <i class="fas fa-arrow-alt-circle-down"></i> Daftar
                </button>
             </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>