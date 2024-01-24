@extends('layouts.home')

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">
    <h1 class="h3 mb-5 sm:mt-10">Ajouter Professeur</h1>

    <div class="card  mb-10">
    <div class="card-body flex flex-col">

    <form class="bg-white px-20" method="POST" action="{{ route('professeur.update', $prof->id) }}" enctype="multipart/form-data">
                                                    {{-- route('inscription.update', ['id' => $inscription->id])     --}}
        @csrf
        @method('PUT')
        <h1 class="text-gray-800 font-bold text-2xl mb-2 text-center">Modification</h1>
        <p class="text-sm font-normal text-gray-600 mb-3 text-center">Entrez les informations de professeur</p>

{{-- =-=-=-=-=- Name =-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none w-full" type="text" name="name" id="name" placeholder="Nom *"
                value="{{ old('email', $prof->email) }}" required autocomplete="name" autofocus
            />

        </div>
        @error('name')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror


{{-- || =-=-=-=-=- Departement =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            {{-- <label for="underline_select" class="sr-only">Departement</label> --}}
            <select id="underline_select" {{ old('departement', $prof->departement) }} name="departement" class="block  pl-1  px-0 w-full te text-gray-900 bg-transparent border-0 border-gray-200 appearance-none dark:text-dark-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
                <option hidden class="text-gray-500"> <span class="text-gray-500">Departement *</span></option>
                <option value="Informatique" {{ old('departement', $prof->departement) == 'Informatique' ? 'selected' : '' }}>Informatique</option>
                <option value="Mathematics" {{ old('departement', $prof->departement) == 'Mathematics' ? 'selected' : '' }}>Mathematics</option>
                <option value="Physics" {{ old('departement', $prof->departement) == 'Physics' ? 'selected' : '' }}>Physics</option>
                <option value="Chimie" {{ old('departement', $prof->departement) == 'Chimie' ? 'selected' : '' }}>Chimie</option>
                <option value="Biology" {{ old('departement', $prof->departement) == 'Biology' ? 'selected' : '' }}>Biology</option>
            </select>

        </div>

{{-- || =-=-=-=-=- Adresse =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none  border-none w-full" type="text" name="adresse" id="adresse" placeholder="Adresse"
                value="{{ old('adresse', $prof->adresse) }}" required autocomplete="adresse" autofocus
            />
        </div>

{{-- || =-=-=-=-=- Telephone =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none  border-none w-full" type="text" name="telephone" id="telephone" placeholder="Telephone"
                value="{{ old('telephone', $prof->telephone) }}" required autocomplete="telephone" autofocus
            />
        </div>


{{-- || =-=-=-=-=- Email =-=-=-=-=-=-|| --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <input class="pl-2 outline-none border-none w-full" type="email" name="email" id="email"
                value="{{ old('email', $prof->email) }}" required autocomplete="email" placeholder="Email Address *" />
        </div>
        @error('email')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror

{{-- || =-=-=-=-=- Password =-=-=-=-=-=-|| --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none w-full" type="password" name="password" id="password "
                placeholder="mot de passe *"  autocomplete="new password" />
        </div>
        @error('password')
        <span role="alert">
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
            <input class="pl-2 outline-none border-none w-full" type="password" name="confirme mot de passe *"
                id="password-confirm" placeholder="Password Confirmation *"
                autocomplete="new-password" />
        </div>

{{-- || =-=-=-=-=- Profile =-=-=-=-=-=-|| --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>

            <label class="block ml-2 text-medium font-medium text-gray-500 dark:text-white" for="profile">Profile</label>
            <input placeholder="Profile" name="profile" class="block w-full ml-2 text-sm text-gray-900  border-none rounded-l cursor-pointer bg- dark:text-gray-300 focus:outline-none dark:bg-gray-700 dark:border-gray-600     dark:placeholder-gray-400" id="profile" type="file">
        </div>

        <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Envoyer</button>
        <a href="{{ route('professeur.index') }}" class="block text-center w-full bg-blue-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Retour</a>
    </form>

    </div>
    </div>
        <!--end Card form-->


    </div>
@endsection
