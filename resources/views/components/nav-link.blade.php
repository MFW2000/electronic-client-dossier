@props(['active'])

@php
// TODO: Readd this later and remove $styles.
// $classes = ($active ?? false) ? '' : '';
$classes = '';
$styles = ($active ?? false) ? 'font-weight: bold;' : '';
@endphp

<a {{ $attributes->merge(['class' => $classes, 'style' => $styles]) }}>
    {{ $slot }}
</a>
