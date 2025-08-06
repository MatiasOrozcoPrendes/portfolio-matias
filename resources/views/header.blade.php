<header x-data="{ open: false }" class="sticky top-0 z-50 bg-white dark:bg-gray-900 shadow-md transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <!-- Logo y nombre -->
        <div class="flex items-center space-x-4">
            <img src="{{ asset('assets/icons/favicon.png') }}" alt="Logo" class="h-10 w-auto rounded-full shadow-md">
            <!-- Nombre -->
            <a href="{{ route('home') }}" class="text-2xl font-extrabold tracking-widest text-gray-800 dark:text-white uppercase hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                Matías Orozco
            </a>
        </div>

        <!-- Botón hamburguesa -->
        <button @click="open = !open" class="md:hidden text-gray-700 dark:text-gray-200 focus:outline-none">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Menú en desktop -->
        <nav class="hidden md:flex space-x-4 items-center">
            <x-nav-link href="#sobre-mi" icon="👤">Sobre mí</x-nav-link>
            <x-nav-link href="#experiencia" icon="💼">Experiencia</x-nav-link>
            <x-nav-link href="#educacion" icon="🎓">Educación</x-nav-link>
            <x-nav-link href="#skills" icon="🛠️">Skills</x-nav-link>
            <x-nav-link href="#proyectos" icon="📂">Proyectos</x-nav-link>
            <x-nav-link href="#contacto" icon="✉️">Contacto</x-nav-link>
        </nav>
    </div>

    <!-- Menú desplegable en móvil -->
    <nav x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2"
        class="md:hidden px-4 pb-4 space-y-2 bg-white dark:bg-gray-900">

        <a href="#sobre-mi" class="block nav-item text-gray-700 dark:text-gray-200" @click="open = false"><span>👤</span> Sobre mí</a>
        <a href="#experiencia" class="block nav-item text-gray-700 dark:text-gray-200" @click="open = false"><span>💼</span> Experiencia</a>
        <a href="#educacion" class="block nav-item text-gray-700 dark:text-gray-200" @click="open = false"><span>🎓</span> Educación</a>
        <a href="#skills" class="block nav-item text-gray-700 dark:text-gray-200" @click="open = false"><span>🛠️</span> Skills</a>
        <a href="#proyectos" class="block nav-item text-gray-700 dark:text-gray-200" @click="open = false"><span>📂</span> Proyectos</a>
        <a href="#contacto" class="block nav-item text-gray-700 dark:text-gray-200" @click="open = false"><span>✉️</span> Contacto</a>
    </nav>

</header>