@extends('layouts.adminApp')

@section('content')
<div class="cards flex flex-wrap -mx-2">
    <div class="card w-full sm:w-1/2 p-2">
        <div class="flex text-xl bg-red-500 p-4 rounded text-white items-center justify-between shadow">
            <i class="fas fa-user mr-4 fa-3x"></i>
            <div class="text-center items-center flex">
                <p class="text-3xl">{{ $usersCount }}</p>
            </div>
        </div>
    </div>

    <div class="card w-full sm:w-1/2 p-2">
        <div class="flex text-xl bg-yellow-500 p-4 rounded text-white items-center justify-between shadow">
            <i class="fas fa-book-open mr-4 fa-3x"></i>
            <div class="text-center items-center flex">
                <p class="text-3xl">{{ $coursesCount }}</p>
            </div>
        </div>
    </div>
</div>

<div class="lasts flex flex-wrap -mx-2">
    <div class="w-full md:w-1/2 p-2">
        <div class="card shadow bg-white border-t-4 border-yellow-500 rounded">
            <h3 class="border-b p-4 font-bold">Derniers Cours</h3>
            <table class="w-full">
                @foreach($lastCourses as $course)
                <tr class="hover:bg-gray-200 flex items-center">
                    <td class="w-16"><i class="{{ $course->category->icon }} fa-2x px-4 py-2 text-{{ $course->category->color }}"></i></td>
                    <td class="p-2 flex-grow troncate">{{ $course->title}}</td>
                    <td class="p-2 flex">
                        <a href="{{ route('admin.cours.show', ['course' => $course->slug]) }}" class="w-8 h-8 flex items-center justify-center bg-blue-500 rounded text-white mr-2" title="Voir"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.cours.edit', ['course' => $course->slug]) }}" class="w-8 h-8 flex items-center justify-center bg-orange-500 rounded text-white" title="Editer"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="w-full md:w-1/2 p-2">
        <div class="card shadow bg-white border-t-4 border-red-500 rounded">
            <h3 class="border-b p-4 font-bold">Derniers Inscrits</h3>
            <table class="w-full">
            @foreach($lastUsers as $user)
                <tr class="hover:bg-gray-200 flex items-center">
                    <td class="w-16"><img src="{{ isset($user->profile->avatar) ? asset('storage/' . $user->profile->avatar) : 'https://www.w3schools.com/howto/img_avatar.png'}}" alt="" class="w-8 h-8 rounded-full mx-auto"></td>
                    <td class="p-2 flex-grow">Mthdht</td>
                    <td class="p-2 flex">
                        <a href="{{ route('admin.utilisateurs.show', ['user' => $user->name]) }}" class="w-8 h-8 flex items-center justify-center bg-blue-500 rounded text-white mr-2" title="Voir"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.utilisateurs.show', ['user' => $user->name]) }}" class="w-8 h-8 flex items-center justify-center bg-orange-500 rounded text-white" title="Editer"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection