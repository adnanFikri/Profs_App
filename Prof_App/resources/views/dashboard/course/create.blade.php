@extends('layouts.home')

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">
    <h1 class="h3 mb-5 sm:mt-10">Ajouter Professeur</h1>

    <div class="card  mb-10">
    <div class="card-body flex flex-col">

    <form class="bg-white px-20" method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">
        @csrf
        <h1 class="text-gray-800 font-bold text-2xl mb-2 text-center">Ajouter cours</h1>
        <p class="text-sm font-normal text-gray-600 mb-3 text-center">Entrez les informations de cours</p>

{{-- =-=-=-=-=- Titre =-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none w-full" type="text" name="titre" id="titre" placeholder="titre"
                value="{{ old('titre') }}" required autocomplete="titre" autofocus
            />

        </div>
        @error('titre')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror


{{-- || =-=-=-=-=- module =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            {{-- <label for="underline_select" class="sr-only">Departement</label> --}}
            <select id="underline_select" name="module" class="block pl-1  px-0 w-full te text-gray-900 bg-transparent border-0 border-gray-200 appearance-none dark:text-dark-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
                <option hidden class="text-gray-500">Module</option>
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->name }}</option>
                @endforeach
            </select>

        </div>

@error('module_id')
    <span role="alert">
        <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
    </span>
@enderror


{{-- || =-=-=-=-=- file =-=-=-=-=-=-|| --}}
<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4 mt-4">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
        fill="currentColor">
        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
            clip-rule="evenodd" />
    </svg>

    <label class="block ml-2 text-medium font-medium text-gray-500 dark:text-white" for="file">fichier</label>
    <input placeholder="fichier" name="file" required class="block w-full ml-2 text-sm text-gray-900  border-none rounded-l cursor-pointer bg- dark:text-gray-300 focus:outline-none dark:bg-gray-700 dark:border-gray-600     dark:placeholder-gray-400" id="file" type="file">
</div>
@error('file')
    <span role="alert">
        <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
    </span>
@enderror

{{-- /////////////////// --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg> --}}
            <textarea class="form-textarea mt-1 block w-full border-0 p-1" rows="3" placeholder="Description..." name="description"></textarea>
        </div>





        <button type="submit"
            class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Register</button>
    </form>

    </div>
    </div>
        <!--end Card form-->


    </div>
@endsection
