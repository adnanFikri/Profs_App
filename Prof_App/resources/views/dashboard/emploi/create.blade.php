@extends('layouts.home')

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">
    <h1 class="h3 mb-5 sm:mt-10">Ajouter Professeur</h1>

    <div class="card  mb-10">
    <div class="card-body flex flex-col">
    @if($errors->any())
    <div class="alert alert-error">
        {{ $errors->first() }}
    </div>
@endif

    <form class="bg-white px-20" method="POST" action="{{ route('emploi.store') }}" >
        @csrf
        <h1 class="text-gray-800 font-bold text-2xl mb-2 text-center">Emploi de temps</h1>
        <p class="text-sm font-normal text-gray-600 mb-3 text-center">Entrez les details</p>
{{-- || =-=-=-=-=- Time =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            {{-- <label for="underline_select" class="sr-only">Temps</label> --}}
            <select id="underline_select" name="time" class="block pl-1  px-0 w-full te text-gray-900 bg-transparent border-0 border-gray-200 appearance-none dark:text-dark-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
                <option hidden class="text-gray-500">Temps *</option>
                <option value="8">8:30-11:00</option>
                <option value="11">11:00-13:30</option>
                <option value="13">13:30-16:30</option>
                <option value="16">16:30-18:00</option>
            </select>

        </div>
{{-- || =-=-=-=-=- Jour =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            {{-- <label for="underline_select" class="sr-only">Jour</label> --}}
            <select id="underline_select" name="jour" class="block pl-1  px-0 w-full te text-gray-900 bg-transparent border-0 border-gray-200 appearance-none dark:text-dark-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
                <option hidden class="text-gray-500">Jour</option>
                    <option value="Lundi">Lundi</option>
                    <option value="Mardi">Mardi</option>
                    <option value="Mercredi">Mercredi</option>
                    <option value="Jeudi">Jeudi</option>
                    <option value="Vendredi">Vendredi</option>
                    <option value="Samedi">Samedi</option>
            </select>

        </div>

{{-- || =-=-=-=-=- Salle =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none  border-none w-full" type="text" name="salle" id="salle" placeholder="Salle"
                value="{{ old('salle') }}" required autocomplete="salle" autofocus
            />
        </div>
{{-- || =-=-=-=-=- Professeur =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            {{-- <label for="underline_select" class="sr-only">Professeur</label> --}}
            <select id="underline_select" name="professeur_id" class="block pl-1  px-0 w-full te text-gray-900 bg-transparent border-0 border-gray-200 appearance-none dark:text-dark-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
                <option hidden class="text-gray-500">Professeur</option>
                @foreach ($professeurs as $professeur)
                    <option value="{{ $professeur->id }}">{{ $professeur->name }}</option>
                @endforeach
            </select>

        </div>
{{-- || =-=-=-=-=- Module =-=-=-=-=-=- || --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            {{-- <label for="underline_select" class="sr-only">Module</label> --}}
            <select id="underline_select" name="module_id" class="block pl-1  px-0 w-full te text-gray-900 bg-transparent border-0 border-gray-200 appearance-none dark:text-dark-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" required>
                <option hidden class="text-gray-500">module</option>
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->name }}</option>
                @endforeach
            </select>

        </div>


        <button type="submit"
            class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Register</button>
    </form>

    </div>
    </div>
        <!--end Card form-->


    </div>
@endsection
