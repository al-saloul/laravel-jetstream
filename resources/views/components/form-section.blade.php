@props(['submit'])

<div {{ $attributes->merge(['class' => 'row']) }}>
    <x-section-title class="col-md-4">
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="mt-5 mt-md-0">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="p-4 p-sm-5 bg-white shadow-sm {{ isset($actions) ? 'rounded-top' : 'rounded' }}">
                <div class="row g-3">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="d-flex justify-content-end align-items-center p-4 p-sm-5 bg-light shadow-sm rounded-bottom">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
