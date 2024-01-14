@extends('layouts.home')

@section('content')

<div class="bg-gray-100 flex-1 p-6  md:mt-16">

    <div class="card  mb-10">
    <div class="card-body flex flex-col">

    <form class="bg-white px-20" method="POST" action="{{ route('module.store') }}" >
        @csrf
        <h1 class="text-gray-800 font-bold text-2xl mb-2 text-center">Ajouter Module</h1>
        <p class="text-sm font-normal text-gray-600 mb-3 text-center">Entrez les détails</p>
{{-- =-=-=-=-=- Name module =-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2  outline-none border-none" type="text" name="name" id="name" placeholder="Nom de module "
                value="{{ old('name') }}" required autocomplete="name" autofocus
            />

        </div>
        @error('name')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror
{{-- =-=-=-=-=- Name professeur =-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            {{-- <label for="underline_select" class="sr-only">Nom de professeur </label> --}}
            <select id="underline_select" required name="professeur_id" class="block  pl-1  px-0 w-full te text-gray-500 bg-transparent border-0 border-gray-200 appearance-none dark:text-dark-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option hidden>Nom de professeur</option>
                @foreach ($professeurs as $professeur)
                    <option value="{{ $professeur->id }}">{{ $professeur->name }}</option>
                @endforeach
            </select>

        </div>
        @error('professeur_id')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror
{{-- =-=-=-=-=- Hours module =-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2  outline-none border-none" type="text" name="time" id="time" placeholder="heurs"
                value="{{ old('time') }}" required autocomplete="time" autofocus
            />

        </div>
        @error('time')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror
{{-- || =-=-=-=-=- Ajouter  =-=-=-=-=-=-|| --}}
        <button type="submit"
            class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Ajouter</button>
    </form>

    </div>
    </div>
        <!--end Card form-->


    </div>
@endsection