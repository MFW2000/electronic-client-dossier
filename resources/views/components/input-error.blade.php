@props(['messages'])

@if ($messages)
    @if (count($messages) > 1)
        <ul {{ $attributes->merge(['class' => 'mb-0 invalid-feedback']) }}>
            @foreach ((array) $messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @else
        <div {{ $attributes->merge(['class' => 'mb-0 invalid-feedback']) }}>
            <span>{{ $messages[0] }}</span>
        </div>
    @endif
@endif
