<main id="main">
    <section id="sectionTop">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center pt-2">
                    <div class="col-12 col-sm-10 col-md-5 col-lg-5">
                        <form id="donateFrm" method="POST" action="{{ route('donation-details.submit') }}">
                            @csrf
                            <div class="card">
                                <div id="donateStep2" class="frm-step active" data-step="2">
                                    <div class="card-header">
                                        <h4 class="card-title text-center text-blue-dark">DETAILS</h4>
                                    </div>
                                    <div class="card-body text-left">
                                        @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif

                                            <div class="alert alert-success" role="alert">{{$amount}}Name is:{{$username}}</div>
                                            <input type="hidden" name="username" value="{{$username}}" wire:model="username">
                                            <input type="hidden" name="amount" value="{{$amount}}" wire:model="amount">
                                            <div class="form-group">
                                            <label class="form-label text-blue-dark m-0" for="inputName">Display Name<sup>*</sup></label>
                                            <input type="text" class="form-control _req" name="inputName" id="inputName" placeholder="Display Name" maxlength="50">
                                                <small class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-blue-dark m-0" for="inputEmail">Email Address<sup>*</sup></label>
                                            <input type="email" class="form-control _req" id="inputEmail" name="inputEmail" placeholder="Email" required>
                                            <small class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-blue-dark m-0" for="inputPhone">Mobile Phone</label>
                                            <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="Mobile Phone (optional)">
                                            <p class="font-sm">By providing your mobile number, you agree to receive text messages from #TeamSeas</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-blue-dark m-0" for="inputMessage">Message</label>
                                            <textarea class="form-control dark-border" maxlength="140" id="inputMessage" name="inputMessage" rows="3" placeholder="Message (140 characters max)"></textarea>
                                        </div>
                                        <p class="text-muted"><small><em><sup>*</sup>indicates a required field</em></small></p>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input-custom" type="checkbox" id="optIn" name="opt_in">
                                                <label class="form-check-label font-weight-bold" for="optIn">YES! Keep me posted with #TeamSeas updates</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input-custom" type="checkbox" id="nameHidden" name="name_hidden">
                                                <label class="form-check-label" for="nameHidden">Please keep my donation anonymous</label>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input-custom" type="checkbox" id="is_gift">
                                            <label class="form-check-label align-text-top" for="is_gift">My donation is a gift for someone <span class="ml-2" data-toggle="tooltip" data-custom-class="font-sm" title="To make your donation a gift, select the check box. You'll receive a personalized certificate you can share to give the gift of trash removal!"><img src="{{ asset('assets/svg/orange-gift-bow.svg') }}" width="20" /></span><br><small><em>We’ll send a certificate to your email address, which you can forward along or print. <a href="#" data-toggle="modal" data-target="#giftExModal">(here's an example)</a> </em></small></label>
                                        </div>
                                        <div id="giftFields" class="d-none">
                                            <hr>
                                            <div class="form-group">
                                                <label class="form-label text-blue-dark m-0" for="gifted_to_name">To</label>
                                                <input type="text" class="form-control" id="gifted_to_name" name="gifted_to_name" placeholder="Enter recipient name or nickname...">
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-blue-dark m-0" for="gifted_by_name">From</label>
                                                <input type="text" class="form-control" id="gifted_by_name" name="gifted_by_name" placeholder="Sender name or nickname...">
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-blue-dark m-0" for="gift_message">Include A Gift Message</label>
                                                <textarea class="form-control dark-border" maxlength="140" id="gift_message" name="gift_message" rows="3" placeholder="My #TeamSeas Message (140 characters max)"></textarea>
                                                <small>optional; to be included on your certificate</small>
                                            </div>
                                        </div>
                                        <div class="form-group py-3">
                                            <div class="d-flex justify-content-around flex-wrap">
                                                <div class="mx-1 mb-2">
                                                    <button wire:click="redirectBack" type="button" class="btn btn-large btn-outline-orange text-uppercase frm-step-back-btn" data-step="2">BACK</button>
                                                </div>
                                                <div class="mx-1 mb-2">
                                                    <button id="donateBtnStep2" type="submit" class="btn btn-large btn-orange text-uppercase frm-step-btn" data-step="2">NEXT</button>
                                                </div>
                                            </div>
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
                            <h4 class="text-white font-weight-light page-headline">You did it! Now let’s keep going. Come back anytime you feel like supporting username more!</h4>
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

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
            $.ajax({
                type: "POST",
                url: "",
                data: {
                    amount: 200,
                },
            }).done(function(data) {
                console.log("success");
            });
        } else {
            alert("You must select an amount")
        }
    };
</script>
@endpush
