@extends('layouts.home')
<style>
    .tbl{
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
    }
    .titre{
        border-radius: 5px;
        border: rgb(204, 203, 203) 1px solid;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
        color: #282626;
    }
</style>

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">
    @if(session('success'))
    <div class="alert alert-success mb-5">
        {{ session('success') }}
    </div>
    @endif
            {{-- <h1 class="h5 mb-5 sm:mt-10">Emploi du Temps</h1> --}}
            <div class="flex items-center justify-between bg-white border-r titre px-3 ">
                <h1 class="h5 sm:mt-10 text-center bg-white p-2  ">Emploi du Temps</h1>
                <p>Dernière modification: {{ $lastChange ?? 'No entries yet' }}</p>
                <div class="flex">
                    <button id="downloadButton" class=" mx-2 hover:bg-blue-400 hover:text-gray-100 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">

                        <span class="material-symbols-outlined mr-1">
                            shadow_add
                            </span>
                        <a href="{{ route('emploi.create') }}">Ajoute</a>
                    </button>
                    <button id="downloadButton" class=" hover:bg-blue-400 text-gray-800 hover:text-white font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                        <span>Telecharger</span>
                    </button>
                </div>
            </div>
            <!-- Start Recent Sales -->
        <div class="card col-span-2 xl:col-span-1">

            <table class="table-auto w-full text-left tbl">
              <thead>
                <tr>
                    <th class="px-4 py-2 border-r">Jour</th>
                    <th class="px-4 py-2 border-r">
                        <div class="flex justify-between">
                            <span class="text-left">8:30</span>
                            <span class="text-right">11:00</span>
                        </div>
                    </th>
                    <th class="px-4 py-2 border-r">
                        <div class="flex justify-between">
                            <span class="text-left">11:00</span>
                            <span class="text-right">13:30</span>
                        </div>
                    </th>
                    <th class="px-4 py-2 border-r">
                        <div class="flex justify-between">
                            <span class="text-left">13:30</span>
                            <span class="text-right">16:30</span>
                        </div>
                    </th>
                    <th class="px-4 py-2 border-r">
                        <div class="flex justify-between">
                            <span class="text-left">16:30</span>
                            <span class="text-right">18:00</span>
                        </div>
                    </th>
                </tr>
              </thead>
              <tbody class="text-white">

                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-black">Lundi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0  px-4 pt-3 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Lundi" && $emploi->time == $time)
                                    <span class="acitvecolor">Prof.{{$emploi->professeur->name}}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    @if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->id === $emploi->professeur->user->id)  )
                                        <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                            @csrf
                                            @method('DELETE')
                                                        <button type="submit" class="mt-1 text-center"><i
                                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                        aria-hidden="true"></i></button>
                                        </form>
                                    @endif
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-black">Mardi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px-4 pt-3 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Mardi" && $emploi->time == $time)
                                    <span class="acitvecolor">Prof.{{  $emploi->professeur->name }}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    @if(auth()->user()->role === 'admin' || auth()->user()->id === $emploi->professeur->user->id  )
                                        <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                            @csrf
                                            @method('DELETE')
                                                        <button type="submit" class="mt-1 text-center"><i
                                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                        aria-hidden="true"></i></button>
                                        </form>
                                    @endif
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-black">Mercredi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px-4 pt-3 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Mercredi" && $emploi->time == $time)
                                    <span class="acitvecolor">Prof.{{$emploi->professeur->name}}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    @if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->id === $emploi->professeur->user->id)  )
                                        <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                            @csrf
                                            @method('DELETE')
                                                        <button type="submit" class="mt-1 text-center"><i
                                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                        aria-hidden="true"></i></button>
                                        </form>
                                    @endif
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-black">Jeudi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px-4 pt-3 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Jeudi" && $emploi->time == $time)
                                    <span class="acitvecolor">Prof.{{$emploi->professeur->user->id ." - ".$emploi->professeur->name}}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    @if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->id === $emploi->professeur->user->id)  )
                                        <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                            @csrf
                                            @method('DELETE')
                                                        <button type="submit" class="mt-1 text-center"><i
                                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                        aria-hidden="true"></i></button>
                                        </form>
                                    @endif
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-black">Vendredi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px-4 pt-3 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Vendredi" && $emploi->time == $time)
                                    <span class="acitvecolor">Prof.{{$emploi->professeur->name}}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    @if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->id === $emploi->professeur->user->id)  )
                                        <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                            @csrf
                                            @method('DELETE')
                                                        <button type="submit" class="mt-1 text-center"><i
                                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                        aria-hidden="true"></i></button>
                                        </form>
                                    @endif
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="border border-l-0 px-2 py-1 text-center text-black">Samedi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px- pt-3 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Samedi" && $emploi->time == $time)
                                    <span class="acitvecolor">Prof.{{$emploi->professeur->name}}</span></br>
                                    <span>Module : {{$emploi->module->name}}</span></br>
                                    <span>salle : {{$emploi->salle}}</span>
                                    @if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->id === $emploi->professeur->user->id)  )
                                        <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                            @csrf
                                            @method('DELETE')
                                                        <button type="submit" class="mt-1 text-center"><i
                                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                        aria-hidden="true"></i></button>
                                        </form>
                                    @endif
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>

            </tbody>
        </table>
    </div>
        <!-- End Recent Sales -->

        <script>
            var spanElements = document.querySelectorAll('.acitvecolor');

            spanElements.forEach(function(spanElement) {
                var parentElement = spanElement.parentNode;
                // parentElement.style.backgroundColor = '#bae6fd'
                parentElement.style.backgroundColor = '#60a5fa'
                // parentElement.style.backgroundColor = 'rgb(63 149 221)';
                parentElement.style.color = '#f9fafb';
                // parentElement.style.color = 'white';
                // parentElement.style.boxShadow = '1px 1px 5px #c9c2c2';

                // parentElement.className = 'bg-gray-200 border border-l-0  pt-3 text-black text-center';
                parentElement.style.boxShadow = '0px .5px 2px #9b9b9b';
                    });

            $(document).ready(function () {
            // Add click event to the download button
                $('#downloadButton').on('click', function () {
                    // Get the table element
                    var table = document.getElementById('emploiTable');

                    // Convert the table to PDF
                    html2pdf(table, {
                        margin: 10,
                        filename: 'Emploi_ENS_TMW.pdf',
                        image: { type: 'jpeg', quality: 0.98 },
                        html2canvas: { scale: 2 },
                        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
                    });
                });
            });
        </script>



</div>

@endsection
