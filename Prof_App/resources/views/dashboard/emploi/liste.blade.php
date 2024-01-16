@extends('layouts.home')

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
            <table class="table-auto w-full text-left">
              <thead>
                <tr>
                    <th class="px-4 py-2 border-r"></th>
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
                    <td class="border border-l-0 px-4 py-2 text-center text-blue-500">Lundi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0  px-4 py-2 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Lundi" && $emploi->time == $time)
                                    <span>Prof.{{$emploi->professeur->name}}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                        @csrf
                                        @method('DELETE')   
                                                    <button type="submit" class="mr-2 text-center"><i
                                                    class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                    aria-hidden="true"></i></button>
                                    </form>
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-blue-500">Mardi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px-4 py-2 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Mardi" && $emploi->time == $time)
                                    <span>Prof.{{$emploi->professeur->name}}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                        @csrf
                                        @method('DELETE')   
                                                    <button type="submit" class="mr-2 text-center"><i
                                                    class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                    aria-hidden="true"></i></button>
                                    </form>
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-blue-500">Mercredi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px-4 py-2 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Mercredi" && $emploi->time == $time)
                                    <span>Prof.{{$emploi->professeur->name}}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                        @csrf
                                        @method('DELETE')   
                                                    <button type="submit" class="mr-2 text-center"><i
                                                    class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                    aria-hidden="true"></i></button>
                                    </form>
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-blue-500">Jeudi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px-4 py-2 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Jeudi" && $emploi->time == $time)
                                    <span>Prof.{{$emploi->professeur->name}}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                        @csrf
                                        @method('DELETE')   
                                                    <button type="submit" class="mr-2 text-center"><i
                                                    class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                    aria-hidden="true"></i></button>
                                    </form>
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-blue-500">Vendredi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px-4 py-2 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Vendredi" && $emploi->time == $time)
                                    <span>Prof.{{$emploi->professeur->name}}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                        @csrf
                                        @method('DELETE')   
                                                    <button type="submit" class="mr-2 text-center"><i
                                                    class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                    aria-hidden="true"></i></button>
                                    </form>
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-blue-500">Samedi</td>

                    @foreach([8, 11, 13, 16] as $time)
                        <td class="border border-l-0 px-4 py-2 text-black text-center">
                            @foreach($emplois as $emploi)
                                @if($emploi->jour === "Samedi" && $emploi->time == $time)
                                    <span>Prof.{{$emploi->professeur->name}}</span></br>
                                    <span>Module:{{$emploi->module->name}}</span></br>
                                    <span>salle {{$emploi->salle}}</span>
                                    <form action="{{ route('emploi.delete', ['id' => $emploi->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                        @csrf
                                        @method('DELETE')   
                                                    <button type="submit" class="mr-2 text-center"><i
                                                    class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                                    aria-hidden="true"></i></button>
                                    </form>
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                </tr>
                
                
  
              </tbody>
            </table>
          </div>
          <!-- End Recent Sales -->
            

        </div>
@endsection