@props(['variant' => 'link', 'route'])

@php
    $classes = '';
    $variants = [
        'primary',
        'secondary',
        'success',
        'danger',
        'warning',
        'info',
        'light',
        'dark',
        'link',
        'unstyled',
    ];

    if (! in_array($variant, $variants)) {
        $variant = 'link';
    }

    if ($variant !== 'link' || $variant !== 'unstyled') {
        $classes = 'btn btn-'.$variant;
    } elseif ($variant === 'unstyled') {
        $classes = 'text-reset text-decoration-none';
    }
@endphp

<a {{ $attributes->merge(['href' => route($route), 'class' => $classes]) }}>
    {{ $slot }}
</a>
