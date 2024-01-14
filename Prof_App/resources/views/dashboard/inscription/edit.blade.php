@extends('layouts.home')

@section('content')

<div class="bg-gray-100 flex-1 p-6  md:mt-16">

    <div class="card  mb-10">
    <div class="card-body flex flex-col">

    <form class="bg-white px-20" method="POST" action="{{ route('inscription.update', ['id' => $inscription->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="text-gray-800 font-bold text-2xl mb-2 text-center">Inscription</h1>
        <p class="text-sm font-normal text-gray-600 mb-3 text-center">Entrez vos informations </p>
        <input class="pl-2 outline-none border-none" type="hidden" name="user_id" id="user_id" placeholder="user_id"
        value="{{ auth()->user()->id }}"  required autocomplete="user_id" autofocus
            />
{{-- =-=-=-=-=- First Name =-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none" type="text" name="first_name" id="first_name" placeholder="Prenom"
                value="{{ old('first_name') }}" required autocomplete="first_name" autofocus
            />

        </div>
        @error('first_name')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror
{{-- =-=-=-=-=- Second Name =-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none" type="text" name="second_name" id="second_name" placeholder="Nom"
                value="{{ old('second_name') }}" required autocomplete="second_name" autofocus
            />

        </div>
        @error('second_name')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror
{{-- =-=-=-=-=- Cin =-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none" type="text" name="cin" id="cin" placeholder="Cin"
                value="{{ old('cin') }}" required autocomplete="cin" autofocus
            />

        </div>
        @error('cin')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror
{{-- =-=-=-=-=- Your Birth=-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none" type="text" name="birth" id="birth" placeholder="Date de naissance"
                value="{{ old('birth') }}" required autocomplete="birth" autofocus
            />

        </div>
        @error('birth')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror
{{-- =-=-=-=-=- Adresse=-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none" type="text" name="adresse" id="adresse" placeholder="Adresse"
                value="{{ old('adresse') }}" required autocomplete="adresse" autofocus
            />

        </div>
        @error('adresse')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror
{{-- || =-=-=-=-=- Telephone =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none  border-none" type="text" name="telephone" id="telephone" placeholder="Telephone"
                value="{{ old('telephone') }}" required autocomplete="telephone" autofocus
            />
        </div>
     


{{-- || =-=-=-=-=- Sector =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            {{-- <label for="underline_select" class="sr-only">Filière licence PRO</label> --}}
            <select id="underline_select" required value="{{ old('sector_lp') }}" name="sector_lp" class="block  pl-1  px-0 w-full te text-gray-500 bg-transparent border-0 border-gray-200 appearance-none dark:text-dark-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option hidden>Filière</option>
                <option value="Informatique">Informatique</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Physics">Physics</option>
                <option value="Chimie">Chimie</option>
                <option value="Biology">Biology</option>
            </select>

        </div>

{{-- || =-=-=-=-=- Email =-=-=-=-=-=-|| --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <input class="pl-2 outline-none border-none" type="email" name="email" id="email"
                value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address *" />
        </div>
        @error('email')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror

{{-- || =-=-=-=-=- Profile =-=-=-=-=-=-|| --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>

            <label class="block ml-2 text-medium font-medium text-gray-500 dark:text-white" for="profile">Profile</label>
            <input placeholder="Profile" value="{{ old('profile') }}" required  name="profile" class="block w-full ml-2 text-sm text-gray-900  border-none rounded-l cursor-pointer bg- dark:text-gray-300 focus:outline-none dark:bg-gray-700 dark:border-gray-600     dark:placeholder-gray-400" id="profile" type="file">
        </div>
{{-- || =-=-=-=-=- Sector Bac =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            {{-- <label for="underline_select" class="sr-only">Spécialité Bac </label> --}}
            <select id="underline_select" value="{{ old('sector_bac') }}" required name="sector_bac" class="block  pl-1  px-0 w-full te text-gray-500 bg-transparent border-0 border-gray-200 appearance-none dark:text-dark-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option hidden>Spécialité Bac</option>
                <option value="PC">Bac science physique chimie</option>
                <option value="SVT">Bac science de la vie et de la Terre</option>
                <option value="SM">Bac science math</option>
            </select>

        </div>
{{-- || =-=-=-=-=- Date Bac =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none  border-none" type="text" name="date_bac" id="date_bac" placeholder="Date du baccalauréat"
                value="{{ old('date_bac') }}" required autocomplete="date_bac" autofocus
            />
        </div>
{{-- || =-=-=-=-=- Note Bac =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none  border-none" type="text" name="note_bac" id="note_bac" placeholder="La note du baccalauréat"
                value="{{ old('note_bac') }}" required autocomplete="note_bac" autofocus
            />
        </div> 
{{-- || =-=-=-=-=- Diplome baccalauréat  =-=-=-=-=-=-|| --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>

            <label class="block ml-2 text-medium font-medium text-gray-500 dark:text-white" for="diplome_bac">Diplome baccalauréat</label>
            <input placeholder="Diplome baccalauréat" value="{{ old('diplome_bac') }}" required  name="diplome_bac" class="block w-full ml-2 text-sm text-gray-900  border-none rounded-l cursor-pointer bg- dark:text-gray-300 focus:outline-none dark:bg-gray-700 dark:border-gray-600     dark:placeholder-gray-400" id="diplome_bac" type="file">
        </div>  
{{-- || =-=-=-=-=- Relevé baccalauréat  =-=-=-=-=-=-|| --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>

            <label class="block ml-2 text-medium font-medium text-gray-500 dark:text-white" for="releve_bac">Relevé baccalauréat</label>
            <input placeholder="Relevé baccalauréat" required  value="{{ old('releve_bac') }}" name="releve_bac" class="block w-full ml-2 text-sm text-gray-900  border-none rounded-l cursor-pointer bg- dark:text-gray-300 focus:outline-none dark:bg-gray-700 dark:border-gray-600     dark:placeholder-gray-400" id="releve_bac" type="file">
        </div> 
{{-- || =-=-=-=-=- University Name  Bac+2 =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            {{-- <label for="underline_select" class="sr-only">Nom de faculté Bac+2 </label> --}}
            <select id="underline_select" required value="{{ old('university_name') }}" name="university_name" class="block  pl-1  px-0 w-full te text-gray-500 bg-transparent border-0 border-gray-200 appearance-none dark:text-dark-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option hidden>Nom de diplome Bac+2 </option>
                <option value="Dts">Dts</option>
                <option value="Bts">Bts</option>
                <option value="Dut">Dut</option>
                <option value="Deug">Deug</option>
            </select>

        </div>
{{-- || =-=-=-=-=- Name Diplome Bac+2 =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none  border-none" type="text" name="secteur_bac_2" id="secteur_bac_2" placeholder="Filière diplome bac+2"
                value="{{ old('secteur_bac_2') }}" required autocomplete="secteur_bac_2" autofocus
            />
        </div>
{{-- || =-=-=-=-=- Date Bac+2 =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none  border-none" type="text" name="date_bac_2" id="date_bac_2" placeholder="Date diplome Bac+2"
                value="{{ old('date_bac_2') }}" required autocomplete="date_bac_2" autofocus
            />
        </div>
{{-- || =-=-=-=-=- Note First year  =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none  border-none" type="text" name="note_general" id="note_general" placeholder="La note du diplome bac+2"
                value="{{ old('note_general') }}" required autocomplete="note_general" autofocus
            />
        </div> 
{{-- || =-=-=-=-=- Diplome Bac+2  =-=-=-=-=-=-|| --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>

            <label class="block ml-2 text-medium font-medium text-gray-500 dark:text-white" for="diplome_bac_2">Diplome Bac+2</label>
            <input placeholder="Diplome Bac+2" required value="{{ old('diplome_bac_2') }}" name="diplome_bac_2" class="block w-full ml-2 text-sm text-gray-900  border-none rounded-l cursor-pointer bg- dark:text-gray-300 focus:outline-none dark:bg-gray-700 dark:border-gray-600     dark:placeholder-gray-400" id="diplome_bac_2" type="file">
        </div>  
{{-- || =-=-=-=-=- Relevé Bac+2  =-=-=-=-=-=-|| --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"  d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>

            <label class="block ml-2 text-medium font-medium text-gray-500 dark:text-white" for="releve_bac_2">Relevé Bac+2</label>
            <input placeholder="Relevé Bac+2" required value="{{ old('releve_bac_2') }}"  name="releve_bac_2" class="block w-full ml-2 text-sm text-gray-900  border-none rounded-l cursor-pointer bg- dark:text-gray-300 focus:outline-none dark:bg-gray-700 dark:border-gray-600     dark:placeholder-gray-400" id="releve_bac_2" type="file">
        </div> 
{{-- || =-=-=-=-=- Inscription  =-=-=-=-=-=-|| --}}
        <button type="submit"
            class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Inscription</button>
    </form>

    </div>
    </div>
        <!--end Card form-->


    </div>
@endsection