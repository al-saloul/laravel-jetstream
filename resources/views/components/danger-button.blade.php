<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn d-flex align-items-center justify-content-center bg-danger border-0 rounded fw-semibold text-white text-uppercase transition']) }}>
    {{ $slot }}
</button>
