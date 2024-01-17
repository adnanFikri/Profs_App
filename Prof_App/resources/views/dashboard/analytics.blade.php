@extends('layouts.home')

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">
            <!-- General Report -->
            <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


                <!-- card -->
                <div class="report-card sm:mt-16">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-indigo-700 fad fa-chalkboard-teacher"></div>
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            <div class="mt-8">
                                <h1 class="h5">{{$count_prof}}</h1>
                                <p>Professeur</p>
                            </div>
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card -->


                <!-- card -->
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-red-700 fad fa-book"></div>
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            <div class="mt-8">
                                <h1 class="h5">{{$count_module}}</h1>
                                <p>Module</p>
                            </div>
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card -->


                <!-- card -->
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            <div class="mt-8">
                                <h1 class="h5">{{$count_inscri}}</h1>
                                <p>Pre-inscription</p>
                            </div>
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card -->


                <!-- card -->
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-green-700 fad fa-users"></div>
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            <div class="mt-8">
                                <h1 class="h5">{{$count_students}}</h1>
                                <p>Etudiants Admis</p>
                            </div>
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card -->


            </div>
            <!-- End General Report -->

        </div>
@endsection
