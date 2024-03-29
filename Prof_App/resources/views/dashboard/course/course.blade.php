@extends('layouts.home')

<style>
.crd{
    transition: .3s;
}
.crd:hover{
    transform: scale(103%)
}
.crd a{
    transition: .3s;
}
.crd:hover a{
    transform: scale(126%)
}

.arrowb{
    margin-left: -17px;
}
.arrowl{
    margin-left: -15px;
}
.prntarrow{
    margin-top: -14px;
    margin-left: -10px;
}
</style>

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">

    <h1 class="text-lg mb-6 flex justify-between hover:text-blue-70 prntarrow" title="back to modules">
        <a href="{{ route('course.index') }}">
            <span class="hover:text-blue-700 ">
                <span class="material-symbols-outlined arrowbl">arrow_back_ios</span>
                <span class="material-symbols-outlined arrowb">arrow_back_ios</span>
            </span>
        </a>
        {{-- <span class="material-symbols-outlined">
            close
            </span> --}}
        </h1>

    <h1 class="h5 m-2 mb-5">Cours de module <b>{{ $module->name }}</b> </h1>


    @if($courses->count() > 0)
    <div class="flex flex-wrap ">
        @foreach($courses as $course)
            <div class="crd hover:bg-violet-600 max-w-lg mb-3 ml-3 w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                </svg>
                {{-- <a href="#"> --}}
                    <span class="mb-5 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $course->titre }}</span>
                {{-- </a> --}}
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $course->description }}</p>
                <a href="{{ asset('storage/courses/'.$course->fileName) }}" download class="inline-flex items-center text-blue-600 hover:underline">
                    Telecharger
                    <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                    </svg>
                </a>
            </div>
        @endforeach
    </div>
@else
    <p>Aucun cours disponible pour ce module.</p>
@endif



</div>
@endsection
