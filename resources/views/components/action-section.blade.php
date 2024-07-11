<div {{ $attributes->merge(['class' => 'row']) }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="mt-5 mt-md-0">
        <div class="p-4 p-sm-5 bg-white shadow-sm rounded">
            {{ $content }}
        </div>
    </div>
</div>
