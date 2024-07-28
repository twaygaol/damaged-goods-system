
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
                href="https://www.facebook.com/profile.php?id=100069830445182"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">facebook</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://www.youtube.com/@BATUBARATV"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-youtube text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">youtube</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://www.instagram.com/laut_tador?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
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
<main>
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
      >
<!-- GAMBAR DESA -->
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("assets/img/laut.jpg");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-gray-900"
          ></span>
        </div>
        <div class="container relative mx-auto">
        <div class="items-center justify-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 text-center mx-auto" style="margin:0 60px;">
                <div class="">
                    <h1 class="text-white font-semibold text-4xl">
                        Layanan Pengaduan <span class="text-red-500">Masyarakat</span>
                    </h1>
                    <div class="lg:flex font-serif flex-grow items-center lg:bg-transparent lg:shadow-none  hidden ">
                        <p class="mt-4 text-lg text-gray-300 font-serif">
                            Tingkatkan Keterlibatan, Sambut Suara Masyarakat: Platform Pengaduan yang Melayani Kebutuhan Anda dari Desa Laut Tador, Kecamatan Laut Tador, Kabupaten Batu Bara
                        </p>
                    </div>
                    <div class="flex items-center justify-center">
                      <p class="mt-4 text-lg text-white font-serif border p-2 rounded-3xl">
                          Silahkan <span class="text-red-600">Login</span> terlebih dahulu atau <span class="text-red-600">Daftar</span> untuk mendapat akun
                      </p>
                  </div>
                </div>
            </div>
        </div>

        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-gray-300 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-gray-100 w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                  >
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Tulis Laporan</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Tulis laporan keluhan Anda dengan jelas.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-gray-200 w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                  >
                    <i class="fas fa-retweet"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Proses Verifikasi</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                  Tunggu sampai laporan Anda di verifikasi.
                  </p>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-gray-200 w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                  >
                    <i class="fas fa-fingerprint"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Tindak Lanjut</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                  Laporan Anda sedang dalam tindak lanjut.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
              <div
                class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
              >
                <i class="fas fa-users text-xl"></i>
              </div>
              <h3 class="text-3xl mb-2 font-semibold leading-normal">
                Pengaduan Masyarakat
              </h3>
              <p
                class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
              >
              laporan dari masyarakat mengenai adanya indikasi terjadinya penyimpangan, korupsi, kolusi dan nepotisme yang dilakukan aparat pemerintah daerah dalam penyelenggaraan pemerintahan.
              </p>
              <p
                class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
              >
              Pengaduan masyarakat dalam pelayanan publik umum terjadi ketika masyarakat selaku pengguna layanan tidak puas atas pelayanan yang diberikan, bahkan menambah kekecewaan ketika pengaduan yang disampaikan tidak dikelola atau ditanggapi secara baik oleh petugas pengaduan.
              </p>
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
              <div
                class="relative flex flex-col min-w-0 break-words  w-full mb-6 shadow-lg rounded-lg bg-gray-100"
              >
                <img
                  alt="..."
                  src="{{ asset('assets/img/background desa.jpg')}}"
                  class="w-full align-middle rounded-t-lg"
                />
                <blockquote class="relative p-8 mb-4">
                  <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block"
                    style="height: 95px; top: -94px;"
                  >
                    <polygon
                      points="-30,95 583,95 583,65"
                      class="text-gray-100 fill-current"
                    ></polygon>
                  </svg>
                  <h4 class="text-xl font-bold text-black">
                    Desan Laut Tador
                  </h4>
                  <p class="text-md font-light mt-2 text-black">
                    Kecamatan Laut Tador, Kabupaten Batu Bara
                  </p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="relative py-20">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-white fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
              <!-- GAMBAR DESA -->
              <img
                alt="..."
                class="max-w-full rounded-lg shadow-lg"
                src="{{asset('assets/img/aduan.png')}}"
              />
            </div>
            <div class="w-full  md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <div
                  class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-300"
                >
                  <i class="fas fa-rocket text-xl"></i>
                </div>
                <h3 class="text-3xl font-semibold">Ruang Lingkup Pengaduan</h3>
                <p class="mt-4 text-lg leading-relaxed text-gray-600">
                Ruang lingkup penanganan pengaduan masyarakat meliputi tindakan testocyp online atau dugaan maladministrasi oleh pejabat publik di lingkungan Pemerintah Desa laut tador Kabupaten Batubara yang dapat diadukan, yaitu antara lain:
                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-point"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                        Penundaan berlarut;
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-point"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                        Penyalahgunaan wewenang;
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-point"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                        Bertindak sewenang-wenang, tidak adil dan tidak patut;
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-point"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                        Penyimpangan prosedur;
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-point"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                        Perbuatan melawan hukum;
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-point"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                        Korupsi, kolusi dan nepotisme;
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-point"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                        Lain-lain tindakan pejabat publik yang merugikan masyarakat.
                        </h4>
                      </div>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold">Artikel <span class="text-red-600">Sepekan</span></h2>
              <p class="text-lg leading-relaxed m-4 text-gray-600">
                Informasi terbaru mengenai pelaksanaan beberapa pengaduan dari masyarakat dan Informasi dari kabar sepekan dari desa laut tador ataupun dari kabar dari lingkup kabupaten batubara.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap justify-center">
                @foreach($artikels as $article)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4">
                        <a href="#">
                            <img class="rounded-t-lg object-cover h-48 w-full" src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->judul }}" />
                        </a>
                        <div class="p-5">
                        <a href="{{ route('artikel.detail', $article->id) }}" class="hover:text-blue-500">
                            <h5 class="mb-2 hover:text-blue-500 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->judul }}</h5>
                        </a>

                            <p class="mb-1 text-sm text-red-500">{{ $article->created_at->format('d F Y') }}</p>
                            <!-- Menampilkan tanggal dengan format tertentu -->
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ substr($article->description, 0, 100) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
      </section>
      <section class="pb-20 relative block bg-gray-900" style="background-image: url('assets/img/background desa.jpg'); background-size: cover; background-position: center; position: relative;">
      <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    <div class="container mx-auto px-4 lg:pt-24 lg:pb-64 relative z-10 flex flex-wrap items-center">
    <div class="w-full lg:w-6/12 px-4">
        <h2 class="text-4xl font-semibold text-white">Senang Melayani Anda</h2>
        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-300">
            Kami turut serta dalam pemerintahan di Desa Laut Tador, Kecamatan Laut Tador, Kabupaten Batubara, dan sangat senang dengan laporan masyarakat yang membantu kami menyadari kekurangan dalam pelayanan kami.
        </p>
        <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-white mr-3"
                          ><i class="fas fa-phone"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-200">
                        +628-576108-8663
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-white mr-3"
                          ><i class="fas fa-envelope"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-200">
                        Desalauttador@gmail.com
                        </h4>
                      </div>
                    </div>
                  </li>
          </ul>
    </div><br>
    <div class="w-full lg:w-6/12 px-4 lg:flex flex-grow items-center lg:bg-transparent lg:shadow-none hidden">
        <!-- Tambahkan iframe untuk Google Maps di sini -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.646671579934!2d106.83124381537293!3d-6.214235195489498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a45c3b8a3db93%3A0xd1fcd0e3a16a9874!2sKabupaten%20Batubara%2C%20Sumatra%20Utara!5e0!3m2!1sen!2sid!4v1644383146553!5m2!1sen!2sid" width="650" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

</section>



    </main>

@extends('footer')

    
