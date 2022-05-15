@push('title')
    <title>Otp Validation</title>
@endpush
<x-guest-layout>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <form class="theme-form login-form" method="POST" action="{{route('validateOTP')}}">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-success mb-3 rounded-0" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('message'))
                            <div class="alert alert-danger mb-3 rounded-0" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Otp</label>
                            <div class="input-group"><span class="input-group-text"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                <input class="form-control" {{ $errors->has('otp') ? ' is-invalid' : '' }}
                                       type="number"
                                       name="otp" autocomplete="current-otp">

                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-block" value="Verify" type="submit"/>
                        </div>
                        <p>Didnt receive code?<a class="ms-2" type="submit" wire:click.preventdefault="generateOTP">Resend</a></p>
                    </form>
                    </div>
                </div>
            </div>
        </div>

</x-guest-layout>
