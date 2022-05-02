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
                <div class="card ongoing-project">
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
                                    <ul>
                                        <li  wire:click="sortingDefault()"> <a>
                                                All</a></li>
                                        <li wire:click="sortingInitiated()"> <a>
                                                Initiated</a></li>
                                        <li wire:click="sortingPending()"> <a>
                                                Pending</a></li>
                                        <li wire:click="sortingCompleted()"> <a>
                                                Completed</a></li>
                                        <li wire:click="sortingCancelled()"> <a>
                                                Cancelled</a></li>
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
                                    <th> <span>Payment Method </span></th>
                                    <th> <span>Time </span></th>
                                    <th> <span>Purpose </span></th>
                                    <th> <span>Status   </span></th>
                                </tr>
                                </thead>
                                @if(Session::has('message'))
                                    <tr><td>
                                            <h6 class="float-left">{{Session::get('message')}}</h6>
                                        </td></tr>
                                @endif
                                <tbody>

                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="square-box me-2">
                                                    <img class="img-fluid b-r-5" src="{{ asset('assets/dashboard/images/payment/'.$transaction->image) }}" alt="">
                                                </div>
                                                <div class="media-body ps-2">
                                                    <div class="avatar-details"><a href="#">

                                                            <h6>{{$transaction->paymentMethod}}</h6></a><span>${{ number_format($transaction->amount, 0)}}</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="img-content-box">
                                            <h6> {{ $transaction->readbleTransactedAt }}</h6><span>
                                               {{$transaction->readbleTransactedAgo}}
                                            </span>
                                        </td>
                                        <td>
                                            <h6>{{$transaction->purpose}}</h6>
                                        </td>
                                        <td>
                                            @if($transaction->status == '0')
                                                <div class="badge badge-light-info my-1">initiated</div>
                                                @elseif($transaction->status == '1')
                                                    <div class="badge badge-light-secondary my-1">pending</div>
                                            @elseif($transaction->status == '2')
                                                <div class="badge badge-light-success my-1">completed</div>
                                            @elseif($transaction->status == '3')
                                                <div class="badge badge-light-danger my-1">cancelled</div>
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
