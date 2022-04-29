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
                        <li class="breadcrumb-item active"> Donations</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid default-dash">
        <div class="row">
           <div class="col-xl-4 col-md-6 dash-35 dash-xl-100">
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
                                @foreach($donations as $donation)
                                    <tr>
                                        <td>
                                            <div class="media">
                                                @php
                                                    $random = rand(1,4);
                                                    if($random == '1' ){
                                                        $randomImg = "boy.png";
                                                    }elseif($random == '2' ){
                                                        $randomImg = "girl.png";
                                                    }elseif($random == '3' ){
                                                        $randomImg = "man.png";
                                                    }elseif($random == '4' ){
                                                        $randomImg = "woman.png";
                                                    }
                                                @endphp
                                                <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{ asset('assets/dashboard/images/avtar/'.$randomImg) }}" alt=""></div>
                                                <div class="media-body ps-2">
                                                    <div class="avatar-details"><a href="#">
                                                            {{$donation->randomImg}}
                                                            <h6>@if($donation->anonymous == '1')
                                                                    {{$donation->name}}
                                                                @else
                                                                    {{"anonymous"}}
                                                                @endif</h6></a><span>${{ number_format($donation->amount, 0)}}</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="img-content-box">
                                            <h6> {{ $donation->readbleDonatedAt }}</h6><span>
                                               {{$donation->readbleDonated}}
                                            </span>
                                        </td>
                                        <td>
                                            <h6>{{$donation->message}}</h6>
                                        </td>
                                        <td>
                                            @if($donation->status == '0')
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
