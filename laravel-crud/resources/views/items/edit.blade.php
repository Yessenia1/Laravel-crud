@extends('layouts.app')

@section('title', 'Editar item')

@section('content')
<form method="POST" action="{{ route('items.update', $item) }}" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    @method('PUT')
    <div>
        <label class="block font-semibold mb-1">Nombre:</label>
        <input type="text" name="name" value="{{ $item->name }}" required class="w-full border-gray-300 rounded p-2 border">
    </div>
    <div>
        <label class="block font-semibold mb-1">Descripción:</label>
        <textarea name="description" class="w-full border-gray-300 rounded p-2 border" rows="4">{{ $item->description }}</textarea>
    </div>
    <div class="flex gap-3">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Actualizar</button>
        <a href="{{ route('items.index') }}" class="text-gray-600 hover:underline">Cancelar</a>
    </div>
</form>
@endsection
