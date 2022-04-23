@push('title')
    <title>New dashboard </title>
    @endpush
<x-guest-layout>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">

                    <form class="theme-form login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                        <h4>Login</h4>
                        <h6>Welcome back! Log in to your account.</h6>
                        <x-jet-validation-errors class="mb-3 rounded-0" />

                        @if (session('status'))
                            <div class="alert alert-success mb-3 rounded-0" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                                <input class="form-control" type="email {{ $errors->has('email') ? 'text-danger' : '' }}" placeholder="Test@gmail.com"
                                       name="email" :value="old('email')" >
                                <x-jet-input-error for="email"></x-jet-input-error>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input placeholder="*********"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                       name="password" autocomplete="current-password">
                                <div class="show-hide"><span class="show">                         </span></div>
                                <x-jet-input-error for="password"></x-jet-input-error>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox" name="remember" >
                                <label for="checkbox1">Remember password</label>
                            </div><a class="link" href="forget-password.html">Forgot password?</a>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-block" value="Sign in" type="submit"/>
                        </div>
                        <div class="login-social-title">
                            <h5>Sign in with</h5>
                        </div>
                        <div class="form-group">
                            <ul class="login-social">
                                <li><a href="https://www.linkedin.com/" target="_blank"><i data-feather="linkedin"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i data-feather="twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i data-feather="facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i data-feather="instagram">                  </i></a></li>
                            </ul>
                        </div>
                        <p>Don't have account?<a class="ms-2" href="/register">Create Account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>

