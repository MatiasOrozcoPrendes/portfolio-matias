<!-- Education Section -->
<section id="educacion" class="relative py-16 px-4 sm:px-6 lg:px-8 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/fondo-educacion.jpg') }}')">
    <div class="absolute inset-0 bg-white/20 dark:bg-gray-900/20 backdrop-blur-sm z-0"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <h2 class="inline-block text-3xl font-extrabold text-gray-800 dark:text-white mb-12 border-b-4 border-indigo-500 pb-2 bg-white/30 dark:bg-gray-800/30 px-4 rounded">
            Educación
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            @php
                $educacion = [
                    ['titulo' => 'Bachiller en Electro Electrónica', 'institucion' => 'UTU - Colonia del Sacramento', 'periodo' => '2006 – 2008'],
                    ['titulo' => 'Analista Programador', 'institucion' => 'ORT / CTC - Colonia del Sacramento', 'periodo' => '2006 – 2010'],
                    ['titulo' => 'Diseño y Desarrollo de Aplicaciones Móviles', 'institucion' => 'CTC - Colonia del Sacramento', 'periodo' => '2022'],
                    ['titulo' => 'Diseño y Desarrollo de Aplicaciones', 'institucion' => 'CTC - Colonia del Sacramento', 'periodo' => '2022'],
                    ['titulo' => 'Inglés para Desarrollo (Nivel Elementary)', 'institucion' => 'Coderhouse (Online)', 'periodo' => '2023 – Actualidad'],
                    ['titulo' => 'Técnico en Soporte Informático (incompleto)', 'institucion' => 'CTC - Colonia del Sacramento', 'periodo' => '2013 – 2015'],
                ];
            @endphp

            @foreach($educacion as $edu)
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    x-bind:class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="transition-all duration-700 ease-out bg-gray-100/50 dark:bg-gray-800/50 backdrop-blur-md rounded-xl shadow-lg p-6 space-y-2">
                    
                    <h3 class="text-xl font-semibold text-indigo-700 dark:text-indigo-400">{{ $edu['titulo'] }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $edu['institucion'] }} · {{ $edu['periodo'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>