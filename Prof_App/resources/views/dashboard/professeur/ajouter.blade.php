@extends('layouts.home')

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">
            <h1 class="h3 mb-5 sm:mt-10">Ajouter Professeur</h1>
            <!--Card form-->
            <div class="card  mb-10">
                <div class="card-body flex flex-col">
                    <!-- Your form content here -->
                    <form class="flex flex-wrap ">
                        <div class="w-full mt-8 pr-2">
                            <label for="exampleField1" class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" id="exampleField1" name="exampleField1" class="mt-1 p-2 border rounded-md w-full">
                            <label for="exampleField2" class="block text-sm font-medium text-gray-700">Prenom</label>
                            <input type="text" id="exampleField2" name="exampleField2" class="mt-1 p-2 border rounded-md w-full">
                            <label for="exampleField2" class="block text-sm font-medium text-gray-700">Date Naissance</label>
                            <input type="date" id="exampleField2" name="exampleField2" class="mt-1 p-2 border rounded-md w-full">
                            <label for="exampleField2" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="exampleField2" name="exampleField2" class="mt-1 p-2 border rounded-md w-full">
                            <label for="exampleField2" class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" id="exampleField2" name="exampleField2" class="mt-1 p-2 border rounded-md w-full">
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="w-full mt-4 p-2 bg-blue-500 text-white rounded-md">Submit</button>
                    </form>
                </div>
            </div>
             <!--end Card form-->
            

        </div>
@endsection