<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-indigo-600 leading-tight text-center">
            {{ __('Bienvenido al Sistema de Bolsa Laboral') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 border-4 border-indigo-700 rounded-xl">
                <!-- Animación de bienvenida -->
                <div class="text-center">
                    <h3 class="text-4xl font-bold text-indigo-800 animate__animated animate__fadeIn animate__delay-1s">
                        ¡Explora nuevas oportunidades laborales!
                    </h3>
                    <p class="mt-4 text-lg text-gray-600 animate__animated animate__fadeIn animate__delay-2s">
                        Aquí puedes encontrar ofertas de trabajo ajustadas a tu perfil y comenzar tu carrera profesional.
                    </p>
                </div>
                <!-- Animación de íconos de acción -->
                <div class="grid grid-cols-2 gap-6 mt-8 text-center">
                    <div class="p-4 bg-indigo-100 rounded-lg shadow-xl transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-briefcase text-4xl text-indigo-600"></i>
                        <p class="mt-2 text-xl font-semibold text-indigo-700">Buscar Ofertas</p>
                    </div>
                    <div class="p-4 bg-indigo-100 rounded-lg shadow-xl transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-search text-4xl text-indigo-600"></i>
                        <p class="mt-2 text-xl font-semibold text-indigo-700">Explorar Empresas</p>
                    </div>
                    <div class="p-4 bg-indigo-100 rounded-lg shadow-xl transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-user-circle text-4xl text-indigo-600"></i>
                        <p class="mt-2 text-xl font-semibold text-indigo-700">Mi Perfil</p>
                    </div>
                    <div class="p-4 bg-indigo-100 rounded-lg shadow-xl transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-file-alt text-4xl text-indigo-600"></i>
                        <p class="mt-2 text-xl font-semibold text-indigo-700">Mis Postulaciones</p>
                    </div>
                </div>
                <!-- Sin funcionalidad, solo imagen -->
                <div class="mt-10 text-center">
                    <img src="https://via.placeholder.com/600x400" alt="Imagen de bienvenida" class="mx-auto rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Dependencias externas (se agregan en el archivo layout principal si no están ya incluidas) -->
<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Animate.css para animaciones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
