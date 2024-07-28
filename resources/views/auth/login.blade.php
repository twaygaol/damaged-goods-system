<x-guest-layout>
    <div class="relative min-h-screen">
        <!-- Image Section -->
        <div class="absolute inset-0 bg-cover hidden md:block bg-center" style="background-image: url('{{ asset('assets/img/login.jpg') }}');">
            <div class="absolute inset-0 bg-gray-800 opacity-70 flex flex-col text-white font-poppins">
                <h1 style="margin:0 18%; margin-top:18%;" class="text-3xl font-semibold">Sistem pelaporan kerusakan barang</h1>
                <p style="margin:0 16%;" class="mt-2"><em>Laporkan segala kerusakan yang terjadi di dalam maupun di luar kelas Anda.</em></p>
            </div>
        </div>
        
        <!-- Form Login Section -->
        <div class="absolute right-0 h-full md:w-1/3 bg-gray-800 flex items-center justify-center w-full">
            <div style="margin-top:-95%;" class="absolute inset-0 flex flex-col items-center justify-center">
                    <img style="width:100px;" class="w-20 h-20" src="{{ asset('assets/img/smk8.png') }}" alt="Logo">
                    <h1 class="text-gray-200 text-2xl mt-4">SMK NEGERI 8 MEDAN</h1>
            </div>
            <div class="w-3/4 mt-24">
                
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <div class="relative z-10">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-4">
                            <x-label class="text-white" for="email" /> <span class="text-white">Email</span>
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <x-label class="text-white" for="password" /><span class="text-white">Password</span>
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mb-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-200">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mb-4">
                            <x-button class="text-center justify-center bg-blue-500 w-full text-white font-bold rounded-md py-3 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:bg-blue-600 hover:scale-105 duration-300 ease-in-out">
                                {{ __('Login') }}
                            </x-button>
                        </div>
                        
                        <div class="block text-center">
                            <a class="underline text-sm text-gray-200 hover:text-gray-400" href="{{ url('register') }}">
                                {{ __('Belum Punya Akun?') }}
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
