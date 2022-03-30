<main id="main">
    <section id="sectionTop">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center pt-2">
                    <div class="col-12 col-sm-10 col-md-5 col-lg-5">
                        <form id="donateFrm">
                            <div class="card">
                                <div id="donateStep4" class="frm-step active" data-step="4">
                                    <div class="card-body text-center py-1 px-2">
                                        <h1 class="text-orange font-xxl font-weight-bold text-uppercase my-2">Thank You!</h1>
                                        <p class="font-sm">#TeamSeas is a movement fueled by our power to inspire each other—every donation counts and every voice matters. Thank you for floating a brighter future!</p>
                                        <div class="my-3">
                                            <div class="thank-you-card mt-0">
                                                <p class="mb-2"><img src="{{ asset('assets/images/logo.png') }}" width="60" /></p>
                                                <p class="font-weight-700 text-white text-uppercase mt-1 mb-0">I joined #teamseas</p>
                                                <p class="font-weight-800 font-lg text-blue-dark text-uppercase m-0" id="ty_display_name"></p>
                                                <p class="font-weight-700 text-blue-dark text-uppercase m-0" id="ty_team_name"></p>
                                                <p class="m-0"><img id="ty_badge" src="{{ asset('assets/images/tier-3-badge.png') }}" width="65" /></p>
                                                <p class="font-weight-700 text-white text-uppercase mt-1 mb-0">$<span id="ty_amount">0</span> donation</p>
                                                <p class="font-weight-light font-sm text-white text-uppercase mb-1" id="ty_message"></p>
                                                <p class="font-weight-light font-xs text-white text-uppercase" id="ty_date_time"></p>
                                                <p class="mb-1"><span class="d-inline-block bg-orange-light text-black font-weight-bold py-1 px-4 rounded-pill text-nowrap" id="ty_pounds"></span></p>
                                                <p class="text-white text-uppercase m-0">pounds removed</p>
                                            </div>
                                        </div>
                                        <p class="font-sm">Download your card, share it on social, and tag 3 friends to join #TeamSeas</p>
                                        <p id="generatingCardDisplay">Generating your downloadable Donation Card...</p>
                                        <p><a href="#" id="tyDownloadBtn" class="btn btn-orange text-uppercase font-sm d-none" target="_blank" download>Download To Share</a></p>
                                        <p>
                                            <a href="https://www.facebook.com/TeamSeas/" class="social-box social-fb-outline bg-blue-light mx-1" target="_blank"></a>
                                            <a href="https://www.instagram.com/teamseas/" class="social-box social-insta-outline bg-blue-light mx-1" target="_blank"></a>
                                            <a href="https://twitter.com/teamseas" class="social-box social-twt-outline bg-blue-light mx-1" target="_blank"></a>
                                            <a href="https://www.tiktok.com/@teamseas" class="social-box social-tt-outline bg-blue-light mx-1" target="_blank"></a>
                                            <a href="https://youtube.com/c/teamseas" class="social-box social-yt-outline bg-blue-light mx-1" target="_blank"></a>
                                        </p>
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