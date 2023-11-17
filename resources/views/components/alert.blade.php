@props(['message', 'type' => 'info', 'dismissible' => false])

@php
    $types = [
        'primary',
        'secondary',
        'success',
        'danger',
        'warning',
        'info',
        'light',
        'dark',
    ];

    if (! in_array($type, $types)) {
        $type = 'info';
    }

    $classes = ($dismissible ?? false)
        ? 'alert alert-'.$type.' alert-dismissible fade show'
        : 'alert alert-'.$type;
@endphp

@if ($message)
    <div {{ $attributes->merge(['class' => $classes, 'role' => 'alert']) }}>
        {{ $message }}

        @if ($dismissible)
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        @endif
    </div>
@endif
