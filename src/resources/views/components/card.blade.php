@props(['title' => '', 'actions' => null])

<div {!! $attributes->merge(['class' => 'card']) !!}>
    <div class="card-header">
        <h3 class="card-title">{{ __($title) }}</h3>
        <div class="card-actions">
            {{ $actions }}
        </div>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>

{{--

<x-tab::card title="Untitled">
    <x-slot:actions>
        <x-tab::button type="submit" form="form" class="btn btn-primary" icon="check" :label="__('Save')">
        </x-tab::button>
    </x-slot:actions>

    ...
</x-tab::card>

--}}