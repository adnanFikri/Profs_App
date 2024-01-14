
@extends('layouts.home')

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">
            <h1 class="h3 mb-5 sm:mt-10">Liste Inscriptions</h1>
            <div class="card col-span-2 xl:col-span-1">

                <table class="table-auto w-full text-left">
                    <thead>
                    <tr>
                    <th class="px-4 py-2 text-center border-r">ID</th>
                    <th class="px-4 py-2 text-center border-r">Information personnel</th>
                    <th class="px-4 py-2 text-center border-r">Information baccalauréat</th>
                    <th class="px-4 py-2 text-center border-r">Information bac+2</th>
                    <th class="px-4 py-2 text-center border-r">Les dossiers</th>
                    <th class="px-4 py-2 text-center border-r">Action</th>
                </tr>
                    </thead>
                    <tbody class="text-gray-600">

                    @foreach ($inscriptions as $inscription)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">{{ $inscription->id }}</td>
                            <td class="border border-l text-center px-4 py-2">
                                <div>Nom : {{ $inscription->first_name }}</div>
                                <div>Prenom : {{ $inscription->second_name }}</div> 
                                <div>Cin: {{ $inscription->cin }}</div>
                                <div>Date de naissance : {{ $inscription->birth }}</div>
                                <div>Adresse :{{ $inscription->adresse }}</div>
                                <div>Telephone :{{ $inscription->telephone }}</div>
                                <div>email:{{ $inscription->email }}</div>
                                <div>Filière Lp :{{ $inscription->sector_lp }}</div>
                            </td>
                            <td class="border border-l-0 text-center px-4 py-2">
                            <div>Filière baccalauréat :{{ $inscription->sector_bac }}</div>
                            <div>Note baccalauréat : {{ $inscription->note_bac }}</div>
                            <div>Date baccalauréat :{{ $inscription->date_bac }}</div>
                            </td>
                            <td class="border border-l-0 text-center px-4 py-2">
                                <div>Nom de faculté :{{ $inscription->university_name }}</div>
                                <div>Filière Bac+2 :{{ $inscription->secteur_bac_2 }} </div>
                                <div>Date Bac+2 :{{ $inscription->date_bac_2 }}</div>
                                <div>Note General :{{ $inscription->note_general }} </div>
                            </td>
                            <td class="border border-l-0 text-center px-4 py-2">
                            <div> <a href="{{ asset('storage/images/'.$inscription->profile) }}" download>(click) Download photo</a></div>
                            <div> <a href="{{ asset('storage/images/' . $inscription->diplome_bac) }}" download>(click) Download Diplome Bac</a></div>
                            <div> <a href="{{ asset('storage/images/' . $inscription->releve_bac) }}" download> (click)Download Relevé Bac</a></div>
                                <div> <a href="{{ asset('storage/images/'.$inscription->diplome_bac_2) }}" download>(click) Download Diplome Bac+2</a></div>
                                <div> <a href="{{ asset('storage/images/'.$inscription->releve_bac_2) }}" download>(click) Download Relevé Bac+2</a></div>
                            </td>
                            <td class="border border-l-0  text-center px-4 py-2">
                            <form action="{{ route('inscription.delete', ['id' => $inscription->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inscription?')">
                            @csrf
                            @method('DELETE')   
                                        <button type="submit" class="mr-2 text-center"><i
                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                        aria-hidden="true"></i></button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
