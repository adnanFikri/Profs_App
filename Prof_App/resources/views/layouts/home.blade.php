<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- libraries to download tables to pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>Ecole Normal Superieur</title>
</head>

<body class="bg-gray-100">


    <!-- start navbar -->
    <div
        class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white px-6 py-2 border-b border-gray-300">
        <!-- logo -->
        <div class="flex-none w-56 flex flex-row items-center">
            <img src="{{ asset('img/logo.png') }}" class="w-20 flex-none">
            <strong class="capitalize ml-2 flex-1"></strong>
            <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
                <i class="fad fa-list-ul"></i>
            </button>
        </div>
        <!-- end logo -->

        <!-- navbar content toggle -->
        <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
            <i class="fad fa-chevron-double-down"></i>
        </button>
        <!-- end navbar content toggle -->

        <!-- navbar content -->
        <div id="navbar"
            class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-end items-end md:flex-col md:items-center">
            <!-- Profil -->
            <div class="flex flex-row-reverse items-center">
                <!-- user -->
                <div class="dropdown relative md:static">
                    <button class="menu-btn focus:outline-none focus:shadow-outline gap-2 flex flex-wrap justify-center items-center">
                        <div class="w-8 h-8 overflow-hidden rounded-full">
                            <img class="w-full h-full object-cover" src="{{ asset('img/user.jpg') }}">
                        </div>
                        <div class=" capitalize flex ">
                            <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">{{ Auth::user()->name }}</h1>
                            <i class="fad fa-chevron-down ml-1 mt- text-xs leading-none"></i>
                        </div>
                    </button>

                    <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                    <div
                        class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">
                        <!-- item -->
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fad fa-user-times text-xs mr-1"></i>
                            log out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <!-- end item -->
                    </div>
                </div>
                <!-- end user -->
            </div>
            <!-- end Profil -->
        </div>
        <!-- end navbar content -->
    </div>

    <!-- end navbar -->



@if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->role === 'prof' || auth()->user()->role === 'student')  )
    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">
        @if(auth()->user()->role != 'etud' )
            <!-- start sidebar -->
                <div id="sideBar"
                class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-56 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


                <!-- sidebar content -->
                <div class="flex flex-col">

                    <!-- sidebar toggle -->
                    <div class="text-right hidden md:block mb-4">
                        <button id="sideBarHideBtn">
                            <i class="fad fa-times-circle"></i>
                        </button>
                    </div>
                    <!-- end sidebar toggle -->

                @if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->role === 'prof' || auth()->user()->role === 'student')  )

                    <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

                    <!-- link -->
                    <a href="{{ route('home') }}" style="font-size: 16px; "
                        class="linkbtn">
                        {{-- class="linkbtn  mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500"> --}}
                        <i class="fad fa-chart-pie text-xs mr-1"></i>
                        Accueil
                    </a>
                    <!-- end link -->


{{-- ================================ --}}
{{-- =================================================================================== --}}
{{-- ================================ GROUP Professeur ================================ --}}
{{-- =================================================================================== --}}

                    <p class="uppercase text-xs text-gray-600 mb-5 mt-4 tracking-wider">Professeur</p>

                    @if(auth()->user()->role === 'admin')
                        <div class="dropdown ">
                            <button class="dropdown-btn" aria-haspopup="menu">
                                <span> <i class="fad fa-shield-check text-xs mr-1"></i> Professeur</span>
                                <span class="arrow"></span>
                            </button>
                            <ul class="dropdown-content" role="menu">
                            <li style="--delay: 1;"><a href="{{ route('professeur.index') }}">List Professeur</a></li>
                            <li style="--delay: 2;"><a href="{{ route('professeur.create') }}">Ajoute Professeur</a></li>
                            </ul>
                        </div>
                    @endif

                    <div class="dropdown">
                        <button class="dropdown-btn" aria-haspopup="menu">
                          <span> <i class="fad fa-shield-check text-xs mr-1"></i> Emploi</span>
                          <span class="arrow"></span>
                        </button>
                        <ul class="dropdown-content" role="menu">
                            <li style="--delay: 1;"><a href="{{ route('emploi.index') }}">List Emploi</a></li>
                            @if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->role === 'prof')  )
                                <li style="--delay: 2;"><a href="{{ route('emploi.create') }}">Ajouter Emploi</a></li>
                            @endif
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="dropdown-btn" aria-haspopup="menu">
                            <span> <i class="fad fa-shield-check text-xs mr-1"></i> Cours</span>
                            <span class="arrow"></span>
                        </button>
                        <ul class="dropdown-content" role="menu">
                            <li style="--delay: 1;"><a href="{{ route('course.index') }}">List Cours</a></li>
                            @if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->role === 'prof')  )
                                <li style="--delay: 2;"><a href="{{ route('course.create') }}">Ajouter Cour</a></li>
                            @endif
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="dropdown-btn" aria-haspopup="menu">
                            <span> <i class="fad fa-shield-check text-xs mr-1"></i> Modules</span>
                            <span class="arrow"></span>
                        </button>
                        <ul class="dropdown-content" role="menu">
                            <li style="--delay: 1;"><a href="{{ route('module.index') }}">List Modules</a></li>
                            @if(auth()->user()->role === 'admin')
                                <li style="--delay: 2;"><a href="{{ route('module.create') }}">Ajouter Module</a></li>
                            @endif
                        </ul>
                    </div>


