<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Product list</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">                                       <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">E-Commerce</li>
                        <li class="breadcrumb-item active">Product list</li>
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
                        <h5>Individual column searching (text inputs) </h5><span>The searching functionality provided by DataTables is useful for quickly search through the information in the table - however the search is global, and you may wish to present controls that search on specific columns.</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Details</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $user)
                                    <tr class="m-3">
                                        <td><a href="product-page.html"><img class="my-2" src="{{ asset('assets/images/users/'.$user->imgname) }}" alt=""></a></td>
                                        <td><a href="product-page.html">
                                                <p class="f-10"> {{$user->category}} </p></a><span>{{$user->name}}</span></td>
                                        <td>{{$user->username}}</td>
                                        <td class="font-success">{{$user->readableStatus}}</td>
                                        <td>{{$user->utype}}</td>
                                        <td>
                                            <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                            <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                <tr>
                                    <td><a href="product-page.html"><img src="../assets/images/ecommerce/product-table-2.png" alt=""></a></td>
                                    <td><a href="product-page.html">
                                            <h6> Pink Lipstick </h6></a>
                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                    </td>
                                    <td>$10</td>
                                    <td class="font-primary">Low Stock</td>
                                    <td>24/04/2011</td>
                                    <td>
                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="product-page.html"><img src="../assets/images/ecommerce/product-table-3.png" alt=""></a></td>
                                    <td><a href="product-page.html">
                                            <h6> Gray Lipstick </h6></a>
                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                    </td>
                                    <td>$10</td>
                                    <td class="font-danger">out of stock</td>
                                    <td>25/04/2011</td>
                                    <td>
                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="product-page.html"><img src="../assets/images/ecommerce/product-table-4.png" alt=""></a></td>
                                    <td><a href="product-page.html">
                                            <h6> Green Lipstick </h6></a>
                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                    </td>
                                    <td>$10</td>
                                    <td class="font-primary">Low Stock</td>
                                    <td>25/04/2011</td>
                                    <td>
                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="product-page.html"><img src="../assets/images/ecommerce/product-table-5.png" alt=""></a></td>
                                    <td><a href="product-page.html">
                                            <h6> Black Lipstick </h6></a>
                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                    </td>
                                    <td>$10</td>
                                    <td class="font-success">In Stock</td>
                                    <td>25/04/2011</td>
                                    <td>
                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="product-page.html"><img src="../assets/images/ecommerce/product-table-6.png" alt=""></a></td>
                                    <td><a href="product-page.html">
                                            <h6> White Lipstick </h6></a>
                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                    </td>
                                    <td>$10</td>
                                    <td class="font-primary">Low Stock</td>
                                    <td>25/04/2011</td>
                                    <td>
                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="product-page.html"><img src="../assets/images/ecommerce/product-table-1.png" alt=""></a></td>
                                    <td><a href="product-page.html">
                                            <h6> light Lipstick </h6></a>
                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                    </td>
                                    <td>$10</td>
                                    <td class="font-danger">out of stock</td>
                                    <td>25/04/2011</td>
                                    <td>
                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="product-page.html"><img src="../assets/images/ecommerce/product-table-2.png" alt=""></a></td>
                                    <td><a href="product-page.html">
                                            <h6> Gliter Lipstick </h6></a>
                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                    </td>
                                    <td>$10</td>
                                    <td class="font-danger">out of stock</td>
                                    <td>25/04/2011</td>
                                    <td>
                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="product-page.html"><img src="../assets/images/ecommerce/product-table-3.png" alt=""></a></td>
                                    <td><a href="product-page.html">
                                            <h6> green Lipstick </h6></a>
                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                    </td>
                                    <td>$10</td>
                                    <td class="font-success">In Stock</td>
                                    <td>25/04/2011</td>
                                    <td>
                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="product-page.html"><img src="../assets/images/ecommerce/product-table-4.png" alt=""></a></td>
                                    <td><a href="product-page.html">
                                            <h6> Yellow Lipstick </h6></a>
                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                    </td>
                                    <td>$10</td>
                                    <td class="font-danger">out of stock</td>
                                    <td>25/04/2011</td>
                                    <td>
                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Individual column searching (text inputs) Ends-->
    <!-- Container-fluid Ends-->
</div>
