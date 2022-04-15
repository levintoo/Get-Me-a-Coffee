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
                                    <h1>Hello, Harry Mendez</h1>
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
                            <h6>$573.67</h6>
                            <div id="earning-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 dash-xl-50">
                <div class="card weekly-column">
                    <div class="card-body p-0">
                        <div id="weekly-chart"> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 dash-31 dash-xl-50">
                <div class="card news-update">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">News &amp; Update</h5>
                            <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                                <div class="icon-box-show onhover-show-div">
                                    <ul>
                                        <li> <a>
                                                Today</a></li>
                                        <li> <a>
                                                Yesterday</a></li>
                                        <li> <a>
                                                Tommorow</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table table-bordernone">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="media"><img class="img-fluid me-3 b-r-5" src="{{ asset('assets/dashboard/images/dashboard/rectangle-26.jpg' ) }}'" alt="">
                                            <div class="media-body"><a href="blog-single.html">
                                                    <h5>Google Project Apply Reviwe</h5></a>
                                                <p>Today's News Headlines, Breaking...</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-light-theme-light font-theme-light">1 day ago</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media"> <img class="img-fluid me-3 b-r-5" src="{{ asset('assets/dashboard/images/dashboard/rectangle-27.jpg' ) }}" alt="">
                                            <div class="media-body"><a href="blog-single.html">
                                                    <h5>Business Logo Create</h5></a>
                                                <p>Check out the latest news from...</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-light-theme-light font-theme-light">2 weeks ago</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media"><img class="img-fluid me-3 b-r-5" src="{{ asset('assets/dashboard/images/dashboard/rectangle-28.jpg' ) }}" alt="">
                                            <div class="media-body"><a href="blog-single.html">
                                                    <h5>Business Project Research</h5></a>
                                                <p>News in English: Get all Breaking...</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-light-theme-light font-theme-light">3 day ago</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media"><img class="img-fluid me-3 b-r-5" src="{{ asset('assets/dashboard/images/dashboard/rectangle-29.jpg' ) }}" alt="">
                                            <div class="media-body"><a href="blog-single.html">
                                                    <h5>Recruitment in it Department</h5></a>
                                                <p>Technology and Indian Business News...</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-light-theme-light font-theme-light">2 hours ago</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media"><img class="img-fluid me-3 b-r-5" src="{{ asset('assets/dashboard/images/dashboard/rectangle-28.jpg' ) }}" alt="">
                                            <div class="media-body"><a href="blog-single.html">
                                                    <h5>Business Project Research</h5></a>
                                                <p>News in English: Get all Breaking...</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-light-theme-light font-theme-light">3 day ago</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 dash-35 dash-xl-50">
                <div class="card ongoing-project">
                    <div class="card-header card-no-border">
                        <div class="media media-dashboard">
                            <div class="media-body">
                                <h5 class="mb-0">Ongoing Projects         </h5>
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
                                    <th> <span>Project </span></th>
                                    <th> <span>Status   </span></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{ asset('assets/dashboard/images/avtar/boy.png') }}" alt=""></div>
                                            <div class="media-body ps-2">
                                                <div class="avatar-details"><a href="product-page.html">
                                                        <h6>Gary</h6></a><span> UK Desig Team</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="img-content-box">
                                        <h6>12 May 2020</h6><span>In 6 Days</span>
                                    </td>
                                    <td>
                                        <h6>Product Design</h6><span>$7,800</span>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-primary">Done</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{ asset('assets/dashboard/images/avtar/girl.png') }}" alt=""></div>
                                            <div class="media-body ps-2">
                                                <div class="avatar-details"><a href="product-page.html">
                                                        <h6>Ralph Waters</h6></a><span> UX Ninjas</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="img-content-box">
                                        <h6>06 May 2020</h6><span>Overdue</span>
                                    </td>
                                    <td>
                                        <h6>Concept Design</h6><span>$670</span>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-secondary">Pending</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{ asset('assets/dashboard/images/avtar/man.png') }}" alt=""></div>
                                            <div class="media-body ps-2">
                                                <div class="avatar-details"><a href="product-page.html">
                                                        <h6>Edwin Day</h6></a><span> SF Dev Team</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="img-content-box">
                                        <h6>28 Sep 2020</h6><span>in 4 Months</span>
                                    </td>
                                    <td>
                                        <h6>UX Consulting</h6><span>$7,889</span>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-danger">Rejected</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{ asset('assets/dashboard/images/avtar/woman.png') }}" alt=""></div>
                                            <div class="media-body ps-2">
                                                <div class="avatar-details"><a href="product-page.html">
                                                        <h6>Gary</h6></a><span> UK Desig Team</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="img-content-box">
                                        <h6>12 May 2020</h6><span>In 6 Days</span>
                                    </td>
                                    <td>
                                        <h6>Product Design</h6><span>Toyota</span>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-info">In Progress</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 dash-31 dash-xl-50">
                <div class="card recent-activity">
                    <div class="card-header card-no-border">
                        <div class="media media-dashboard">
                            <div class="media-body">
                                <h5 class="mb-0">Recent Activity      </h5>
                            </div>
                            <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                                <div class="icon-box-show onhover-show-div">
                                    <ul>
                                        <li> <a>
                                                Latest </a></li>
                                        <li> <a>
                                                Earlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table table-bordernone">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{ asset('assets/dashboard/images/avtar/teacher.png') }}" alt=""></div>
                                            <div class="media-body"><a href="user-profile.html">
                                                    <h5>Alana Brady added new event</h5></a>
                                                <p class="font-primary">Sunday Cooking Class</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-light-theme-light font-theme-light">2 hours ago   </span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{ asset('assets/dashboard/images/avtar/teenager.png') }}" alt=""></div>
                                            <div class="media-body"><a href="user-profile.html">
                                                    <h5>Lena Burton added new</h5></a>
                                                <p>Comment on <span class="font-primary">Vegetarian food fest</span></p>
                                                <div class="activity-msg"> <span class="activity-msg-box">
                                       Again this was our mistake, we are truly sorry for not adhering to a strictly non animal product event.</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>   <span class="badge badge-light-theme-light font-theme-light">10 jul 2020</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{ asset('assets/dashboard/images/avtar/chinese.png') }}" alt=""></div>
                                            <div class="media-body image-swipe"><a href="user-profile.html">
                                                    <h5>Max Simmons attached 2</h5></a>
                                                <p>photos to <span class="font-primary">Food photography Class</span></p>
                                                <div class="my-gallery" itemscope="">
                                                    <div class="row gallery">
                                                        <figure class="inner-img ms-3" itemprop="associatedMedia" itemscope=""><a href="{{ asset('assets/dashboard/images/dashboard/img-26.jpg' ) }}'" itemprop="contentUrl" data-size="600x600"><img class="img-fluid img-40" src="{{ asset('assets/dashboard/images/dashboard/img-26.jpg' ) }}" itemprop="thumbnail" alt="Image description"></a>
                                                            <figcaption itemprop="caption description">Photos 1</figcaption>
                                                        </figure>
                                                        <figure class="inner-img ms-3" itemprop="associatedMedia" itemscope=""><a href="{{ asset('assets/dashboard/images/dashboard/image-20.jpg' ) }}" itemprop="contentUrl" data-size="600x600"><img class="img-fluid img-40" src="{{ asset('assets/dashboard/images/dashboard/image-20.jpg' ) }}" itemprop="thumbnail" alt="Image description"></a>
                                                            <figcaption itemprop="caption description">Photos 2
                                    <td> <span class="badge badge-light-theme-light font-theme-light">22 Jun 2020</span></td>
                                    </figcaption>
                                    </figure>
                        </div>
                    </div>
                </div>
            </div>

            </tbody>
            </table>
        </div>
    </div>
</div>
