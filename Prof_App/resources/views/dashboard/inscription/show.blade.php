@extends('layouts.home')

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">
            <h1 class="h3 mb-5 sm:mt-10 mx-auto text-center">Your Informations</h1>
            <div class="card col-span-2 xl:col-span-1">
                <div class="flex-1 flex flex-col mt-5">
                    <div class="flex items-center shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md mx-auto">  
                        <h1 class="ml-3">Nom :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->first_name }}</p>    
                        <h1 class="ml-3">Prenom :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->second_name }}</p>   
                    </div>
                    <div class="flex items-center shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md mx-auto">  
                        <h1 class="ml-3">CIN :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->cin }}</p>    
                        <h1 class="ml-3">Date de naissance :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->birth }}</p>    
                    </div>
                    <div class="flex items-center shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md mx-auto">  
                        <h1 class="ml-3">Adresse :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->adresse }}</p>   
                        <h1 class="ml-3">Telephone :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->telephone }}</p>  
                    </div>
                    <div class="flex items-center shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md mx-auto">  
                        <h1 class="ml-3">Email :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->email }}</p> 
                        <h1 class="mx-3">Profile</h1>       
                    <div class="w-10 h-10 overflow-hidden rounded-md">
                        <img class="img-responsive" src="{{ asset('storage/images/'.$inscription->profile) }}">
                    </div>    
                    </div>
                    <div class="flex items-center shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md mx-auto">  
                        <h1 class="ml-3">Filière LP :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->sector_lp }}</p>    
                    </div>
                    <div class="flex items-center shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md mx-auto">  
                        <h1 class="ml-3">Filière Bac :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->sector_bac }}</p>    
                        <h1 class="ml-3">Date Bac :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->date_bac }}</p>  
                        <h1 class="ml-3">Note Bac :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->note_bac }}</p>
                    </div>
                    <div class="flex justify-center items-center shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md mx-auto">  
                        <h1 class="ml-3">Diplome Bac :</h1>    
                        <p class="ml-6 flex-1 text-xs"><a href="{{ asset('storage/images/' . $inscription->diplome_bac) }}" download>(click pour vérifier)</a></p>    
                        <h1 class="ml-3">relever Bac :</h1>    
                        <p class="ml-6 flex-1 text-xs"><a href="{{ asset('storage/images/' . $inscription->releve_bac) }}" download>(click pour vérifier)</a></p>    
                    </div>
                    <div class="flex items-center shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md mx-auto">  
                        <h1 class="ml-3">Nom faculté :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->university_name }}</p>  
                        <h1 class="ml-3">Filière Bac+2 :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->secteur_bac_2}}</p> 
                        <h1 class="ml-3">Note Bac+2 :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->note_general}}</p>   
                        <h1 class="ml-3">Date Bac+2 :</h1>    
                        <p class="ml-6 flex-1 text-xs">{{ $inscription->date_bac_2}}</p>    
                    </div>
                    <div class="flex items-center shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md mx-auto">  
                        <h1 class="ml-3">Diplome Bac+2 :</h1>    
                        <p class="ml-6 flex-1 text-xs"><a href="{{ asset('storage/images/'.$inscription->diplome_bac_2) }}" download>(click pour vérifier)</a></p>    
                        <h1 class="ml-3">Releve Bac+2 :</h1>    
                        <p class="ml-6 flex-1 text-xs"><a href="{{ asset('storage/images/'.$inscription->releve_bac_2) }}" download>(click pour vérifier)</a></p> 
                    </div>
                    <div class="flex items-center  bg-indigo-600 rounded   shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md mt-5 mb-5 mx-auto">  
                    <button  class="block w-full  text-white font-semibold"><a href="{{ route('inscription.edit', ['id' => $inscription->id]) }}">Update</a></button>
                    </div>
                </div>
            </div>
</div>
@endsection