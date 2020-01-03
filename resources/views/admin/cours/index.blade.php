@extends('layouts.adminApp')

@section('content')
<h3 class="text-2xl mb-8"><i class="fas fa-book-open fa-lg mr-4"></i>Tous les cours <a href="{{ route('admin.cours.create') }}" class="float-right"><i class="fas fa-plus-square fa-2x text-green-500"></i></a></h3>

<div class="flex flex-wrap -mx-2">
@foreach($categories as $category)
    <div class="w-full md:w-1/2 p-2">
        <div class="card shadow bg-white rounded flex">
            <div class="w-16 bg-{{ $category->color }} flex justify-center pt-8">
                <i class="{{ $category->icon }} fa-2x text-white"></i>
            </div>
            <div class="flex-grow">
                <h3 class="border-b p-4 font-bold">{{ $category->name }}</h3>
                <table class="w-full">
                @foreach($category->courses as $course)
                    <tr class="hover:bg-gray-200 flex items-center">
                        <td class="w-16"><i class="{{ $category->icon }} fa-2x px-4 py-2 text-{{ $category->color }}"></i></td>
                        <td class="p-2 flex-grow">{{ $course->title }}</td>
                        <td class="w-24 p-2 flex justify-between">
                            <a href="{{ route('admin.cours.show', ['course' => 'conditions']) }}" class="w-8 h-8 flex items-center justify-center bg-blue-500 rounded text-white"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.cours.edit', ['course' => 'conditions']) }}" class="w-8 h-8 flex items-center justify-center bg-orange-500 rounded text-white"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                    </tr>  
                @endforeach
                </table>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection