@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4 flex flex-row justify-center">Formula 1 Teams</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-20">
        <!-- Team 1 -->
        <div class="bg-gray-100 p-4 rounded-md">
            <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-red-500 to-blue-600">
                    <img src="https://media.formula1.com/content/dam/fom-website/2018-redesign-assets/team%20logos/mercedes.jpg"/>
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Mercedes-AMG Petronas Formula One Team
                    </h5>
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        Mercedes-AMG Petronas Formula One Team, also known as Mercedes, is a German-British Formula One racing team and constructor. They are one of the most successful teams in Formula One history, winning numerous Drivers' and Constructors' Championships.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button data-ripple-light="true" type="button" class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Read More
                    </button>
                </div>
            </div>
        </div>

        <!-- Team 2 -->
        <div class="bg-gray-100 p-4 rounded-md">
            <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-red-500 to-blue-600">
                <img src="https://media.formula1.com/content/dam/fom-website/2018-redesign-assets/team%20logos/red%20bull.jpg"/>
            </div>
            <div class="p-6">
                <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    >Red Bull Racing Honda
                </h5>
                <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                    Red Bull Racing Honda, also known as Red Bull Racing, is an Austrian Formula One racing team and constructor. Founded by the energy drink company Red Bull GmbH, the team has enjoyed significant success in Formula One, particularly in the 2010s.
                </p>
            </div>
            <div class="p-6 pt-0">
                <button data-ripple-light="true" type="button" class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Read More
                </button>
            </div>
        </div>
        </div>

        <!-- Team 3 -->
        <div class="bg-gray-100 p-4 rounded-md">
            <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-white">
                    <img src="https://logos-world.net/wp-content/uploads/2020/06/Ferrari-Scuderia-Logo-2011-2017.png"/>
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Scuderia Ferrari
                    </h5>
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        Scuderia Ferrari, commonly referred to as Ferrari, is the oldest and most successful team in Formula One history. Founded in 1929 by Enzo Ferrari, the Italian racing team has a storied legacy in the sport, boasting a record number of Constructors' Championships and Drivers' Championships.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button data-ripple-light="true" type="button" class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Read More
                    </button>
                </div>
            </div>
        </div>

        <!-- Team 4 -->
        <div class="bg-gray-100 p-4 rounded-md">
            <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-red-500 to-blue-600">
                    <img src="https://media.formula1.com/content/dam/fom-website/2018-redesign-assets/team%20logos/mclaren.jpg"/>
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        McLaren F1 Team
                    </h5>
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        McLaren F1 Team, known simply as McLaren, is one of the most iconic and successful teams in Formula One history. Founded by Bruce McLaren in 1963, the British racing team has achieved numerous victories and championships over the years. With a rich heritage of innovation and engineering excellence, McLaren continues to push the boundaries of technology and performance in Formula One.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button data-ripple-light="true" type="button" class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Read More
                    </button>
                </div>
            </div>
        </div>

        <!-- Team 5 -->
        <div class="bg-gray-100 p-4 rounded-md">

        </div>

        <!-- Team 6 -->
        <div class="bg-gray-100 p-4 rounded-md">

        </div>

        <!-- Team 7 -->
        <div class="bg-gray-100 p-4 rounded-md">

        </div>

        <!-- Team 8 -->
        <div class="bg-gray-100 p-4 rounded-md">

        </div>

        <!-- Team 9 -->
        <div class="bg-gray-100 p-4 rounded-md">

        </div>

        <!-- Team 10 -->
        <div class="bg-gray-100 p-4 rounded-md">

        </div>

    </div>
@endsection
