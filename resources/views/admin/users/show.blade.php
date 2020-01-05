@extends('layouts.adminApp')

@section('content')
@if($errors->any())
{{ dump($errors)}}
@endif
<div class="mb-8">
    <h3 class="text-2xl flex items-center justify-between">
        <div class="">
            <i class="fas fa-user fa-lg mr-4"></i>
            {{ $user->name }}
        </div>
        <div class="flex justify-between">
            <form action="{{ route('admin.utilisateurs.destroy', ['user' => $user->name]) }}" method="post" id="delete-user">
                @csrf
                @method('DELETE')
                <button type="submit" class="h-8 w-8 flex justify-center items-center bg-red-500 rounded" title="supprimer" onclick="event.preventDefault();document.getElementById('modal').style.display = 'flex'"><i class="fas fa-trash-alt text-white"></i></button>
            </form>
        </div>
    </h3>
</div>

<section class="">
        <form action="{{ route('admin.utilisateurs.update', ['user' => $user->name]) }}" method="post" class="flex flex-col md:flex-row -mx-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="md:w-1/2 p-4">
                <div class="shadow rounded bg-gray-200 p-4">
                    <div class="avatar mb-4 relative group rounded-full w-32 h-32 mx-auto overflow-hidden">
                        <img class="" src="{{ isset($user->profile->avatar) ? asset('storage/' . $user->profile->avatar) : 'https://www.w3schools.com/howto/img_avatar.png' }}" alt="avatar">
                        <div for="avatar-image" class="hidden group-hover:flex flex-col absolute inset-0 z-10 justify-center items-center" style="background: rgba(0,0,0,.6)" onclick="document.getElementById('avatar-image').click()">
                            <i class="fas fa-images text-white fa-2x"></i>
                            <p class="text-sm text-white">Change img</p>
                        </div>
                        <input type="file" name="avatar-image" id="avatar-image" class="hidden">
                        @error('avatar-image')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="control flex items-center mb-4 relative">
                        <label for="rol" class="w-24">Statut: </label>
                        <div class="flex-grow">
                            <div class="relative rounded">
                                <select name="role" id="role" class="block appearance-none w-full px-3 py-2 bg-gray-200">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" class="p-0" {{ old('role') == $role->id ? 'selected' : '' }}>{{ ucfirst($role->name) }}</option>
                                @endforeach
                                </select>
                                @error('role')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <span class="absolute right-0 mr-4 pointer-events-none" for="last_name"><i class="fas fa-pencil-alt text-blue-500 ml-4"></i></span>
                    </div>

                    <div class="control flex items-center mb-4 relative">
                        <label for="last_name" class="w-24">Nom: </label>
                        <div class="flex-grow">
                            <input id="last_name" type="text" name="last_name" value="{{ $user->profile->last_name ?? '' }}" class="px-3 py-2 focus:border rounded w-full focus:bg-gray-300 bg-gray-200">
                            @error('last_name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <span class="absolute right-0 mr-4 pointer-events-none" for="last_name"><i class="fas fa-pencil-alt text-blue-500 ml-4"></i></span>
                    </div>

                    <div class="control flex items-center mb-4 relative">
                        <label for="first_name" class="w-24">Prénom: </label>
                        <div class="flex-grow">
                            <input id="first_name" type="text" name="first_name" value="{{ $user->profile->first_name ?? '' }}" class="px-3 py-2 focus:border rounded w-full focus:bg-gray-300 bg-gray-200">
                            @error('first_name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <span class="absolute right-0 mr-4 pointer-events-none" for="first_name"><i class="fas fa-pencil-alt text-blue-500 ml-4"></i></span>
                    </div>
                </div>
            </div>
            
            <div class="md:w-1/2 p-4">
                <div class="shadow rounded bg-gray-200 p-4 h-full">
                    <div class="control flex items-center mb-4 relative">
                        <label for="email" class="w-24">Email: </label>
                        <div class="flex-grow">
                            <input id="email" type="email" name="email" value="{{ $user->email ?? '' }}" class="px-3 py-2 focus:border rounded w-full focus:bg-gray-300 bg-gray-200">
                            @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <span class="absolute right-0 mr-4 pointer-events-none" for="job"><i class="fas fa-pencil-alt text-blue-500 ml-4"></i></span>
                    </div>

                    <div class="control flex items-center mb-4 relative">
                        <label for="job" class="w-24">Job: </label>
                        <div class="flex-grow">
                            <input id="job" type="text" name="job" value="{{ $user->profile->job ?? '' }}" class="px-3 py-2 focus:border rounded w-full focus:bg-gray-300 bg-gray-200">
                            @error('job')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <span class="absolute right-0 mr-4 pointer-events-none" for="job"><i class="fas fa-pencil-alt text-blue-500 ml-4"></i></span>
                    </div>

                    <div class="control flex items-center mb-4 relative">
                        <label for="website" class="w-24">Website: </label>
                        <div class="flex-grow">
                            <input id="website" type="text" name="website" value="{{ $user->profile->website ?? '' }}" class="px-3 py-2 focus:border rounded w-full focus:bg-gray-300 bg-gray-200">
                            @error('website')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <span class="absolute right-0 mr-4 pointer-events-none" for="website"><i class="fas fa-pencil-alt text-blue-500 ml-4"></i></span>
                    </div>

                    <div class="control flex mb-4 relative">
                        <label for="bio" class="w-24 mt-2">Bio: </label>
                        <div class="flex-grow">
                            <textarea id="bio" type="text" name="bio" class="px-3 py-2 focus:border rounded w-full focus:bg-gray-300 bg-gray-200 resize-none">{{ $user->profile->bio ?? '' }}</textarea>
                            @error('bio')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <span class="absolute right-0 mr-4  mt-2 pointer-events-none" for="website"><i class="fas fa-pencil-alt text-blue-500 ml-4"></i></span>
                    </div>
                    <div class="flex">
                        <button type="submit" class="rounded px-4 py-2 bg-green-500 text-white mx-auto">Mettre à jour</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



<section class="modal absolute inset-0 hidden justify-center items-center p-4" style="background: rgba(0,0,0,.6)" id="modal">
    <div class="content md:w-3/4 lg:w-2/3 xl:w-1/2 rounded p-4 bg-gray-100">
        <header class="mb-4">
            <p class="text-2xl">Etes-vous sur de vouloir supprimer ?</p>
            <p class="text-sm">Toute suppression est définitive!</p>
        </header>
        <div class="action flex justify-center">
            <button class="rounded px-4 py-2 bg-gray-300 hover:bg-gray-400 mr-4" onclick="document.getElementById('modal').style.display = 'none'">Annuler</button>
            <button class="rounded px-4 py-2 bg-red-400 hover:bg-red-500" onclick="document.getElementById('delete-user').submit()">Supprimer</button>
        </div>
    </div>
</section>


@endsection