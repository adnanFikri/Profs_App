@extends('layouts.home')

@section('content')
<div class="bg-gray-100 flex-1 p-6  md:mt-16">
            <!-- General Report -->
            <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


                {{-- <!-- card -->
                <div class="report-card sm:mt-16">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-indigo-700 fad fa-chalkboard-teacher"></div>
                                <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                    12%
                                    <i class="fal fa-chevron-up ml-1"></i>
                                </span>
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            <div class="mt-8">
                                <h1 class="h5">10</h1>
                                <p>Professeur</p>
                            </div>
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card --> --}}

{{-- --------------------------------------------------------------------------- --}}

            @foreach($modules as $module)
                <!-- card -->
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-red-700 fad fa-book"></div>
                                @if ($module->courses->count() < 1)
                                    <span class="rounded-full text-white badge bg-red-400 text-xs">
                                        0
                                        <i class="fal fa-chevron-down ml-1"></i>
                                    </span>
                                @else
                                    <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                        {{ $module->courses->count() }}
                                        <i class="fal fa-chevron-up ml-1"></i>
                                    </span>
                                @endif
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            <div class="mt-8">
                                <a href="{{ route( 'courses.show', $module ) }}">
                                    <h1 class="h6">{{ $module->name }}</h1>
                                </a>
                                <p>Module</p>
                            </div>
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card -->
            @endforeach
{{-- --------------------------------------------------------------------------- --}}



            </div>
            <!-- End General Report -->

        </div>
@endsection
