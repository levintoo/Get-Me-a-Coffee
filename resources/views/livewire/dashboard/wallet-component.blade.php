<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Default</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <a class="home-item" href="index-2.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"> Dashboard</li>
                        <li class="breadcrumb-item active"> Default {{$account}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid default-dash">
        <div class="row">
            <div class="col-xl-6 col-md-6 dash-xl-50">
                <div class="card profile-greeting">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <div class="greeting-user">
                                    <h1>Hello, {{$user->name}}</h1>
                                    <p>Welcome back, your dashboard is ready!</p><a class="btn btn-outline-white_color" href="blog-single.html">Get Started<i class="icon-arrow-right">                           </i></a>
                                </div>
                            </div>
                        </div>
                        <div class="cartoon-img"><img class="img-fluid" src="http://admin.pixelstrap.com/zeta/assets/images/images.svg" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 dash-xl-50">
                <div class="card pb-0 o-hidden earning-card">
                    <div class="card-header earning-back"></div>
                    <div class="card-body p-0">
                        <div class="earning-content"><img class="img-fluid" src="{{ asset('assets/dashboard/images/avatar.jpg' ) }}" alt=""><a href="blog-single.html">
                                <h4>Today's Earning</h4></a><span>(Mon 15 - Sun 21)</span>
                            <h6>${{ number_format($todaysearning, 2)}}</h6>
                            <div id="earning-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
