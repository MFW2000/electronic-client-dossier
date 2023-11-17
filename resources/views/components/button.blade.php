@props(['type' => 'submit', 'variant' => 'primary'])

@php
    $types = [
        'button',
        'submit',
        'reset',
    ];

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
    ];

    if (! in_array($type, $types)) {
        $type = 'submit';
    }

    if (! in_array($variant, $variants)) {
        $variant = 'primary';
    }
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => 'btn btn-'.$variant ]) }}>
    {{ $slot }}
</button>
