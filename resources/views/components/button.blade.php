<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark text-uppercase font-weight-bold text-white']) }}>
    {{ $slot }}
</button>
