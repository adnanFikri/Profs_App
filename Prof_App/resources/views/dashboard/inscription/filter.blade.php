@extends('layouts.home')

@section('content')

<div class="bg-gray-100 flex-1 p-6  md:mt-16">

    <div class="card  mb-10">
    <div class="card-body flex flex-col">

    <form class="bg-white px-20" method="POST" action="{{ route('inscription.filter') }}" >
        @csrf
        <h1 class="text-gray-800 font-bold text-2xl mb-2 text-center">Filter</h1>
        <p class="text-sm font-normal text-gray-600 mb-3 text-center">Entrez détails</p>
{{-- =-=-=-=-=- Limit nombre =-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2  outline-none border-none" type="number" name="limit" id="limit" placeholder="Nombre des étudiants "
                value="{{ old('limit') }}" required autocomplete="limit" autofocus
            />

        </div>
        @error('limit')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror
{{-- =-=-=-=-=- Note minimal =-=-=-=-=-=- --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none" type="number" name="minimum_note" id="minimum_note" placeholder="Note minimum"
                value="{{ old('minimum_note') }}" required autocomplete="minimum_note" autofocus
            />

        </div>
        @error('minimum_note')
        <span role="alert">
            <strong class="text-red-400 ml-2 font-medium ">{{ $message }}</strong>
        </span>
        @enderror

{{-- || =-=-=-=-=- Filter  =-=-=-=-=-=-|| --}}
        <button type="submit"
            class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Filter</button>
    </form>

    </div>
    </div>
        <!--end Card form-->


    </div>
@endsection