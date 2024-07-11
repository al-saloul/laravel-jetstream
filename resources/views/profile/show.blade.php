<x-app-layout>
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        @auth
        <h2>
            Welcome,
            <span>{{ auth()->user()->name }}</span>
            . You have logged in via
            <span>{{ auth()->user()->roles->pluck('name')[0] ?? ''  }}</span>
            role
        </h2>
        <hr>
        @endauth

        <div>
            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            <div class="mt-5 sm:mt-0">
                @livewire('profile.update-profile-information-form')
            </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-5 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-5 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-5 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </section>

</x-app-layout>
