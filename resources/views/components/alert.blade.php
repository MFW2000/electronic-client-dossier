@props(['message', 'variant' => 'info', 'dismissible' => false])

@php
    $variants = [
        'primary',
        'secondary',
        'success',
        'danger',
        'warning',
        'info',
        'light',
        'dark',
    ];

    if (! in_array($variant, $variants)) {
        $variant = 'info';
    }

    $classes = ($dismissible ?? false)
        ? 'alert alert-'.$variant.' alert-dismissible fade show'
        : 'alert alert-'.$variant;
@endphp

@if ($message)
    <div {{ $attributes->merge(['class' => $classes, 'role' => 'alert']) }}>
        {{ $message }}

        @if ($dismissible)
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        @endif
    </div>
@endif
