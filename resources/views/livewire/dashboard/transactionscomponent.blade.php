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
                    <h3>Default</h3>
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
                <div class="card ongoing-project">
                    <div class="card-header card-no-border">
                        <div class="media media-dashboard">
                            <div class="media-body">
                                <h5 class="mb-0">Messages From People        </h5>
                            </div>
                            <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                                <div class="icon-box-show onhover-show-div">
                                    <ul>
                                        <li> <a>
                                                Done</a></li>
                                        <li> <a>
                                                Pending</a></li>
                                        <li> <a>
                                                Rejected</a></li>
                                        <li> <a>In Progress</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table table-bordernone">
                                <thead>
                                <tr>
                                    <th> <span>Name </span></th>
                                    <th> <span>Date</span></th>
                                    <th> <span>Message </span></th>
                                    <th> <span>Status   </span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="square-box me-2">
                                                    <img class="img-fluid b-r-5" src="{{ asset('assets/dashboard/images/avtar/'.$transaction->randomImg) }}" alt="">
                                                </div>
                                                <div class="media-body ps-2">
                                                    <div class="avatar-details"><a href="#">

                                                            <h6>@if($transaction->anonymous == '1')
                                                                    {{$transaction->name}}
                                                                @else
                                                                    {{"anonymous"}}
                                                                @endif</h6></a><span>${{ number_format($transaction->amount, 0)}}</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="img-content-box">
                                            <h6> {{ $transaction->readbleDonatedAt }}</h6><span>
                                               {{$transaction->readbleDonated}}
                                            </span>
                                        </td>
                                        <td>
                                            <h6>{{$transaction->modeofpayment}}</h6>
                                        </td>
                                        <td>
                                            @if($transaction->status == '0')
                                                <div class="badge badge-light-info my-1">new</div>
                                            @endif
                                            {{--                                            <div class="badge badge-light-primary">Regular</div>--}}
                                            {{--                                                <div class="badge badge-light-info">In Progress</div>--}}
                                            {{--                                                <div class="badge badge-light-danger">Rejected</div>--}}
                                            {{--                                                <div class="badge badge-light-secondary">Pending</div>--}}

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $transactions->links() !!}
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
