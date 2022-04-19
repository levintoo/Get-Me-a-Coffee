<main id="main">
    <section id="sectionTop">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center pt-2">
                    <div class="col-12 col-sm-10 col-md-5 col-lg-5">
                        <form id="donateFrm" method="POST" action="{{route('amount')}}">
                            @csrf
                            <div class="card">
                                <div id="donateStep1" class="frm-step active" data-step="1">
                                    <div class="card-header">
                                        <h4 class="card-title text-center text-uppercase font-lg">Get Me A Coffee</h4>
                                    </div>
                                    <div class="card-body text-center py-2">
                                        @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif
                                        @if(Session::has('danger-message'))
                                            <div class="alert alert-danger" role="alert">{{Session::get('danger-message')}}</div>
                                        @endif
                                        <h4 class="donate-headline">Every $1 is one cup of coffee for </h4>
                                        <div class="row">

                                            <div class="col-8 mb-1 px-1">
                                                <input id="" name="search-value" value="" type="text" class="form-control custom-control h-100" maxlength="100" placeholder="john doe" wire:model="name">
                                            </div>

                                            <div class="col mb-1 px-1">
                                                <div class="custom-control custom-checkbox h-100">
                                                    <input name="pounds" value="100" type="button" class="custom-control-input" id="checkPounds100" wire:click="search()">
                                                    <label id="donateAmount100" class="custom-control-label text-uppercase h-100 d-flex align-items-center justify-content-center" for="checkPounds100" wire:click="search()">search</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="datatable-inner table-responsive ps ps--active-x mt-3" style="overflow: auto; position: relative;">
                                            <table class="table datatable-table">
                                                <thead class="datatable-header">
                                                <tr>
                                                    <th style="cursor: pointer;" scope="col"><i data-mdb-sort="field_0" class="datatable-sort-icon fas fa-arrow-up"></i> Image</th>
                                                    <th style="cursor: pointer;" scope="col"><i data-mdb-sort="field_1" class="datatable-sort-icon fas fa-arrow-up"></i> Name</th>
                                                    <th style="cursor: pointer;" scope="col"><i data-mdb-sort="field_2" class="datatable-sort-icon fas fa-arrow-up"></i> Category</th>
                                                </tr>
                                                </thead>
                                                <tbody class="datatable-body">
                                                @if($users == "")
                                                    <tr scope="row" data-mdb-index="0">
                                                        <td style="" class="" data-mdb-field="field_0" false="">
                                                            <img width="100px" height="100px" class="img-fluid rounded" src="{{ asset('assets/dashboard/images/banner/1.jpg') }}" alt="">
                                                        </td>

                                                        <td style="" class="" data-mdb-field="field_1" false=""><a href="/systemarchitect">Nothing to show</a></td>

                                                        <td style="" class="" data-mdb-field="field_2" false="">Nothing to show</td>

                                                    </tr>
                                                @else
                                                    @foreach($users as $user)
                                                        <tr scope="row" data-mdb-index="1">
                                                            <td style="" class="" data-mdb-field="field_0" false="">
                                                                <img src="{{ asset('assets/dashboard/images/logo/favicon-icon.png') }}" alt="">
                                                            </td>
                                                            <td style="" class="" data-mdb-field="field_1" false=""><a href="/{{$user->username}}">{{$user->username}}</a></td>
                                                            <td style="" class="" data-mdb-field="field_2" false="">{{$user->category}}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif

                                                </tbody>
                                            </table>
                                            <div class="ps__rail-x" style="width: 297px; left: 0px; bottom: 0px;">
                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 108px;"></div>
                                            </div>
                                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                            </div>
                                        </div>

                                        <div class="form-group py-1 m-0">
                                            <button type="button" class="btn btn-link text-dark text-uppercase" data-toggle="modal" data-target="#faqModal"><u>FAQ</u></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="section-inner">
            <div class="container pt-5">
                <div class="container text-center">
                    <div class="brand-wrapper">
                        <div class="brand-inner">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container foot-link-container">

        </div>
    </footer>
</main>
@push('scripts')
    <script>

    </script>
@endpush
