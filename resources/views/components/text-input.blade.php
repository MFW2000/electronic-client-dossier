@props(['messages'])

@php
    $classes = ($messages ?? null) ? 'form-control is-invalid' : 'form-control';
@endphp

<input {{ $attributes->merge(['class' => $classes]) }}>
