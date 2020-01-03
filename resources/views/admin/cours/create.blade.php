@extends('layouts.adminApp')

@section('content')
<h3 class="text-2xl mb-8"><i class="fas fa-book-open fa-lg mr-4"></i>Créer un cours</a></h3>

<div class="shadow bg-white flex-grow">
    <form action="{{ route('admin.cours.store') }}" method="post" class="p-4 flex flex-col h-full">
        @csrf
        <div class="control flex flex-wrap items-center mb-4">
            <label for="title" class="w-32"><i class="fas fa-heading fa-lg mr-2"></i> Titre</label>
            <div class="flex-grow">
                <input id="title" type="text" name="title" placeholder="Un titre" value="" class="px-3 py-2 border rounded w-full">
                @error('title')
                <span class="border-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="control flex flex-wrap items-center mb-4">
            <label for="slug" class="w-32"><i class="fas fa-globe fa-lg mr-2"></i> URL</label>
            <div class="flex-grow">
                <input id="slug" type="text" name="slug" placeholder="URL du cour" value="" class="px-3 py-2 border rounded w-full">
                @error('slug')
                <span class="border-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="control flex flex-wrap items-center mb-4 flex-grow">
            <label for="content" class="w-32"><i class="far fa-file-alt fa-lg mr-2"></i> Contenu</label>
            <div class="flex-grow h-full">
                <textarea name="content" id="content" value="" class="px-3 py-2 border rounded w-full h-full"></textarea>
                @error('content')
                <span class="border-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="control flex flex-wrap items-center mb-4">
            <label for="category" class="w-32"><i class="fas fa-columns fa-lg mr-2"></i> Categorie</label>
            <div class="flex-grow">
                <div class="relative w-64 border rounded">
                    <select name="category" id="category" class="block appearance-none w-full px-4 py-2">
                        <option value="javascript">Javascript</option>
                    </select>
                    @error('category')
                    <span class="border-red-500">{{ $message }}</span>
                    @enderror
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button class="bg-green-500 px-4 py-2 rounded text-white">Créer</button>
        </div>
    </form>
</div>

@endsection