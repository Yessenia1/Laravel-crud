@extends('layouts.app')

@section('title', 'Lista de Items')

@section('content')
<a href="{{ route('items.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Nuevo Item</a>

@if($items->count())
    <ul class="space-y-2">
        @foreach ($items as $item)
            <li class="bg-white p-4 rounded shadow flex justify-between items-center">
                <div>
                    <strong class="text-lg">{{ $item->name }}</strong><br>
                    <span class="text-sm text-gray-600">{{ $item->description }}</span>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('items.edit', $item) }}" class="text-blue-600 hover:underline">Editar</a>
                    <form action="{{ route('items.destroy', $item) }}" method="POST" onsubmit="return confirm('¿Eliminar?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@else
    <p>No hay items aún.</p>
@endif
@endsection
