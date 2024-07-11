@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-danger">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-unstyled text-sm text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
