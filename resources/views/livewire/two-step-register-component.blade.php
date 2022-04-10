<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{route('resgister-otp-validate')}}">
                @csrf
                <div class="mb-3">
                    <x-jet-label value="{{ __('Otp') }}" />
                    
                    <x-jet-input class="form-control{{ $errors->has('otp') ? ' is-invalid' : '' }}" type="number"
                                 name="otp" required autocomplete="current-otp" />
                    <x-jet-input-error for="otp"></x-jet-input-error>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        @if (Route::has('password.request'))
                            <a class="text-muted me-3" href="">
                                {{ __('Didnt receive code?') }}
                            </a>
                        @endif

                        <x-jet-button>
                            {{ __('Verify') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>