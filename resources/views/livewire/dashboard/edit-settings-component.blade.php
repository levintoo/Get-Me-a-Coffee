@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/sweetalert2.css') }}">
    <style>
        label {
            cursor: pointer;
            /* Style as you please, it will become the visible UI component. */
        }
        #upload-photo {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }
    </style>
@endpush
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Edit Profile</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="home-item" href="{{route('dashboard')}}"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item"> <a class="home-item" href="{{route('settings')}}">Profile</a></li>
                        <li class="breadcrumb-item active"> Edit</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0">My Profile</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">

                            <form wire:submit.prevent="save">
                                @if ($photo)
                                    <div class="row mb-2">
                                        <div class="profile-title">
                                            <div class="media">
                                                <img class="img-70 rounded-circle" alt="" src="{{ $photo->temporaryUrl() }}">
                                                <div class="media-body">
                                                    <h3 class="mb-1 f-20 txt-primary">{{$this->name}}</h3>
                                                    @error('photo')<p class="f-12 text-danger">{{ $message }}</p>@enderror

                                                </div>
                                                <div class="m-2">
                                                    <button class="btn btn-primary btn-block" type="submit">Save Photo</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row mb-2">
                                        <div class="profile-title">
                                            <div class="media">
                                                <label for="upload-photo">
                                                    <img class="img-70 rounded-circle" alt="avatar" src="{{ asset('assets/images/users/'.$this->oldphoto) }}">
                                                </label>
                                                <input type="file" name="photo" id="upload-photo" wire:model="photo"/>
                                                <div class="media-body">
                                                    <h3 class="mb-1 f-20 txt-primary">{{$this->name}}</h3>
                                                    @error('photo')<p class="f-12 text-danger">{{ $message }}</p>@enderror

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </form>

                            <form wire:submit.prevent="sendjoke">
                                <div class="mb-3">
                                @if (session()->has('joke'))
                                    <label class="form-label">{{ session('joke') }}</label>
                                @endif
                                    <label class="form-label">Email-Address</label>
                                    <input class="form-control" placeholder="your-email@domain.com" wire:model="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" type="password" value="password">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input class="form-control" type="password" value="password">
                                </div>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">

                    <form class="card" wire:submit.prevent="updateUserdetails">
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0">Edit Profile</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                @if (session()->has('message'))
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Company</label>
                                        <input class="form-control" type="text" placeholder="Company" wire:model="company">
                                        @error('company') <span class="error text-danger">{{ $message }}</span> @enderror

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <input class="form-control" type="text" placeholder="Category" wire:model="category">
                                        @error('category') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" type="text" placeholder="Username" wire:model="username">
                                        @error('username') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input class="form-control" type="text" placeholder="Home Address" wire:model="name">
                                        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input class="form-control" type="text" placeholder="City" wire:model="city">
                                        @error('city') <span class="error text-danger">{{ $message }}</span> @enderror

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <select class="form-control btn-square" wire:model="country">
                                            <option value="">--Select--</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Tanzania">Tanzania</option>
                                        </select>
                                        @error('country') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label">About Me</label>
                                        <textarea class="form-control" rows="5" placeholder="Enter About your description" wire:model="about"></textarea>
                                        @error('about') <span class="error text-danger">{{ $message }}</span> @enderror

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Update Profile</button>
                        </div>
                    </form>
                    <!-- Container-fluid Ends-->
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <div class="page-body d-none">
                <!-- Container-fluid starts                    -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5>Basic Examples</h5>
                                </div>
                                <div class="card-body btn-showcase">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src="{{ asset('assets/dashboard/js/sweet-alert/app.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script>
        @if (session()->has('message'))
        swal("LOL!", "{{ session('message') }}!", "success");
        @endif
    </script>
@endpush
