@extends('layouts.home')
<style>
    .tbl{
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
        font-size: 18px;
    }
</style>

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">

            <h1 class="h3 mb-5 sm:mt-10">L'emploi</h1>
            <!-- Start Recent Sales -->
        <div class="card col-span-2 xl:col-span-1">
        @if(session('success'))
            <div class="alert alert-success mb-5">
                {{ session('success') }}
            </div>
        @endif
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
                        <td class="border border-l-0  px-4 py-2 text-black text-center">
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
                        <td class="border border-l-0 px-4 py-2 text-black text-center">
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
                        <td class="border border-l-0 px-4 py-2 text-black text-center">
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
                        <td class="border border-l-0 px-4 py-2 text-black text-center">
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
                        <td class="border border-l-0 px-4 py-2 text-black text-center">
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
                    <td class="border border-l-0 px-4 py-2 text-center text-black">Samedi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px-4 py-2 text-black text-center">
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
            // Get the span element
            var spanElements = document.querySelectorAll('.acitvecolor');

            spanElements.forEach(function(spanElement) {

                var parentElement = spanElement.parentNode;

                // parentElement.style.backgroundColor = '#b6c3ff';
                parentElement.style.backgroundColor = '#4299e1';
                parentElement.style.color = 'white';
                // parentElement.style.border = '2px solid brown';
                parentElement.style.boxShadow = '1px 1px 10px #c9c2c2';
                // parentElement.style.boxShadow = '1px 1px 10px   black';
            });
        </script>


        </div>
@endsection
