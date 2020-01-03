@extends('layouts.adminApp')

@section('content')
<div class="cards flex flex-wrap -mx-2">
    <div class="card w-full sm:w-1/2 lg:w-1/4 p-2">
        <div class="flex text-xl bg-red-500 p-4 rounded text-white items-center justify-between shadow">
            <i class="fas fa-user mr-4 fa-3x"></i>
            <div class="text-center items-center flex">
                <p class="text-3xl">36</p>
                <p class="p-1 rounded-full bg-blue-500 mx-2 text-sm">46 new</p>
            </div>
        </div>
    </div>
    <div class="card w-full sm:w-1/2 lg:w-1/4 p-2">
        <div class="flex text-xl bg-yellow-500 p-4 rounded text-white items-center justify-between shadow">
            <i class="fas fa-book-open mr-4 fa-3x"></i>
            <div class="text-center items-center flex">
                <p class="text-3xl">36</p>
                <p class="p-1 rounded-full bg-blue-500 mx-2 text-sm">6 new</p>
            </div>
        </div>
    </div>

    <div class="card w-full sm:w-1/2 lg:w-1/4 p-2">
        <div class="flex text-xl bg-green-500 p-4 rounded text-white items-center justify-between shadow">
            <i class="fas fa-laptop-code mr-4 fa-3x"></i>
            <div class="text-center items-center flex">
                <p class="text-3xl">36</p>
                <p class="p-1 rounded-full bg-blue-500 mx-2 text-sm">6 new</p>
            </div>
        </div>
    </div>

    <div class="card w-full sm:w-1/2 lg:w-1/4 p-2">
        <div class="flex text-xl bg-indigo-500 p-4 rounded text-white items-center justify-between shadow">
            <i class="far fa-envelope mr-4 fa-3x"></i>
            <div class="text-center items-center flex">
                <p class="text-3xl">36</p>
                <p class="p-1 rounded-full bg-blue-500 mx-2 text-sm">6 new</p>
            </div>
        </div>
    </div>
</div>

<div class="lasts flex flex-wrap -mx-2">
    <div class="w-full md:w-1/2 p-2">
        <div class="card shadow bg-white border-t-4 border-yellow-500 rounded">
            <h3 class="border-b p-4 font-bold">Derniers Cours</h3>
            <table class="w-full">
                <tr class="hover:bg-gray-200">
                    <td class="w-16"><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="w-full md:w-1/2 p-2">
        <div class="card shadow bg-white border-t-4 border-green-500 rounded">
            <h3 class="border-b p-4 font-bold">Derniers exercices</h3>
            <table class="w-full">
                <tr class="hover:bg-gray-200">
                    <td class="w-16"><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x p-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x p-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="w-full md:w-1/2 p-2">
        <div class="card shadow bg-white border-t-4 border-red-500 rounded">
            <h3 class="border-b p-4 font-bold">Derniers Inscrits</h3>
            <table class="w-full">
                <tr class="hover:bg-gray-200">
                    <td class="w-16"><img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="w-10 rounded-full mx-auto"></td>
                    <td class="p-4">Mthdht</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td class="w-16"><img src="https://www.w3schools.com/howto/img_avatar2.png" alt="" class="w-10 rounded-full mx-auto"></td>
                    <td class="p-4">Mthdht</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td class="w-16"><img src="https://www.w3schools.com/w3images/avatar6.png" alt="" class="w-10 rounded-full mx-auto"></td>
                    <td class="p-4">Mthdht</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td class="w-16"><img src="https://www.w3schools.com/howto/img_avatar2.png" alt="" class="w-10 rounded-full mx-auto"></td>
                    <td class="p-4">Mthdht</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td class="w-16"><img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="w-10 rounded-full mx-auto"></td>
                    <td class="p-4">Mthdht</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="w-full md:w-1/2 p-2">
        <div class="card shadow bg-white border-t-4 border-indigo-500 rounded">
            <h3 class="border-b p-4 font-bold">Dernières notifications</h3>
            <table class="w-full">
                <tr class="hover:bg-gray-200">
                    <td class="w-16"><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>

                <tr class="hover:bg-gray-200">
                    <td><i class="fab fa-js-square fa-2x px-4 py-2 text-yellow-500"></i></td>
                    <td class="p-2">Les conditions</td>
                </tr>
            </table>
        </div>
    </div>
    
</div>
@endsection