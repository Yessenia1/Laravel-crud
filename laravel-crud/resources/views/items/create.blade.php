@extends('layouts.app')

@section('title', 'Crear nuevo item')

@section('content')
<form method="POST" action="{{ route('items.store') }}" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    <div>
        <label class="block font-semibold mb-1">Nombre:</label>
        <input type="text" name="name" required class="w-full border-gray-300 rounded p-2 border">
    </div>
    <div>
        <label class="block font-semibold mb-1">Descripción:</label>
        <textarea name="description" class="w-full border-gray-300 rounded p-2 border" rows="4"></textarea>
    </div>
    <div class="flex gap-3">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Guardar</button>
        <a href="{{ route('items.index') }}" class="text-gray-600 hover:underline">Cancelar</a>
    </div>
</form>
@endsection
