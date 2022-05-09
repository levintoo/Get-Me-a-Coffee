@push('styles')
    <style>
        .pagination{
            float: right;
            margin-top: 10px;
        }
    </style>
@endpush
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Transactions</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <a class="home-item" href="{{ route('/') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"> <a class="home-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active"> Transactions</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid default-dash">
        <div class="row">
            <div class="col-xl-6 col-md-12 dash-35 dash-xl-100">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="media media-dashboard">
                            <div class="media-body">
                                <h5 class="mb-0">Transaction Details        </h5>
                            </div>
                            <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                                <div class="icon-box-show onhover-show-div">
                                    <ul>
                                        <li> <a>
                                                Date</a></li>
                                        <li> <a>
                                                Status</a></li>
                                        <li> <a>
                                                Rejected</a></li>
                                        <li> <a>In Progress</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="icon-box onhover-dropdown mx-1"><div class="badge badge-info">status</div>
                                <div class="icon-box-show onhover-show-div">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="custom-scrollbar">
<button >magic</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>

    </script>
@endpush
