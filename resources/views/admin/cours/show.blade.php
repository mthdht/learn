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
            <form action="{{ route('admin.cours.destroy', ['course' => $course->slug]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="h-8 w-8 flex justify-center items-center bg-red-500 rounded" title="supprimer"><i class="fas fa-trash-alt text-white"></i></button>
            </form>
        </div>
    </h3>
    <p class="text-sm"> <i class="far fa-clock"></i> Le {{ date('d M', strtotime($course->updated_at)) }}, écrit par {{ ucfirst($course->user->name) }}</p>
</div>


<section class="content">
    @markdown($course->content)
</section>


@endsection