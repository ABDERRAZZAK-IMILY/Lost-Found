@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $annonce->titre }}</h1>
    
    <div class="mb-4">
        <img src="{{ asset($annonce->image) }}" alt="Image" class="w-full h-64 object-cover rounded-lg shadow-lg">
    </div>

    <p class="text-gray-600 mb-2"><strong>Description:</strong> {{ $annonce->description }}</p>
    <p class="text-gray-600 mb-4"><strong>Location:</strong> {{ $annonce->lieu }}</p>

    <div class="flex gap-4">
        <form method="POST" action="">
            @csrf
            @method('PATCH')
            <button type="submit" class="bg-green-600 hover:bg-green-700 px-5 py-2 rounded-lg shadow-md transition">
                 Trouvé
            </button>
        </form>

        <form method="POST" action="">
            @csrf
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-5 py-2 rounded-lg shadow-md transition">
                 C'est à moi
            </button>
        </form>
    </div>

    {{-- Formulaire pour ajouter un commentaire --}}
    @auth
    <div class="mt-4">
        <h2 class="text-lg font-semibold text-gray-700"> Ajouter un commentaire</h2>
        
        <form method="POST" action="{{ route('comments.store', $annonce->id) }}">
            @csrf
            <textarea name="content" rows="3" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300" placeholder="Écrire un commentaire..." required></textarea>
            
            <button type="submit" class="mt-2 bg-blue-500  px-4 py-2 rounded-lg hover:bg-blue-700">
                Publier
            </button>
        </form>
    </div>
    @endauth
</div>
@endsection
