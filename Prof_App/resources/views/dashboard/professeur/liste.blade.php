@extends('layouts.home')


@section('content')

<style>
    .head-imgp{
        display: flex;
        justify-content: center;
        align-content: center;
    }
    .imgp{
        width: 50px;
        height: 60px;
        border-radius: 50%;
        transition: .3s;
    }
    .imgp:hover{
        transform: scale(333%);
        border-radius: 20%;
    }
</style>

<div class="bg-gray-100 flex-1 p-6  md:mt-16">
            <h1 class="h3 mb-5 sm:mt-10">Liste Professeur</h1>
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
                            <th class="px-4 py-2 border-r">Nom</th>
                            <th class="px-4 py-2 border-r">Departement</th>
                            <th class="px-4 py-2 border-r">Email</th>
                            <th class="px-4 py-2 border-r">Telephone</th>
                            <th class="px-4 py-2 border-r">Adresse</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        @if (count($profs) > 0)
                            @foreach ($profs as $prof)
                                <tr>
                                    <td class="border border-l-0 px-4 py-2 text-center text-green-500" title="click droit et voir dans une nouvelle fenetre">
                                        <div class="head-imgp" >
                                            {{-- <a href="{{ asset('storage/images/'.$prof->profile) }}" download>(click) Download photo</a> --}}
                                            <img class="imgp" style="with : 100px;" src="{{ asset('storage/images/'. $prof->profile) }}" alt="{{ $prof->name }} {{ $prof->name }} Profile Image" title="click droit et voir dans une nouvelle fenetre">
                                        </div>
                                    </td>
                                    <td class="border border-l-0 px-4 py-2">{{ $prof->name }}</td>
                                    <td class="border border-l-0 px-4 py-2">{{ $prof->departement }}</td>
                                    <td class="border border-l-0 px-4 py-2">{{ $prof->email }}</td>
                                    <td class="border border-l-0 px-4 py-2">{{ $prof->telephone }}</td>
                                    <td class="border border-l-0 px-4 py-2">{{ $prof->adresse }}</td>
                                    <td  class="border border-l-0 border-b-0  px-4 py-5  flex items-cente justify-start w-100 h-ful bg-danger" style="background-color: gra;">
                                        <a href="{{ route('professeur.edit', $prof) }}" class="mr-2 text-center">
                                            <i class="fad fa-pencil-alt" style="color: rgb(9, 142, 9);" aria-hidden="true"></i>
                                        </a>
                                        <form action="{{ route('professeur.delete', $prof->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="mr-2 text-center" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce professeur?')">
                                                <i class="fad fa-times-circle" style="color: rgb(190, 29, 29);" aria-hidden="true"></i>
                                            </button>
                                            {{-- <a href="" class="mr-2 text-center" onclick="return confirm('Are you sure you want to delete this professor?')">
                                                <i class="fad fa-times-circle" style="color: rgb(190, 29, 29);" aria-hidden="true"></i>
                                            </a> --}}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
@endsection
