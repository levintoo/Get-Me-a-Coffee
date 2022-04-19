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
                                        <h4 class="card-title text-center text-uppercase font-lg">GET ME A COFFEE</h4>
                                    </div>
                                    <div class="card-body text-center py-2">
                                        <x-jet-validation-errors class="mb-3 rounded-0" />
{{--                                        @error('other_amount')<div class="alert alert-danger" role="alert">{{$message}}</div>--}}
{{--                                        @enderror--}}

                                    @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif

                                        <h4 class="donate-headline">Every $1 is one cup of coffee for {{$username}}</h4>
                                        <div class="row align-items-stretch">
                                            <div class="col mb-3 px-1">
                                                <div class="custom-control custom-checkbox h-100">
                                                    <input name="pounds" value="5" type="radio" class="custom-control-input" id="checkPounds5">
                                                    <input type="hidden" name="username" value="{{$username}}" wire:model="username">
                                                    <label id="donateAmount5" class="custom-control-label text-uppercase h-100 d-flex align-items-center justify-content-center" for="checkPounds5">5<br>Pounds</label>
                                                </div>
                                            </div>
                                            <div class="col mb-3 px-1">
                                                <div class="custom-control custom-checkbox h-100">
                                                    <input name="pounds" value="20" type="radio" checked class="custom-control-input active-donation-amount" id="checkPounds20">
                                                    <label id="donateAmount20" class="custom-control-label text-uppercase h-100 d-flex align-items-center justify-content-center" for="checkPounds20">20<br>Pounds</label>
                                                </div>
                                            </div>
                                            <div class="col mb-3 px-1">
                                                <div class="custom-control custom-checkbox h-100">
                                                    <input name="pounds" value="50" type="radio" class="custom-control-input" id="checkPounds50">
                                                    <label id="donateAmount50" class="custom-control-label text-uppercase h-100 d-flex align-items-center justify-content-center" for="checkPounds50">50<br>Pounds</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-1 px-1">
                                                <div class="custom-control custom-checkbox h-100">
                                                    <input name="pounds" value="100" type="radio" class="custom-control-input" id="checkPounds100">
                                                    <label id="donateAmount100" class="custom-control-label text-uppercase h-100 d-flex align-items-center justify-content-center" for="checkPounds100">100<br>Pounds</label>
                                                </div>
                                            </div>
                                            <div class="col-8 mb-1 px-1">
                                                <input id="donateAmountOther" name="other_amount" value="20" type="text" class="form-control custom-control h-100" maxlength="10" placeholder="Other Amount">
                                            </div>
                                            <div class="col-12 mb-2">
                                                <small class="text-muted"><em>amsd</em></small>
                                            </div>
                                        </div>
                                        <div class="form-group py-1 mb-1">
                                            <button id="donateBtnStep1" type="submit" class="btn btn-large btn-orange text-uppercase frm-step-btn" data-step="1">Next</button>
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
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="mb-5 d-flex justify-content-around text-center">
                        <a class="text-muted text-uppercase mx-1" href="terms-of-use/index.html" target="_blank">Contact</a>
                        <a class="text-muted text-uppercase mx-1" href="privacy-policy/index.html" target="_blank">About</a>
                        <a class="text-muted text-uppercase mx-1" href="coppa-policy/index.html" target="_blank">Privacy Policy</a>
                    </div>
                </div>
            </div>

            {{-- <div class="footer-links d-flex justify-content-between py-2 flex-wrap">--}}
            {{-- <p class="text-center"><span class="btn btn-outline-white" data-toggle="modal" data-target="#faqModal">FAQ</span></p>--}}
            {{-- <p class="text-center"><span class="btn btn-outline-white" data-toggle="modal" data-target="#contactModal">Contact Us</span></p>--}}
            {{-- <p class="text-center"><span class="btn btn-outline-white" data-toggle="modal" data-target="#pressModal">Press Inquiries</span></p>--}}
            {{-- <p class="text-center"><a class="btn btn-outline-white" href="https://store.teamseas.org/" target="_blank">Store</a></p>--}}
            {{-- <p class="text-center"><a class="btn btn-outline-white" href="https://teamtrees.org/" target="_blank">#TeamTrees</a></p>--}}
            {{-- </div>--}}
        </div>
    </footer>
</main>
@push('scripts')
<script>
    document.getElementById("donateAmount5").onclick = function() {
        myFunction(5)
    };
    document.getElementById("donateAmount20").onclick = function() {
        myFunction(20)
    };
    document.getElementById("donateAmount50").onclick = function() {
        myFunction(50)
    };
    document.getElementById("donateAmount100").onclick = function() {
        myFunction(100)
    };

    var el = document.getElementById("donateAmountOther");
    el.addEventListener("change", doSomething, false);

    function doSomething() {
        // fetch amount in the input
        var amount = document.getElementById("donateAmountOther").value;
        myFunction(amount)
    }

    function myFunction(amount) {
        // update input with selected amount
        document.getElementById("donateAmountOther").value = amount;
    }

    document.getElementById("donateBtnStep1").onclick = function() {
        var value = document.getElementById("donateAmountOther").value;
        if (value != "") {
            console.log("you will pay " + value);
            // make ajax request
        } else {
            console.log("You must select an amount")
        }
    };
</script>
@endpush
