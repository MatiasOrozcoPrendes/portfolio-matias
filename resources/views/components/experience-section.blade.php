@php
$experiencias = [
[
'puesto' => 'Desarrollador Full Stack',
'empresa' => 'Inmobiliaria José Ale',
'periodo' => 'Mar 2023 – Dic 2024',
'descripcion' => 'Actualización de la web, gestión de base de datos y desarrollo del sistema de gestión de propiedades. Implementación de nuevas funcionalidades y mejoras en la experiencia del usuario.',
'imagen' => 'assets/images/joseale.png',
],
[
'puesto' => 'Técnico de mantenimiento y reparación',
'empresa' => 'Casinos del Estado',
'periodo' => 'Dic 2013 – Actualidad',
'descripcion' => 'Reparación y mantenimiento de slots. Diagnóstico, cambio de componentes y trabajo técnico en campo.',
'imagen' => 'assets/images/casino.jpg',
],
[
'puesto' => 'Analista de sistemas de TI',
'empresa' => 'Yazaki Uruguay S.A.',
'periodo' => 'May 2012 – Oct 2013',
'descripcion' => 'Instalación de puestos de trabajo, soporte HelpDesk, administración básica de servidores, y documentación técnica.',
'imagen' => 'assets/images/yazaki.jpeg',
],
[
'puesto' => 'Help Desk',
'empresa' => 'Hospital Evangélico',
'periodo' => 'Mar 2012 – Abr 2012',
'descripcion' => 'Soporte técnico durante una suplencia. Mantenimiento básico de equipos y atención a usuarios.',
'imagen' => 'assets/images/hospital.jpg',
],
[
'puesto' => 'Analista de Sistemas Jr.',
'empresa' => 'Vidaplan / Hotel Mantra, Casino Nogaró',
'periodo' => 'Dic 2011 – Feb 2012',
'descripcion' => 'HelpDesk, soporte a sistemas de pedidos y atención a usuarios en entorno de hotelería y casino.',
'imagen' => 'assets/images/mantra.jpg',
],
[
'puesto' => 'Auxiliar TI',
'empresa' => 'Yazaki Uruguay S.A.',
'periodo' => 'Nov 2010 – Sep 2011',
'descripcion' => 'Mantenimiento y soporte de estaciones de trabajo. Apoyo general al área de tecnología.',
'imagen' => 'assets/images/yazaki.jpeg',
],
[
'puesto' => 'Docente de Tecnología',
'empresa' => 'UTU',
'periodo' => 'Jul 2009 – Jun 2010',
'descripcion' => 'Enseñanza de herramientas informáticas y conceptos de electrónica básica a estudiantes técnicos.',
'imagen' => 'assets/images/utu.png',
],
];
@endphp

<section id="experiencia" class="relative py-16 px-4 sm:px-6 lg:px-8 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/fondo-experiencia.jpg') }}')">
    <div class="absolute inset-0 bg-white/20 dark:bg-gray-900/20 backdrop-blur-sm z-0"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <h2 class="inline-block text-3xl font-extrabold text-gray-800 dark:text-white mb-12 border-b-4 border-indigo-500 pb-2 bg-white/30 dark:bg-gray-800/30 px-4 rounded">
            Experiencia Laboral
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            @foreach($experiencias as $exp)
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                x-bind:class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out bg-gray-100/50 dark:bg-gray-800/50 backdrop-blur-md rounded-xl shadow-lg p-6 flex flex-col md:flex-row gap-4 items-start hover:scale-[1.02]">
                @if($exp['imagen'])
                <img src="{{ asset($exp['imagen']) }}" alt="Logo empresa" class="w-16 h-16 object-contain rounded">
                @endif
                <div>
                    <h3 class="text-xl font-semibold text-indigo-700 dark:text-indigo-400">{{ $exp['puesto'] }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $exp['empresa'] }} · {{ $exp['periodo'] }}</p>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $exp['descripcion'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>