{{-- ================================ --}}
{{-- =================================================================================== --}}
{{-- ================================ GROUP INSCRIPTION ================================ --}}
{{-- =================================================================================== --}}
                        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Inscription</p>
                        {{-- <p class="linkbtn">Inscription</p> --}}
                    @endif
                @endif
                    {{-- @if(auth()->user() && auth()->user()->role === 'etud' ) --}}
                        <!-- link -->
                        {{-- <a href="{{ route('inscription.create') }}" --}}
                            {{-- class="linkbtn"> --}}
                            {{-- class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                            <i class="fad fa-check-square text-xs mr-2"></i>
                            Inscription
                        </a> --}}
                        <!-- end link -->
                    {{-- @endif --}}
                    @if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->role === 'prof')  )
                        @if(auth()->user()->role === 'admin')
                            <!-- link -->
                            <a href="{{ route('inscription.index') }}"
                                class="linkbtn">
                                {{-- class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500"> --}}
                                <i class="fad fa-check-square text-xs mr-2"></i>
                                Liste inscriptions
                            </a>
                            <!-- end link -->
                        @endif

                        <!-- link -->
                        <a href="{{ route('inscription.list_filter') }}"
                            class="linkbtn">
                            <i class="fad fa-check-square text-xs mr-2"></i>
                            Liste étudiants
                        </a>
                        <!-- end link -->

                        @if(auth()->user()->role === 'admin')
                            <!-- link -->
                            <a href="{{ route('inscription.form_filter') }}"
                                class="linkbtn">
                                <i class="fad fa-check-square text-xs mr-2"></i>
                                Sélection
                            </a>
                            <!-- end link -->
                        @endif
                    @endif
                {{-- @if(auth()->user() && (auth()->user()->role === 'admin' || auth()->user()->role === 'prof')) --}}


                </div>
                <!-- end sidebar content -->

            </div>
            <!-- end sidbar -->
        @endif

        <!-- strat content -->
        @yield('content')
        <!-- end content -->

    </div>
    <!-- end wrapper -->


    <script>


var count = 1
setTimeout(demo, 500)
setTimeout(demo, 700)
setTimeout(demo, 900)
setTimeout(reset, 2000)

setTimeout(demo, 2500)
setTimeout(demo, 2750)
setTimeout(demo, 3050)


var mousein = false
function demo() {
   if(mousein) return
   document.getElementById('demo' + count++)
      .classList.toggle('hover')

}

function demo2() {
   if(mousein) return
   document.getElementById('demo2')
      .classList.toggle('hover')
}

function reset() {
   count = 1
   var hovers = document.querySelectorAll('.hover')
   for(var i = 0; i < hovers.length; i++ ) {
      hovers[i].classList.remove('hover')
   }
}

document.addEventListener('mouseover', function() {
   mousein = true
   reset()
})

    </script>



    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- end script -->

</body>

</html>
