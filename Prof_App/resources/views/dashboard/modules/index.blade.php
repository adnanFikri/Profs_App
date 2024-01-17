
@extends('layouts.home')

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">
            <h1 class="h3 mb-5 sm:mt-10">Liste Modules</h1>
            <div class="card col-span-2 xl:col-span-1">
            @if(session('success'))
            <div class="alert alert-success mb-5">
                {{ session('success') }}
            </div>
        @endif

                <table class="table-auto w-full text-left">
                    <thead>
                    <tr>
                    <th class="px-4 py-2 text-center border-r">ID</th>
                    <th class="px-4 py-2 text-center border-r">Nom module</th>
                    <th class="px-4 py-2 text-center border-r">Professeur</th>
                    <th class="px-4 py-2 text-center border-r">Heurs module</th>
                    <th class="px-4 py-2 text-center border-r">Action</th>
                </tr>
                    </thead>
                    <tbody class="text-gray-600">

                    @foreach ($modules as $module)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500">{{ $module->id }}</td>
                            <td class="border border-l text-center px-4 py-2">
                                {{ $module->name}}
                            </td>
                            <td class="border border-l text-center px-4 py-2">
                                    {{ $module->professeur->name}}   
                            </td>
                            <td class="border border-l text-center px-4 py-2">
                                {{ $module->time}}
                            </td>
                            <td class="border border-l-0  text-center px-4 py-2">
                            <form action="{{ route('module.delete', ['id' => $module->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this module?')">
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
