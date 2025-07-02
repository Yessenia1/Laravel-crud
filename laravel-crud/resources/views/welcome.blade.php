@extends('layouts.app')


@section('content')
<div class="min-h-screen bg-gray-50 -m-6 p-6">
    <div class="max-w-6xl mx-auto">
        
        <!-- Header Section -->
        <div class="text-center mb-16 pt-16">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-6">
                Sistema de Gestión de Ítems
            </h1>

            <p class="text-lg text-gray-500 max-w-3xl mx-auto leading-relaxed">
                Organice, controle y administre todos sus elementos con herramientas 
                profesionales diseñadas para optimizar la productividad empresarial.
            </p>
        </div>



        <!-- Call to Action -->
        <div class="text-center mb-16">
            <div class="bg-white rounded-2xl p-12 shadow-lg border border-gray-200 max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Comience a Trabajar</h2>
                <p class="text-gray-600 mb-10 text-lg leading-relaxed">
                    Inicie la gestión de sus ítems creando el primer elemento en el sistema. 
                    La plataforma está lista para su uso inmediato.
                </p>
                
                <a href="{{ route('items.index') }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-10 rounded-lg text-lg inline-flex items-center gap-3 shadow-md hover:shadow-lg transition-all duration-300">

                    <span>Ver Ítems</span>
                    <span>→</span>
                </a>

            </div>
        </div>

   

      

        

        <!-- Footer -->
        <div class="text-center py-8 border-t border-gray-200">
            <p class="text-gray-500 mb-2">
                Desarrollado con Laravel Framework y Tailwind CSS
            </p>
            <p class="text-sm text-gray-400">© 2025 - Sistema de Gestión Profesional</p>
        </div>

    </div>
</div>
@endsection