
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
            {{-- <div class="flex items-center justify-between bg-white border-r titre px-3 ">
                <h1 class="h3 mb-5 sm:mt-10">Liste étudiants</h1>
                <button id="downloadButton" class=" hover:bg-blue-400 text-gray-800 hover:text-white duration-500 font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                    <span>Telecharger</span>
                </button>
            </div> --}}

            <div class="flex items-center justify-between bg-white border-r titre px-3 ">
                <h1 class="h5 sm:mt-10 text-center bg-white p-2  ">Liste étudiants</h1>
                <div class="flex">
                    <button id="downloadButton" class=" hover:bg-blue-400 text-gray-800 hover:text-white duration-500 font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                        <span>Telecharger</span>
                    </button>
                </div>
            </div>

            <div class="card col-span-2 xl:col-span-1">

                <table class="table-auto w-full text-left" id="emploiTable">
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

                    @foreach ($students as $student)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">{{ $student->id }}</td>
                            <td class="border border-l text-center px-4 py-2">
                                <div>Nom : {{ $student->first_name }}</div>
                                <div>Prenom : {{ $student->second_name }}</div>
                                <div>Cin: {{ $student->cin }}</div>
                                <div>Date de naissance : {{ $student->birth }}</div>
                                <div>Adresse :{{ $student->adresse }}</div>
                                <div>Telephone :{{ $student->telephone }}</div>
                                <div>email:{{ $student->email }}</div>
                                <div>Filière Lp :{{ $student->sector_lp }}</div>
                            </td>
                            <td class="border border-l-0 text-center px-4 py-2">
                            <div>Filière baccalauréat :{{ $student->sector_bac }}</div>
                            <div>Note baccalauréat : {{ $student->note_bac }}</div>
                            <div>Date baccalauréat :{{ $student->date_bac }}</div>
                            </td>
                            <td class="border border-l-0 text-center px-4 py-2">
                                <div>Nom de faculté :{{ $student->university_name }}</div>
                                <div>Filière Bac+2 :{{ $student->secteur_bac_2 }} </div>
                                <div>Date Bac+2 :{{ $student->date_bac_2 }}</div>
                                <div>Note General :{{ $student->note_general }} </div>
                            </td>
                            <td class="border border-l-0 text-center px-4 py-2">
                            <div> <a href="{{ asset('storage/images/'.$student->profile) }}" download>(click) Download photo</a></div>
                            <div> <a href="{{ asset('storage/images/' . $student->diplome_bac) }}" download>(click) Download Diplome Bac</a></div>
                            <div> <a href="{{ asset('storage/images/' . $student->releve_bac) }}" download> (click)Download Relevé Bac</a></div>
                                <div> <a href="{{ asset('storage/images/'.$student->diplome_bac_2) }}" download>(click) Download Diplome Bac+2</a></div>
                                <div> <a href="{{ asset('storage/images/'.$student->releve_bac_2) }}" download>(click) Download Relevé Bac+2</a></div>
                            </td>
                            <td class="border border-l-0  text-center px-4 py-2">
                                        <button type="submit" class="mr-2 text-center"><i
                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <script>
                $(document).ready(function () {
            // Add click event to the download button
                $('#downloadButton').on('click', function () {
                    // Get the table element
                    var table = document.getElementById('emploiTable');

                    // Convert the table to PDF
                    html2pdf(table, {
                        margin: 10,
                        filename: 'Liste_Selection_ENS_TMW.pdf',
                        image: { type: 'jpeg', quality: 0.98 },
                        html2canvas: { scale: 2 },
                        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait', width: 500, height: 210  }
                    });
                });
            });
            </script>

        </div>
@endsection
