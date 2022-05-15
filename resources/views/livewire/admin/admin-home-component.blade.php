<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Users list</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">                                       <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active">Users list</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid list-products">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>All</h5><span>The searching functionality provided by DataTables is useful for quickly search through the information in the table - however the search is global, and you may wish to present controls that search on specific columns.</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>        Image</th>
                                    <th>Details</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr class="m-3" data-toggle="tooltip" data-placement="left" title="{{$user->category}}">
                                        <td><a href="#"><img class="my-3" src="{{ asset('assets/images/users/'.$user->imgname) }}" alt="image"></a></td>
                                        <td><a href="">
                                                <p class=""> </p></a><span >{{$user->name}}</span></td>
                                        <td><a href="{{route('admin.user.detail',['username'=>$user->username])}}" data-toggle="tooltip" data-placement="left" title="{{$user->category}}">{{$user->username}}</a></td>
                                        <td class="font-success">{{$user->readableStatus}}</td>
                                        <td >{{$user->utype}}</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <a class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" href="{{route('admin.user.detail',['username'=>$user->username])}}">Edit</a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $users->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Individual column searching (text inputs) Ends-->
    <!-- Container-fluid Ends-->
</div>
