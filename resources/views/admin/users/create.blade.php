@extends('layouts.adminApp')

@section('content')
<h3 class="text-2xl mb-8"><i class="fas fa-book-open fa-lg mr-4"></i>Créer un utilisateur</a></h3>

<div class="shadow bg-white rounded">
    <form action="{{ route('admin.utilisateurs.store') }}" method="post" class="p-4 flex flex-col">
        @csrf
        <div class="">
            <div class="control flex flex-wrap items-center mb-4">
                <label for="name" class="w-full sm:w-32 mb-2 sm:mb-0"><i class="fas fa-user fa-lg mr-2"></i> Name</label>
                <div class="flex-grow">
                    <input id="name" type="text" name="name" placeholder="Un nom" value="{{ old('name') }}" class="px-3 py-2 border rounded w-full focus:bg-gray-100">
                    @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="control flex flex-wrap items-center mb-4">
                <label for="email" class="w-full sm:w-32 mb-2 sm:mb-0"><i class="fas fa-envelope fa-lg mr-2"></i>Email</label>
                <div class="flex-grow">
                    <input id="email" type="text" name="email" placeholder="URL du cour" value="{{ old('email') }}" class="px-3 py-2 border rounded w-full focus:bg-gray-100">
                    @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="control flex flex-wrap items-center mb-4">
            <label for="role" class="w-full sm:w-32 mb-2 sm:mb-0"><i class="fas fa-columns fa-lg mr-2"></i> Role</label>
            <div class="flex-grow">
                <div class="relative w-64 border rounded">
                    <select name="role" id="role" class="block appearance-none w-full px-4 py-2">
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ old('role') == $role->id ? 'selected' : '' }}>{{ ucfirst($role->name) }}</option>
                    @endforeach
                    </select>
                    @error('role')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 sm:mt-0 w-full sm:w-auto">
                <button class="bg-green-500 px-4 py-2 rounded text-white">Créer</button>
            </div>
        </div>

        
    </form>
</div>

@endsection