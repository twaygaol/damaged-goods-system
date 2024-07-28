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
            href="/home"
            >
            <img src="{{asset('assets/img/logo.png')}}" width="100px" alt="">
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
                href="/"
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

<main class="profile-page">
    <section class="relative block" style="height: 500px;">
        <!-- Gambar latar belakang dan overlay hitam -->
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTicldDyT74lvRszTm8NR2EofN64smV6-z5Uw&usqp=CAU");'>
            <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black">
            </span>
        </div>
        
        <!-- Garis bawah latar belakang -->
        <!-- <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div> -->
    </section>
    <section class="relative py-16 bg-gray-300">
        <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                    <!-- <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                            <div class="py-6 px-3 mt-32 sm:mt-0">
                                
                                <button class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1" type="button" style="transition: all 0.15s ease 0s;">Connect</button>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-1">
                            <div class="flex justify-center py-4 lg:pt-4 pt-8">
                               
                                <div class="mr-4 p-3 text-center">
                                <div class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase">
                                    <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i>Los Angeles, California
                                </div>
                                </div>
                                <div class="mr-4 p-3 text-center">
                                    <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">10</span>
                                    <span class="text-sm text-gray-500">Photos</span>
                                </div>
                                <div class="lg:mr-4 p-3 text-center">
                                    <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">89</span>
                                    <span class="text-sm text-gray-500">Comments</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="text-center mt-12">
                        <!-- Gambar artikel -->
                        <div class="mb-6 text-center">
                            <img src="{{ asset('storage/images/' . $artikel->image) }}" alt="{{ $artikel->judul }}" width="50%" class="mx-auto">
                        </div>
                        <!-- Judul dan informasi tambahan -->
                        <h3 class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2">{{ $artikel->judul }}</h3>
                        <div class="text-sm leading-normal mt-0 mb-2 text-red-700 font-bold uppercase">
                             <i class="fas fa-map-marker-alt mr-2 text-lg text-red-500"></i>Desa Laut Tador, Batubara
                        </div>
                        <p class="mb-1 text-sm text-orange-600">{{ $artikel->created_at->format('d F Y') }}</p>
                        
                        <!-- Deskripsi artikel -->
                        <div class="mb-2 text-gray-700" style="text-align: left;">
                            @php
                            $deskripsi = $artikel->description;
                            $paragraf = explode("\n", $deskripsi); // Memisahkan berdasarkan baris baru
                            @endphp
                            @foreach ($paragraf as $p)
                            <p class="mb-4 text-lg leading-relaxed text-gray-800">{{ $p }}</p>
                            @endforeach
                        </div>




                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

@extends('footer')
