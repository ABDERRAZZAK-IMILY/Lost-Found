<script src="https://cdn.tailwindcss.com"></script>
@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">
    <h2 class="text-2xl font-bold text-center text-gray-900">Publier une annonce</h2>


    <form method="POST" action="{{ route('announcements.store') }}" enctype="multipart/form-data" class="mt-6">
    @csrf

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Titre :</label>
        <input type="text" name="titre" required class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Description :</label>
        <textarea name="description" rows="4" required class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"></textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Lieu :</label>
        <input type="text" name="lieu" required class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Date :</label>
        <input type="date" name="date" required class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Photo :</label>
        <input type="file" name="photo" class="w-full border rounded-lg px-3 py-2">
    </div>

    <div class="text-center">
        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Publier</button>
    </div>
</form>

</div>

@endsection
