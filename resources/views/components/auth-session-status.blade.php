@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-success alert-dismissible fade show']) }}>
        <div>{{ $status }}</div>
        <button type="button" data-bs-dismiss="alert" class="btn-close"></button>
    </div>
@endif
