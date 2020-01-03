@extends('layouts.adminApp')

@section('content')
<h3 class="text-2xl mb-8"><i class="fas fa-book-open fa-lg mr-4"></i>Tous les cours <a href="/admin/cours/create" class="float-right"><i class="fas fa-plus-square fa-2x text-green-500"></i></a></h3>

<div class="flex flex-wrap -mx-2">
    <div class="w-full md:w-1/2 p-2">
        <div class="card shadow bg-white rounded flex">
            <div class="w-16 bg-yellow-500 flex justify-center pt-8">
                <i class="fab fa-js-square fa-2x text-white"></i>
            </div>
            <div class="flex-grow">
                <h3 class="border-b p-4 font-bold">Javascript</h3>
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

    <div class="w-full md:w-1/2 p-2">
        <div class="card shadow bg-white rounded flex">
            <div class="w-16 bg-purple-500 flex justify-center pt-8">
                <i class="fab fa-php fa-2x text-white"></i>
            </div>
            <div class="flex-grow">
                <h3 class="border-b p-4 font-bold">PHP</h3>
                <table class="w-full">
                    <tr class="hover:bg-gray-200">
                        <td class="w-16"><i class="fab fa-php fa-2x px-4 py-2 text-purple-500"></i></td>
                        <td class="p-2">Les conditions</td>
                    </tr>

                    <tr class="hover:bg-gray-200">
                        <td><i class="fab fa-php fa-2x px-4 py-2 text-purple-500"></i></td>
                        <td class="p-2">Les conditions</td>
                    </tr>

                    <tr class="hover:bg-gray-200">
                        <td><i class="fab fa-php fa-2x px-4 py-2 text-purple-500"></i></td>
                        <td class="p-2">Les conditions</td>
                    </tr>

                    <tr class="hover:bg-gray-200">
                        <td><i class="fab fa-php fa-2x px-4 py-2 text-purple-500"></i></td>
                        <td class="p-2">Les conditions</td>
                    </tr>

                    <tr class="hover:bg-gray-200">
                        <td><i class="fab fa-php fa-2x px-4 py-2 text-purple-500"></i></td>
                        <td class="p-2">Les conditions</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection