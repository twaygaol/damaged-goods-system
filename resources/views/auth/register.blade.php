<x-guest-layout>
    <div class="relative min-h-screen">
        <!-- Image Section -->
        <div class="absolute inset-0 bg-cover hidden md:block bg-center" style="background-image: url('{{ asset('assets/img/register.jpg') }}');">
            <div class="absolute inset-0 bg-gray-800 opacity-70 flex flex-col text-white font-poppins">
                <h1 style="margin:0 18%; margin-top:18%;" class="text-3xl font-semibold">Sistem pelaporan kerusakan barang</h1>
                <p style="margin:0 16%;" class="mt-2"><em>Laporkan segala kerusakan yang terjadi di dalam maupun di luar kelas Anda.</em></p>
                <p style="margin:0 19%;" class="mt-2 underline">Sebelum membuat laporan harap buat akun terlebih dahulu !</p>
            </div>
        </div>


        
        <!-- Form Login Section -->
        <div class="absolute right-0 h-full md:w-1/3 bg-gray-900 flex items-center justify-center w-full">
            <div style="margin-top:-100%;" class="absolute inset-0 flex flex-col items-center justify-center">
                    <!-- <img style="width:100px;" class="w-20 h-20" src="{{ asset('assets/img/smk8.png') }}" alt="Logo"> -->
                    <h1 class="text-gray-200 text-2xl mt-4">Register Account</h1>
            </div>
            <div class="w-3/4 mt-24">
                
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}" class="grid grid-cols-1 md:grid-cols-2 gap-4 relative z-10">
                @csrf

                <!-- NIK -->
                <div class="col-span-1 md:col-span-2">
                    <x-label class="text-white" for="nik" :value="__('NUPTK')" />
                    <x-input id="nik" class="block mt-1 w-full" type="number" name="nik" :value="old('nik')" required autofocus />
                    @error('nik')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Name -->
                <div class="">
                    <x-label class="text-white" for="name" :value="__('Nama Guru')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="">
                    <x-label class="text-white" for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Phone -->
                <div class="">
                    <x-label class="text-white" for="phone" :value="__('No. HP')" />
                    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                </div>

                <!-- Kelas -->
                <div class="col-span-1 md:col-span-2 ">
                    <x-label class="text-white" for="kelas" :value="__('Wali Kelas')" />
                    <x-input id="kelas" class="block mt-1 w-full" type="text" name="kelas" :value="old('kelas')" required />
                </div>

                <!-- Password -->
                <div class="">
                    <x-label class="text-white" for="password" :value="__('Password')" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="">
                    <x-label class="text-white" for="password_confirmation" :value="__('Confirm Password')" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                </div>

                <!-- Register Button -->
                <div class="col-span-1 md:col-span-2 flex justify-end ">
                    <x-button class="w-full text-center justify-center bg-blue-500 text-white font-bold rounded-md py-3 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:bg-blue-600 hover:scale-105 duration-300 ease-in-out">
                        {{ __('Register') }}
                    </x-button>
                </div>
                
                <div class="col-span-1 md:col-span-2 text-center ">
                    <a class="underline text-sm text-gray-200 hover:text-gray-400" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </form>


            </div>
        </div>
    </div>
</x-guest-layout>

