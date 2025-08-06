@props([
'href' => '#',
'icon' => '',
])

<a href="{{ $href }}"
    {{ $attributes->merge(['class' =>
       'relative inline-flex items-center gap-1 px-2 py-1 text-sm md:text-base font-semibold uppercase
        text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400
        after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-indigo-500 dark:after:bg-indigo-400
        hover:after:w-full after:transition-all after:duration-300']) }}>
    <span>{{ $icon }}</span> {{ $slot }}
</a>