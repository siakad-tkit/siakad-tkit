{{--<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>--}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{{asset('adminpage')}}/assets/img/logos/logotk.png">
  <title>SIAKAD TKIT Darul Falah Solo Baru</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen flex items-center justify-center">
   <div class="w-3/4 max-w-4xl bg-white shadow-lg rounded-lg flex overflow-hidden">

    <!-- Bagian Kiri: Form Login -->
      <div class="w-1/2 my-4 p-8 mt-6 ">
         <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-blue-600">LOGIN</h1>
         </div>
         <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
               <label for="email" class="block text-gray-700 mb-2">Email</label>
               <input
                  type="email"
                  id="email"
                  name="email"
                  class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
               />
            </div>
            <div class="mb-2">
               <label for="password" class="block text-gray-700 mb-2">Password</label>
               <input
                  type="password"
                  id="password"
                  name="password"
                  class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 "
               />

            </div>
            <div class="flex justify-end mb-6">
               <a href="#" class="text-sm text-blue-600 hover:underline">Lupa password?</a>
            </div>
            <div class="flex items-center justify-center">
               <button
               class="w-[150px] h-[46px] bg-[#638aec] rounded-[20px]  text-white font-semibold hover:bg-blue-700 transition "
            >
            {{ __('Login') }}
            </button>
            </div>

         </form>
      </div>

    <!-- Bagian Kanan: Ilustrasi -->
      <div class="w-1/2 bg-blue-100 relative p-8 flex items-center justify-center">
      <img
        src="{{asset('adminpage')}}/assets/img/logos/logotk.png"
        alt="Illustration"
        class="max-w-sm "
      />
    </div>
  </div>
</body>
</html>
