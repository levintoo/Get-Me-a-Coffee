@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/sweetalert2.css') }}">
@endpush
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Profile</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="home-item" href="index-2.html"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item"> Dashboard</li>
                        <li class="breadcrumb-item active"> Settings</li>
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
                                        <div class="media">                        <img class="img-70 rounded-circle" alt="avatar" src="{{ asset('assets/images/users/'.$this->photo) }}">
                                            <div class="media-body">
                                                <h3 class="mb-1 f-20 txt-primary">{{$this->name}}</h3>
                                                <p class="f-12">{{$this->category}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Email-Address</label>
                                    <p class="txt-primary">{{$this->email}}</p>
                                </div>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block" wire:click="openEdit">Edit</button>
                                </div>
                                <br><br><br><br>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">

                    <form class="card">
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0">Profile Details</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>

                        <div class="card-body">
                            <div class="row">
{{--                                @if (session()->has('message'))--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="mb-3">--}}
{{--                                            <div class="alert alert-success">--}}
{{--                                                {{ session('message') }}--}}
{{--                                            </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @endif--}}
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Company</label>
                                        <p class="txt-primary">{{$this->company}}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <p class="txt-primary">{{$this->category}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <p class="txt-primary">{{$this->username}}</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <p class="txt-primary">{{$this->name}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <p class="txt-primary">{{$this->city}}</p>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <p class="txt-primary">{{$this->country}}</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label">About Me</label>
                                        <p class="txt-primary">{{$this->about}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="button" wire:click="openEdit">Edit</button>
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
        swal("Good job!", "{{ session('message') }}!", "success");
        @endif
    </script>
@endpush
