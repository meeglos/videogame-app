@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">popular games</h2>
    {{-- <div class="popular-games text-sm grid-cols-6 gap-12 border-b border-gray-800 pb-16"> --}}
    <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b
    border-gray-800 pb-16">
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="img/avengers-cover.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Sonic
                Forces United Enemies</a>
            <div class="text-gray-400 mt-1">Nintendo Switch</div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="img/residentevil-cover.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        80%
                    </div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy VII
                Remake</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="img/spiderman-cover.png" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Sonic
                Forces United Enemies</a>
            <div class="text-gray-400 mt-1">Nintendo Switch</div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="img/sonicforces-cover.png" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        80%
                    </div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy VII
                Remake</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="img/supermarioparty-cover.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Sonic
                Forces United Enemies</a>
            <div class="text-gray-400 mt-1">Nintendo Switch</div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="img/sonicracing-cover.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        80%
                    </div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy VII
                Remake</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="./img/uncharted4-cover.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Uncharted 4</a>
            <div class="text-gray-400 mt-1">Nintendo Switch</div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="img/fifa19-cover.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        80%
                    </div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Fifa 19</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="./img/covid-cover.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Uncharted 4</a>
            <div class="text-gray-400 mt-1">Nintendo Switch</div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="img/animalcrossing-cover.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        80%
                    </div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Fifa 19</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="./img/thecomplex-cover.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Uncharted 4</a>
            <div class="text-gray-400 mt-1">Nintendo Switch</div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="img/starwars-cover.jpg" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150 h-64">
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full transform translate-x-8 translate-y-8">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        80%
                    </div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Fifa 19</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>

    </div>
</div>
@endsection
