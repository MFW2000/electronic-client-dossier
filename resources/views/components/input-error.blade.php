@props(['messages'])

@if ($messages)
    {{-- TODO: Refactor inline styling. --}}
    <ul {{ $attributes->merge(['class' => '', 'style' => 'color: red;']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
