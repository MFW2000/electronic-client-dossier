@props(['status'])

@if ($status)
    {{-- TODO: Refactor inline styling. --}}
    <div {{ $attributes->merge(['class' => '', 'style' => 'color: green;']) }}>
        {{ $status }}
    </div>
@endif
