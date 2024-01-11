@extends('layouts.home')


@section('content')

<style>
    .imgp{
        width: 1;
    }
</style>

<div class="bg-gray-100 flex-1 p-6  md:mt-16">
            <h1 class="h3 mb-5 sm:mt-10">Liste Professeur</h1>
            <div class="card col-span-2 xl:col-span-1">

                <table class="table-auto w-full text-left">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-r"></th>
                            <th class="px-4 py-2 border-r">Nom</th>
                            <th class="px-4 py-2 border-r">Prenom</th>
                            <th class="px-4 py-2 border-r">Email</th>
                            <th class="px-4 py-2 border-r">Departement</th>
                            <th class="px-4 py-2 border-r">Telephone</th>
                            <th class="px-4 py-2 border-r">Adresse</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">

                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">
                                <div class="w-10 h-10 m-auto font-size-10 overflow-hidden rounded-full" >
                                    <img class="w-full h-full object-cover imgp" src="{{ asset('storage/images/1704474866.jpg') }}">
                                    {{-- <img class="w-full h-full object-cover" src="{{ asset('img/user.jpg') }}"> --}}
                                </div>
                            </td>
                            <td class="border border-l-0 px-4 py-2">Rguigat</td>
                            <td class="border border-l-0 px-4 py-2">Anass</td>
                            <td class="border border-l-0 px-4 py-2">Informatique</td>
                            <td class="border border-l-0 px-4 py-2">AA222222</td>
                            <td class="border border-l-0 px-4 py-2">0788339922</td>
                            <td class="border border-l-0 px-4 py-2">Rabat,hay takadom </td>
                            <td class="border border-l-0 px-4 py-2"><a href="" class="mr-2 text-center"><i
                                        class="fad fa-pencil-alt" style="color: rgb(9, 142, 9);"
                                        aria-hidden="true"></i></a><a href="" class="mr-2 text-center"><i
                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                        aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">1</td>
                            <td class="border border-l-0 px-4 py-2">Rguigat</td>
                            <td class="border border-l-0 px-4 py-2">Anass</td>
                            <td class="border border-l-0 px-4 py-2">Informatique</td>
                            <td class="border border-l-0 px-4 py-2">AA222222</td>
                            <td class="border border-l-0 px-4 py-2">0788339922</td>
                            <td class="border border-l-0 px-4 py-2">Rabat,hay takadom </td>
                            <td class="border border-l-0 px-4 py-2"><a href="" class="mr-2 text-center"><i
                                        class="fad fa-pencil-alt" style="color: rgb(9, 142, 9);"
                                        aria-hidden="true"></i></a><a href="" class="mr-2 text-center"><i
                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                        aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">1</td>
                            <td class="border border-l-0 px-4 py-2">Rguigat</td>
                            <td class="border border-l-0 px-4 py-2">Anass</td>
                            <td class="border border-l-0 px-4 py-2">Informatique</td>
                            <td class="border border-l-0 px-4 py-2">AA222222</td>
                            <td class="border border-l-0 px-4 py-2">0788339922</td>
                            <td class="border border-l-0 px-4 py-2">Rabat,hay takadom </td>
                            <td class="border border-l-0 px-4 py-2"><a href="" class="mr-2 text-center"><i
                                        class="fad fa-pencil-alt" style="color: rgb(9, 142, 9);"
                                        aria-hidden="true"></i></a><a href="" class="mr-2 text-center"><i
                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                        aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">1</td>
                            <td class="border border-l-0 px-4 py-2">Rguigat</td>
                            <td class="border border-l-0 px-4 py-2">Anass</td>
                            <td class="border border-l-0 px-4 py-2">Informatique</td>
                            <td class="border border-l-0 px-4 py-2">AA222222</td>
                            <td class="border border-l-0 px-4 py-2">0788339922</td>
                            <td class="border border-l-0 px-4 py-2">Rabat,hay takadom </td>
                            <td class="border border-l-0 px-4 py-2"><a href="" class="mr-2 text-center"><i
                                        class="fad fa-pencil-alt" style="color: rgb(9, 142, 9);"
                                        aria-hidden="true"></i></a><a href="" class="mr-2 text-center"><i
                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                        aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">1</td>
                            <td class="border border-l-0 px-4 py-2">Rguigat</td>
                            <td class="border border-l-0 px-4 py-2">Anass</td>
                            <td class="border border-l-0 px-4 py-2">Informatique</td>
                            <td class="border border-l-0 px-4 py-2">AA222222</td>
                            <td class="border border-l-0 px-4 py-2">0788339922</td>
                            <td class="border border-l-0 px-4 py-2">Rabat,hay takadom </td>
                            <td class="border border-l-0 px-4 py-2"><a href="" class="mr-2 text-center"><i
                                        class="fad fa-pencil-alt" style="color: rgb(9, 142, 9);"
                                        aria-hidden="true"></i></a><a href="" class="mr-2 text-center"><i
                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                        aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">1</td>
                            <td class="border border-l-0 px-4 py-2">Rguigat</td>
                            <td class="border border-l-0 px-4 py-2">Anass</td>
                            <td class="border border-l-0 px-4 py-2">Informatique</td>
                            <td class="border border-l-0 px-4 py-2">AA222222</td>
                            <td class="border border-l-0 px-4 py-2">0788339922</td>
                            <td class="border border-l-0 px-4 py-2">Rabat,hay takadom </td>
                            <td class="border border-l-0 px-4 py-2"><a href="" class="mr-2 text-center"><i
                                        class="fad fa-pencil-alt" style="color: rgb(9, 142, 9);"
                                        aria-hidden="true"></i></a><a href="" class="mr-2 text-center"><i
                                        class="fad fa-times-circle" style="color: rgb(190, 29, 29);"
                                        aria-hidden="true"></i></a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
@endsection
