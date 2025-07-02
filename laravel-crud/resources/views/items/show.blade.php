@extends('layouts.app')

@section('title', 'Detalle del item')

@section('content')
<div class="bg-white p-6 rounded shadow space-y-4">
    <div>
        <h2 class="text-xl font-semibold">Nombre:</h2>
        <p>{{ $item->name }}</p>
    </div>
    <div>
        <h2 class="text-xl font-semibold">Descripción:</h2>
        <p>{{ $item->description }}</p>
    </div>
    <div class="flex gap-4">
        <a href="{{ route('items.edit', $item) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Editar</a>
        <a href="{{ route('items.index') }}" class="text-gray-600 hover:underline">Volver</a>
    </div>
</div>
@endsection
