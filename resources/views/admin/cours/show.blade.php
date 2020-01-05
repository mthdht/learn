@extends('layouts.adminApp')

@section('content')
<div class="mb-8">
    <h3 class="text-2xl flex items-center justify-between">
        <div class="">
            <i class="fas fa-book-open fa-lg mr-4"></i>
            {{ $course->title }}
        </div>
        <div class="flex justify-between">
            <a href="{{ route('admin.cours.edit', ['course' => $course->slug]) }}" class="h-8 w-8 flex justify-center items-center bg-orange-500 rounded mr-4" title="Voir le cour">
                <i class="fas fa-pencil-alt text-white"></i>
            </a>
            <form action="{{ route('admin.cours.destroy', ['course' => $course->slug]) }}" method="post" id="delete-cour">
                @csrf
                @method('DELETE')
                <button type="submit" class="h-8 w-8 flex justify-center items-center bg-red-500 rounded" title="supprimer" onclick="event.preventDefault();document.getElementById('modal').style.display = 'flex'"><i class="fas fa-trash-alt text-white"></i></button>
            </form>
        </div>
    </h3>
    <p class="text-sm"> <i class="far fa-clock"></i> Le {{ date('d M', strtotime($course->updated_at)) }}, écrit par {{ ucfirst($course->user->name) }}</p>
</div>


<section class="content markdown">
    @markdown($course->content)
</section>

<section class="modal absolute inset-0 hidden justify-center items-center p-4" style="background: rgba(0,0,0,.6)" id="modal">
    <div class="content md:w-3/4 lg:w-2/3 xl:w-1/2 rounded p-4 bg-gray-100">
        <header class="mb-4">
            <p class="text-2xl">Etes-vous sur de vouloir supprimer ?</p>
            <p class="text-sm">Toute suppression est définitive!</p>
        </header>
        <div class="action flex justify-center">
            <button class="rounded px-4 py-2 bg-gray-300 hover:bg-gray-400 mr-4">Annuler</button>
            <button class="rounded px-4 py-2 bg-red-400 hover:bg-red-500" onclick="document.getElementById('delete-cour').submit()">Supprimer</button>
        </div>
    </div>
</section>


@endsection