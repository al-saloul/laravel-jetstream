<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn d-flex align-items-center mx-1 bg-white border border-secondary rounded fw-semibold text-secondary text-uppercase shadow-sm transition float-start']) }}>
    {{ $slot }}
</button>
