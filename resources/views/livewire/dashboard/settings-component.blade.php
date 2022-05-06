@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/sweetalert2.css') }}">
@endpush
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Settings</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="home-item" href="index-2.html"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item"> Dashboard</li>
                        <li class="breadcrumb-item active"> profile</li>
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
                            <form>
                                <div class="row mb-2">
                                    <div class="profile-title">
                                        <div class="media">                        <img class="img-70 rounded-circle" alt="" src="{{ asset('assets/dashboard/images/user/7.jpg') }}">
                                            <div class="media-body">
                                                <h3 class="mb-1 f-20 txt-primary">{{$this->name}}</h3>
                                                <p class="f-12">{{$this->category}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email-Address</label>
                                    <input class="form-control" placeholder="your-email@domain.com" wire:model="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Email-Address</label>
                                    <input class="form-control" placeholder="your-email@domain.com">
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
                                    <button class="btn btn-primary btn-block">Save</button>
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
                                            <option value="{{$this->city}}">--Select--</option>
                                            <option value="1">Kenya</option>
                                            <option value="2">Uganda</option>
                                            <option value="3">Tanzania</option>
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

    </script>
@endpush
