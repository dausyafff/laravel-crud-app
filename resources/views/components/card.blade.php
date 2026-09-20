@props([
    'title' => 'Judul Default',
])

<div {{ $attributes->merge(['class' => 'bg-white p-6 rounded-lg shadow-md']) }}>
    <h2 class="text-xl font-bold mb-2">{{ $title }}</h2>
    <div>
        {{ $slot }}
    </div>
</div>
