@push('styles')
<style>
.red{
    color:red !important;
    }
</style>
@endpush
<main id="main">
    <section id="sectionTop">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center pt-2">
                    <div class="col-12 col-sm-10 col-md-5 col-lg-5">
                        <x-jet-validation-errors class="mb-3 rounded-0" />
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
                                            <div class="alert alert-success" role="alert">Fill the details to donate {{$amount}}$ for {{$username}}</div>
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
                                            <label class="form-label text-blue-dark m-0" for="inputPhone">Mobile Phone<sup>*</sup></label>
                                            <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="Mobile Phone">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-blue-dark m-0" for="inputMessage">Message<sup>*</sup></label>
                                            <textarea id="message" class="form-control dark-border" maxlength="140" name="inputMessage" rows="3" placeholder="Message (255 characters max)"></textarea>
                                            <p id="characterLeft" class="help-block ">You have reached the limit</p>
                                        </div>
                                        <p class="text-muted"><small><em><sup>*</sup>indicates a required field</em></small></p>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input-custom" type="checkbox" id="nameHidden" name="name_hidden">
                                                <label class="form-check-label" for="nameHidden">Please keep my donation anonymous</label>
                                            </div>
                                        </div>
                                        <div class="form-group py-3">
                                            <div class="d-flex justify-content-around flex-wrap">
                                                <div class="mx-1 mb-2">
                                                    <button wire:click="redirectBack" type="button" class="btn btn-large btn-outline-orange text-uppercase frm-step-back-btn" data-step="2">BACK</button>
                                                </div>
                                                <div class="mx-1 mb-2">
                                                    <button id="btnSubmit" type="submit" class="btn btn-large btn-orange text-uppercase frm-step-btn" data-step="2">NEXT</button>
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
        </div>
    </footer>
</main>
@push('scripts')
<script>
    $(document).ready(function(){
    $('#characterLeft').text('255 characters left');
    $('#message').keyup(function () {
        var max = 255;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');
        }
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');
        }
    });
});

</script>
@endpush
