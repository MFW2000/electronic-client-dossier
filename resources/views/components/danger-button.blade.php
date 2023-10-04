{{-- TODO: Refactor inline styling. --}}
<button {{ $attributes->merge(['type' => 'submit', 'class' => '', 'style' => 'color: red;']) }}>
    {{ $slot }}
</button>
