@push('title')
    <title>Forgot Passsword</title>
@endpush
<x-guest-layout>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">

                    <form class="theme-form login-form" method="POST" action="/forgot-password">
                        @csrf

                        <h6>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h6>
                        <x-jet-validation-errors class="mb-3 rounded-0" />

                        @if (session('status'))
                            <div class="alert alert-success mb-3 rounded-0" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                                <input class="form-control" type="email" name="email" :value="old('email')" required autofocus >
                            </div>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary btn-block" value="Email Password Reset Link" type="submit"/>
                        </div>
                        <p>Don't have account?<a class="ms-2" href="{{route('register')}}">Create Account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>

