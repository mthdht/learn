@extends('layouts.adminApp')

@section('content')

@if (session('status'))
    <div class="border-4 rounded border-green-500 p-4 bg-green-100 mb-8 flex items-center justify-between" id="success-status">
        {{ session('status') }}
        <span class="h-8 w-8 flex justify-center items-center hover:bg-green-300 rounded" id="close-status"><i class="fas fa-times"></i></span>
    </div>
@endif
<h3 class="text-2xl mb-8">
    <i class="fas fa-book-open fa-lg mr-4"></i>Editer un cour
    <form action="{{ route('admin.cours.destroy', ['course' =>$course->slug]) }}" method="post" class="float-right">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 rounded px-2 text-white ml-4" title="supprimer"><i class="fas fa-trash-alt"></i></button>
    </form>
</h3>

<div class="shadow bg-white flex-grow md:mx-0 rounded">
    <form action="{{ route('admin.cours.update', ['course' => $course->slug]) }}" method="post" class="p-4 flex flex-col h-full">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $course->id }}">
        
        <div class="lg:flex">
            <div class="control flex flex-wrap items-center mb-4 lg:w-1/2">
                <label for="title" class="w-full sm:w-32 mb-2 sm:mb-0"><i class="fas fa-heading fa-lg mr-2"></i> Titre</label>
                <div class="flex-grow">
                    <input id="title" type="text" name="title" placeholder="Un titre" value="{{ $course->title }}" class="px-3 py-2 border rounded w-full">
                    @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="control flex flex-wrap items-center mb-4 lg:w-1/2 lg:pl-4">
                <label for="slug" class="w-full sm:w-32 lg:w-20 mb-2 sm:mb-0"><i class="fas fa-globe fa-lg mr-2"></i> URL</label>
                <div class="flex-grow">
                    <input id="slug" type="text" name="slug" placeholder="URL du cour" value="{{ $course->slug }}" class="px-3 py-2 border rounded w-full">
                    @error('slug')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="control flex flex-wrap items-center mb-4 flex-grow">
            <label for="content" class="w-full sm:w-32 mb-2 sm:mb-0"><i class="far fa-file-alt fa-lg mr-2"></i> Contenu</label>
            <div class="flex-grow h-full">
                <textarea name="content" id="content" style="min-height: 400px" class="px-3 py-2 border rounded w-full h-full">{{ $course->content }}</textarea>
                @error('content')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="control flex flex-wrap items-center mb-4">
            <label for="category" class="w-full sm:w-32 mb-2 sm:mb-0"><i class="fas fa-columns fa-lg mr-2"></i> Categorie</label>
            <div class="flex-grow">
                <div class="relative w-64 border rounded">
                    <select name="category" id="category" class="block appearance-none w-full px-4 py-2">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $course->category->name == $category->name ? 'selected': '' }}>{{ ucfirst($category->name) }}</option>
                    @endforeach
                    </select>
                    @error('category')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 sm:mt-0 w-full sm:w-auto">
                <button class="bg-green-500 px-4 py-2 rounded text-white">Mettre à jour</button>
            </div>
        </div>
    </form>
</div>

@endsection