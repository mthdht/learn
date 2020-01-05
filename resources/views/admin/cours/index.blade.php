@extends('layouts.adminApp')

@section('content')
@if (session('status'))
    <div class="border-4 rounded border-green-500 p-4 bg-green-100 mb-8 flex items-center justify-between" id="success-status">
        {{ session('status') }}
        <span class="h-8 w-8 flex justify-center items-center hover:bg-green-300 rounded" id="close-status"><i class="fas fa-times"></i></span>
    </div>
@endif

<h3 class="text-2xl mb-8"><i class="fas fa-book-open fa-lg mr-4"></i>Tous les cours <a href="{{ route('admin.cours.create') }}" class="float-right"><i class="fas fa-plus-square fa-2x text-green-500"></i></a></h3>

<div class="flex flex-col flex-wrap md:-mx-2 h-auto max-w-full" id="masonry">
@foreach($categories as $category)
    <div class="w-full md:w-1/2 md:px-2 py-2">
        <div class="card shadow bg-white rounded flex">
            <div class="w-16 bg-{{ $category->color }} flex justify-center pt-8 flex-shrink-0">
                <i class="{{ $category->icon }} fa-2x text-white"></i>
            </div>
            <div class="flex-grow">
                <h3 class="border-b p-4 font-bold">{{ $category->name }}</h3>
                <p class="p-4">{{ $category->description }}</p>
                <div class="flex mb-4">
                    <button class="px-4 py-2 rounded mx-auto bg-blue-500 text-white" 
                        onclick="document.getElementById('cours-{{ $category->name }}').style.display = 'table';document.getElementById('masonry').style.height = document.getElementById('masonry').clientHeight + document.getElementById('cours-{{ $category->name }}').scrollHeight + 'px';document.getElementById('less-{{ $category->name }}').style.display = 'block';this.style.display = 'none';" 
                        id="more-{{ $category->name }}">
                        Voir plus
                    </button>
                    <button class="px-4 py-2 rounded mx-auto bg-blue-500 text-white hidden" onclick="document.getElementById('masonry').style.height = ((document.getElementById('masonry').clientHeight - document.getElementById('cours-{{ $category->name }}').scrollHeight) + 'px');document.getElementById('cours-{{ $category->name }}').style.display = 'none';this.style.display = 'none';document.getElementById('more-{{ $category->name }}').style.display = 'block'" id="less-{{ $category->name }}">Voir moins</button>
                </div>
                <table class="w-full hidden border-t" id="cours-{{ $category->name }}">
                @foreach($category->courses as $course)
                    <tr class="hover:bg-gray-200 flex items-center">
                        <td class="w-16"><i class="{{ $category->icon }} fa-2x px-4 py-2 text-{{ $category->color }}"></i></td>
                        <td class="p-2 flex-grow">{{ $course->title }}</td>
                        <td class="p-2 flex">
                            <a href="{{ route('admin.cours.show', ['course' => $course->slug]) }}" class="w-8 h-8 flex items-center justify-center bg-blue-500 rounded text-white mr-2" title="Voir"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.cours.edit', ['course' => $course->slug]) }}" class="w-8 h-8 flex items-center justify-center bg-orange-500 rounded text-white" title="Editer"><i class="fas fa-pencil-alt"></i></a>
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