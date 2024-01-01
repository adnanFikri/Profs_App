@extends('layouts.app')

@section('content')
<div class="h-screen md:flex">
        <div style="background-image: url('{{ asset('img/bg-login.jpg') }}');background-repeat: no-repeat;background-size: cover;"
            class=" left-side relative overflow-hidden md:flex w-1/2  from-blue-800 to-purple-700 i justify-around items-center hidden">
            <div>
                <h1 class="text-white font-bold text-6xl font-sans">Bienvenue </h1>
                <p class="text-white mt-1">Ecole Normal Superieur Rabat - ENS</p>

            </div>

        </div>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <form class="bg-white" method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-3 text-center">LOGIN</h1>
                <p class="text-sm font-normal text-gray-600 mb-7 text-center">Entrez vos informations</p>

                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Email Address" />
                       
                </div>
                @error('email')
                <span  role="alert">
                    <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
                </span>
                @enderror
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password" />
                </div>
                @error('password')
                <span  role="alert">
                    <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
                </span>
                @enderror
                <button type="submit"
                    class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
                    @guest
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"><span class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Vous n'avez pas de compte ?</span></a>
                        @endif
                    @endguest
            </form>
        </div>
    </div>
@endsection