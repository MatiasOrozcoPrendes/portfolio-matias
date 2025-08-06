<!-- Skills Section -->
<section id="skills" class="relative py-16 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-extrabold text-gray-800 dark:text-white mb-12 border-b-4 border-indigo-500 inline-block pb-2">
            Habilidades
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Lenguajes y tecnologías -->
            <div class="bg-gray-100 dark:bg-gray-800 rounded-xl shadow-md p-6 space-y-4">
                <h3 class="text-xl font-semibold text-indigo-700 dark:text-indigo-400">Lenguajes & Tecnologías</h3>

                @php
                $skills = [
                ['nombre' => 'Laravel', 'nivel' => 90],
                ['nombre' => 'Livewire / Jetstream', 'nivel' => 85],
                ['nombre' => 'TailwindCSS', 'nivel' => 85],
                ['nombre' => 'PHP / HTML / CSS / JS', 'nivel' => 90],
                ['nombre' => 'MySQL', 'nivel' => 80],
                ['nombre' => 'Java / Spring Tools', 'nivel' => 60],
                ['nombre' => 'Git & GitHub', 'nivel' => 75],
                ];
                @endphp

                @foreach($skills as $skill)
                <div x-data="{ visible: false }" x-init="setTimeout(() => visible = true, 100)">
                    <div class="flex justify-between text-sm text-gray-700 dark:text-gray-300 font-medium">
                        <span>{{ $skill['nombre'] }}</span>
                        <span x-show="visible" x-transition>{{ $skill['nivel'] }}%</span>
                    </div>
                    <div class="w-full bg-gray-300 dark:bg-gray-700 rounded-full h-3 mt-1 overflow-hidden">
                        <div
                            class="h-full bg-indigo-500 transition-all duration-1000"
                            :style="visible ? 'width: {{ $skill['nivel'] }}%' : 'width: 0%'"></div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Aptitudes -->
            <div class="bg-gray-100 dark:bg-gray-800 rounded-xl shadow-md p-6 justify-between space-y-4">
                <div>
                    <h3 class="text-xl font-semibold text-indigo-700 dark:text-indigo-400 mb-2">Aptitudes</h3>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-1">
                        <li>Trabajo en equipo</li>
                        <li>Resolución de problemas</li>
                        <li>Confidencialidad</li>
                        <li>Manejo de documentación</li>
                        <li>Adaptabilidad</li>
                        <li>Aprendizaje continuo</li>
                        <li>Trato con clientes y empleados</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-indigo-700 dark:text-indigo-400 mb-2">Idiomas</h3>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-1">
                        <li>Español (nativo)</li>
                        <li>Inglés (básico - A2)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>