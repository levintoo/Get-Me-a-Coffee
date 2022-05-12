@push('title')
    <title>Register</title>
@endpush
<x-guest-layout>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card h-auto">
                    <form class="theme-form login-form m-auto" method="POST" action="{{ route('register') }}">
                        @csrf
                        <h4>Create Account</h4>
                        @if (session('status'))
                            <div class="alert alert-success mb-3 rounded-0" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-group"><span class="input-group-text"><i class="fa fa-camera-retro"></i></span>
                                <input type="text" class="form-control" {{ $errors->has('name') ? 'is-invalid' : '' }}
                                       name="name"
                                       :value="old('name')"
                                       placeholder="John Doe"
                                       autofocus autocomplete="name">
                                @error('name')
                                <div class="input-group">
                                <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <div class="input-group"><span class="input-group-text"><i class="fa fa-camera-retro"></i></span>
                                <input type="text" class="form-control" {{ $errors->has('username') ? 'is-invalid' : '' }}
                                name="username"
                                       :value="old('name')"
                                       placeholder="JohnDoe"
                                       autofocus autocomplete="username">
                                @error('username')
                                <div class="input-group">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <div class="input-group"><span class="input-group-text"><i class="fa fa-camera-retro"></i></span>
                                <input class="form-control" {{ $errors->has('phone') ? 'is-invalid' : '' }} type="text" name="phone"
                                :value="old('phone')" placeholder="+254700123456"  autofocus autocomplete="[phone]">
                                @error('phone')
                                <div class="input-group">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>ID</label>
                            <div class="input-group"><span class="input-group-text"><i class="fa fa-camera-retro"></i></span>
                                <input class="form-control"  {{ $errors->has('national_id') ? 'is-invalid' : '' }} type="number" name="national_id"
                                       :value="old('national_id')" placeholder="12345678"  autofocus autocomplete="national_id" >
                                @error('national_id')
                                <div class="input-group">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>About</label>
                            <span class="input-group-text"><i class="fa fa-camera-retro"></i></span>
                            <div class="input-group">
                                <textarea type="text" class="form-control" {{ $errors->has('about') ? 'is-invalid' : '' }}
                                name="about"
                                       :value="old('name')"
                                       placeholder="SHort description of John Doe"
                                       autofocus autocomplete="about"></textarea>
                                @error('about')
                                <div class="input-group">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <div class="input-group"><span class="input-group-text"><i class="fa fa-camera-retro"></i></span>
                                <input type="text" class="form-control" {{ $errors->has('category') ? 'is-invalid' : '' }}
                                name="category"
                                       :value="old('category')"
                                       placeholder="youtuber"
                                       autofocus autocomplete="category">
                                @error('category')
                                <div class="input-group">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope-o" ></i></span>
                                <input class="form-control"class="fa fa-envelope-o"
                                       type="email" {{ $errors->has('email') ? 'is-invalid' : '' }}
                                       placeholder="Test@gmail.com"
                                       name="email" :value="old('email')">
                                <x-jet-input-error for="email"></x-jet-input-error>
                                @error('email')
                                <div class="input-group">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input placeholder="*********"
                                       class="form-control" {{ $errors->has('password') ? ' is-invalid' : '' }}
                                       type="password"
                                       name="password" autocomplete="current-password">
                                <div class="show-hide"><span class="show">                         </span></div>
                                @error('password')
                                <div class="input-group">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input placeholder="*********"
                                       class="form-control" {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}
                                       type="password" name="password_confirmation"  autocomplete="new-password">
                                <div class="show-hide"><span class="show">                         </span></div>
                                @error('password_confirmation')
                                <div class="input-group">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <p>Already registered?<a class="ms-2" href="{{ route('login') }}">Log In</a></p>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-block" value="Register" type="submit"/>
                        </div>
                        <div class="login-social-title">
                            <h5>Sign in with</h5>
                        </div>
                        <div class="form-group">
                            <ul class="login-social">
                                <li><a href="https://www.linkedin.com/" target="_blank"><i data-feather="linkedin"></i></a>
                                </li>
                                <li><a href="https://twitter.com/" target="_blank"><i data-feather="twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i data-feather="facebook"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            data-feather="instagram"> </i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
