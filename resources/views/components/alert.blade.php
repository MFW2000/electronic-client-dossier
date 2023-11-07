@props(['message', 'type'])

{{-- Avaliable types: primary, secondary, success, danger, warning, info, light, dark --}}
<div {{ $attributes->merge(['class' => 'alert alert-dismissible fade show alert-'.$type, 'role' => 'alert']) }}>
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
