@props(['message', 'variant' => 'info', 'dismissible' => false])

@php
    $icon = '';
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

    switch ($variant) {
        case 'info':
            $icon = 'bi-info-circle-fill';
            break;
        case 'success':
            $icon = 'bi-check-circle-fill';
            break;
        case 'warning':
        case 'danger':
            $icon = 'bi-exclamation-triangle-fill';
            break;
    }

    $classes = ($dismissible ?? false)
        ? 'alert alert-'.$variant.' alert-dismissible fade show'
        : 'alert alert-'.$variant;
@endphp

@if ($message)
    <div {{ $attributes->merge(['class' => $classes, 'role' => 'alert']) }}>
        @if ($icon)
            <i class="bi {{ $icon }}"></i>
        @endif

        <span>{{ $message }}</span>

        @if ($dismissible)
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        @endif
    </div>
@endif
